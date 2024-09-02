<?php
 require("session.php");
 require("db.php");
?>
<p>
 <div id="navi">
 <a href="index.php">Strona główna</a>
 <a href="myProgress.php">Mój postęp</a>
 <a href="fiszkaSuggest.php">Zaproponuj fiszkę</a>
 <a href="logout.php">Wyloguj</a><br>
 </div>
 <div id="siema">
  <?php
  $rola=$_SESSION['rola'];
  if($rola=='admin'){
    echo "Witaj";
    echo "<div style='color: rgb(210, 30, 48'>i</div>";
    echo "<a href='admin.php'>{$_SESSION['login']}!</a>";
  }
  else{
   echo "Witaj {$_SESSION['login']}!";
  }
  ?>
 </div>
</p>
