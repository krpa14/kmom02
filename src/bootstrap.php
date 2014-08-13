<?php
/**
 * Bootstrap functions needed for TMOZ framework to work.
 * Also some common functions
 */
 
/**
 * Default exception handler.
 */
function myExceptionHandler($exception) {
    echo "TMOZ: Uncaught execption: <p>".$exception->getMessage()."</p><pre>".$exception->getTraceAsString(). "</pre>";
}
set_exception_handler('myExceptionHandler');

/**
 * Autoloader for classes.
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