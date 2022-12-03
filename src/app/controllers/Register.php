<?php

class Register extends Controller {
    public function index() {
        $data['title'] = 'Register';

        $this->view('components/header', $data);
        $this->view('register/index');
        $this->view('components/footer');
    }

    public function register() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            Flash::setFlash('Email is not valid', 'Email must be valid!', 'danger');
            header('Location: ' . BASE_URL . 'register');
            exit;
        }

        if (strlen($username) < 3) {
            Flash::setFlash('Username is not valid', 'Username must be at least 3 characters', 'danger');
            header('Location: ' . BASE_URL . 'register');
            exit;
        }

        if (strlen($password) < 8) {
            Flash::setFlash('Password is not valid', 'Password must be at least 8 characters', 'danger');
            header('Location: ' . BASE_URL . 'register');
            exit;
        }

        if ($password !== $confirm_password) {
            Flash::setFlash('Confirm Password not match', 'Password and Confirm Password must be the same', 'danger');
            header('Location: ' . BASE_URL . 'register');
            exit;
        }

        $password = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];

        $this->model('UserModel')->register($data);

        Flash::setFlash('Register Success', 'You can login now', 'success');

        header('Location: ' . BASE_URL . '');
        exit;
    }
}