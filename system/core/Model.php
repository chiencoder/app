<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/*
 * TranChinhChien
 * 2015
 */

class Model {
    
    protected $model = null;
    protected $database = null;

    public function __construct() {
        //load driver
        require_once(PATH_SYSTEM.'/database/Database.php');
        $this->database = new Database();
        
        //load model application
        require_once(PATH_SYSTEM.'/core/loader/Model_Loader.php');
        $this->model = new Model_loader();
    }
    
}
