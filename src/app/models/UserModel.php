<?php

class UserModel {
    private $table =  'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $query = "INSERT INTO " . $this->table . " (username, email, password) VALUES (:username, :email, :password)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($data) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email OR username = :username";
        $this->db->query($query);
        $this->db->bind('email', $data);
        $this->db->bind('username', $data);

        $this->db->execute();

        return $this->db->single();
    }

    public function setToken($token, $id) {
        $query = "UPDATE " . $this->table . " SET token = :token WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('token', $token);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->single();
    }

    public function deleteToken($token) {
        $query = "UPDATE " . $this->table . " SET token = '' WHERE token = :token";
        $this->db->query($query);
        $this->db->bind('token', $token);

        $this->db->execute();

        return $this->db->single();
    }
}