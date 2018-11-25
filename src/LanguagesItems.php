<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class LanguagesItems extends ClassStructure
{
    /** @var string e.g. English, Spanish */
    public $language;

    /** @var string e.g. Fluent, Beginner */
    public $fluency;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->language = Schema::string();
        $properties->language->description = "e.g. English, Spanish";
        $properties->fluency = Schema::string();
        $properties->fluency->description = "e.g. Fluent, Beginner";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $language e.g. English, Spanish
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $fluency e.g. Fluent, Beginner
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFluency($fluency)
    {
        $this->fluency = $fluency;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}