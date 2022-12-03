<?php

class Home extends Controller {
    public function index() {
        session_start();

        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];

            $data['title'] = 'Perpustakaan';
            $data['user'] = $this->model('UserModel')->getUserByToken($token);

            $user = [
                'username' => $data['user']['username'],
                'role' => $data['user']['role'],
                'email' => $data['user']['email'],
            ];

            $page = $_GET['page'] ?? 1;
            $book = $this->model('BookModel')->getAllBooks($page);

            $this->view('components/header', $data);
            $this->view('components/navbar', $user);
            $this->view('home/index', $book);
            $this->view('components/footer');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}