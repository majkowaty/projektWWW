<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
 require('db.php');
 session_start();
 if (isset($_POST["login"])) {
 $login = $_POST["login"];
 $haslo = $_POST["haslo"];

 $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='" . md5($haslo) .
"'";
 $result = $conn->query($sql);
 if ($result->num_rows == 1) {
 $_SESSION["login"] = $login;
 $row= $result->fetch_object();
 $_SESSION["id"] = $row->id;
 $_SESSION["rola"] = $row->rola;
 header("Location: index.php");
 } else {
 echo "<div class='form'>
 <h3>Nieprawidłowy login lub hasło.</h3><br>
 <p class='link'>Ponów próbę <a href='login.php'>logowania</a>.</p>
 </div>";
 }
 } else {
?>
 <div class="form">
 <form class="formularz" method="post" name="login">
 <h1 class="login-title">Logowanie</h1>
 <input type="text" class="login-input" name="login" placeholder="Login"
autofocus="true"/><br><br>
 <input type="password" class="login-input" name="haslo" placeholder="Hasło"/><br><br>
 <input type="submit" value="Zaloguj" name="submit" class="login-button"/>
 <p class="link"><a href="registration.php">Zarejestruj się</a></p>
 </form>
 </div>
<?php
 }
?>
</body>
</html>