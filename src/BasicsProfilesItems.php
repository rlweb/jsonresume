<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class BasicsProfilesItems extends ClassStructure
{
    /** @var string e.g. Facebook or Twitter */
    public $network;

    /** @var string e.g. neutralthoughts */
    public $username;

    /** @var string e.g. http://twitter.example.com/neutralthoughts */
    public $url;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->network = Schema::string();
        $properties->network->description = "e.g. Facebook or Twitter";
        $properties->username = Schema::string();
        $properties->username->description = "e.g. neutralthoughts";
        $properties->url = Schema::string();
        $properties->url->description = "e.g. http://twitter.example.com/neutralthoughts";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $network e.g. Facebook or Twitter
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $username e.g. neutralthoughts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $url e.g. http://twitter.example.com/neutralthoughts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}