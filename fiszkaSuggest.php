<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaproponuj fiszkę</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require('menu.php'); ?>
<div id="content">
    <h2>Zaproponuj własną fiszkę!</h2><p style="text-align:center">Zostanie ona dodana po zatwierdzeniu przez administratora.</p>
    <form action="suggest.php" method="POST" class="formularz">
        <input type="text" name="pslowo" placeholder="Słówko polskie">
        <input type="text" name="aslowo" placeholder="Słówko angielskie">
        <select name="poziom" >
            <option value="A">Początkujący</option>
            <option value="B">Średni</option>
            <option value="C">Zaawansowany</option>
        </select>
        <input type="submit" value="Zaproponuj fiszkę">
    </form>
    <a href="index.php" class="back">Anuluj</a>
</div>
</body>
</html>