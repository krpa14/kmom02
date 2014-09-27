<?php
/**
 * This is a pagecontroller for tmoz_framework
 * It is the me page
 */

// include the config file 
include(__DIR__.'/config.php');


$tmoz['title'] = "Me - Kristian Persson";

// $tmoz['header'] = <<<EOD
// <img class='logo' src='img/logo.png' alt='TMOZ logo'/>
// <span class='sitetitle'>TMOZ framework</span>
// EOD;

$tmoz['main'] = <<<EOD
<h1>Me</h1>
<h2>Om mig</h2>
<p>Jag heter Kristian Persson, jag är 43 år och bor utanför Uppsala. Jag är utbildad biolog men har arbetat med programmering på Sveriges Lantbruksuniveristet i många år. Jag har dock inte så stor vana av webbprogrammering utan har tidigare mer hållt mig till "vanliga" program. Jag ska läsa tre kurser här på BTH i höst på distans. Den här i php och kurserna i python och javascript.</p>




EOD;

// $tmoz['footer'] = <<<EOD
// <footer><span class='footer'>Copyright (c) Kristian Persson (kristian_p@yahoo.com)</span></footer>
// EOD;

include(TMOZ_THEME_PATH);
