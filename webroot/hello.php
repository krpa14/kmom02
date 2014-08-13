<?php
/**
 * This is a test pagecontroller for tmoz_framework
 */

// include the config file 
include(__DIR__.'/config.php');


$tmoz['title'] = "Hello world";

$tmoz['header'] = <<<EOD
<img class='logo' src='img/logo.png' alt='TMOZ logo'/>
<span class='sitetitle'>TMOZ framework</span>
EOD;

$tmoz['main'] = <<<EOD
<h1>Hej</h1>
<p>Detta är en exempelsida</p>
EOD;

$tmoz['footer'] = <<<EOD
<footer><span class='footer'>Copyright (c) Kristian Persson (kristian_p@yahoo.com)</span></footer>
EOD;

include(TMOZ_THEME_PATH);
