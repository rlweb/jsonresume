<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class EducationItems extends ClassStructure
{
    /** @var string e.g. Massachusetts Institute of Technology */
    public $institution;

    /** @var string e.g. Arts */
    public $area;

    /** @var string e.g. Bachelor */
    public $studyType;

    /** @var string e.g. 2014-06-29 */
    public $startDate;

    /** @var string e.g. 2012-06-29 */
    public $endDate;

    /** @var string grade point average, e.g. 3.67/4.0 */
    public $gpa;

    /** @var string[]|array List notable courses/subjects */
    public $courses;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->institution = Schema::string();
        $properties->institution->description = "e.g. Massachusetts Institute of Technology";
        $properties->area = Schema::string();
        $properties->area->description = "e.g. Arts";
        $properties->studyType = Schema::string();
        $properties->studyType->description = "e.g. Bachelor";
        $properties->startDate = Schema::string();
        $properties->startDate->description = "e.g. 2014-06-29";
        $properties->startDate->format = "date";
        $properties->endDate = Schema::string();
        $properties->endDate->description = "e.g. 2012-06-29";
        $properties->endDate->format = "date";
        $properties->gpa = Schema::string();
        $properties->gpa->description = "grade point average, e.g. 3.67/4.0";
        $properties->courses = Schema::arr();
        $properties->courses->additionalItems = false;
        $properties->courses->items = Schema::string();
        $properties->courses->items->description = "e.g. H1302 - Introduction to American history";
        $properties->courses->description = "List notable courses/subjects";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $institution e.g. Massachusetts Institute of Technology
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $area e.g. Arts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $studyType e.g. Bachelor
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStudyType($studyType)
    {
        $this->studyType = $studyType;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $startDate e.g. 2014-06-29
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
     * @param string $gpa grade point average, e.g. 3.67/4.0
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setGpa($gpa)
    {
        $this->gpa = $gpa;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $courses List notable courses/subjects
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}