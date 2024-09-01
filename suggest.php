<?php
require("session.php");
require("db.php");
$pslowo=$_POST["pslowo"];
$aslowo=$_POST["aslowo"];
$kategoria=$_POST["poziom"];
$uzytkownik=$_SESSION["id"];
$sql="INSERT INTO propozycje (SlowkoP, SlowkoA, Kategoria, idUzytkownika) VALUES ('$pslowo', '$aslowo', '$kategoria', '$uzytkownik')";
$conn->query($sql);
header("location: index.php");