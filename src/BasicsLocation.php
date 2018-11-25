<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class BasicsLocation extends ClassStructure
{
    /**
     * @var string To add multiple address lines, use 
     * . For example, 1234 Glücklichkeit Straße
     * Hinterhaus 5. Etage li.
     */
    public $address;

    /** @var string */
    public $postalCode;

    /** @var string */
    public $city;

    /** @var string code as per ISO-3166-1 ALPHA-2, e.g. US, AU, IN */
    public $countryCode;

    /** @var string The general region where you live. Can be a US state, or a province, for instance. */
    public $region;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->address = Schema::string();
        $properties->address->description = "To add multiple address lines, use \n. For example, 1234 Glücklichkeit Straße\nHinterhaus 5. Etage li.";
        $properties->postalCode = Schema::string();
        $properties->city = Schema::string();
        $properties->countryCode = Schema::string();
        $properties->countryCode->description = "code as per ISO-3166-1 ALPHA-2, e.g. US, AU, IN";
        $properties->region = Schema::string();
        $properties->region->description = "The general region where you live. Can be a US state, or a province, for instance.";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $address To add multiple address lines, use 
     * . For example, 1234 Glücklichkeit Straße
     * Hinterhaus 5. Etage li.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $postalCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $city
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $countryCode code as per ISO-3166-1 ALPHA-2, e.g. US, AU, IN
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $region The general region where you live. Can be a US state, or a province, for instance.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}