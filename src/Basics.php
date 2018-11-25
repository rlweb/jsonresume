<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Rlweb\JSONResume;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Basics extends ClassStructure
{
    /** @var string */
    public $name;

    /** @var string e.g. Web Developer */
    public $label;

    /** @var string URL (as per RFC 3986) to a image in JPEG or PNG format */
    public $image;

    /** @var string e.g. thomas@gmail.com */
    public $email;

    /** @var string Phone numbers are stored as strings so use any format you like, e.g. 712-117-2923 */
    public $phone;

    /** @var string URL (as per RFC 3986) to your website, e.g. personal homepage */
    public $url;

    /** @var string Write a short 2-3 sentence biography about yourself */
    public $summary;

    /** @var BasicsLocation */
    public $location;

    /** @var BasicsProfilesItems[]|array Specify any number of social networks that you participate in */
    public $profiles;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $properties->label = Schema::string();
        $properties->label->description = "e.g. Web Developer";
        $properties->image = Schema::string();
        $properties->image->description = "URL (as per RFC 3986) to a image in JPEG or PNG format";
        $properties->email = Schema::string();
        $properties->email->description = "e.g. thomas@gmail.com";
        $properties->email->format = "email";
        $properties->phone = Schema::string();
        $properties->phone->description = "Phone numbers are stored as strings so use any format you like, e.g. 712-117-2923";
        $properties->url = Schema::string();
        $properties->url->description = "URL (as per RFC 3986) to your website, e.g. personal homepage";
        $properties->url->format = "uri";
        $properties->summary = Schema::string();
        $properties->summary->description = "Write a short 2-3 sentence biography about yourself";
        $properties->location = BasicsLocation::schema();
        $properties->profiles = Schema::arr();
        $properties->profiles->additionalItems = false;
        $properties->profiles->items = BasicsProfilesItems::schema();
        $properties->profiles->description = "Specify any number of social networks that you participate in";
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = true;
    }

    /**
     * @param string $name
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
     * @param string $label e.g. Web Developer
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $image URL (as per RFC 3986) to a image in JPEG or PNG format
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $email e.g. thomas@gmail.com
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $phone Phone numbers are stored as strings so use any format you like, e.g. 712-117-2923
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $url URL (as per RFC 3986) to your website, e.g. personal homepage
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
     * @param string $summary Write a short 2-3 sentence biography about yourself
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
     * @param BasicsLocation $location
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLocation(BasicsLocation $location)
    {
        $this->location = $location;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param BasicsProfilesItems[]|array $profiles Specify any number of social networks that you participate in
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProfiles($profiles)
    {
        $this->profiles = $profiles;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}