<?php


namespace App\ValueObjects\Notification;

use Assert\Assertion;
use Assert\AssertionFailedException;

class Message
{
    private $message;

    /**
     * Message constructor.
     * @param string $message
     * @throws AssertionFailedException
     */
    public function __construct(string $message)
    {
        Assertion::notEmpty($message);
        $this->message = $message;
    }

    public function __toString()
    {
        return $this->message;
    }
}
