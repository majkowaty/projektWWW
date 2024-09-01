<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauka</title>
    <?php
    require('menu.php');
    require('scripts.php');
    ?>
</head>
<body>
    <?php
    $login = $_SESSION['login'];
    $kategoria = $_GET['category'];
    //if(!isset($_POST['progress'])){
    $progressSql = "SELECT $kategoria FROM uzytkownicy WHERE login = '$login'";
    $result = $conn->query($progressSql);
    $wynik=$result->fetch_object();
    $id = $wynik->$kategoria;
    $q="SELECT SlowkoP, SlowkoA FROM slowka WHERE Kategoria='$kategoria' AND id='$id'";
    $result = $conn->query($q);
    $progress=$id;
    /*while($row=$result->fetch_object()){
        $polskie = $row->SlowkoP;
        $angielskie = $row->SlowkoA;
        echo "<p style='font-size: 50px'>$polskie</p>";
        echo "<input id='odpowiedz' type='text'>";
        echo "<form method='post' action=''><input name='progress' id='formNext' type='hidden' value='$progress'><button id='next' type='submit' style='display: none'>Przejdź do następnej fiszki</button></form>";
        echo "<button id='odp'>Zatwierdź odpowiedź</button> <button id='tlu'>Zobacz tłumaczenie</button>";
        echo "<p id='sprawdz'></p>";
        echo "<p id='poprawne' style='display:none'>$angielskie<p>";
    }}
    else
    {
    $progress=$_POST['progress'];
    $q="SELECT SlowkoP, SlowkoA FROM slowka WHERE Kategoria='$kategoria' AND id='$progress'";
    $result = $conn->query($q);
    */
    while($row=$result->fetch_object()){
        $polskie = $row->SlowkoP;
        $angielskie = $row->SlowkoA;
        echo "<p style='font-size: 50px'>$polskie</p>";
        echo "<input id='odpowiedz' type='text'>";
        echo "<button id='odp'>Zatwierdź odpowiedź</button> <button id='tlu'>Zobacz tłumaczenie</button>";
        echo "<form method='post' action=''><input id='formNext' type='hidden' value='$progress'><input id='kat' type='hidden' value='$kategoria'></input><button id='next' type='submit' style='display: none'>Przejdź do następnej fiszki</button></form>";
        echo "<p id='sprawdz'></p>";
        echo "<p id='poprawne' style='display:none'>$angielskie<p>";
    }//}
    ?>
</body>
</html>