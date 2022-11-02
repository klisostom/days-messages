<?php

namespace src;

use src\interfaces\MessageInterface;

class TuesdayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Tuesday is consectetur sdgfdsgf elit.';
    }

    public function message(): string
    {
        return $this->message;
    }
}
