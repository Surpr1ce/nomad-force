<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/Database.php";
$db = new Database("localhost", 3306, "root", "", "nomad-force");

if(isset($_POST['submit'])) {
    $articleId = $_POST['articleId'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $image_caption = $_POST['image_caption'];
    $color = $_POST['color'];

    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/news/' . $image);
    }

    $paragraphs = $_POST['text'];

    $udpate = $db->updateArticle($articleId, $title, $category, $date, $image, $image_caption, $color, $paragraphs);

    if($udpate) {
        header("Location: dashboard.php?status=5");
    } else {
        header("Location: dashboard.php?status=6");
    }
} else {
    header("Location: dashboard.php");
}


