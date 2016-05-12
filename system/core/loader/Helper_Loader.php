<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/* 
 * TranChinhChien
 * 2015
 */

Class Helper_Loader {

    public function load($helper) {
        $helper = ucfirst($helper).'_Helper';
        require_once(PATH_SYSTEM.'/helper/'.$helper.'.php');
    }

}
