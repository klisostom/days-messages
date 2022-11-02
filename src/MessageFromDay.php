<?php

namespace src;

class MessageFromDay
{
    public function showMessage()
    {
        $day = strtolower(date('l'));

        return match ($day) {
            'sunday' => (new SundayMessage())->message(),
            'monday' => (new MondayMessage())->message(),
            'tuesday' => (new TuesdayMessage())->message(),
            'wednesday' => (new WednesdayMessage())->message(),
            'thursday' => (new ThursdayMessage())->message(),
            'friday' => (new FridayMessage())->message(),
            'saturday' => (new SaturdayMessage())->message(),
            default => 'unknown',
        };
    }
}
