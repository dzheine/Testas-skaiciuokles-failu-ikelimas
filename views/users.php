<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header.php';
require_once("../db_connect.php");

try{
    $sql= "SELECT * FROM users ";
    $query= $conn->prepare($sql);
    $query->execute();
    $result=$query->fetchAll();

}catch(PDOException $e){
    echo "Select failed: ". $e ->getMessage();
}
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">USERS</div>
                <div class="card-body">
                      <h5 class="card-title">Users list</h5>
                      <table class="table table-striped">
                          <tr>
                              <th>Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Created</th>
                              <th>Updated</th>
                          </tr>
                          <?php
                                foreach($result as $user){
                                    echo "<tr><td>".$user['first_name']."</td><td>".$user['last_name']."</td><td>".$user['email']."</td><td>".$user['created']."</td><td>".$user['modified']."</td></tr>";
                                }
                          ?>
                      </table>
                  </div>
                </div>
            </div>
      </div>
</div>