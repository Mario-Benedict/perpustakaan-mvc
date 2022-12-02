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
        $this->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);

        return $this->db->single();
    }
}