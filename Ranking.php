<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Fiszek</title>
    <link rel="stylesheet" href="style.css">
    <?php
    require('scripts.php');
    ?>
</head>
<body>
    <?php
    require('menu.php');
    $q="SELECT login FROM uzytkownicy ORDER BY A LIMIT 3";
    $result = $conn->query($q);
    echo "<div class='rankingContainer'><p class='rankingParagraph'>Ranking kategorii A:</p>";
    while($row=$result->fetch_object()){
        $nick = $row->login;
        echo $nick;
        echo "<br>";
    }
    echo "</div>";
    $q="SELECT login FROM uzytkownicy ORDER BY B LIMIT 3";
    $result = $conn->query($q);
    echo "<div class='rankingContainer'><p class='rankingParagraph'>Ranking kategorii B:</p>";
    while($row=$result->fetch_object()){
        $nick = $row->login;
        echo $nick;
        echo "<br>";
    }
    echo "</div>";
    $q="SELECT login FROM uzytkownicy ORDER BY C LIMIT 3";
    $result = $conn->query($q);
    echo "<div class='rankingContainer'><p class='rankingParagraph'>Ranking kategorii C:</p>";
    while($row=$result->fetch_object()){
        $nick = $row->login;
        echo $nick;
        echo "<br>";
    }
    echo "</div>";
    ?>
</body>
</html>