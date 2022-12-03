<?php

class Admin extends Controller {
    public function index() {
        session_start();

        if ($_COOKIE['token']) {
            $token = $_COOKIE['token'];

            $data['title'] = 'Admin Panel';
            $data['user'] = $this->model('UserModel')->getUserByToken($token);

            $user = [
                'username' => $data['user']['username'],
                'role' => $data['user']['role'],
                'email' => $data['user']['email'],
            ];

            if ($user['role'] != 'admin') header('Location: '. BASE_URL);

            $page = $_GET['page'] ?? 1;
            $book = $this->model('BookModel')->getAllBooks($page);

            $this->view('components/header', $data);
            $this->view('components/navbar', $user);
            $this->view('admin/index', $book);
            $this->view('components/footer');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}