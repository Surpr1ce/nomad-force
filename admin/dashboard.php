<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
require_once '../lib/Database.php';

$db = new Database("localhost", 3306, "root", "", "nomad-force");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nomad Force HTML Template - Dashboard Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
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
    <!-- Additional CSS -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body>

<?php include_once "header.php"; ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2>Blog Posts</h2>
            <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 1) {
                    echo "<div id='alert' class='alert alert-success'>Úspešne vložená položka</div>";
                } elseif ($_GET['status'] == 2) {
                    echo "<div id='alert' class='alert alert-danger'>Položka sa nevložila</div>";
                } elseif ($_GET['status'] == 3) {
                    echo "<div id='alert' class='alert alert-success'>Úspešne vymazaná položka</div>";
                } elseif ($_GET['status'] == 4) {
                    echo "<div id='alert' class='alert alert-danger'>Položka sa nezmazala</div>";
                } elseif ($_GET['status'] == 5) {
                    echo "<div id='alert' class='alert alert-success'>Úspešne aktualizovaná položka</div>";
                } elseif ($_GET['status'] == 6) {
                    echo "<div id='alert' class='alert alert-danger'>Položka sa neaktualizovala</div>";
                }
            }
            ?>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $articles = $db->getArticles();
                foreach ($articles as $items) {
                    echo '
                <tr>
                    <td>'.$items['id'].'</td>
                    <td>'.$items['title'].'</td>
                    <td>'.$items['date'].'</td>
                    <td>'.$items['category'].'</td>
                    <td>
                        <a href="update.php?article='.$items['id'].'" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="delete.php?article='.$items['id'].'" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                ';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once "../parts/footer.php"; ?>

<!-- Bootstrap JS and Popper.js (for Bootstrap) -->
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
