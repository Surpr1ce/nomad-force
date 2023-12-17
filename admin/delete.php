<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/Database.php";


$db = new Database("localhost", 3306, "root", "", "nomad-force");

if(isset($_GET['article'])) {
    $id = intval($_GET['article']);
    $delete = $db->deleteArticle($id);

    if($delete) {
        header("Location: dashboard.php?status=3");
    } else {
        header("Location: dashboard.php?status=4");
    }
} else {
    header("Location: dashboard.php");
}
