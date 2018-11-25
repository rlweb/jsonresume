<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PublicationsItems extends ClassStructure
{
    /** @var string e.g. The World Wide Web */
    public $name;

    /** @var string e.g. IEEE, Computer Magazine */
    public $publisher;

    /** @var string e.g. 1990-08-01 */
    public $releaseDate;

    /** @var string e.g. http://www.computer.org.example.com/csdl/mags/co/1996/10/rx069-abs.html */
    public $url;

    /** @var string Short summary of publication. e.g. Discussion of the World Wide Web, HTTP, HTML. */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $properties->name->description = "e.g. The World Wide Web";
        $properties->publisher = Schema::string();
        $properties->publisher->description = "e.g. IEEE, Computer Magazine";
        $properties->releaseDate = Schema::string();
        $properties->releaseDate->description = "e.g. 1990-08-01";
        $properties->url = Schema::string();
        $properties->url->description = "e.g. http://www.computer.org.example.com/csdl/mags/co/1996/10/rx069-abs.html";
        $properties->summary = Schema::string();
        $properties->summary->description = "Short summary of publication. e.g. Discussion of the World Wide Web, HTTP, HTML.";
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
     * @param string $publisher e.g. IEEE, Computer Magazine
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $releaseDate e.g. 1990-08-01
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $url e.g. http://www.computer.org.example.com/csdl/mags/co/1996/10/rx069-abs.html
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
     * @param string $summary Short summary of publication. e.g. Discussion of the World Wide Web, HTTP, HTML.
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