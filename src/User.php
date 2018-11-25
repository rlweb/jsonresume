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
 * Resume Schema
 */
class User extends ClassStructure
{
    /** @var Basics */
    public $basics;

    /** @var WorkItems[]|array */
    public $work;

    /** @var VolunteerItems[]|array */
    public $volunteer;

    /** @var EducationItems[]|array */
    public $education;

    /** @var AwardsItems[]|array Specify any awards you have received throughout your professional career */
    public $awards;

    /** @var PublicationsItems[]|array Specify your publications through your career */
    public $publications;

    /** @var SkillsItems[]|array List out your professional skill-set */
    public $skills;

    /** @var LanguagesItems[]|array List any other languages you speak */
    public $languages;

    /** @var InterestsItems[]|array */
    public $interests;

    /** @var ReferencesItems[]|array List references you have received */
    public $references;

    /** @var ProjectsItems[]|array Specify career projects */
    public $projects;

    /** @var Meta The schema version and any other tooling configuration lives here */
    public $meta;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->basics = Basics::schema();
        $properties->work = Schema::arr();
        $properties->work->additionalItems = false;
        $properties->work->items = WorkItems::schema();
        $properties->volunteer = Schema::arr();
        $properties->volunteer->additionalItems = false;
        $properties->volunteer->items = VolunteerItems::schema();
        $properties->education = Schema::arr();
        $properties->education->additionalItems = false;
        $properties->education->items = EducationItems::schema();
        $properties->awards = Schema::arr();
        $properties->awards->additionalItems = false;
        $properties->awards->items = AwardsItems::schema();
        $properties->awards->description = "Specify any awards you have received throughout your professional career";
        $properties->publications = Schema::arr();
        $properties->publications->additionalItems = false;
        $properties->publications->items = PublicationsItems::schema();
        $properties->publications->description = "Specify your publications through your career";
        $properties->skills = Schema::arr();
        $properties->skills->additionalItems = false;
        $properties->skills->items = SkillsItems::schema();
        $properties->skills->description = "List out your professional skill-set";
        $properties->languages = Schema::arr();
        $properties->languages->additionalItems = false;
        $properties->languages->items = LanguagesItems::schema();
        $properties->languages->description = "List any other languages you speak";
        $properties->interests = Schema::arr();
        $properties->interests->additionalItems = false;
        $properties->interests->items = InterestsItems::schema();
        $properties->references = Schema::arr();
        $properties->references->additionalItems = false;
        $properties->references->items = ReferencesItems::schema();
        $properties->references->description = "List references you have received";
        $properties->projects = Schema::arr();
        $properties->projects->additionalItems = false;
        $properties->projects->items = ProjectsItems::schema();
        $properties->projects->description = "Specify career projects";
        $properties->meta = Meta::schema();
        $ownerSchema->type = 'object';
        $ownerSchema->additionalProperties = false;
        $ownerSchema->title = "Resume Schema";
    }

    /**
     * @param Basics $basics
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBasics(Basics $basics)
    {
        $this->basics = $basics;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param WorkItems[]|array $work
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setWork($work)
    {
        $this->work = $work;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param VolunteerItems[]|array $volunteer
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVolunteer($volunteer)
    {
        $this->volunteer = $volunteer;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param EducationItems[]|array $education
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEducation($education)
    {
        $this->education = $education;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AwardsItems[]|array $awards Specify any awards you have received throughout your professional career
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAwards($awards)
    {
        $this->awards = $awards;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param PublicationsItems[]|array $publications Specify your publications through your career
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPublications($publications)
    {
        $this->publications = $publications;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param SkillsItems[]|array $skills List out your professional skill-set
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param LanguagesItems[]|array $languages List any other languages you speak
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param InterestsItems[]|array $interests
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReferencesItems[]|array $references List references you have received
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReferences($references)
    {
        $this->references = $references;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ProjectsItems[]|array $projects Specify career projects
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Meta $meta The schema version and any other tooling configuration lives here
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMeta(Meta $meta)
    {
        $this->meta = $meta;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}