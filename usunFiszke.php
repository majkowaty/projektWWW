<?php
require("session.php");
require("db.php");
$id=$_REQUEST["id"];
$sql="DELETE FROM slowka WHERE id=$id";
$conn->query($sql);
$conn->close();
?>