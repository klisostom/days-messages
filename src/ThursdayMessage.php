<?php

namespace src;

use src\interfaces\MessageInterface;

class ThursdayMessage implements MessageInterface
{
    private string $message;

    public function __construct()
    {
        $this->message = 'Thursday is sed do eiusmod tempor incididunt.';
    }

    public function message(): string
    {
        return $this->message;
    }
}
