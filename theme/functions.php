<?php
/**
 * Theme functions.
 */
 
/**
 * Get the title for a webpage by concatinating the page specific title with a site-wide title
 *
 * @param string $title for this page
 * @return string/null wether the title is set or not
 */
function get_title($title) {
    global $tmoz;
    return $title.(isset($tmoz['title_append']) ? $tmoz['title_append'] : null);
}