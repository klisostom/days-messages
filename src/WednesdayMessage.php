<?php

namespace src;

use src\interfaces\MessageInterface;

class WednesdayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Wednesday is This food is a cake.';
    }

    public function message(): string
    {
        return $this->message;
    }
}
