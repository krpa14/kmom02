<?php

/**
 * needs a $menu array like this:
 * $menu = array(
 * 'hello' => array('text'=>'Hem', 'url'=>'hello.php'),
 * 'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php'),
 * 'kod' => array('text'=>'Källkod', 'url'=>'kod.php'),
 * ); 
 *
 * text is the label on the menu
 * url is the address of the link in the menu.
 * .php is removed from the url name and matched against the key for adding a "selected" class to the current pages menu item. So it is important that they match. 
 */
 
/**
 * Creates a navigation bar
 */
class CNavigation {

    /**
    * Generates a menu from an array with menu data. The navigation bar is also given a class
    * @param $items array with menu information
    * @param $class name of navbar class
    */
    public static function GenerateMenu($items, $class) {
 
        $html = "<nav class='$class'>\n";
        foreach($items as $key => $item) {
            $selected = basename($_SERVER['PHP_SELF'], '.php') == $key ? 'selected' : null; 
            $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
         }
        $html .= "</nav>\n";
        return $html;
     }
}

// call by
//echo CNavigation::GenerateMenu($menu, 'navbar');