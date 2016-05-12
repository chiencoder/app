<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/*
 * TranChinhChien
 * 2015
 */

class Config_Loader {

    protected $config = array();

    public function load($config) {
        if (file_exists(PATH_APLICATION . '/config/' . $config . '.php')) {
            $config = include_once(PATH_APLICATION . '/config/' . $config . '.php');
            if (!empty($config)) {
                foreach ($config as $key => $value) {
                    $this->config[$key] = $value;
                }
            }
            return TRUE;
        }
        return FALSE;
    }

    public function set_item($key, $value) {
        $this->config[$key] = $value;
    }

    public function get_item($key, $default_value = "") {
        return isset($this->config[$key])?$this->config[$key]:$default_value;
    }

}
