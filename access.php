<?php
$rola=$_SESSION["rola"];
if($rola!='admin'){
    header("location: index.php");
}