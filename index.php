<?php

header("Location: ./views/login.php");
// include 'layout/header.php';

// $usernameValue = $emailValue = $passError = "";
// if ($_GET) {
//     $usernameValue = $_GET['username'];
//     $emailValue = $_GET['email'];
//     $passError = $_GET['error'];
// }

?>

<!-- <div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Please fill registration form!</h2>
            <form action="scripts/register.php" method="POST">
                <div class="form-floating my-2">
                    <input type="text" name="username" class="form-control" required
                        value="<?php echo $usernameValue ?>">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating my-2">
                    <input type="email" class="form-control" name="email" required value="<?php echo $emailValue ?>">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating my-2">

                    <input type="password" name="confirmPassword" class="form-control" required>
                    <span class="badge bg-danger"><?php echo $passError ?></span>
                    <label for="confirmPassword">Confirm Password</label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Register</button>
            </form>
        </div>
    </div>
</div> -->

<?php include 'layout/footer.php' ?>

<!-- Sukurkite paveikslėlių galeriją. Naudojame Sample_system (arba kitą savo Bootstrap projektą).
Reikalavimai:
1. Forma su galimybe įkelti 4 paveikslėlius.
2. Paveikslėliai turi turėti pavadinimus kurie bus rodomi prie paveikslėlio. Visi 4 paveikslėliai turi būti įkelti. Validacija per PHP.
3. Formoje turi būti galimybė pasirinkti galerijos puslapio fono spalvą (trys spalvos, spalvas pasirenkate patys).
4. Paveikslėlių galerija turi turėti atskirą puslapį, kuriame bus rodomi paveikslėliai po įkėlimo į formą.
5. Galerijos puslapis turi būti tvarkingai sukurtas su Bootstrap. kaip ir forma.
Bonus:
1. Paveikslėlių galerija veikia visada, nepriklausomai nuo to ar į ją patenkame užpildę formą.  Pavadinimų gali nerodyti.
2. Paveikslėlius galima sukelti tik žinant slaptažodį.
Galutinis variantas turės būti sukeltas į Github. -->
<!-- 
Programavimo testas.
Sukurkite testą iš 10 klausimų apie PHP, HTML, CSS, JS.
Klausimas turi 4 atsakymo variantus, vienas teisngas.
Supildžius testą, gauname rezultatą kiek atsakėmo teisingai.
Jūs sugalvojate klausimus, atsakymo variantus, pasirenkate GET/POST, ar atskiruose puslapiuose scriptas ir testas.