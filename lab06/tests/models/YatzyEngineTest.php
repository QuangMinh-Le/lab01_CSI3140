<?php
namespace Yatzy\Test;

use Yatzy\YatzyEngine;
use Yatzy\YatzyGame;
use PHPUnit\Framework\TestCase;

class YatzyEngineTest extends TestCase
{
    public function testCalculateScore()
    {
        $game = new YatzyGame();
        $game->diceValues = [1, 1, 1, 2, 3];
        $engine = new YatzyEngine();
        $score = $engine->calculateScore($game, 'ones');
        $this->assertEquals(3, $score);
    }
}
