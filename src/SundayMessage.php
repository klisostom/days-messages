<?php

namespace src;

use src\interfaces\MessageInterface;

class SundayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Sunday is Lorem ipsum dolor sit amet.';
    }

    public function message(): string
    {
        return $this->message;
    }
}
