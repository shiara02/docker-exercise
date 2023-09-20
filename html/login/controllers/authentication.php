<?php
namespace controllers;
require_once "../models/user.php";

class AuthenticationController 
{

    public function authenticate($username, $password) 
    {
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
    
    public function handleLoginRequest() 
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: ../views/login.php");
            exit();
        }

        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            header("Location: ../views/login.php?error=" . urlencode("Username and Password are required."));
        exit();
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            header("Location: ../views/login.php?error=" . urlencode("Username is required"));
            exit();
        } 

        if (empty($password)) {
            header("Location: ../views/login.php?error=" . urlencode("Password is required"));
            exit();
        }

        $this->authenticate($username, $password);
    }   
}

$authController = new AuthenticationController();
$authController->handleLoginRequest();
