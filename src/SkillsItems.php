<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class SkillsItems extends ClassStructure
{
    /** @var string e.g. Web Development */
    public $name;

    /** @var string e.g. Master */
    public $level;

    /** @var string[]|array List some keywords pertaining to this skill */
    public $keywords;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $properties->name->description = "e.g. Web Development";
        $properties->level = Schema::string();
        $properties->level->description = "e.g. Master";
        $properties->keywords = Schema::arr();
        $properties->keywords->additionalItems = false;
        $properties->keywords->items = Schema::string();
        $properties->keywords->items->description = "e.g. HTML";
        $properties->keywords->description = "List some keywords pertaining to this skill";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $name e.g. Web Development
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
     * @param string $level e.g. Master
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $keywords List some keywords pertaining to this skill
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