<?php

namespace src;

use src\interfaces\MessageInterface;

class FridayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Friday is labore et dolore magna aliqua.';
    }

    public function message(): string
    {
        return $this->message;
    }
}