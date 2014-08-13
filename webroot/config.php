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
 * Theme related settings.
 *
 */
$tmoz['stylesheets'] = array('css/tmoz.css'); 
$tmoz['favicon']    = 'tmoz.ico';

/**
 * Settings for JavaScript.
 *
 */
$tmoz['modernizr'] = 'js/modernizr.custom.23985.js';
$tmoz['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$tmoz['javascript_include'] = array();