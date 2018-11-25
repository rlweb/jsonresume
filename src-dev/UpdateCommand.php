<?php

declare(strict_types=1);

namespace Rlweb\JSONResume\Dev;

use Swaggest\JsonSchema\Schema;
use Swaggest\PhpCodeBuilder\App\PhpApp;
use Swaggest\PhpCodeBuilder\JsonSchema\ClassHookCallback;
use Swaggest\PhpCodeBuilder\JsonSchema\PhpBuilder;
use Swaggest\PhpCodeBuilder\PhpCode;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class UpdateCommand
 *
 * Used to rerun the creation of the source classes from JSON Schema
 */
class UpdateCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('update')
            ->setDescription('Updates the Classes based on the JSON Resume Schema');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $swaggerSchema = Schema::import(
            json_decode(
                file_get_contents(
                    __DIR__ . '/../vendor/jsonresume/resume-schema/schema.json'
                )
            )
        );

        $appPath = realpath(__DIR__ . '/..') . '/src';
        $appNs = 'Rlweb\\JSONResume\\';

        $app = new PhpApp();
        $app->setNamespaceRoot($appNs, '.');

        $builder = new PhpBuilder();
        $builder->buildSetters = true;
        $builder->makeEnumConstants = true;

        $builder->classCreatedHook = new ClassHookCallback(
            function (\Swaggest\PhpCodeBuilder\PhpClass $class, $path, $schema) use ($app, $appNs) {
                $desc = '';
                if ($schema->title) {
                    $desc = $schema->title;
                }
                if ($schema->description) {
                    $desc .= "\n" . $schema->description;
                }
                if ($fromRefs = $schema->getFromRefs()) {
                    $desc .= "\nBuilt from " . implode("\n" . ' <- ', $fromRefs);
                }
                $class->setDescription(trim($desc));
                $class->setNamespace($appNs);
                if ('#' === $path) {
                    $class->setName('User'); // Class name for root schema
                } elseif ('#/definitions/' === substr($path, 0, strlen('#/definitions/'))) {
                    $class->setName(
                        PhpCode::makePhpClassName(
                            substr($path, strlen('#/definitions/'))
                        )
                    );
                }
                $app->addClass($class);
            }
        );

        $builder->getType($swaggerSchema);

        $app->clearOldFiles($appPath);
        $app->store($appPath);
    }
}