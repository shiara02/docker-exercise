<?php
namespace models;
require_once "../config/database.php";

class UserModel {
    private $conn;

    public function __construct() {
        $database = new \config\Database();
        $this->conn = $database->getConnection();
    }

    public function authenticateUser($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }
}
