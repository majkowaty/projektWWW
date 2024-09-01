<?php
require("session.php");
require("db.php");
$idUzytkownika = $_SESSION['id'];
$s1 = $_POST['pierwsze'];
$s2 = $_POST['poprawne'];
$q = "INSERT INTO zgloszenia (idUzytkownika, slowko1, slowko2) VALUES ('$idUzytkownika', '$s1', '$s2')";
$result = $conn->query($q);
if(!$result){
    echo "blad";
}
?>