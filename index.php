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

    <title>Nomad Force HTML Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
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

    <section class="hero" id="hero">
        <div class="heroText">
            <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                Nomad Force
            </h1>

            <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                create a great video for your <strong class="custom-underline">website</strong>
            </p>
        </div>

        <div class="videoWrapper">
            <video autoplay="" loop="" muted="" class="custom-video"
                   poster="videos/792bd98f3e617786c850493560e11c45.jpg">
                <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>

        <div class="overlay"></div>
    </section>

    <?php include_once "parts/header.php"; ?>

    <section class="section-padding pb-0" id="about">
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" data-aos="fade-up">Let us create...</h2>
                </div>

                <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">You may contribute <a rel="nofollow"
                                                                                                  href="http://paypal.me/templatemo"
                                                                                                  target="_blank">a
                            small amount</a> via PayPal if <a rel="nofollow"
                                                              href="https://templatemo.com/tm-567-nomad-force"
                                                              target="_parent">Nomad Force Template</a> is useful for
                        you. This will absolutely help us to keep creating better CSS templates for you. <br><br>We
                        provide you 100% free templates on TemplateMo website. Images are provided by FreePik and
                        Unsplash websites.</p>
                </div>

                <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                    <p data-aos="fade-up" data-aos-delay="500">This Bootstrap 5 layout is free to use for your business.
                        You are allowed to edit it in any way you like. However, please do not redistribute this
                        template ZIP file for a template download purpose on any other website such as Free CSS
                        collections.</p>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-12 p-0">
                    <img src="images/elena-rabkina-eVVzwsNhNf4-unsplash.jpg" class="img-fluid about-image" alt="">
                </div>

                <div class="col-lg-3 col-12 bg-dark">
                    <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                        <h3 class="text-white mb-3" data-aos="fade-up">We’re - idealists and strategic thinkers.</h3>

                        <p class="text-secondary-white-color" data-aos="fade-up">Over six years in the video
                            business</p>

                        <div class="mt-3 custom-links">

                            <a href="#news" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="100">Read
                                News & Events</a>

                            <a href="#contact" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="300">Work
                                with Us</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12 p-0">
                    <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $isFirst = true;
                            $studio = $db->getStudioItems();
                            foreach ($studio as $item) {
                                $active = $isFirst ? "active" : "";
                                echo '
                                    <div class="carousel-item ' . $active . '">
                                        <img src="images/people/' . $item['image'] . '" class="img-fluid team-image" alt="">
                                        
                                        <div class="team-thumb ' . $item['position_bg'] . '">
                                            <h3 class="text-white mb-0">' . $item['name'] . '</h3>
                                            
                                            <p class="text-secondary-white-color mb-0">' . $item['position'] . '</p>
                                        </div>
                                    </div>';
                                $isFirst = false;
                            }
                            ?>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Next</span>
                        </button>
                    </section>

                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">Portfolio</h2>
                </div>

                <?php
                $isFirst = true;
                $portfolio = $db->getPortfolioItems();
                foreach ($portfolio as $item) {
                    if ($isFirst) {
                        echo '
                                <div class="col-lg-6 col-12">
                            <div class="portfolio-thumb mb-5" data-aos="fade-up">
                                <a href="images/portfolio/' . $item['image'] . '" class="image-popup">
                                    <img src="images/portfolio/' . $item['image'] . '" class="img-fluid portfolio-image" alt="">
                                </a>

                                <div class="portfolio-info">                     
                                    <h4 class="portfolio-title mb-0">' . $item['title'] . '</h4>

                                    <p class="' . $item['text_bg'] . '">' . $item['text'] . '</p>
                                </div>
                            </div>
                                ';
                        $isFirst = false;
                        continue;
                    }
                    echo '
                            <div class="portfolio-thumb" data-aos="fade-up">
                                <a href="images/portfolio/' . $item['image'] . '" class="image-popup">
                                    <img src="images/portfolio/' . $item['image'] . '" class="img-fluid portfolio-image" alt="">
                                </a>

                                <div class="portfolio-info">                     
                                    <h4 class="portfolio-title mb-0">' . $item['title'] . '</h4>

                                    <p class="' . $item['text_bg'] . '">' . $item['text'] . '</p>
                                </div>
                            </div> 
                        </div>
                            ';
                    $isFirst = true;
                }
                ?>

            </div>
        </div>
    </section>

    <section class="news section-padding" id="news">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
                </div>
                <?php
                $latestArticles = $db->getLatThreeArticles();
                echo '
                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="news-thumb" data-aos="fade-up">
                                <a href="news-detail.php?article=' . $latestArticles[0]['id'] . '" class="news-image-hover news-image-hover-' . $latestArticles[0]['color'] . '">
                                    <img src="images/news/' . $latestArticles[0]['image'] . '" class="img-fluid large-news-image news-image" alt="">
                                </a>

                                <div class="news-category ' . $latestArticles[0]['color'] . ' text-white">' . $latestArticles[0]['category'] . '</div>
                                
                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="news-detail.php?article=' . $latestArticles[0]['id'] . '" class="news-title-link">' . $latestArticles[0]['title'] . '</a>
                                    </h5>

                                    <span class="text-muted">' . $latestArticles[0]['date'] . '</span>
                                </div>
                            </div> 
                        </div>
                        ';

                echo '<div class="col-lg-6 col-12">';
                for ($i = 1; $i <= 2; $i++) {
                    echo '
                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100">
                                    
                                    <a href="news-detail.php?article=' . $latestArticles[$i]['id'] . '" class="news-image-hover news-image-hover-' . $latestArticles[$i]['color'] . '">
                                        <img src="images/news/' . $latestArticles[$i]['image'] . '" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category ' . $latestArticles[$i]['color'] . ' text-white">' . $latestArticles[$i]['category'] . '</div>
                                </div>
                                
                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="news-detail.php?article=' . $latestArticles[$i]['id'] . '" class="news-title-link">' . $latestArticles[$i]['title'] . '</a>
                                        </h5>

                                        <div class="d-flex flex-wrap">
                                            <span class="text-muted me-2">
                                                <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                                Alaska,
                                            </span>

                                            <span class="text-muted">' . $latestArticles[$i]['date'] . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                }
                echo '</div>';
                ?>
            </div>
    </section>

    <section class=" contact section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12 mx-auto">

                    <h2 class="mb-4 text-center" data-aos="fade-up">Dont' be shy, write to us</h2>

                    <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">

                        <div class="row">

                            <div class="col-lg-6 col-6">
                                <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                <input type="text" name="name" id="name" class="form-control" placeholder="Full name"
                                       required>
                            </div>

                            <div class="col-lg-6 col-6">
                                <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                       placeholder="Email address" required>
                            </div>

                            <div class="col-12 my-4">
                                <label for="message" class="form-label">How can we help?</label>

                                <textarea name="message" rows="6" class="form-control" id="message"
                                          placeholder="Tell us about the project" required></textarea>

                            </div>

                            <div class="col-12">
                                <label for="services" class="form-label">Services<sup
                                            class="text-danger">*</sup></label>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input">

                                    <label class="form-check-label" for="checkbox1">Branding</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 my-2 my-lg-0">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" class="form-check-input">

                                    <label class="form-check-label" for="checkbox2">Digital Experiences</label>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" class="form-check-input">

                                    <label class="form-check-label" for="checkbox3">Web Development</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-5">
                            <button type="submit" class="form-control">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="google-map">
        <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
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