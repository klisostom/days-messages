<?php

namespace src;

use src\interfaces\MessageInterface;

class MondayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Monday is consectetur adipiscing elit.';
    }

    public function message(): string
    {
        return $this->message;
    }
}