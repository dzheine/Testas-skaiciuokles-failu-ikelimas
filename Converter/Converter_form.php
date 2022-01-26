<?php
include '../layout/header.php';

$number=$result=$from=$to=$diff='';

if($_POST){
    $number = $_POST['number'];
    $result = 0;
    $from = $_POST['from'];
    $to = $_POST['to'];
    $diff= $from-$to;
    var_dump($diff);

    if((!empty($_POST['number'])) && (!empty($_POST['from'])) && (!empty($_POST['to']))){
        if(is_numeric($_POST['number']) && $_POST['number'] > 0) { 
              $result = $number * (10 ** $diff);
            } else {
                echo "INPUT IS NOT A NUMBER";
            }       
    } else {
        echo "PLEASE ENTER DATA";
    }
}

?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header" >Converter</div>
                <div class="card-body">
                    <form action="" method="POST" >
                        <div class="row my-2">
                            <div class="col">
                                <label class="input-group-text" for="inputGroupFile02">From</label>
                            <div class="input-group">
                                <select name = "from" class="form-control" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option selected  >Choose</option>
                                    <option value="1">Milimeters</option>
                                    <option value="2">Centimeters</option>
                                    <option value="3">Decimeters</option>
                                    <option value="4">Meters</option>
                                </select>
                            </div>
                            </div>
                            <div class="col">
                                <label class="input-group-text" for="inputGroupFile02">To</label>
                                <div class="input-group">
                                    <select name = "to" class="form-control" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                        <option selected  >Choose</option>
                                        <option value="1">Milimeters</option>
                                        <option value="2">Centimeters</option>
                                        <option value="3">Decimeters</option>
                                        <option value="4">Meters</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating my-2">
                                <input type="text" name="number" class="form-control">
                                <label for="number">Enter number</label>
                            </div>
                            <button class="btn btn-success my-3 " type="submit">Calculate</button>
                            </div>
                    </form> 
                            <div  class="alert alert-primary " class="text-center" role="alert">
                                <p>Your result: <?php echo $result; ?></p>
                            </div>          
                 </div>
            </div>
        </div>
    </div>
</div>
   

<?php
include '../layout/footer.php';
?>
<!-- Sukurkite matavimo vienetų konverterį. Įvedus bet kurį matavimo vienetą, turi perskaičiuoti kitus.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame POST metodą
3. Matavimo vienetus pasirinkti patiems. Temperatūra, atstumas, greitis ir pan.
4. Turi būti bent keturi matavimo vienetai -->