<?php
require "connect.php";
    if (!empty($_POST)) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];

        $stm = $pdo->prepare("INSERT INTO users (firstname, lastname) VALUES(?, ?)");
        $stm->execute([$firstname,$lastname]);

        header("location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Tambah User</h3>
                <form action="" method="POST" class="mt-4">
                    <div class="form-group">
                        <label for='firstname'>Nama Depan :</label>
                        <input type='text' class="form-control" id='firstname' name='firstname'>
                    </div>
                    <div class=" form-group">
                        <label for='lastname'>Nama Belakang :</label>
                        <input type='text' class="form-control" id='lastname' name='lastname'>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>