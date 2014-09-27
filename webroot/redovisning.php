<?php
/**
 * This is a pagecontroller for tmoz_framework
 * This page contains the task reports for the course
 */

// include the config file 
include(__DIR__.'/config.php');


$tmoz['title'] = "Uppgifts redovisning";

// $tmoz['header'] = <<<EOD
// <img class='logo' src='img/logo.png' alt='TMOZ logo'/>
// <span class='sitetitle'>TMOZ framework</span>
// EOD;

$tmoz['main'] = <<<EOD
<h1>Redovisning</h1>
EOD;
//Add task reports

$tmoz['main'].= include 'Kmom01.php';
$tmoz['main'].= include 'Kmom02.php';
$tmoz['main'].= include 'Kmom03.php';
$tmoz['main'].= include 'Kmom04.php';
$tmoz['main'].= include 'Kmom05.php';
$tmoz['main'].= include 'Kmom06.php';
$tmoz['main'].= include 'Kmom07.php';


// $tmoz['footer'] = <<<EOD
// <footer><span class='footer'>Copyright (c) Kristian Persson (kristian_p@yahoo.com)</span></footer>
// EOD;

include(TMOZ_THEME_PATH);
