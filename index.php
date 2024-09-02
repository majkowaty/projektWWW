<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rybki</title>
    <?php require("scripts.php") ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require('menu.php'); ?>
    <div id="content">
    <h1>Nauka słówek</h1>
    <p>Witamy! Na naszej stronie w prosty sposób będziesz mógł poćwiczyć swoje słownictwo w języku angielskim. Aby zacząć, kliknij guzik i wybierz poziom trudności.<Br><br>W zakładce mój postęp możesz sprawdzić ile fiszek z naszego słownika już zgadłeś! Jeżeli brakuję ci jakichś wyrazów/tłumaczeń, kliknij zakładkę "Zaproponuj fiszkę".<br><br>Powodzenia!</p><br>
    <button id="rozpocznij">Zaczynamy!</button>
    <p id="wybor" style="display:none">
        Wybierz poziom trudności:<br>
        <a id="Beg" href="learning.php?category=A">Początkujący</a><br>
        <a id="Int" href="learning.php?category=B">Średni</a><br>
        <a id="Adv" href="learning.php?category=C">Zaawansowany</a>
    </p>
    </div>
    <?php
    require('footer.php');
    ?>
</body>
</html>