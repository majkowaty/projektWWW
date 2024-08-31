<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja fiszki</title>
</head>
<body>
    <?php require("menu.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM slowka WHERE id=$id";
    $result=$conn->query($sql);
    $row=$result->fetch_object(); ?>

    <form action="submitEdit.php" method="POST">
        <input type="hidden" name="id" value="<?=$row->id ?>">
        <input type="text" name="pslowo" value="<?=$row->SlowkoP?>" placeholder="Słówko polskie">
        <input type="text" name="aslowo" value="<?=$row->SlowkoA?>" placeholder="Słówko angielskie">
        <select name="poziom">
            <option value="A" <?php if($row->Kategoria=="A") echo "selected"; ?>>Początkujący</option>
            <option value="B" <?php if($row->Kategoria=="B") echo "selected"; ?>>Średni</option>
            <option value="C" <?php if($row->Kategoria=="C") echo "selected"; ?>>Zaawansowany</option>
        </select>
        <input type="submit" value="Zapisz zmiany">
    </form>
    <a href="fiszkiLista.php">Powrót</a>
</body>
</html>