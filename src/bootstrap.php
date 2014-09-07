<?php
/**
 * Bootstrap functions needed for TMOZ framework to work.
 * Also some common functions
 */
 
/**
 * Default exception handler.
 * @param $execption the exception
 */
function myExceptionHandler($exception) {
    echo "TMOZ: Uncaught execption: <p>".$exception->getMessage()."</p><pre>".$exception->getTraceAsString(). "</pre>";
}
set_exception_handler('myExceptionHandler');

/**
 * A nice way to display an array in a secure way and in pre tags.
 * @param $array to display
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}

/**
 * Autoloader for classes thar are in a subfolder to src with the same name as the class.
 * If the class has several php files they must be included in the class file.
 * @param $class class to load
 */
function myAutoloader($class) {
    $path = TMOZ_INSTALL_PATH . "/src/{$class}/{$class}.php";
    if(is_file($path)) {
        include($path);
    } else {
        throw new Exeption("Classfile '{$class}' does not exist.");
    }
}
spl_autoload_register('myAutoloader');