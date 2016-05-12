<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/*
 * TranChinhChien
 * 2015
 */

function load() {

    #var_dump($_GET['url']);die();
    if (isset($_GET['url'])) {
        $url = explode('/', $_GET['url']);
        #var_dump($url);die();
        $controller = $url[0];
        $action = $url[1];
    }

    $config = require_once(PATH_APLICATION . '/config/init.php');

    $controller = empty($controller) ? $config['default_controller'] : $controller;
    $action = empty($action) ? $config['default_action'] : $action;

    #echo $controller; die();
    #echo $action; die();
    //include model
    if (file_exists(PATH_SYSTEM . '/core/Model.php')) {
        include_once(PATH_SYSTEM . '/core/Model.php');
    }

    //include main controller
    if (file_exists(PATH_SYSTEM . '/core/Controller.php')) {
        include_once(PATH_SYSTEM . '/core/Controller.php');
    }

    //include custom controller
    if (file_exists(PATH_APLICATION . '/core/Custom.php')) {
        include_once(PATH_APLICATION . '/core/Custom.php');
    }

    if (!file_exists(PATH_APLICATION . '/controllers/' . ucfirst($controller) . '.php')) {
        die('Contrller file not exists!');
    }

    require_once(PATH_APLICATION . '/controllers/' . ucfirst($controller) . '.php');

    if (!class_exists($controller)) {
        die('Controller class not exists!');
    }

    $controllerObject = new $controller();

    if (!method_exists($controllerObject, $action)) {
        die('Action not exist!');
    }

    $controllerObject->$action();
}
