<?php

class Home extends Controller {
    public function index() {
        session_start();

        if (isset($_SESSION['perpustakaan_login'])) {
            $this->view('home/index');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}