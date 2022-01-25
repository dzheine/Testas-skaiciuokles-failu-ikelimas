<?php
include '../layout/header.php';
?>

<div class="container">
<form action="http://localhost/galerija/KMI/kmi.php" method="GET" >
  <div class="form-group" >
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jusu svoris kilogramais" name = "svoris">
  </div>
  <div class="form-group " >
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jusu ugis metrais" name = "ugis" >
  </div>
  <button type="submit" class="btn btn-primary  ">Submit</button>
</form>
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
Sukurkite matavimo vienetų konverterį. Įvedus bet kurį matavimo vienetą, turi perskaičiuoti kitus.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame POST metodą
3. Matavimo vienetus pasirinkti patiems. Temperatūra, atstumas, greitis ir pan.
4. Turi būti bent keturi matavimo vienetai -->