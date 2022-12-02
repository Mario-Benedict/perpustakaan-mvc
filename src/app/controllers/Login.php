<?php

class Login extends Controller {
    public function index() {
        $this->view('login/index');
    }

    public function login() {
        session_start();

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
            $_SESSION['perpustakaan_login'] = [
                'username' => $user['username'],
                'email' => $user['email']
            ];

            header('Location: ' . BASE_URL . '');
            exit;
        } else {
            Flash::setFlash('Login Failed', 'Username or Email or Password are wrong!', 'danger');
            header('Location: ' . BASE_URL . 'login');
            exit;
        }

    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . 'login');
        exit;
    }
}