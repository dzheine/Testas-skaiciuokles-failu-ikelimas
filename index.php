<?php
include 'layout/header.php';
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Please Upload 4 Images to Gallery</div>
                <div class="card-body">
                    <form action="http://localhost/galerija/scripts/gallery.php" method="POST" enctype="multipart/form-data">
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle1" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image2">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle2" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image3">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle3" placeholder="Image Title">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <input type="file" class="form-control-file" name="image4">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="imageTitle4" placeholder="Image Title">
                            </div>
                        </div>
                        <p>Please select background color:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color" id="danger" value="danger">
                            <label class="form-check-label" for="danger">
                                Red
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color" id="light" value="light" checked>
                            <label class="form-check-label" for="light">
                                White
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color" id="info" value="info">
                            <label class="form-check-label" for="info">
                                Blue
                            </label>
                        </div>
                        <button class="btn btn-success" type="submit" name="submit" value="submit">Upload</button>
                    </form>
                    <p class="card-text">Accepted image types: jpg.</p>
                </div>
            </div>
        </div>
    </div>
</div>

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