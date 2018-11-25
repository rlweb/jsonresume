<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class AwardsItems extends ClassStructure
{
    /** @var string e.g. One of the 100 greatest minds of the century */
    public $title;

    /** @var string e.g. 1989-06-12 */
    public $date;

    /** @var string e.g. Time Magazine */
    public $awarder;

    /** @var string e.g. Received for my work with Quantum Physics */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->title = Schema::string();
        $properties->title->description = "e.g. One of the 100 greatest minds of the century";
        $properties->date = Schema::string();
        $properties->date->description = "e.g. 1989-06-12";
        $properties->date->format = "date";
        $properties->awarder = Schema::string();
        $properties->awarder->description = "e.g. Time Magazine";
        $properties->summary = Schema::string();
        $properties->summary->description = "e.g. Received for my work with Quantum Physics";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $title e.g. One of the 100 greatest minds of the century
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $date e.g. 1989-06-12
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $awarder e.g. Time Magazine
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAwarder($awarder)
    {
        $this->awarder = $awarder;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $summary e.g. Received for my work with Quantum Physics
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}