<?php
namespace controllers;
use Exception;
require_once "../models/user.php";

class AuthenticationController {
    public function authenticate($username, $password) {
        $userModel = new \models\UserModel();
        $user = $userModel->authenticateUser($username, $password);

        if ($user) {
            header("Location: ../views/dashboard.php");
            exit();
        } else {
            header("Location: ../views/login.php?error=Incorrect Username or Password");
            exit();
        }
    }

    public function handleLoginRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                if (!isset($_POST['username']) || !isset($_POST['password'])) {
                    throw new Exception("Username and password are required.");
                }

                $username = $_POST['username'];
                $password = $_POST['password'];

                if (empty($username)) {
                    throw new Exception("Username is required");
                } 
                
                if (empty($password)) {
                    throw new Exception("Password is required");
                }

                $this->authenticate($username, $password);
            } catch (Exception $e) {
                header("Location: ../views/login.php?error=" . urlencode($e->getMessage()));
                exit();
            }
        } else {
            header("Location: ../views/login.php");
            exit();
        }
    }
}

$authController = new AuthenticationController();
$authController->handleLoginRequest();
