<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

/*
 * Dev by TranChinhChien
 * 2015
 */

class Database {

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
        $_con = mysql_connect($this->hostname, $this->username, $this->password);
        if ($_con) {
            mysql_select_db($this->database, $_con);
            mysql_set_charset($this->charset);
        } else {
            die("Can't connect localhost...");
        }
    }

    public function close() {
        if ($this->_connect()) {
            mysql_close();
        }
    }
    
    public function select(){
        
    }
    
    public function update(){
        
    }
    
    public function join(){
        
    }
    
    public function query(){
        
    }

}
