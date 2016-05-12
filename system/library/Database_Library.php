<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/*
 * TranChinhChien
 * 2015
 */

class Database_Libraary {

    protected $hostname;
    protected $username;
    protected $password;
    protected $database;
    protected $db_prefix;
    protected $charset;

    public function __construct() {
        $this->hostname = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'tcc_mvc';
        $this->db_prefix = 'tcc_';
        $this->charset = 'utf8';
    }

    public function connect() {
        
    }

    public function select() {
        
    }

    public function update() {
        
    }

    public function delete() {
        
    }

    public function join() {
        
    }

}
