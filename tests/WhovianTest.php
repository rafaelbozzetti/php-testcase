<?php

require dirname(__DIR__) . '/src/Whovian.php';

use PHPUnit\Framework\TestCase;

class WhovianTest extends TestCase
{
    public function testSetsDoctorWithConstructor()
    {
        $whovian = new Whovian('Peter Capaldi');
        $this->assertAttributeEquals('Peter Capaldi', 'favoriteDoctor', $whovian);
    }

    public function testSayDoctorName()
    {
        $whovian = new Whovian('David Tennant');
        $this->assertEquals('The best doctor is David Tennant', $whovian->say());
    }

    public function testRespondToInDisagreement()
    {
        $whovian = new Whovian('David Tennant');

        $opinion = 'No way Matt Smith is the best doctor ever!';

        $whovian->respondTo($opinion);
    }
}