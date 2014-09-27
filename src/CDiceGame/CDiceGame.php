<?php

include('CDice.php'); //A dice


/**
* Implements the dice game 100.
*/
class CDiceGame {

    /**
    * Properties
    *
    */
    private $dice;
    private $restart;
    private $save;
    private $roll;
    private $rolls;
    private $gamestatus;
    private $message;


    /**
    * Constructor.
    * Also handles the users actions (roll, save and reset)
    * @param int $faces the number of faces to use.
    */
    public function __construct($faces=6) {
        $this->dice = new CDice();
        // Get the arguments from the query string
        $this->roll = isset($_GET['roll']) ? true : false;
        $this->restart = isset($_GET['restart']) ? true : false;
        $this->save = isset($_GET['save']) ? true : false;

      // Create the game status object CDiceRound or get it from the session
        if(isset($_SESSION['status'])) {
            $this->gamestatus = $_SESSION['status'];
        }
        else {
            $this->gamestatus = new CDiceGameStatus();
            $_SESSION['status'] = $this->gamestatus;
        }
        
        $this->message = "<br>";
        
        //Handle get arguments
        if ($this->roll) {
            $this->ThrowsDice();
        }
        if ($this->save) {
            $this->SaveRound();
        }
        if ($this->restart) {
            $this->RestartGame();
        }
    }


    /**
    * The player thows the dice
    */
    private function ThrowsDice() {
        $roll =  $this->ThrowDice();
        if ($roll === 1) {
            $this->gamestatus->ResetRoundScore();
            $this->gamestatus->SetClearRolls();
            $this->message = "Du fick en 1:a och förlorade dina poäng den här rundan.<br>";
        } else {
            $this->gamestatus->AddToRoundScore($roll);
        }
    }
    
    /**
    * Saves the points earned in this round and stars a new round
    */
    private function SaveRound() {
        $this->gamestatus->AddToTotalScore($this->gamestatus->GetRoundScore());
        $this->gamestatus->ResetRoundScore();
        $this->gamestatus->ClearRolls();
        $this->message = "Du har sparat dina poäng för den här rundan.<br> ";
        if ($this->gamestatus->GetTotalScore() >= 100) { //Player won 
            $this->message = "Grattis du vann! <br>Du fick ".$this->gamestatus->GetTotalScore()." poäng. <br>";
            $this->gamestatus->ResetTotalScore();
            $this->gamestatus->ResetRoundScore();
            $this->gamestatus->SetClearRolls();
        }    
    }
    
    /**
    * Restarts the game by reinitialising all game parameters
    */
    private function RestartGame() {
        $this->message = "Nytt spel startat.<br>";  
        $this->gamestatus->ResetTotalScore();
        $this->gamestatus->ResetRoundScore();
        $this->gamestatus->clearRolls();
    }
    
    /**
    * Returns a message about the game staus
    */
    public function GetMessage() {
        return $this->message;
    }

    /**
    * Gets the points earned in the current round
    */
    public function GetRoundScore() {
        return $this->gamestatus->GetRoundScore();
    }
    
    /**
    * Get the total score of the game
    */
    public function GetTotalScore() {
        return $this->gamestatus->GetTotalScore();
    }
    
    /**
    * Throws a dice and add the result to the dice history
    */
    public function ThrowDice() {
        $roll = $this->dice->ThrowDice();
        $this->gamestatus->AddRoll($roll);
        return $roll;
    }

    /**
    * Return the dice history as an html list, together with an image and some css this displays dice faces.
    * Also clers the dice history if a flag is set.
    */
    public function GetRollsAsImageList() {
        $html = "<ul class='dice'>";
        foreach($this->gamestatus->GetRolls() as $val) {
            $html .= "<li class='dice-{$val}'></li>";
         }
        $html .= "</ul>";

        if ($this->gamestatus->GetClearRolls()) {
            $this->gamestatus->ClearRolls();
        }
        return $html;
    }

}

