<?php

namespace PhpDorset\Speakers;

class Speaker
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @param string $name
     * @param string $avatar
     * @param string $twitter
     */
    public function __construct(string $name, string $avatar, string $twitter)
    {
        $this->name = $name;
        $this->avatar = $avatar;
        $this->twitter = $twitter;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }
}
