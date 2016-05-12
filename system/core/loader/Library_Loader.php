<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/* 
 * TranChinhChien
 * 2015
 */

class Library_loader {

    public function load($library, $agrs = array()) {
        if (empty($this->{$library})) {
            $class = ucfirst($library) . '_library';
            require_once(PATH_SYSTEM . '/library/' . $class . '.php');
            $this->{$library} = new $class($agrs);
        }
    }

}
