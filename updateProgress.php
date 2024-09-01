<?php
require("session.php");
require("db.php");
$idUzytkownika = $_SESSION['id'];
$progress = $_POST['progress'];
$kategoria = $_POST['kategoria'];
$q = "UPDATE uzytkownicy SET $kategoria='$progress' WHERE id = '$idUzytkownika'";
$result = $conn->query($q);
if(!$result){
    echo "blad";
}
?>