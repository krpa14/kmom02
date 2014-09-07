<?php
/**
 * This is a pagecontroller for tmoz_framework
 * This page shows the sourcecode for the project
 */

// include the config file 
include(__DIR__.'/config.php');


$tmoz['title'] = "Källkod";

// Add style for csource
$tmoz['stylesheets'][] = 'css/source.css';
 

$tmoz['header'] = <<<EOD
<img class='logo' src='img/logo.png' alt='TMOZ logo'/>
<span class='sitetitle'>TMOZ framework</span>
EOD;

// Create the object to display sourcecode
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
$tmoz['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

$tmoz['footer'] = <<<EOD
<footer><span class='footer'>Copyright (c) Kristian Persson (kristian_p@yahoo.com)</span></footer>
EOD;

include(TMOZ_THEME_PATH);
