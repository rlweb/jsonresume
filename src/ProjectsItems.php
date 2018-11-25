<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ProjectsItems extends ClassStructure
{
    /** @var string e.g. The World Wide Web */
    public $name;

    /** @var string Short summary of project. e.g. Collated works of 2017. */
    public $description;

    /** @var string[]|array Specify multiple features */
    public $highlights;

    /** @var string[]|array Specify special elements involved */
    public $keywords;

    /** @var string resume.json uses the ISO 8601 date standard e.g. 2014-06-29 */
    public $startDate;

    /** @var string e.g. 2012-06-29 */
    public $endDate;

    /** @var string e.g. http://www.computer.org/csdl/mags/co/1996/10/rx069-abs.html */
    public $url;

    /** @var string[]|array Specify your role on this project or in company */
    public $roles;

    /** @var string Specify the relevant company/entity affiliations e.g. 'greenpeace', 'corporationXYZ' */
    public $entity;

    /** @var string  e.g. 'volunteering', 'presentation', 'talk', 'application', 'conference' */
    public $type;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $properties->name->description = "e.g. The World Wide Web";
        $properties->description = Schema::string();
        $properties->description->description = "Short summary of project. e.g. Collated works of 2017.";
        $properties->highlights = Schema::arr();
        $properties->highlights->additionalItems = false;
        $properties->highlights->items = Schema::string();
        $properties->highlights->items->description = "e.g. Directs you close but not quite there";
        $properties->highlights->description = "Specify multiple features";
        $properties->keywords = Schema::arr();
        $properties->keywords->additionalItems = false;
        $properties->keywords->items = Schema::string();
        $properties->keywords->items->description = "e.g. AngularJS";
        $properties->keywords->description = "Specify special elements involved";
        $properties->startDate = Schema::string();
        $properties->startDate->description = "resume.json uses the ISO 8601 date standard e.g. 2014-06-29";
        $properties->startDate->format = "date";
        $properties->endDate = Schema::string();
        $properties->endDate->description = "e.g. 2012-06-29";
        $properties->endDate->format = "date";
        $properties->url = Schema::string();
        $properties->url->description = "e.g. http://www.computer.org/csdl/mags/co/1996/10/rx069-abs.html";
        $properties->url->format = "uri";
        $properties->roles = Schema::arr();
        $properties->roles->additionalItems = false;
        $properties->roles->items = Schema::string();
        $properties->roles->items->description = "e.g. Team Lead, Speaker, Writer";
        $properties->roles->description = "Specify your role on this project or in company";
        $properties->entity = Schema::string();
        $properties->entity->description = "Specify the relevant company/entity affiliations e.g. 'greenpeace', 'corporationXYZ'";
        $properties->type = Schema::string();
        $properties->type->description = " e.g. 'volunteering', 'presentation', 'talk', 'application', 'conference'";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $name e.g. The World Wide Web
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
     * @param string $description Short summary of project. e.g. Collated works of 2017.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $highlights Specify multiple features
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHighlights($highlights)
    {
        $this->highlights = $highlights;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $keywords Specify special elements involved
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
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
     * @param string $url e.g. http://www.computer.org/csdl/mags/co/1996/10/rx069-abs.html
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
     * @param string[]|array $roles Specify your role on this project or in company
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $entity Specify the relevant company/entity affiliations e.g. 'greenpeace', 'corporationXYZ'
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $type  e.g. 'volunteering', 'presentation', 'talk', 'application', 'conference'
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}