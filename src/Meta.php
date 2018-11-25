<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The schema version and any other tooling configuration lives here
 */
class Meta extends ClassStructure
{
    /** @var string URL (as per RFC 3986) to latest version of this document */
    public $canonical;

    /** @var string A version field which follows semver - e.g. v1.0.0 */
    public $version;

    /** @var string Using ISO 8601 with YYYY-MM-DDThh:mm:ss */
    public $lastModified;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->canonical = Schema::string();
        $properties->canonical->description = "URL (as per RFC 3986) to latest version of this document";
        $properties->version = Schema::string();
        $properties->version->description = "A version field which follows semver - e.g. v1.0.0";
        $properties->lastModified = Schema::string();
        $properties->lastModified->description = "Using ISO 8601 with YYYY-MM-DDThh:mm:ss";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
        $ownerSchema->description = "The schema version and any other tooling configuration lives here";
    }

    /**
     * @param string $canonical URL (as per RFC 3986) to latest version of this document
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCanonical($canonical)
    {
        $this->canonical = $canonical;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $version A version field which follows semver - e.g. v1.0.0
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $lastModified Using ISO 8601 with YYYY-MM-DDThh:mm:ss
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}