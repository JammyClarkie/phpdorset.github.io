<?php

namespace PhpDorset\Meetups;

use PhpDorset\Speakers\Speaker;

class PhpMeetup
{
    /**
     * @var \DateTimeImmutable
     */
    private $startDateTime;

    /**
     * @var SocialMeetup
     */
    private $socialMeetup;

    /**
     * @var Speaker[]
     */
    private $speakers;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var Sponsor[]
     */
    private $sponsors;
}
