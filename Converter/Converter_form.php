<?php
include '../layout/header.php';
?>
<div class="container py-4">
<div class="row justify-content-center">
        <div class="col-md-8">
<div class="card-header" >Converter</div>
    <div class="card-body">
<form action="converter.php" method="POST" >
    <div class="row my-2">
        <div class="col">
        <label class="input-group-text" for="inputGroupFile02">From</label>
        <div class="input-group">
        <select name = "from" class="form-control" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option selected  >Choose</option>
            <option value="1">Milimeters</option>
            <option value="2">Decimeters</option>
            <option value="3">Meters</option>
            <option value="3">Kilometers</option>
        </select>
        </div>
        </div>
        <div class="col">
        <label class="input-group-text" for="inputGroupFile02">To</label>
        <div class="input-group">
        <select name = "to" class="form-control" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option selected  >Choose</option>
            <option value="1">Milimeters</option>
            <option value="2">Decimeters</option>
            <option value="3">Meters</option>
            <option value="3">Kilometers</option>
        </select>
        </div>
         </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
    <button  class="form-control" type="submit">Calculate</button>
    </div>
</form>

<?php
include '../layout/footer.php';
?>
<!-- Sukurkite matavimo vienetų konverterį. Įvedus bet kurį matavimo vienetą, turi perskaičiuoti kitus.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame POST metodą
3. Matavimo vienetus pasirinkti patiems. Temperatūra, atstumas, greitis ir pan.
4. Turi būti bent keturi matavimo vienetai -->