<?php
namespace Yatzy;

class YatzyGame
{
    public $rollNumber;
    public $diceValues;
    public $keep;

    public function __construct()
    {
        $this->rollNumber = 0;
        $this->diceValues = [0, 0, 0, 0, 0];
        $this->keep = [false, false, false, false, false];
    }

    public function rollDice()
    {
        $dice = new Dice();
        for ($i = 0; $i < 5; $i++) {
            if (!$this->keep[$i]) {
                $this->diceValues[$i] = $dice->roll();
            }
        }
        $this->rollNumber++;
    }
}
