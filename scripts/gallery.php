<?php

$title1=$title2=$title3=$title4=$color= "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
// var_dump($_POST);

    $counter = 1;
    // var_dump($_FILES);
    foreach ($_FILES as $image){
        $targetDir = "../uploads/";
        $imageName = "image" . $counter . ".jpg";
        $targetFile = $targetDir . basename($image['name']); //nera failo
        $uploadValid = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $targetFile = $targetDir . $imageName;
        $tempFile = $image['tmp_name']; //yra failas

        //check if file is image
        $check = getimagesize($tempFile);
        if ($check !== false) {
            //echo "File is an image - ".$check['mime'];
        } else {
            echo "File is not an image";
        }

        //check if file extension is accepted
        $extensions = ["jpg"];

        if (in_array($imageFileType, $extensions) === false) {
            echo "Only jpeg, jpg, png files are allowed";
        }

        //upload file
        
        if (move_uploaded_file($tempFile, $targetFile)) { // $targetFile - failas yra, $tempFile - failo nebera.
            // echo "File was uploaded";
        } else {
            header ("Location: http://localhost/galerija/views/gallery_error.php");
        }     $counter++;
       
    } 
        $title1=$_POST['imageTitle1'];
        $title2=$_POST['imageTitle2'];
        $title3=$_POST['imageTitle3'];
        $title4=$_POST['imageTitle4'];
        $color = "bg-".$_POST['color'];
      
    //    var_dump($title2);
    //    var_dump($color);
       include '../views/gallery_view.php';
    //    header ("Location: http://localhost/galerija/views/gallery_view.php");
}else {
    //echo "tst"
    include '../views/gallery_view.php';}
?>

