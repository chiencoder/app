<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/* 
 * TranChinhChien
 * 2015
 */

class Controller {

    protected $view = null;
    protected $library = null;
    protected $helper = null;
    protected $config = null;

    public function __construct() {
        
        //load config
        require_once(PATH_SYSTEM.'/core/loader/Config_Loader.php');
        $this->config = new Config_Loader();
        $this->config->load('config');
        
        //load library
        require_once(PATH_SYSTEM.'/core/loader/Library_Loader.php');
        $this->library = new Library_loader();
        
        //load helper
        require_once(PATH_SYSTEM.'/core/loader/Helper_Loader.php');
        $this->helper = new Helper_Loader();
        
        //load view
        require_once(PATH_SYSTEM.'/core/loader/View_Loader.php');
        $this->view = new View_Loader();
    }
    
}
