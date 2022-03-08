<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../views/login.php");
}
include '../layout/header.php';
$mili=$centi=$deci=$meters='';
// var_dump($_POST);


if($_POST){
    $mili=$_POST['milimeters'];
    $centi=$_POST['centimeters'];
    $deci=$_POST['decimeters'];
    $meters=$_POST['meters'];
    $count = 0;
    foreach($_POST as $value)
        if(!empty($value)){
           $count++;
        } 
        if($count===1){    
            if(is_numeric($_POST['milimeters']) && $_POST['milimeters'] > 0) { 
            $mili = $mili*1;
            $centi = $mili/10;
            $deci = $mili/100;
            $meters = $mili/1000;
            } else if (is_numeric($_POST['centimeters']) && $_POST['centimeters'] > 0) { 
                $mili = $centi/10;
                $centi = $centi*1;
                $deci = $centi*10;
                $meters = $centi*100;
            } else if (is_numeric($_POST['decimeters']) && $_POST['decimeters'] > 0) { 
                $mili = $deci/100;
                $centi = $deci/10;
                $deci = $deci*1;
                $meters = $deci*10;
            } else if (is_numeric($_POST['meters']) && $_POST['meters'] > 0) { 
                $mili = $meters*1000;
                $centi = $meters*100;
                $deci = $meters*10;
                $meters = $meters*1;   
            }else {
                echo "It should be Positive Number";
            }
        }else {
            echo "Enter only one measure";
        }
}
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header" >Converter2</div>
                <div class="card-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                        <input name="milimeters" type="text" class="form-control" placeholder="Entry milimeters" value = <?php echo $mili; ?>>
                        </div>
                        <div class="col">
                        <input name="centimeters" type="text" class="form-control" placeholder="Entry centimeters" value = <?php echo $centi; ?>>
                        </div>
                        <div class="col">
                        <input name="decimeters" type="text" class="form-control" placeholder="Entry decimeters" value = <?php echo $deci ;?>>
                        </div>
                        <div class="col">
                        <input name="meters" type="text" class="form-control" placeholder="Entry meters" value = <?php echo $meters; ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" class="alert alert-primary " class="text-center" role="alert">
                        <p>Milimeters: <?php  ?></p>
                        </div>
                        <div class="col" class="alert alert-primary " class="text-center" role="alert">
                        <p>Centimeters: <?php  ?></p>
                        </div>
                        <div class="col" class="alert alert-primary " class="text-center" role="alert">
                        <p>Decimeters: <?php  ?></p>
                        </div>
                        <div class="col" class="alert alert-primary " class="text-center" role="alert">
                        <p>Meters: <?php  ?></p>
                        </div>
                    </div>
                    <button class="btn btn-success my-3 " type="submit">Calculate</button>
                    <div class="col-md-6">
            <a class="btn btn-primary" href="http://localhost/galerija/Converter/Converter2.php">Go back to form</a>
        </div>

                </form>
                                    
                 </div>
            </div>
        </div>
    </div>
</div>




<?php
include '../layout/footer.php';
?>

