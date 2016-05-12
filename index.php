<?php

/*
 * TranChinhChien
 * 2015
 */

$system_folder = 'system';
$application_folder = 'application';

define('PATH_SYSTEM', __DIR__.'/'.$system_folder);
define('PATH_APLICATION', __DIR__.'/'.$application_folder);

require(PATH_SYSTEM.'/config/config.php');

require_once(PATH_SYSTEM.'/core/Common.php');
load();