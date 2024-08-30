<?php
 require("session.php");
 require("db.php");
?>
<p>
 <a href="index.php">Strona główna</a>
 <a href="myProgress.php">Mój postęp</a>
 <a href="myReports.php">Moje zgłoszenia</a>
 Witaj <?= $_SESSION["login"] ?>!
 <a href="logout.php">Wyloguj</a>
</p>