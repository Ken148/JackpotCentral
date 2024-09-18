<?php
$host = "localhost";
$user = "keneu85_ken";
$pass = "Turkken70";
$database = "keneu85_euro jackpot";
$link = mysqli_connect($host, $user, $pass, $database) or die("Baza ni dostopna.");
mysqli_set_charset($link, "utf8");
?>