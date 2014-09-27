<?php
/**
 * Configuration file for TMOZ framework.
 */

/**
 * For debug purpose, set error reporting on
 */
error_reporting(-1);            //Report all type of errors
ini_set('display_errors', 1);   //Display all errors
ini_set('output_buffering', 0); //Do not buffer output_buffering

/**
 * Define paths for the TMOZ framework
 */
define('TMOZ_INSTALL_PATH', __DIR__ . '/..');
define('TMOZ_THEME_PATH', TMOZ_INSTALL_PATH . '/theme/render.php');

/**
 * Include the bootstrap functions.
 */
include(TMOZ_INSTALL_PATH . '/src/bootstrap.php');

/**
 * Start a session
 */
session_name(preg_replace('/[a-z\d]/i','',__DIR__));
session_start();

/**
 * Create the tmoz variable that is the data storage for the whole framework
 */
$tmoz = array();

/**
 * Site settings
 */
$tmoz['lang'] = 'sv';
$tmoz['title_append'] = ' | TMOZ framework, en webbtemplate';


/**
 * menu settings
 */
$menu = array(
    'index' => array('text'=>'Me', 'url'=>'index.php'),
    'redovisning' => array('text'=>'Redovisningar', 'url'=>'redovisning.php'),
    'dicegame' => array('text' => 'Tärningsspel', 'url' => 'dicegame.php'),
    'kod' => array('text'=>'Källkod', 'url'=>'kod.php'),
); 

/**
 * Header 
 */
$tmoz['header'] = <<<EOD
<img class='logo' src='img/logo.png' alt='TMOZ logo'/>
<span class='sitetitle'>TMOZ framework</span>
EOD;

/**
 * Footer
 */
$tmoz['footer'] = <<<EOD
<footer><span class='footer'>Copyright (c) Kristian Persson (kristian_p@yahoo.com)</span></footer>
EOD;

/**
 * Theme related settings.
 *
 */
$tmoz['stylesheets'] = array('css/tmoz.css', 'css/navbar.css'); 
$tmoz['favicon']    = 'tmoz.ico';

/**
 * Settings for JavaScript.
 *
 */
$tmoz['modernizr'] = 'js/modernizr.custom.23985.js';
$tmoz['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$tmoz['javascript_include'] = array();