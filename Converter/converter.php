<?php

$miliF = $_POST['from'];
$deciF = $_POST['from'];
$metersF = $_POST['from'];
$kiloF = $_POST['from'];

$miliT = $_POST['to'];
$deciT = $_POST['to'];
$metersT = $_POST['to'];
$kiloT = $_POST['to'];

var_dump($_POST['from']);
var_dump($_POST['to']);
var_dump($_POST);
if(isset($_POST['submit'])){
    if(!empty($_POST['Fruit'])) {
        $selected = $_POST['Fruit'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }

?>