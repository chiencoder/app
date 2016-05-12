<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/*
 * TranChinhChien
 * 2015
 */

class View_Loader {

    public function load($view, $data = array()) {
        if (isset($data)) {
            extract($data);
        } else {
            echo 'View data not exits...';
        }
        if (isset($view)) {
            require_once(PATH_APLICATION . '/views/' . $view . '.php');
        } else {
            echo 'View file not exists...';
        }
    }

}