<?php
include_once "lib/Database.php";
$db = new Database("localhost", 3306, "root", "", "nomad-force");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nomad Force HTML Template - News Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap"
          rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    <!--

    TemplateMo 567 Nomad Force

    https://templatemo.com/tm-567-nomad-force

    -->
</head>

<body>

<main>

    <?php
    $articleId = isset($_GET['article']) ? intval($_GET['article']): null;
    if ($articleId != null) {
        $article = $db->getArticle($articleId);
        if ($article) {
            $paragraphs = $db->getArticleParagraphs($articleId);
        } else {
            header("Location: index.php");
        }
    } else {
        header("Location: index.php");
    }
    ?>
    <section class="hero" id="hero">
        <div class="heroText">
            <h1 class="news-detail-title text-white mt-lg-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <?php echo $article['title'];?>
            </h1>

            <div class="d-flex justify-content-center align-items-center">
                <a href="#" class="text-secondary-white-color social-share-link">
                    <i class="bi-chat-square-fill me-1"></i>
                    128
                </a>

                <a href="#" class="social-share-link bi-bookmark-fill ms-3 me-4"></a>

                <span><?php echo $article['date'];?></span>
            </div>
        </div>

        <div class="videoWrapper">
            <img src="images/news/<?php echo $article['image'];?>" class="img-fluid news-detail-image" alt="">
        </div>

        <div class="overlay"></div>
    </section>

    <?php include_once "parts/header.php";?>

    <section class="news-detail section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-10 mx-auto">
                    <h2 class="mb-3" data-aos="fade-up"><?php echo $article['title'];?></h2>

                    <p class="me-4" data-aos="fade-up"><?php echo $paragraphs[0]['p_text'];?></p>

                    <p data-aos="fade-up"><?php echo $paragraphs[1]['p_text'];?></p>

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src="images/news/<?php echo $article['image'];?>"
                                     class="img-fluid news-image" alt="">

                                <figcaption class="figure-caption text-end"><?php echo $article['image_caption'];?></figcaption>
                            </figure>
                        </div>

                        <p data-aos="fade-up"><?php echo $paragraphs[2]['p_text'];?></p>

                        <p data-aos="fade-up"><?php echo $paragraphs[3]['p_text'];?></p>

                        <p data-aos="fade-up"><?php echo $paragraphs[4]['p_text'];?></p>
                    </div>

                    <div class="social-share d-flex mt-5">
                        <span class="me-4" data-aos="zoom-in">Share this article:</span>

                        <a href="#" class="social-share-icon bi-facebook" data-aos="zoom-in"></a>

                        <a href="#" class="social-share-icon bi-twitter mx-3" data-aos="zoom-in"></a>

                        <a href="#" class="social-share-icon bi-envelope" data-aos="zoom-in"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="related-news section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-10 mx-auto text-center">
                    <span class="d-block" data-aos="zoom-in">Next article</span>

                    <h3 class="news-title" data-aos="fade-up">
                        <a href="news-detail.php" class="news-title-link">Job Opportunities - Digital Marketing</a>
                    </h3>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include_once "parts/footer.php"; ?>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/scrollspy.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
