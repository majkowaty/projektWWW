<?php
require("session.php");
require("db.php");
$id=$_POST['id'];
$sql="SELECT SlowkoP, SlowkoA, Kategoria FROM propozycje WHERE id=$id";
$result=$conn->query("$sql");
$fiszka=$result->fetch_object();
$pol=$fiszka->SlowkoP;
$ang=$fiszka->SlowkoA;
$kat=$fiszka->Kategoria;
$sql="INSERT INTO slowka (SlowkoP, SlowkoA, Kategoria) VALUES ('$pol', '$ang', '$kat')";
$conn->query("$sql");
$sql="DELETE FROM propozycje WHERE id=$id";
$conn->query("$sql");
$conn->close();