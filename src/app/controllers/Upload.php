<?php

class Upload extends Controller {
    public function index() {
        session_start();

        if (!isset($_SESSION['perpustakaan_login'])) {
            $this->view('upload/index');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}