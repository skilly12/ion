<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["login"]);
header("Location:Opdr4.php")
?>