<?php
/*
Template Name: Career
*/
?>

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

  <!-- About Page Stylesheet -->
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/solutions.css" />

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

    .salary {
      font-size: 1em !important;
      font-weight: 600;
    }

    .description {
      font-size: 1em !important;
    }

    .apply {
      background: #527f92;
      padding: 5px 20px;
      border-radius: 20px;
      font-family: font-normal-bold;
      font-size: 0.7em;
      margin-left: 20px;
      color: white !important;
    }

    .apply:hover {
      color: white;
    }

    .bg-expand {
      background: white;
    }

    .expands {
      color: #527f92 !important;
    }

    .expansion .expand img.expanded {
      filter: invert(47%) sepia(17%) saturate(884%) hue-rotate(153deg) brightness(95%) contrast(88%);
    }

    .text img {
      height: 300px !important;
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
        <a href="/about">ABOUT US</a>
      </li>
      <li>
        <a href="#" id="solution">SOLUTIONS</a>
        <ul class="sub-menu">
          <li class="">
            <a id="semi-conductor" href="#">SEMI-CONDUCTOR</a>
          </li>
          <div class="sc-sub">
            <li class="sub">
              <a href="/sc-sealing">SEALING SOLUTIONS</a>
            </li>
            <li class="sub">
              <a href="/sc-heater">HEATER PEDESTALS</a>
            </li>
            <li class="sub">
              <a href="/sc-optics">OPTICS & COATINGS</a>
            </li>
            <li class="sub">
              <a href="/sc-repair">REPAIR & REFURBISHMENT</a>
            </li>
            <li class="sub active">
              <a href="/sc-asset">ASSET ENHANCEMENT SOLUTIONS</a>
            </li>
          </div>
          <li class="">
            <a id="transport" href="#">VISION SYSTEMS</a>
          </li>
          <div class="ts-sub">
            <li class="sub">
              <a href="/ts-urban">URBAN & MUNICIPAL VEHICLES</a>
            </li>
            <li class="sub">
              <a href="/ts-log">LOGISTICS</a>
            </li>
            <li class="sub">
              <a href="/ts-mil">MILITARY & HOMELAND SECURITY</a>
            </li>
            <li class="sub">
              <a href="/ts-adas">ADVANCED DRIVER-ASSISTANCE SYSTEMS (ADAS)</a>
            </li>
          </div>
        </ul>
      </li>
      <li>
        <a href="/portfolio">OUR PORTFOLIO</a>
      </li>
      <li>
        <a href="#" id="news" class="active" >NEWS & UPDATES</a>
        <ul class="sub-news">
          <li>
            <a href="/articles">ARTICLES</a>
          </li>
          <li class="active">
            <a href="/career">CAREER OPPORTUNITIES</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="/contact">CONTACT US</a>
      </li>
    </ul>
  </nav>

  <section class="about-banner">
    <div class="container-fluid">
      <div class="row upper-about-banner" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/career-banner.jpg');">
        <div class="col heading">
          <h2>NEWS AND UPDATE</h2>
        </div>
      </div>
      <div class="row article-heading">
        <div class="col">
          <span style="margin: 0px; color: white; font-size: 1.5rem;">CAREER OPPORTUNITIES</span>
        </div>
      </div>
      <div class="row page-heading">
        <div class="col">
          <h2>Discover Your Next Career With Us</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="expansion">
    <div class="container-fluid">
      <div class="row">

          <?php

          $blog = new WP_Query(['post_type' => 'career']);

          while($blog->have_posts()):

          $blog->the_post();
          ?>

              <div class="col-12">
                  <h5 class="expand">
                      <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px" /> <?php the_title() ?>
                  </h5>
                  <div class="exp-content">
                      <div class="text">
                          <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" style="margin-bottom: 20px" alt="">
                          <?php endif; the_content(); ?>

                          <!--                          <p class="salary">$17 - $19/hour</p>-->
<!--                          <p class="description">-->
<!--                              Delight customers by making every interaction an unforgettable-->
<!--                              experience, whether it's through inbound calls, emails and/or-->
<!--                              chats.-->
<!--                          </p>-->
<!--                          <a class="apply" href="#">Apply Now</a>-->
                      </div>
                  </div>
              </div>

          <?php endwhile; ?>


<!--        <div class="col-12">-->
<!--          <h5 class="expand">-->
<!--            <img src="--><?//= get_stylesheet_directory_uri() ?><!--/assets/images/triangle.png" width="30px" /> Customer-->
<!--            Service Representative-->
<!--          </h5>-->
<!--          <div class="exp-content">-->
<!--            <div class="text">-->
<!--              <img src="--><?//= get_stylesheet_directory_uri() ?><!--/assets/images/office.jpg" alt="">-->
<!--              <p class="salary">$17 - $19/hour</p>-->
<!--              <p class="description">-->
<!--                Delight customers by making every interaction an unforgettable-->
<!--                experience, whether it's through inbound calls, emails and/or-->
<!--                chats.-->
<!--              </p>-->
<!--              <a class="apply" href="#">Apply Now</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-12">-->
<!--          <h5 class="expand">-->
<!--            <img src="--><?//= get_stylesheet_directory_uri() ?><!--/assets/images/triangle.png" width="30px" /> Call-->
<!--            Center Representative-->
<!--          </h5>-->
<!--          <div class="exp-content">-->
<!--            <div class="text">-->
<!--              <img src="--><?//= get_stylesheet_directory_uri() ?><!--/assets/images/office.jpg" alt="">-->
<!--              <p class="salary">$8 - $10/hour</p>-->
<!---->
<!--              <p class="description">-->
<!--                We are looking to fill positions in our virtual call centers.-->
<!--                Whether you thrive in a sales environment, are looking to help-->
<!--                others or are brand new to the call center industry, we have a-->
<!--                place for you!-->
<!--              </p>-->
<!--              <p class="salary">-->
<!--                We offer:-->
<!--              </p>-->
<!--              <ul>-->
<!--                <li>Weekly Pay</li>-->
<!--                <li>Weekly BONUS</li>-->
<!--                <li>Medical benefits for full-time employees!</li>-->
<!--                <li>Interactive daily communication with your team!</li>-->
<!--              </ul>-->
<!---->
<!--              <p class="salary">-->
<!--                MINIMUM REQUIREMENTS:-->
<!--              </p>-->
<!--              <ul>-->
<!--                <li>High-Speed – 15 Mbs or higher ISP Subscription</li>-->
<!--                <li>ISP must be highly stable with no packet loss</li>-->
<!--                <li>-->
<!--                  f others in home are using internet, minimums will need to-->
<!--                  be higher-->
<!--                </li>-->
<!--                <li>-->
<!--                  WiFi may be used but many users will need a Wired connection-->
<!--                  to router based off their home usage and speeds-->
<!--                </li>-->
<!--                <li>Web Cam & Speaker</li>-->
<!--                <li>USB Headset</li>-->
<!--                <li>-->
<!--                  A willingness to learn and a home office or quiet work space-->
<!--                </li>-->
<!--                <li>-->
<!--                  Customer Service/Sales skills helpful, but not necessary!-->
<!--                </li>-->
<!--              </ul>-->
<!---->
<!--              <a class="apply" href="#">Apply Now</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
      </div>
    </div>
  </section>

  <!-- JS libraries -->
  <!-- Jquery -->
  <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>

  <!-- Common js -->
  <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>
</body>

</html>