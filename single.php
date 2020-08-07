<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GBS</title>

    <!-- Jqeury -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>

    <!-- Boostrap Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css" />

    <!-- Common Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/common.css" />

    <!-- About Page Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/about.css" />

    <style>
        body {
            background-color: white;
            color: black;
        }

        article {
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #527f92;
        }

        .article-heading {
            background: #527f92;
            font-size: 1.2em;
            font-weight: 600;
            text-align: center;
            height: 50px;
            line-height: 50px;
        }

        .page-heading {
            text-align: center;
            padding-top: 30px;
        }

        .social-icons img {
            width: 30px;
        }

        .aritcle-heading {
            font-family: font-times;
            color: #527f92;
            font-size: 2em;
            margin-top: 10px;
        }

        .article-description {
            font-size: 1.5em;
            font-family: "Times New Roman", Times, serif;
        }

        .social-icons a {
            margin: 0 5px;
        }
    </style>
</head>
<body>
<nav class="menu">
    <div class="close-btn">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/times-solid.svg" alt="hide" />
    </div>
    <div class="show-btn">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/bars-solid.svg" alt="show" />
    </div>
    <ul>
        <li>
            <a href="/"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo" /></a>
        </li>
        <li>
            <a href="/about.html">ABOUT US</a>
        </li>
        <li>
            <a href="#" id="solution">SOLUTIONS</a>
            <ul class="sub-menu">
                <li class="">
                    <a id="semi-conductor" href="#">SEMI-CONDUCTOR</a>
                </li>
                <div class="sc-sub">
                    <li class="sub">
                        <a href="sc-sealing.html">SEALING SOLUTIONS</a>
                    </li>
                    <li class="sub">
                        <a href="sc-heater.html">HEATER PEDESTALS</a>
                    </li>
                    <li class="sub">
                        <a href="sc-optics.html">OPTICS & COATINGS</a>
                    </li>
                    <li class="sub">
                        <a href="sc-repair.html">REPAIR & REFURBISHMENT</a>
                    </li>
                    <li class="sub">
                        <a href="sc-asset.html">ASSET ENHANCEMENT SOLUTIONS</a>
                    </li>
                </div>
                <li class="">
                    <a id="transport" href="#">VISION SYSTEMS</a>
                </li>
                <div class="ts-sub">
                    <li class="sub">
                        <a href="ts-urban.html">URBAN & MUNICIPAL VEHICLES</a>
                    </li>
                    <li class="sub">
                        <a href="ts-log.html">LOGISTICS</a>
                    </li>
                    <li class="sub">
                        <a href="ts-mil.html">MILITARY & HOMELAND SECURITY</a>
                    </li>
                    <li class="sub">
                        <a href="ts-adas.html">ADVANCED DRIVER-ASSISTANCE SYSTEMS (ADAS)</a>
                    </li>
                </div>
            </ul>
        </li>
        <li>
            <a href="portfolio.html">OUR PORTFOLIO</a>
        </li>
        <li>
            <a href="#" id="news">NEWS & UPDATES</a>
            <ul class="sub-news">
                <li class="active" >
                    <a href="articles.html">ARTICLES</a>
                </li>
                <li class="">
                    <a href="career.html">CAREER OPPORTUNITIES</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/contact.html">CONTACT US</a>
        </li>
    </ul>
</nav>

<section class="about-banner">
    <div class="container-fluid">
        <div
            class="row upper-about-banner"
            style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/news-banner.jpg');"
        >
            <div class="col heading">
                <h2>NEWS AND UPDATE</h2>
            </div>
        </div>
        <div class="row article-heading">
            <div class="col">
                <p>ARTICLES</p>
            </div>
        </div>
        <?php while(have_posts()): the_post(); ?>
        <div class="row page-heading">
            <div class="col">
                <h2>
                   <?php the_title(); ?>
                </h2>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <a href="#">
                <article class="article-description">
                    <?php if(has_post_thumbnail()): ?>
                    <img
                        width="100%"
                        src="<?php the_post_thumbnail_url(); ?>"
                        alt=""
                        style="margin-bottom: 20px;"
                    />
                    <?php endif; the_content() ?>
                    <div class="social-icons">
                        <a href="#">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/facebook.svg" alt="" />
                        </a>
                        <a href="#">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/twitter.svg" alt="" />
                        </a>
                        <a href="#">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/linkedin.svg" alt="" />
                        </a>
                    </div>
                </article>
            </a>
        </div>
    </div>
</div>

<?php endwhile; ?>


<!-- JS libraries -->
<!-- Jquery -->
<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>

<!-- Common js -->
<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>
</body>
</html>
