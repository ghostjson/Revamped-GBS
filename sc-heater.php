<?php
/*
Template Name: Heater
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

  <!-- Lightbox links  -->
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/lightbox.min.css">

<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
  <style>
    h6 {
      font-weight: bold;
      font-size: 25px;
      margin-left: 0 !important;
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
        <a href="#" class="active" id="solution">SOLUTIONS</a>
        <ul class="sub-menu">
          <li class="active">
            <a id="semi-conductor" class="" href="#">SEMI-CONDUCTOR</a>
          </li>
          <div class="sc-sub">
            <li class="sub">
              <a href="sc-sealing">SEALING SOLUTIONS</a>
            </li>
            <li class="sub active">
              <a href="sc-heater">HEATER PEDESTALS</a>
            </li>
            <li class="sub">
              <a href="sc-optics">OPTICS & COATINGS</a>
            </li>
            <li class="sub">
              <a href="sc-repair">REPAIR & REFURBISHMENT</a>
            </li>
            <li class="sub">
              <a href="sc-asset">ASSET ENHANCEMENT SOLUTIONS</a>
            </li>
          </div>
          <li class="">
            <a id="transport" href="#">VISION SYSTEMS</a>
          </li>
          <div class="ts-sub">
            <li class="sub">
              <a href="ts-urban">URBAN & MUNICIPAL VEHICLES</a>
            </li>
            <li class="sub">
              <a href="ts-log">LOGISTICS</a>
            </li>
            <li class="sub">
              <a href="ts-mil">MILITARY & HOMELAND SECURITY</a>
            </li>
            <li class="sub">
              <a href="ts-adas">ADVANCED DRIVER-ASSISTANCE SYSTEMS (ADAS)</a>
            </li>
          </div>
        </ul>
      </li>
      <li>
        <a href="portfolio">OUR PORTFOLIO</a>
      </li>
      <li>
        <a href="#" id="news">NEWS & UPDATES</a>
        <ul class="sub-news">
          <li>
            <a href="articles">ARTICLES</a>
          </li>
          <li class="">
            <a href="career">CAREER OPPORTUNITIES</a>
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
      <div class="row upper-about-banner" style="
            background: url('<?= get_stylesheet_directory_uri() ?>/assets/images/sc-heater.jpg');
            background-position: bottom;
          ">
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Semiconductor – Heater Pedestals</h3>
            <p>
              GBS has partnered with strategic manufacturers to meet the
              strenuous demands of semiconductor processes. These processes
              often involve corrosive chemicals, plasma and high temperatures.
            </p>
            <p>
              All our solutions are designed to improve the quality and
              performance of the manufacturing process. Apart from high
              durability , we offer customised solutions to cater to the
              diverse needs of our customers.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="expansion">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 bg-expand">
          <div class="content">
            <div class="text">
              <p>
                We supply a portfolio of brand new & refurbished Ceramic Heater Pedestals and Metal Heater Pedestals
                through our global network of Heater Manufacturers.
              </p>
            </div>
            <div class="img-p" style="display: block;">
              <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="heater-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/heater/1.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'heater-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/heater/1.png">
                  <img onclick="changeSlide(event, 'heater-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/heater/2.png">
                  <img onclick="changeSlide(event, 'heater-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/heater/3.png">
                  <img onclick="changeSlide(event, 'heater-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/heater/4.png">
                </div>
              </div>
              
              <div class="content mt-3">
                <h6>Benefits</h6>
                <p style="margin-left: 0 !important;">Our advanced customised solutions offer</p>
                <ul>
                  <li>Better temperature uniformity</li>
                  <li>Improved mean time between failure (MTBF)</li>
                  <li>
                    Priced competitively to reduce the cost of ownership
                    drastically
                  </li>
                </ul>
                <div class="text ml-0" style="margin-top: 50px;">
                  <p>
                    In addition, we provide supplementary in-house repair services to maintain optimal performance
                    of
                    the
                    parts over extended periods.
                  </p>
                </div>
                <div class="content">
                  <ul>
                    <li>Quick turnaround time for repaired parts</li>
                    <li>Extended product life expectancy</li>
                    <li>Guaranteed working functionality for repaired parts</li>
                    <li>Lower production downtime & replacement cost</li>
                  </ul>
                </div>

              </div>

            </div>
          </div>
          <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
            <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
          </a>
        </div>

      </div>
    </div>
    </div>

  </section>

  <section class="common-problems">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h3>Common Problems Faced</h3>
          <ul>
            <li>
              Low product life span resulting in frequent change of parts
            </li>
            <li>Less than optimal throughput yield</li>
            <li>Frequent asset breakdown / unscheduled downtime</li>
            <li>Exposure to corrosive chemicals and extreme conditions</li>
          </ul>

          <p>
            <strong>
              Facing similar problems? Connect with us for a personal
              consultation and how we can meet your needs.</strong>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input name='action' type="hidden" value='contact_form'>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" name="phone" class="form-control" id="contact" aria-describedby="contact"
                           placeholder="Enter Your Contact Number">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" name="company" class="form-control" id="company" aria-describedby="company"
                           placeholder="Enter Your Company">
                </div>
                <div class="form-group">
                    <label for="service">Topic/Service of Interest</label>
                    <select name="service" class="form-control" id="service">
                        <option>Semiconductor Solutions</option>
                        <option>Transport Solutions</option>
                        <option>Other</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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