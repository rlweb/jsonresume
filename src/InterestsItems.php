<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class InterestsItems extends ClassStructure
{
    /** @var string e.g. Philosophy */
    public $name;

    /** @var string[]|array */
    public $keywords;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $properties->name->description = "e.g. Philosophy";
        $properties->keywords = Schema::arr();
        $properties->keywords->additionalItems = false;
        $properties->keywords->items = Schema::string();
        $properties->keywords->items->description = "e.g. Friedrich Nietzsche";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $name e.g. Philosophy
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $keywords
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}