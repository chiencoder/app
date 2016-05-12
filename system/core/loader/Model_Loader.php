<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/* 
 * TranChinhChien
 * 2015
 */

class Model_loader {

    public function load($model, $agrs = array()) {
        if (empty($this->{$model})) {
            $model = ucfirst($model);
            require_once(PATH_APLICATION . '/models/' . $model . '.php');
            $this->{$model} = new $model($agrs);
        }
    }

}
