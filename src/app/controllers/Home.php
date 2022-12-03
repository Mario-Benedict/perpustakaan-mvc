<?php

class Home extends Controller {
    public function index() {
        session_start();

        if (isset($_COOKIE['token'])) {
            $this->view('home/index');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}