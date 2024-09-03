<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Panel Administratora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require("menu.php");
    require("access.php");
    ?>
    <div id="content">
   <h1>Panel Administratora</h1>
   <div id="adminWybor">
    <a href="fiszkilista.php">Zarządzaj fiszkami</a>
    <a href="suggestionPanel.php">Propozycje użytkowników</a>
    <a href="reportPanel.php">Panel zgłoszeń</a>
    </div>
    <form action="dodajfiszke.php" method="POST" class="formularz">
    <p style="font-size:25px">Dodaj fiszke:</p>
        <input type="text" name="pslowo" placeholder="Słówko polskie">
        <input type="text" name="aslowo" placeholder="Słówko angielskie">
        <select name="poziom" >
            <option value="A">Początkujący</option>
            <option value="B">Średni</option>
            <option value="C">Zaawansowany</option>
        </select>
        <input type="submit" value="Dodaj fiszkę">
    </form>
    </div>
</body>
</html>