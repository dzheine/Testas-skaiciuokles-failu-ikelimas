<!-- KMI formulė - KMI=masė(kg)/(ūgis(m))^2. Optimalus svorio indeksas - nuo 18,5 iki 25. Jei indeksas mažesnis – žmogus per liesas, jei didesnis – turima antsvorio. -->


<?php 

$svoris = $_GET['svoris'];
$ugis = $_GET['ugis'];
// var_dump($_GET);
$KMI = 0;

if (empty($svoris) && empty($ugis)){
    include 'kmi_error.php';
    exit;
} else {
    $KMI = round($svoris /($ugis * $ugis));
    // echo $KMI;
}
$index = '';
$color = '';
   if($KMI >25) {
       $color = "bg-danger";
       $index = "Turima atsvorio";
   } else if ( $KMI>18.5) {
       $color = "bg-success";
       $index = "Jusu svoris normalus";
   } else {
    $color = "bg-danger";
    $index = "Esate per liesas";
   }
  ?>

<?php
include '../layout/header.php';
?>
<div class="card <?php echo $color;?>">

  <div class="card-body ">
   <?php echo "Jusu KMI yra $KMI. $index."; ?>
  </div>
</div>
<div class="row justify-content-center">
        <div>
            <a class="btn btn-primary" href="http://localhost/galerija/KMI/KMI_forma.php">Go back to form</a>
        </div>

    </div>

<?php include '../layout/footer.php' ?>





