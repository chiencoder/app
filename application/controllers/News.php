<?php

if (!defined('PATH_SYSTEM'))
    die('Bad requested!');

class News extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo '<pre>';
        print_r($this);
        echo '<h1>Index Action</h1>';
    }

    public function config() {
        echo '<h1>' . $this->config->get_item('token_name') . '</h1>';
        $this->config->set_item('token_one', 'Ma Khoa 1');
        echo '<h1>' . $this->config->get_item('token_one') . '</h1>';
        $this->config->set_item('token_two', 'Ma Khoa 2');
        echo '<h1>' . $this->config->get_item('token_two') . '</h1>';
    }

    public function library() {
        $this->library->load('upload');
        $this->library->upload->upload();
    }

    public function helper() {
        $this->helper->load('string');
        echo string_to_int('A');
    }

    public function view() {
        $data = array(
            'title' => 'day la tieu de',
            'content' => 'day la noi dung'
        );
        $this->view->load('news', $data);
    }

}
