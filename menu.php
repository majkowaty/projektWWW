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
  $idUzytkownika = $_SESSION['id'];
  $q = "SELECT zdjecie FROM uzytkownicy WHERE id='$idUzytkownika'";
  $result = $conn->query($q);
  $row = $result->fetch_object();
  $zdjecie = $row->zdjecie;
  if($rola=='admin'){
    echo "<a id='pfp' href='changePfp.php'><img src='$zdjecie' alt='zdjecie profilowe'></a> Witaj";
    echo "<div style='color: rgb(210, 30, 48'>i</div>";
    echo "<a href='admin.php'>{$_SESSION['login']}!</a>";
  }
  else{
   echo "<a id='pfp' href='changePfp.php'><img src='$zdjecie' alt='zdjecie profilowe'></a> Witaj {$_SESSION['login']}!";
  }
  ?>
 </div>
</p>
