<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/Database.php";
$db = new Database("localhost", 3306, "root", "", "nomad-force");

$articleId = isset($_GET['article']) ? intval($_GET['article']) : null;
if ($articleId != null) {
    $article = $db->getArticle($articleId);
    if ($article) {
        $paragraphs = $db->getArticleParagraphs($articleId);

    } else {
        header("Location: dashboard.php");
    }
} else {
    header("Location: dashboard.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nomad Force HTML Template - Update Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap"
          rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link href="../css/aos.css" rel="stylesheet">

    <link href="../css/templatemo-nomad-force.css" rel="stylesheet">
    <!--

    TemplateMo 567 Nomad Force

    https://templatemo.com/tm-567-nomad-force

    -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<?php include_once "header.php"; ?>

<div class="container mt-4">
    <div class="row mb-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2>Update Article</h2>
                    <form method="post" action="update-item.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $article['title'];?>" required>
                            <input type="text" id="articleId" name="articleId" value="<?php echo $articleId;?>" hidden>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="<?php echo $article['category'];?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="text" class="form-control" id="date" name="date" value="<?php echo $article['date'];?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image Upload</label>
                            <input type="file" class="form-control" id="image" name="image" value="<?php echo $article['image'];?>" required accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="image_caption" class="form-label">Image Caption</label>
                            <input type="text" class="form-control" id="image_caption" name="image_caption" value="<?php echo $article['image_caption'];?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" value="<?php echo $article['color'];?>" required>
                        </div>
                        <?php
                        foreach ($paragraphs as $paragraph) {
                            echo ' 
                            <div class="mb-3">
                            <label for="text" class="form-label">Text #' . $paragraph['p_id'] . '</label>
                            <textarea class="form-control" id="text[]" name="text" rows="4" required>' . $paragraph['p_text'] . '</textarea>
                        </div>
                            ';
                        }
                        ?>

                        <button type="submit" name="submit" class="btn btn-primary">Update Article Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "../parts/footer.php"; ?>

<!-- JAVASCRIPT FILES -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<script src="../js/scrollspy.min.js"></script>
<script src="../js/custom.js"></script>

</body>
</html>