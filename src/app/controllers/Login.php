<?php

class Login extends Controller {
    public function index() {
        $this->view('login/index');
    }

    public function login() {
        $identifier = $_POST['identifier'];
        $password = $_POST['password'];

        if (filter_var($identifier, FILTER_VALIDATE_EMAIL) || strlen($identifier) > 3) {
            $user = $this->model('UserModel')->login($identifier);
        } else {
            Flash::setFlash('Login Failed', 'Username or Email or Password are wrong!', 'danger');
            header('Location: ' . BASE_URL . 'login');
            exit;
        }

        if (!$user) {
            Flash::setFlash('Login Failed', 'Username or Email or Password are wrong!', 'danger');
            header('Location: ' . BASE_URL . 'login');
            exit;
        }

        if (password_verify($password, $user['password'])) {
            $token = base64_encode(openssl_random_pseudo_bytes(64));
            setcookie('token', $token, time() + 60 * 60 * 24 * 7, '/', '', true, true);

            header('Location: ' . BASE_URL . '');
            exit;
        } else {
            Flash::setFlash('Login Failed', 'Username or Email or Password are wrong!', 'danger');
            header('Location: ' . BASE_URL . 'login');
            exit;
        }

    }

    public function logout() {
        if (isset($_COOKIE['token'])) {
            setcookie('token', '', time() - 3600, '/', '', true, true);
        }
        header('Location: ' . BASE_URL . 'login');
        exit;
    }
}