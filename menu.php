<?php
 require("session.php");
 require("db.php");
?>
<p>
 <a href="index.php">Strona główna</a>
 <a href="myProgress.php">Ulubione</a>
 <a href="myReports.php">Moje recenzje</a>
 Witaj <?= $_SESSION["login"] ?>!
 <a href="logout.php">Wyloguj</a>
</p>