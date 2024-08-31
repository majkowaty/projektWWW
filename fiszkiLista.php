<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script src='fiszkiAdmin.js'></script>
    <title>Lista fiszek</title>
</head>
<body>
    <?php
    require("menu.php");
    $sql="SELECT * FROM slowka";
    $result=$conn->query("$sql");
    if($result -> num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Id</th><th>Słówko polskie</th><th>Słówko angielskie</th><th>Kategoria</th><th>Zarządzaj</th></tr>";
    while($row = $result -> fetch_object()){
        echo "<tr><td class='id'>{$row->id}</td><td>{$row->SlowkoP}</td><td>{$row->SlowkoA}</td><td>{$row->Kategoria}</td><td><input type='button' class='delete' value='Usuń'><input type='button' class='edit' value='Edytuj'</td></tr>";
    }
    echo "</table>";
    }
    else {
        echo "Brak fiszek w bazie danych.";
    }
    ?>
    <a href="admin.php">Powrót</a>
</body>
</html>