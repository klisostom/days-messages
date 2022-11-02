<?php

declare(strict_types=1);

use src\FridayMessage;
use src\MondayMessage;
use src\SundayMessage;
use src\MessageFromDay;
use src\TuesdayMessage;
use src\SaturdayMessage;
use src\ThursdayMessage;
use src\WednesdayMessage;
use PHPUnit\Framework\TestCase;

class DaysTest extends TestCase
{
    public function daysProvider(): array
    {
        return [
            ['sunday', 'Sunday is Lorem ipsum dolor sit amet.'],
            ['monday', 'Monday is consectetur adipiscing elit.'],
            ['tuesday', 'Tuesday is consectetur sdgfdsgf elit.'],
            ['wednesday', 'Wednesday is This food is a cake.'],
            ['thursday', 'Thursday is sed do eiusmod tempor incididunt.'],
            ['friday', 'Friday is labore et dolore magna aliqua.'],
            ['saturday', 'Saturday is ex ea commodo consequat.'],
        ];
    }

    /**
     * @dataProvider daysProvider
     * @test
     * */
    public function show_messages(string $day, string $message): void
    {
        // Arranje
        $result = match ($day) {
            'sunday' => new SundayMessage(),
            'monday' => new MondayMessage(),
            'tuesday' => new TuesdayMessage(),
            'wednesday' => new WednesdayMessage(),
            'thursday' => new ThursdayMessage(),
            'friday' => new FridayMessage(),
            'saturday' => new SaturdayMessage(),
            default => 'unknown',
        };

        $expected = $message;

        // Act
        $actual = $result->message();

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
