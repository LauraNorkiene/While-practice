<?php

$out = "";


if (isset($_POST['atlyginimas'])) {
    $atlyginimas = $_POST['atlyginimas'];
    $padidinimas = $_POST['padidinimas'];

    $naujasAtlyginimas = $atlyginimas * 2;
    $menesiai = 0;
    $padidintas = $atlyginimas;
    while ($padidintas < $naujasAtlyginimas) {
        $padidintas += $padidinimas;
        $menesiai++;
    }

    $out = "Po $menesiai mėnesių atlyginimas bus daugiau nei dvigubai didesnis.";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirma uzduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <?php
        include("nav.php");

        ?>
    </div>
    <div class="card mx-auto mt-5 border border-dark" style="width: 18rem;">
        <div class="card-body mx-auto">
            <h5 class="card-title">Pirmoji užduotis</h5>
            <form action="" method="post">
                <input class="mt-2" type="text" name="atlyginimas" placeholder="Pradinis atlyginimas"> <br>
                <input class="mt-2" type="text" name="padidinimas" placeholder="Padidinama suma"> <br>


                <button id="button" class="mt-3">Skaičiuoti</button>
            </form>
        </div>
    </div>

    <div class="rezultatas fs-4">
        <?php
        echo $out;
        ?>
    </div>


</body>

</html>