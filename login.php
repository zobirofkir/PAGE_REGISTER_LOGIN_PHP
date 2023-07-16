<?php


$username = "admin";
$password = "admin";
$database = new PDO("mysql:host=localhost;dbname=login/register;sharset=utf8", $username, $password);

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = $database->prepare("SELECT * FROM user WHERE email=:email AND password = :password");
    $login->bindParam('email', $email);
    $login->bindParam('password', $password);
    $login->execute();

    $user = $login->fetch(PDO::FETCH_ASSOC);
    if ($user){
        header("Location: dashboard.php");
    }else{
        echo ' Invalid username or password !';
    }
}

include "html/login.php"

?>
