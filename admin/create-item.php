<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/Database.php";
$db = new Database("localhost", 3306, "root", "", "nomad-force");

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $image_caption = $_POST['image_caption'];
    $color = $_POST['color'];

    $image = ''; // Placeholder for the image file name
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/news/' . $image);
    }

    $paragraphs = [];
    for ($i = 1; $i <= 5; $i++) {
        $paragraphs[] = $_POST['text' . $i];
    }

    $insert = $db->createArticle($title, $category, $date, $image, $image_caption, $color, implode("\n", $paragraphs));

    if($insert) {
        header("Location: dashboard.php?status=1");
    } else {
        header("Location: dashboard.php?status=2");
    }
} else {
    header("Location: dashboard.php");
}
