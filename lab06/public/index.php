<?php
require_once('_config.php');

use Yatzy\YatzyGame;

$game = new YatzyGame();
$game->rollDice();

echo "Roll number: {$game->rollNumber}<br>";
echo "Dice values: " . implode(', ', $game->diceValues) . "<br>";
