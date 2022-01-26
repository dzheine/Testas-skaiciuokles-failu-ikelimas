<?php
include '../layout/header.php';

$index = "Calculate your BMI";
$color = "";
$KMI = 0;
$svoris = $ugis = 0;

if($_GET){
  $svoris = $_GET['svoris'];
  $ugis = $_GET['ugis'];
  if(empty($svoris) && empty($ugis)){
    echo "SUVESKITE DUOMENIS";
    }else{ 
      $KMI = round($svoris/($ugis*$ugis));
      if($KMI>25){
        $index = " You are overweight";
        $color = "danger";
      } else if ($KMI>18){
        $index = " Your weight is normal";
        $color = "success";
      } else {
        $index = " You are too slim";
        $color = "danger";
      }
  }
} 
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">BMI INDEX CALCULATOR</div>
                <div class="card-body">
                      <form action="" method="GET" >
                        <div class="form-group" >
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your weight" name = "svoris">
                        </div>
                        <div class="form-group " >
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your height, m" name = "ugis" >
                        </div>
                        <button type="submit" class="btn btn-primary  ">Submit</button>
                        <div class="alert alert-<?php echo $color;?>" role="alert">
                          <?php echo  $index ?>
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

<!-- Sukurkite KMI (Kūno masės indekso) skaičiuoklę. Vartotojui suvedus savo svorį ir ūgį į formą, turėtų parodyti jo KMI.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame GET metodą
3. Rezultatas parodomas fone, kuris parodo ar KMI geras ar blogas. Geras - žalias, blogas - Raudonas.
4. KMI formulė - KMI=masė(kg)/(ūgis(m))^2. Optimalus svorio indeksas - nuo 18,5 iki 25. Jei indeksas mažesnis – žmogus per liesas, jei didesnis – turima antsvorio.
