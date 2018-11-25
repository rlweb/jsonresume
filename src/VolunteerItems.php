<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class VolunteerItems extends ClassStructure
{
    /** @var string e.g. Facebook */
    public $organization;

    /** @var string e.g. Software Engineer */
    public $position;

    /** @var string e.g. http://facebook.example.com */
    public $url;

    /** @var string resume.json uses the ISO 8601 date standard e.g. 2014-06-29 */
    public $startDate;

    /** @var string e.g. 2012-06-29 */
    public $endDate;

    /** @var string Give an overview of your responsibilities at the company */
    public $summary;

    /** @var string[]|array Specify accomplishments and achievements */
    public $highlights;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->organization = Schema::string();
        $properties->organization->description = "e.g. Facebook";
        $properties->position = Schema::string();
        $properties->position->description = "e.g. Software Engineer";
        $properties->url = Schema::string();
        $properties->url->description = "e.g. http://facebook.example.com";
        $properties->url->format = "uri";
        $properties->startDate = Schema::string();
        $properties->startDate->description = "resume.json uses the ISO 8601 date standard e.g. 2014-06-29";
        $properties->startDate->format = "date";
        $properties->endDate = Schema::string();
        $properties->endDate->description = "e.g. 2012-06-29";
        $properties->endDate->format = "date";
        $properties->summary = Schema::string();
        $properties->summary->description = "Give an overview of your responsibilities at the company";
        $properties->highlights = Schema::arr();
        $properties->highlights->additionalItems = false;
        $properties->highlights->items = Schema::string();
        $properties->highlights->items->description = "e.g. Increased profits by 20% from 2011-2012 through viral advertising";
        $properties->highlights->description = "Specify accomplishments and achievements";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $organization e.g. Facebook
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $position e.g. Software Engineer
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $url e.g. http://facebook.example.com
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $startDate resume.json uses the ISO 8601 date standard e.g. 2014-06-29
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $endDate e.g. 2012-06-29
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $summary Give an overview of your responsibilities at the company
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $highlights Specify accomplishments and achievements
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHighlights($highlights)
    {
        $this->highlights = $highlights;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}