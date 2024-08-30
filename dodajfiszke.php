<?php
require("session.php");
require("db.php");
$pslowo=$_POST["pslowo"];
$aslowo=$_POST["aslowo"];
$poziom=$_POST["poziom"];
$sql="INSERT INTO slowka (SlowkoP, SlowkoA, Kategoria) VALUES ('$pslowo', '$aslowo', '$poziom')";
$conn->query($sql);
header("location: admin.php");
?>