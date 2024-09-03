<?php
require("session.php");
require("db.php");
$idUzytkownika = $_SESSION['id'];
$nazwa_pliku = basename($_FILES["obrazek"]["name"]);
$obrazek = $nazwa_pliku;
move_uploaded_file($_FILES["obrazek"]["tmp_name"], $obrazek);
$q = "UPDATE uzytkownicy SET zdjecie='$obrazek' WHERE id = '$idUzytkownika'";
$result = $conn->query($q);
if(!$result){
    echo "blad";
}
$conn->close();
header("location: index.php");
?>