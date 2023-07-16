<?php

session_start();

$username = "admin";
$password = "admin";
$database = new PDO("mysql:host=localhost;dbname=login/register;sharset=utf8", $username, $password);

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $register = $database->prepare("INSERT INTO user(username, email, password) VALUES(:username, :email, :password)");
    $register->bindParam('username', $username);
    $register->bindParam('email', $email);
    $register->bindParam('password', $password);

    $_SESSION['name'] = $username;
    if ($register->execute()){
        header ("Location: login.php");
    }else{
        echo 'error !!!';
    }
}

include "html/register.html";

?>