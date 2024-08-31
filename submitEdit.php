<?php
    require("db.php");
    require("session.php");
    $id = $_POST["id"];
    $pslowo = $_POST["pslowo"];
    $aslowo = $_POST["aslowo"];
    $poziom = $_POST["poziom"];

    $sql = "UPDATE slowka SET SlowkoP='$pslowo', SlowkoA='$aslowo', Kategoria='$poziom' WHERE id=$id";
    $conn->query($sql);
    $conn->close();
    header("location: fiszkiLista.php");
?>