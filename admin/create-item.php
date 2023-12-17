<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "lib/Database.php";
$db = new Database("localhost", 3306, "root", "", "nomad-force");
?>
//sql