<?php
/*
Template Name: Contact
*/

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GBS</title>

    <!-- Material Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <!-- Jqeury -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>

    <!-- Boostrap Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css" />

    <!-- Common Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/common.css" />

    <!-- About Page Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/contact.css" />
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
                <a href="sc-sealing">SEALING SOLUTIONS</a>
              </li>
              <li class="sub">
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
          <a class="active" href="/contact">CONTACT US</a>
        </li>
      </ul>
    </nav>

    <section class="contact-banner">
      <div class="container-fluid">
        <div class="row upper-contact-banner">
          <div class="col heading">
            <h2>CONTACT GBS</h2>
          </div>
        </div>

        <div class="row sub-heading">
          <h3>
            Connect with us today. Let's see how we can serve you with our
            solutions and expertise.
          </h3>
        </div>

        <div class="row">
          <div class="col">
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input name='action' type="hidden" value='contact_form'>
              <div class="form-group">
                <label for="name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  aria-describedby="name"
                  placeholder="Enter Name"
                />
              </div>
              <div class="form-group">
                <label for="contact">Contact Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="contact"
                  name="phone"
                  aria-describedby="contact"
                  placeholder="Enter Your Contact Number"
                />
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  aria-describedby="email"
                  placeholder="Enter email"
                />
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input
                  type="text"
                  class="form-control"
                  id="company"
                  name="company"
                  aria-describedby="company"
                  placeholder="Enter Your Company"
                />
              </div>
              <div class="form-group">
                <label for="service">Topic/Service of Interest</label>
                <select class="form-control" name="service" id="service">
                  <option>Semiconductor Solutions</option>
                  <option>Transport Solutions</option>
                  <option>Other</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col pl-0 pr-0 mt-4 mb-4">
            <iframe
              width="100%"
              height="320px;"
              frameborder="0"
              style="border: 0;"
              src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ8TG5dbUX2jERnovn-4PLAfE&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <footer
      class="page-footer font-small"
      style="background-color: var(--primary-color);"
    >
      <div class="container text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-5 mx-auto" style="font-family: font-normal;">
            <!-- Links -->
            <h5
              class="font-weight-bold text-uppercase mt-3 mb-2"
              style="font-family: font-head;"
            >
              Address
            </h5>

            <p class="mb-0">
              GBS (Singapore) Pte Ltd
            </p>
            <p class="mb-0">
              No.1 Tampines North Drive 1
            </p>
            <p class="mb-0">#06-05 T-Space,</p>
            <p class="mb-0">Singapore 528559</p>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 mx-auto"></div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-2">
              Contact Us
            </h5>

            <p class="mb-0">
              <i
                class="material-icons"
                style="font-size: 1.2em; position: relative; top: 5px;"
                >email</i
              >
              <a href="mailto:cust_service@gbs.com.sg" style="color: white;"
                >cust_service@gbs.com.sg</a
              >
            </p>
            <p>
              <i
                class="material-icons"
                style="font-size: 1.2em; position: relative; top: 5px;"
                >public</i
              >
              <a href="https://www.gbs.com.sg" style="color: white;">
                gbs.com.sg
              </a>
            </p>
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a href="https://www.gbs.com.sg" style="color: white;"
          >GBS (Singapore) Pte Ltd</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Common js -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>
  </body>
</html>
