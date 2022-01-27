<?php 

include '../layout/header.php';
var_dump($_GET);

$q1=$q2=$q3=$q4=$q5=$q6=$q7=$q8=$q9='';
$true = ["q1"=> "array_diff", "q2"=> "array_map", "q3"=> "array_unique", "q4"=> "array_column", "q5"=> "array_split", "q6"=>"server", "q7"=> "option2", "q8"=> "function", "q9"=>"ksort"];

if($_GET){
    $q1 = $_GET['q1'];
    $q2 = $_GET['q2'];
    $q3 = $_GET['q3'];
    $q4 = $_GET['q4'];
    $q5 = $_GET['q5'];
    $q6 = $_GET['q6'];
    $q7 = $_GET['q7'];
    $q8 = $_GET['q8'];
    $q9 = $_GET['q9'];
    $count = 0;

    
}   



// array_diff — Computes the difference of arrays
// array_map — Applies the callback to the elements of the given arrays
// array_unique — Removes duplicate values from an array
// array_unique — Removes duplicate values from an array
// array_splice — Remove a portion of the array and replace it with something else
// array_unshift — Prepend one or more elements to the beginning of an array
// PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
// PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. -->
// <!-- $_FILES An associative array of items uploaded to the current script via the HTTP POST method
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key




?>