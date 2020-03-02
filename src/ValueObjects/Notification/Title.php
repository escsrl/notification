<?php


namespace App\ValueObjects\Notification;

use Assert\Assertion;
use Assert\AssertionFailedException;

class Title
{
    private $title;

    /**
     * Title constructor.
     * @param string $title
     * @throws AssertionFailedException
     */
    public function __construct(string $title)
    {
        Assertion::notEmpty($title);
        $this->title = $title;
    }

    public function __toString()
    {
        return $this->title;
    }
}
