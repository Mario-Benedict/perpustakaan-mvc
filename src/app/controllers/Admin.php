<?php

class Admin extends Controller {
    private $perPage = 10;

    public function index() {
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
            preg+replace('/[^0-9]/', '', $page);

            $book = $this->model('BookModel')->getAllBooks($page);

            $total = count($book);
            $pages = ceil($total / $this->perPage);

            $this->view('components/header', $data);
            $this->view('components/navbar', $user);
            $this->view('admin/index', [$book, $pages]);
            $this->view('components/footer');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }
}