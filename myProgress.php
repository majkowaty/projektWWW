<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój Postęp</title>
    <link rel="stylesheet" href="style.css">
    <?php
    require('scripts.php');
    ?>
</head>
<body>
    <?php     require('menu.php'); ?>
    <div id="content">
    <?php
    echo "<p id='progressNick'>{$_SESSION['login']}<br></p>";

    $idUzytkownika = $_SESSION['id'];
    $q="SELECT id FROM slowka WHERE kategoria = 'A'";
    $result = $conn->query($q);
    $SlowkaA = $result->num_rows;
    $q="SELECT id FROM slowka WHERE kategoria = 'B'";
    $result = $conn->query($q);
    $SlowkaB = $result->num_rows;
    $q="SELECT id FROM slowka WHERE kategoria = 'C'";
    $result = $conn->query($q);
    $SlowkaC = $result->num_rows;
    $q="SELECT A, B, C FROM uzytkownicy WHERE id = '$idUzytkownika'";
    $result = $conn->query($q);
    while($row=$result->fetch_object()){
        $progressA = $row->A;
        $progressB = $row->B;
        $progressC = $row->C;
    }
    $wynikA = $progressA/$SlowkaA;
    $wynikB = $progressB/$SlowkaB;
    $wynikC = $progressC/$SlowkaC;
    ?>
    <div id="kontenerNaWyniki">
    <?php
    echo "<p class='myProgressParagraph'>Postęp dla kategorii A:</p><div class='myProgressContainer'><div class='progress' style='width:"; echo round( $wynikA * 100 ), '%'; echo "'></div></div>
          <p class='myProgressParagraph'>Postęp dla kategorii B:</p><div class='myProgressContainer'><div class='progress' style='width:"; echo round( $wynikB * 100 ), '%'; echo "'></div></div>
          <p class='myProgressParagraph'>Postęp dla kategorii C:</p><div class='myProgressContainer'><div class='progress' style='width:"; echo round( $wynikC * 100 ), '%'; echo "'></div></div>";
    ?>
    
</div>
</div>
</body>
</html>