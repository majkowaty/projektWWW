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
    <p>Zaproponuj własną fiszkę!<br/>Zostanie ona dodana po zatwierdzeniu przez administratora.</p>
    <form action="suggest.php" method="POST">
        <input type="text" name="pslowo" placeholder="Słówko polskie">
        <input type="text" name="aslowo" placeholder="Słówko angielskie">
        <select name="poziom" >
            <option value="A">Początkujący</option>
            <option value="B">Średni</option>
            <option value="C">Zaawansowany</option>
        </select>
        <input type="submit" value="Zaproponuj fiszkę">
    </form>
    <a href="index.php">Anuluj</a>
</div>
</body>
</html>