<?php
/**
 * This is a pagecontroller for tmoz_framework
 * It is the dicegame page
 */

// include the config file 
include(__DIR__.'/config.php');


$tmoz['title'] = "Tärningsspelet 100";

//include stylesheet for dices
$tmoz['stylesheets'][] = 'css/dicegame.css'; 

//the game.
$diceGame = new CDiceGame();
$totalscore = $diceGame->GetTotalScore();
$roundscore = $diceGame->GetRoundScore();

$tmoz['main'] = <<<EOD
<div id="rules"><h2>Det här är Tärningsspelet 100</h2>
<p>Det går ut på att slå tärningen och få den sammanlagda summan 100. Om du får en 1:a så förlorar du alla poäng som du inte sparat.</p>
</div>
<h4>Totalpoäng: $totalscore </h4> 
<h4>Poäng: $roundscore </h4> 
<h5>Kasthistorik</h5> 

EOD;

$tmoz['main'] .= $diceGame->GetRollsAsImageList();
$tmoz['main'] .= $diceGame->GetMessage();
$tmoz['main'] .= '<a class="button" href="?roll">Kasta tärning</a>';
$tmoz['main'] .= '<a class="button" href="?save">Spara poäng</a>';
$tmoz['main'] .= '<a class="button" href="?restart">Börja om</a>';
include(TMOZ_THEME_PATH);