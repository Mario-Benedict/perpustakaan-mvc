<?php

class Upload extends Controller {
    public function index() {
        session_start();

        if ($_COOKIE['token']) {
            $token = $_COOKIE['token'];

            $data['title'] = 'Upload';
            $data['user'] = $this->model('UserModel')->getUserByToken($token);

            $user = [
                'username' => $data['user']['username'],
                'role' => $data['user']['role'],
                'email' => $data['user']['email'],
            ];

            if ($user['role'] != 'admin') header('Location: '. BASE_URL);

            $this->view('components/header', $data);
            $this->view('components/navbar', $user);
            $this->view('upload/index');
            $this->view('components/footer');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }

    public function upload() {
        $book_name = $_POST['book_name'];
        $book_link = $_POST['book_link'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $release = $_POST['release'];

        if (!preg_match('/^(http|https):\/\/(www\.)?/', $book_link)) {
            $book_link = 'http://' . $book_link;
        }

        $data = [
            'title' => $book_name,
            'book_url' => $book_link,
            'description' => $description,
            'author' => $author,
            'release_date' => $release,
        ];

        $this->model('BookModel')->createBook($data);

        Flash::setFlash('Book has been uploaded', '', 'success');

        header('Location: ' . BASE_URL . 'upload');
    }
}