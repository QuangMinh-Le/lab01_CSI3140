<?php
namespace Yatzy\Test;

use Yatzy\Dice;
use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    public function testConstructor()
    {
        $d = new Dice();
        $this->assertEquals(1, $d->min);
        $this->assertEquals(6, $d->max);

        $d = new Dice(10, 20);
        $this->assertEquals(10, $d->min);
        $this->assertEquals(20, $d->max);
    }

    public function testRoll()
    {
        $d = new Dice();
        $value = $d->roll();
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(6, $value);
    }
}
