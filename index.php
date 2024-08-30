<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rybki</title>
    <?php
    require('menu.php');
    ?>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
    <script src="script.js"></script>
</head>
<body>
    Z NAMI NAUCZYSZ SIE ANGIELSKIEGO SZYBCIEJ NIZ NA DUOLINGO!!!!!!!!!!!!<br>
    <button id="rozpocznij">Zaczynamy!</button>
    <p id="wybor" style="display:none">
        Wybierz poziom trudności:
        <a href="learning.php?=A">Początkujący</a>
        <a href="learning.php?=B">Średni</a>
        <a href="learning.php?=C">Zaawansowany</a>
    </p>
    <?php
    require('footer.php');
    ?>
</body>
</html>