<?php 
require "connect.php";

if ( $_GET["user"] ) {
    $id = $_GET["user"];
    $sql = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $sql->execute( [$id] );

    header("location: index.php");
}