<?php


/**
* Class that contains the current state of a game of 100
*
*/
class CDiceGameStatus {

    private $roundscore;
    private $totalscore;
    private $rolls;
    private $clearrolls;

    /**
    * Constructor
    */
    public function __construct() {
        $this->roundscore = 0;
        $this->rolls = array();
        $this->totalscore = 0;
        $this->clearrolls = true;
    }

    /**
    * Returns the score for the current round
    */
    public function GetRoundScore() {
        return $this->roundscore;
    }

    /**
    * Adds a value to the current rounds score
    * @param int points to add
    */
    public function AddToRoundScore($points) {
        $this->roundscore += $points;
    }

    /**
    * Resets the round score
    */
    public function ResetRoundScore() {
        $this->roundscore = 0;
    }

    /**
    * Returns the total score of the game
    */
    public function GetTotalScore() {
        return $this->totalscore;
    }

    /**
    * Add a value to the total score
    * @param int points to add
    */
    public function AddToTotalScore($points) {
        $this->totalscore += $points;
    }

    /**
    * Resets the total score
    */
    public function ResetTotalScore() {
        $this->totalscore = 0;
    }

    /**
    * Returns an array of dice rolls
    */
    public function GetRolls() {
        return  $this->rolls;
    }

    /**
    * Adds a dice roll to the array
    */
    public function AddRoll($roll) {
        array_push($this->rolls, $roll);
    }

    /**
    * Clears the array with dice rolls
    */
    public function ClearRolls() {
        $this->rolls = array();
        $this->clearrolls = false;
    }

    public function SetClearRolls() {
         $this->clearrolls = true;
    }
    
    public function GetClearRolls() {
        return $this->clearrolls;
    }
    
}

// $r = new CDiceRound();
// echo $r->GetScore();
// $r->AddToScore(4);
// echo $r->GetScore();
// $r->addRoll(4);
// $r->addRoll(1);
// print_r($r->GetRolls());
