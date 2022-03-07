<?php

require_once("../db_connect.php");

if($_POST){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];
} else {
    header("Location: ../");
    die;
}

if($pass===$confirmPass){
    $pass=password_hash($pass, PASSWORD_BCRYPT);
} else {
    header("Location: ../");
    die;
}

try{
$sql= "INSERT INTO users (first_name, last_name, email, password) VALUES('$firstName', '$lastName', '$email', '$pass')";
$query = $conn->prepare($sql);
    $query->execute();
header("Location: ../");
} catch(PDOException $e){
    echo "Insert failed: ". $e->getMessage();
}

?>
