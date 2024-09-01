<?php
require("session.php");
require("db.php");
$id=$_POST['id'];
$sql="DELETE FROM propozycje WHERE id=$id";
$conn->query("$sql");
$conn->close();