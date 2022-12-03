<?php

class BookModel {
    private $table = 'book';
    private $db;
    private $perPage = 10; 

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllBooks($page) {
        $page = (int) $page;
        $start = ($page > 1) ? ($page * $this->perPage) - $this->perPage : 0;

        $query = "SELECT * FROM " . $this->table . " LIMIT " . $start . ", " . $this->perPage;
        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getBookById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->single();
    }

    public function createBook($data) {
        $date = date('Y-m-d', strtotime($data['release_date']));

        $query = "INSERT INTO " . $this->table . " (id, title, book_url, description, author, release_date) VALUES (UUID(), :title, :book_url, :description, :author, :release_date)";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('book_url', $data['book_url']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('release_date', $date);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateBook($data) {
        $date = date('Y-m-d', strtotime($data['release_date']));

        $query = "UPDATE " . $this->table . " SET title = :title, book_url = :book_url, description = :description, author = :author, release_date = :release_date WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('book_url', $data['book_url']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('release_date', $date);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBook($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}