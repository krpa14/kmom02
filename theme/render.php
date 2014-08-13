<?php
/**
 * Render content to theme.
 */
 
// Extract the tmoz array to variables for easier acces in the template files.
extract($tmoz);

// Include template functions
include(__DIR__.'/functions.php');

// Include template file.
include(__DIR__.'/index.tpl.php');