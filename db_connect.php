<?php
$serverName= "localhost";
$userName="root";
$password="";
$dbname="galerija";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to database";
} catch(PDOException $e) {
    //echo "connection failed: ".$e->getMessage();
}


?>
