<?php

namespace src;

use src\interfaces\MessageInterface;

class SaturdayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Saturday is ex ea commodo consequat.';
    }

    public function message(): string
    {
        return $this->message;
    }
}
