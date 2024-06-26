<?php
require_once('_config.php');

use Yatzy\YatzyGame;
use Yatzy\YatzyEngine;

$game = new YatzyGame();
$game->rollDice();

echo "Roll number: {$game->rollNumber}<br>";
echo "Dice values: " . implode(', ', $game->diceValues) . "<br>";

$engine = new YatzyEngine();
$score = $engine->calculateScore($game, 'ones');
echo "Score for ones: {$score}<br>";
