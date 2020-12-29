<?php
require "connect.php";
$users = $pdo->query("SELECT * FROM users")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-8">
                <h3>Daftar User</h3>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $id; ?></td>
                                <td><?= $user["firstname"]; ?></td>
                                <td><?= $user["lastname"]; ?></td>
                                <td>
                                    <?php require "modal.php"; ?>
                                    <a href="edit.php?user=<?= $user['id']; ?>">Edit</a> |
                                    <a href="#" class="text-danger" data-toggle="modal" data-target="#user<?= $user['id'] ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php $id++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>