<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/* Development By TranChinhChien */

function string_to_int($str){
    return sprintf("%u", crc32($str));
}