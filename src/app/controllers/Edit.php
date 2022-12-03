<?php

class Edit extends Controller {
    public function index() {
        session_start();

        if (!isset($_SESSION['perpustakaan_login'])) {
            $this->view('edit/index');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}