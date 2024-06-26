<?php
namespace Yatzy;

class YatzyEngine
{
    public function calculateScore($game, $scoreBox)
    {
        $diceValues = $game->diceValues;
        switch ($scoreBox) {
            case 'ones':
                return array_sum(array_filter($diceValues, fn($value) => $value == 1));
            // Add more cases for other score boxes...
            default:
                return 0;
        }
    }

    public function calculateOverallScore($game)
    {
        // Implement the logic to calculate the overall score and bonus
        // ...
    }
}
