<?php

if (isset($_POST['upload'])) {
    move_uploaded_file(
        $_FILES['filename']['tmp_name'],
        'C:/xampp/htdocs/WhileND/' . $_FILES['filename']['name']
    );



    $failas = 'C:/xampp/htdocs/WhileND/' . $_FILES['filename']['name'];
    $f = fopen($failas, "r");

    if ($f) {
        $array = explode("\n", fread($f, filesize($failas)));
        $maximum = "Didžiausia oro temperatūra " . (max($array)) . " °C";
        $minimum = "Mažiausia oro temperatūra " . (min($array)) . " °C";
        $array = array_filter($array);
        $average = "Vidutinė oro temperatūra " . (int) (array_sum($array) / count($array)) . " °C";
    }

    fclose($f);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 uzduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <?php
        include("nav.php");

        ?> </div>

    <div class="card mx-auto mt-5 border border-dark" style="width: 25rem;">
        <div class="card-body mx-auto">
            <form action="" method="post">
                <input type="hidden" name="upload" value="1">
                <label class="form-label" for="customFile">Įkelti failą:</label>
                <input type="file" class="form-control" id="customFile" name="failas" />
                <button>Išsiųsti</button>
            </form>
        </div>
    </div>

    <div class="rezultatas fs-4">
        <?php



        ?>
    </div>

</body>

</html>