<?php
/*
Template Name: About
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
        <a class="active" href="/about">ABOUT US</a>
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
            <li class="sub">
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
        <a href="#" id="news">NEWS & UPDATES</a>
        <ul class="sub-news">
          <li>
            <a href="/articles">ARTICLES</a>
          </li>
          <li class="">
            <a href="/career">CAREER OPPORTUNITIES</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="/contact">CONTACT US</a>
      </li>
    </ul>
  </nav>

  <section class="full-height about-banner">
    <div class="container-fluid">
      <div class="row upper-about-banner">
        <div class="col heading">
          <h2>ABOUT GBS</h2>
        </div>
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">

              <?php echo get_theme_mod('about-customization-description'); ?>

<!--            <p>-->
<!--              Established in 2003, GBS (Singapore) Pte Ltd have built a-->
<!--              reputation for our technical expertise and our ability to-->
<!--              develop solution-based products and services to meet our-->
<!--              customers' needs. This is made possible with our in-depth-->
<!--              knowledge of advanced technologies.-->
<!--            </p>-->
<!--            <p>-->
<!--              Over the years, we have grown to become a major supplier for-->
<!--              Semiconductor, Defence industries and its adjacent markets. We-->
<!--              value-add to our customers by developing a range of customised-->
<!--              solutions and applications to meet their needs.-->
<!--            </p>-->
<!--            <p>-->
<!--              With our extensive network of business partners, we can-->
<!--              complement our expertise with their competencies and deliver the-->
<!--              best solutions to our customers.-->
<!--            </p>-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="full-height vision">
    <div class="container">
      <div class="row">
        <div class="col box-vision">
          <div class="thumbnail">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/visison.jpg" alt="vision" />
          </div>
          <div class="heading-vision">
            <h2>Our Vision</h2>
          </div>
          <div class="content-vision">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" alt="icon" />
            <p>
              To be the leading end-to-end solution provider in the
              semiconductor and specialty transport industry.
            </p>
          </div>
        </div>
        <div class="col box-vision">
          <div class="thumbnail">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/vision2.jpg" alt="vision2" />
          </div>
          <div class="heading-vision">
            <h2>Our Mission</h2>
          </div>
          <div class="content-vision">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" alt="icon" />
            <p>
              To create sustainability by leveraging on our network and
              partners’ core competencies to develop the expertise to support
              our customer’s product and services.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="approach">
    <div class="container-fluid">
      <div class="row">
        <div class="col heading-approach">
          <h1>OUR APPROACH</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/our_approch.jpg" alt="approach" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <h3>Established Design & Development Process</h3>
            <p>
              From discovery and rapid prototyping to design verification and
              validation. We aim to substantially reduce time-to-market
              cycles.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="box">
            <h3>Close Collaboration with All Our Customers & Partners</h3>
            <p>
              From problem identification to the deployment of the solutions,
              we gain an in-depth insight to our customers' needs and
              pain-points. It enables us to accurately scope and define the
              specifications for their needed solutions.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <h3>On-site Technical Support & Commissioning</h3>
            <p>
              As part of our customisation and sustainability solutions, we
              oversee the entire process that our solutions from performance
              to equipping of engineers to operate our equipment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="credentials full-height">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2>OUR CREDENTIALS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="image">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/cre-1.jpg" alt="" />
          </div>
          <p>2015 Quality Award (ST Kinetics)</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="image">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/cre-2.jpg" alt="" />
          </div>
          <p>Sales Achievement Award (EKK Semicon Components, Inc)</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="image">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/cre-3.jpg" alt="" />
          </div>
          <p>
            Partnerships for Capability Transformation (PACT) – By Spring
            Singapore & ST Kinetics
          </p>
        </div>
<!--        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">-->
<!--          <div class="image">-->
<!--            <img src="--><?//= get_stylesheet_directory_uri() ?><!--/assets/images/cre-4.jpg" alt="" />-->
<!--          </div>-->
<!--          <p>-->
<!--            1st local refurbishment facility for Heater Pedestal processes-->
<!--            with support from Spring Singapore in 2010-->
<!--          </p>-->
<!--        </div>-->
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Our work is global, spanning over 12 countries.</h2>
        </div>
      </div>
      <div class="d-flex map-row">
        <div class="col-md-1 map-list">
          <ul>
            <li>Singapore</li>
            <li>Malaysia</li>
            <li>China</li>
            <li>Taiwan</li>
            <li>USA</li>
            <li>France</li>
            <li>Japan</li>
            <li>Korea</li>
            <li>Austria</li>
            <li>Germany</li>
            <li>Israel</li>
          </ul>
        </div>
        <div class="col-md-11">
          <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/map.jpg" alt="map" />
        </div>
        <div class="col-md-auto"></div>
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