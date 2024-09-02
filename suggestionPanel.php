<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugestie fiszek</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
    <script src='fiszkiAdmin.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require("menu.php");
    ?>
    <div id="content">
    <?php
    require("access.php");
    $sql="SELECT * FROM propozycje";
    $result=$conn->query("$sql");
    if($result -> num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Id Zgłoszenia</th><th>Słówko polskie</th><th>Słówko angielskie</th><th>Kategoria</th><th>Id Użytkownika</th><th></th></tr>";
        while($row = $result -> fetch_object()){
            echo "<tr><td class='id'>{$row->id}</td><td>{$row->SlowkoP}</td><td>{$row->SlowkoA}</td><td>{$row->Kategoria}</td><td>{$row->idUzytkownika}</td><td><input type='button' class='accept' value='Zatwierdź'><input type='button' class='deny' value='Odrzuć'</td></tr>";
        }
        echo "</table>";
        }
        else {
            echo "Brak propozycji.";
        }
    ?>
    </div>
</body>
</html>