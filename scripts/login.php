<?php

require_once("../db_connect.php");



//susirenkame login info is formos

if($_POST){
    $email=$_POST['email'];
    $password= $_POST['password'];

}
//issitraukiam info is db
try{
    $sql= "SELECT * FROM users WHERE email='$email'";
    $query= $conn->prepare($sql);
    $query->execute();
    $result=$query->fetch();

}catch(PDOException $e){
    echo "Select failed: ". $e ->getMessage();
}
var_dump($result);

if($result){
    session_start();
    $db_PasswordHash= $result['password'];
    if(password_verify($password, $db_PasswordHash)){
        $_SESSION['username'] = $result['first_name'];
       // echo "Login successful";
       header("Location: ../views/users.php");

    }else {
        echo "Password is incorrect";
    }
}else{
    echo "Email does not exist";
}

?>