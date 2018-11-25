<?php

namespace Rlweb\JSONResume\Tests;

use PHPUnit\Framework\Constraint\IsType;
use Rlweb\JSONResume\User;

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testBasic()
    {
        $json = <<<'JSON'
{
  "basics": {
    "name": "Richard Hendriks",
    "label": "Programmer",
    "picture": "",
    "email": "richard.hendriks@gmail.com",
    "phone": "(912) 555-4321",
    "website": "https://richardhendricks.com",
    "summary": "Richard hails from Tulsa. He has earned degrees from the University of Oklahoma and Stanford. (Go Sooners and Cardinal!) Before starting Pied Piper, he worked for Hooli as a part time software developer. While his work focuses on applied information theory, mostly optimizing lossless compression schema of both the length-limited and adaptive variants, his non-work interests range widely, everything from quantum computing to chaos theory. He could tell you about it, but THAT would NOT be a “length-limited” conversation!",
    "location": {
      "address": "2712 Broadway St",
      "postalCode": "CA 94115",
      "city": "San Francisco",
      "countryCode": "US",
      "region": "California"
    },
    "profiles": [
      {
        "network": "Twitter",
        "username": "neutralthoughts",
        "url": ""
      },
      {
        "network": "SoundCloud",
        "username": "dandymusicnl",
        "url": "https://soundcloud.com/dandymusicnl"
      }
    ]
  },
  "work": [
    {
      "company": "Pied Piper",
      "position": "CEO/President",
      "website": "https://piedpiper.com",
      "startDate": "2013-12-01",
      "endDate": "2014-12-01",
      "summary": "Pied Piper is a multi-platform technology based on a proprietary universal compression algorithm that has consistently fielded high Weisman Scores™ that are not merely competitive, but approach the theoretical limit of lossless compression.",
      "highlights": [
        "Build an algorithm for artist to detect if their music was violating copy right infringement laws",
        "Successfully won Techcrunch Disrupt",
        "Optimized an algorithm that holds the current world record for Weisman Scores"
      ]
    }
  ],
  "volunteer": [
    {
      "organization": "CoderDojo",
      "position": "Teacher",
      "website": "https://coderdojo.com/",
      "startDate": "2012-01-01",
      "endDate": "2013-01-01",
      "summary": "Global movement of free coding clubs for young people.",
      "highlights": [
        "Awarded 'Teacher of the Month'"
      ]
    }
  ],
  "education": [
    {
      "institution": "University of Oklahoma",
      "area": "Information Technology",
      "studyType": "Bachelor",
      "startDate": "2011-06-01",
      "endDate": "2014-01-01",
      "gpa": "4.0",
      "courses": [
        "DB1101 - Basic SQL",
        "CS2011 - Java Introduction"
      ]
    }
  ],
  "awards": [
    {
      "title": "Digital Compression Pioneer Award",
      "date": "2014-11-01",
      "awarder": "Techcrunch",
      "summary": "There is no spoon."
    }
  ],
  "publications": [
    {
      "name": "Video compression for 3d media",
      "publisher": "Hooli",
      "releaseDate": "2014-10-01",
      "website": "https://en.wikipedia.org/wiki/Silicon_Valley_(TV_series)",
      "summary": "Innovative middle-out compression algorithm that changes the way we store data."
    }
  ],
  "skills": [
    {
      "name": "Web Development",
      "level": "Master",
      "keywords": [
        "HTML",
        "CSS",
        "Javascript"
      ]
    },
    {
      "name": "Compression",
      "level": "Master",
      "keywords": [
        "Mpeg",
        "MP4",
        "GIF"
      ]
    }
  ],
  "languages": [
    {
      "language": "English",
      "fluency": "Native speaker"
    }
  ],
  "interests": [
    {
      "name": "Wildlife",
      "keywords": [
        "Ferrets",
        "Unicorns"
      ]
    }
  ],
  "references": [
    {
      "name": "Erlich Bachman",
      "reference": "It is my pleasure to recommend Richard, his performance working as a consultant for Main St. Company proved that he will be a valuable addition to any company."
    }
  ]
}
JSON;
        $resume = User::import(json_decode($json));
        /* @var $resume User */
        // basics
        $this->assertEquals('Richard Hendriks', $resume->basics->name);
        $this->assertEquals('Programmer', $resume->basics->label);
        $this->assertEquals('', $resume->basics->picture);
        $this->assertEquals('richard.hendriks@gmail.com', $resume->basics->email);
        $this->assertEquals('(912) 555-4321', $resume->basics->phone);
        $this->assertEquals('https://richardhendricks.com', $resume->basics->website);
        $this->assertEquals('Richard hails from Tulsa. He has earned degrees from the University of Oklahoma and Stanford. (Go Sooners and Cardinal!) Before starting Pied Piper, he worked for Hooli as a part time software developer. While his work focuses on applied information theory, mostly optimizing lossless compression schema of both the length-limited and adaptive variants, his non-work interests range widely, everything from quantum computing to chaos theory. He could tell you about it, but THAT would NOT be a “length-limited” conversation!', $resume->basics->summary);
        $this->assertEquals('2712 Broadway St', $resume->basics->location->address);
        $this->assertEquals('CA 94115', $resume->basics->location->postalCode);
        $this->assertEquals('San Francisco', $resume->basics->location->city);
        $this->assertEquals('US', $resume->basics->location->countryCode);
        $this->assertEquals('California', $resume->basics->location->region);
        // profiles
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->basics->profiles);
        $profile = reset($resume->basics->profiles);
        $this->assertEquals('Twitter', $profile->network);
        $this->assertEquals('', $profile->url);
        $this->assertEquals('neutralthoughts', $profile->username);
        // work
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->work);
        $work = reset($resume->work);
        $this->assertEquals('Pied Piper', $work->company);
        $this->assertEquals('CEO/President', $work->position);
        $this->assertEquals('https://piedpiper.com', $work->website);
        $this->assertEquals('2013-12-01', $work->startDate);
        $this->assertEquals('2014-12-01', $work->endDate);
        $this->assertEquals('Pied Piper is a multi-platform technology based on a proprietary universal compression algorithm that has consistently fielded high Weisman Scores™ that are not merely competitive, but approach the theoretical limit of lossless compression.', $work->summary);
        $this->assertInternalType(IsType::TYPE_ARRAY, $work->highlights);
        $highlight = reset($work->highlights);
        $this->assertEquals('Build an algorithm for artist to detect if their music was violating copy right infringement laws', $highlight);
        // volunteer
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->volunteer);
        $volunteer = reset($resume->volunteer);
        $this->assertEquals('CoderDojo', $volunteer->organization);
        $this->assertEquals('Teacher', $volunteer->position);
        $this->assertEquals('https://coderdojo.com/', $volunteer->website);
        $this->assertEquals('2012-01-01', $volunteer->startDate);
        $this->assertEquals('2013-01-01', $volunteer->endDate);
        $this->assertEquals('Global movement of free coding clubs for young people.', $volunteer->summary);
        $this->assertInternalType(IsType::TYPE_ARRAY, $volunteer->highlights);
        $highlight = reset($volunteer->highlights);
        $this->assertEquals('Awarded \'Teacher of the Month\'', $highlight);
        // education
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->education);
        $education = reset($resume->education);
        $this->assertEquals('University of Oklahoma', $education->institution);
        $this->assertEquals('Information Technology', $education->area);
        $this->assertEquals('Bachelor', $education->studyType);
        $this->assertEquals('2011-06-01', $education->startDate);
        $this->assertEquals('2014-01-01', $education->endDate);
        $this->assertEquals('4.0', $education->gpa);
        $this->assertInternalType(IsType::TYPE_ARRAY, $volunteer->highlights);
        $highlight = reset($volunteer->highlights);
        $this->assertEquals('Awarded \'Teacher of the Month\'', $highlight);
        // awards
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->awards);
        $award = reset($resume->awards);
        $this->assertEquals('Digital Compression Pioneer Award', $award->title);
        $this->assertEquals('2014-11-01', $award->date);
        $this->assertEquals('Techcrunch', $award->awarder);
        $this->assertEquals('There is no spoon.', $award->summary);
        // publications
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->publications);
        $publication = reset($resume->publications);
        $this->assertEquals('Video compression for 3d media', $publication->name);
        $this->assertEquals('Hooli', $publication->publisher);
        $this->assertEquals('2014-10-01', $publication->releaseDate);
        $this->assertEquals('https://en.wikipedia.org/wiki/Silicon_Valley_(TV_series)', $publication->website);
        $this->assertEquals('Innovative middle-out compression algorithm that changes the way we store data.', $publication->summary);
        // skills
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->skills);
        $skill = reset($resume->skills);
        $this->assertEquals('Web Development', $skill->name);
        $this->assertEquals('Master', $skill->level);
        $this->assertEquals(['HTML', 'CSS', 'Javascript'], $skill->keywords);
        // languages
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->languages);
        $ref = reset($resume->languages);
        $this->assertEquals('English', $ref->language);
        $this->assertEquals('Native speaker', $ref->fluency);
        // interests
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->interests);
        $ref = reset($resume->interests);
        $this->assertEquals('Wildlife', $ref->name);
        $this->assertEquals(['Ferrets', 'Unicorns'], $ref->keywords);
        // references
        $this->assertInternalType(IsType::TYPE_ARRAY, $resume->references);
        $ref = reset($resume->references);
        $this->assertEquals('Erlich Bachman', $ref->name);
        $this->assertEquals('It is my pleasure to recommend Richard, his performance working as a consultant for Main St. Company proved that he will be a valuable addition to any company.', $ref->reference);
    }
}
