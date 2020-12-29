<?php 
require "connect.php";
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jumlah User : <?= count($users); ?></h1>  // untuk menggunakan fungsi count() fetch harus objek atau array
    <?php if(count($users)): ?>
        <?php foreach($users as $user): ?>
            <p><?= $user->firstname; ?> <?= $user->lastname; ?></p>
        <?php endforeach; ?>
        <?php else: ?>
            Tidak ada user
        <?php endif; ?>
</body>
</html>