<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Zgłoszeń</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script src='fiszkiAdmin.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require("menu.php"); ?>
    <div id="content">
    <?php
    require("access.php");
    $sql="SELECT * FROM zgloszenia";
    $result=$conn->query("$sql");
    echo "<h2>Zgłoszenia o błędach</h2>";
    if($result -> num_rows > 0) {
        echo "<table class='flista'>";
        echo "<tr><th>Id Zgłoszenia</th><th>Id użytkownika</th><th>Słówko polskie</th><th>Słówko angielskie</th><th>Data</th><th>Akcja</th></tr>";
        while($row = $result -> fetch_object()){
            echo "<tr><td class='id'>{$row->id}</td><td>{$row->idUzytkownika}</td><td>{$row->slowko1}</td><td>{$row->slowko2}</td><td>{$row->data}</td><td><input type='button' class='edit' value='Edytuj'></td></tr>";
        }
        echo "</table>";
        }
        else {
            echo "Brak propozycji.";
        }
    ?>
    <a href="admin.php" class="back">Powrót</a>
    </div>
</body>
</html>