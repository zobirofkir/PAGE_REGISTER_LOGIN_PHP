<?php

session_start();

$username = "admin";
$password = "admin";
$database = new PDO("mysql:host=localhost;dbname=login/register;charset=utf8", $username, $password);

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists in the database
    $checkEmail = $database->prepare("SELECT COUNT(*) FROM user WHERE email = :email");
    $checkEmail->bindParam(':email', $email);
    $checkEmail->execute();
    $emailCount = $checkEmail->fetchColumn();

    if ($emailCount > 0) {
        echo '<div class="alert alert-warning" role="alert">
        Email already exists. Please choose a different email.
        </div>';
    } else {
        // Email does not exist, proceed with user registration
        $register = $database->prepare("INSERT INTO user(username, email, password) VALUES(:username, :email, :password)");
        $register->bindParam(':username', $username);
        $register->bindParam(':email', $email);
        $register->bindParam(':password', $password);

        $_SESSION['name'] = $username;
        if ($register->execute()) {
            header("Location: login.php");
        } else {
            echo 'Error occurred while registering the user.';
        }
    }
}

include "html/register.html";
?>
