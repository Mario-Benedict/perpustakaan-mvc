<?php

class Delete extends Controller {
    public function index() {
        if ($_COOKIE['token']) {
            $data['user'] = $this->model('UserModel')->getUserByToken($token);

            $user = [
                'username' => $data['user']['username'],
                'role' => $data['user']['role'],
                'email' => $data['user']['email'],
            ];

            if ($user['role'] != 'admin') header('Location: '. BASE_URL);
            
            $id = $_GET['id'];

            $this->model('BookModel')->deleteBook($id);

            Flash::setFlash('Book has been deleted', '', 'success');

            header('Location: ' . BASE_URL . 'admin');
        } else {
            header('Location: '. BASE_URL . 'login');
        }
    }   
}