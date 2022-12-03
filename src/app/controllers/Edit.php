<?php

class Edit extends Controller {
    public function index() {
        if ($_COOKIE['token']) {
            $token = $_COOKIE['token'];

            $data['title'] = 'Edit Book';
            $data['user'] = $this->model('UserModel')->getUserByToken($token);

            $user = [
                'username' => $data['user']['username'],
                'role' => $data['user']['role'],
                'email' => $data['user']['email'],
            ];

            if ($user['role'] != 'admin') header('Location: '. BASE_URL);

            $id = $_GET['id'];

            $book = $this->model('BookModel')->getBookById($id);

            $this->view('components/header', $data);
            $this->view('components/navbar', $user);
            $this->view('edit/index', $book);
            $this->view('components/footer');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }

    public function editbook() {
        $book_name = $_POST['book_name'];
        $book_link = $_POST['book_link'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $release = $_POST['release'];
        $id = $_GET['id'];
        
        if (!preg_match('/^(http|https):\/\/(www\.)?/', $book_link)) {
            $book_link = 'http://' . $book_link;
        }
        
        $data = [
            'title' => $book_name,
            'book_url' => $book_link,
            'description' => $description,
            'author' => $author,
            'release_date' => $release,
            'id' => $id,
        ];

        $this->model('BookModel')->updateBook($data);
        
        Flash::setFlash('Book has been updated', '', 'success');

        header('Location: ' . BASE_URL . 'admin');
    }
}