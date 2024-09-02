<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauka</title>
    <?php
    require('scripts.php');
    ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require('menu.php');
    $login = $_SESSION['login'];
    $kategoria = $_GET['category'];
    $progressSql = "SELECT $kategoria FROM uzytkownicy WHERE login = '$login'";
    $result = $conn->query($progressSql);
    $wynik=$result->fetch_object();
    $id = $wynik->$kategoria;
    $q="SELECT SlowkoP, SlowkoA FROM slowka WHERE Kategoria='$kategoria' LIMIT $id";
    $result = $conn->query($q);
    $progress=$id;
    $licznik=0;
    $licznik=0;
    $conn->query($q);
    ?>
    <div id="content">
    <?php
    while($row=$result->fetch_object()){
        $polskie = $row->SlowkoP;
        $angielskie = $row->SlowkoA;
        $licznik++;
        $licznik++;
        }
        if($licznik>=$progress){
        if($licznik>=$progress){
        echo "<p id='pierwsze' style='font-size: 50px'>$polskie</p>";
        echo "<input id='odpowiedz' type='text'>";
        echo "<button id='odp'>Zatwierdź odpowiedź</button> <button id='tlu'>Zobacz tłumaczenie</button>";
        echo "<form method='post' action=''><input id='formNext' type='hidden' value='$progress'><input id='kat' type='hidden' value='$kategoria'></input><button id='next' type='submit' style='display: none'>Przejdź do następnej fiszki</button></form>";
        echo "<button style='display:none' id='zglos'>Zgłoś tą fiszke jako błędną</button>";
        echo "<p id='sprawdz'></p>";
        echo "<p id='poprawne' style='display:none'>$angielskie<p>";
        }
        else{
            echo "Rozwiązałeś już wszystkie fiszki z tej kategorii!";
        }
        }
        else{
            echo "Rozwiązałeś już wszystkie fiszki z tej kategorii!";
        }
    ?>
    </div>
</body>
</html>