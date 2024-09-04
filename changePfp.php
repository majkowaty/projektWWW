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
    <h2>Prześlij swoje zdjęcie profilowe</h2>
    <form action="updatePfp.php" method="post" enctype="multipart/form-data" id="pfpmenu">
        <p>
        Obrazek: <input type="file" name="obrazek">
        </p>
        <input type="submit" value="Zmień zdjęcie">
    </form>
</div>
    <?php
    require('footer.php');
    ?>
</body>
</html>