<?php
/*
Template Name: Portfolio
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


    <style>
      body {
        background-color: white;
      }
      .sub-heading-port {
        color: #527f92;
        font-weight: 600;
        text-align: left;
        font-size: 1.3em;
        font-family: font-head;
      }

      .about-banner {
        background: white;
      }


      .portfolio {
        background-color: #527f92;
        padding: 50px 0px;
      }

      .image-text {
        display: flex;
        flex-wrap: wrap;
      }

      .image-text p {
        max-width: 800px;
        margin-left: 20px;
      }

      .image-preview{
        position: fixed;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(12, 11, 11, 0.534);
        z-index: 100;

      }

      .image-preview .close-button{
        position:fixed;
        right: 20px;
        top: 10px;
        cursor: pointer;
      }

      .image-preview .close-button img{
        width: 20px;
      }

      @media (max-width: 1000px) {
        .image-text img {
          margin: 0 auto;
        }
      }
    </style>
  </head>
  <body>

    <div class="image-preview">
      <img id="preview" src="<?= get_stylesheet_directory_uri() ?>/assets/images/portfolio-3.jpg" alt="">
      <div class="close-button">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/close.svg" alt="">
      </div>
    </div>


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
          <a href="portfolio" class="active">OUR PORTFOLIO</a>
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

    <section class="about-banner" >
      <div class="container-fluid">
        <div class="row upper-about-banner"  style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/portfolio-banner.jpg');background-position: center;">
          <div class="col heading">
            <h2>OUR PORTFOLIO</h2>
          </div>
        </div>
        <div class="row lower-about-banner">
          <div class="col" style="text-align: center;">
            <div class="container">
              <p class="sub-heading-port">
                Our Partners & Clientele:
              </p>

              <img
                style="width: 100%;"
                class="portfolio-img"
                src="<?= get_stylesheet_directory_uri() ?>/assets/images/portfolio.jpg"
                alt=""
              />

              <p class="sub-heading-port">Our Awards & Certifications:</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio container-fluid">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3>2015 Quality Award (ST Kinetics)</h3>
            <div class="row mt-4">
              <div class="col image-text">
                <img class="zoom-image" src="<?= get_stylesheet_directory_uri() ?>/assets/images/cre-1.jpg" alt="" />
                <p class="mt-4" style="font-size: 1.3em;">
                  GBS was awarded the 2015 Quality Award from Singapore
                  Technologies Kinetics during the Supplier Forum held on the 3
                  September 2015. This is in recognition of the GBS’s commitment
                  towards Quality and we would like to thank ST Kinetics for
                  their guidance in helping us to enhance our work processes. ST
                  Kinetics is a land systems and specialty vehicles arm of
                  Singapore Technologies during this year’s Supplier Forum
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio container-fluid mt-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3>2015 Quality Award (ST Kinetics)</h3>
            <div class="row mt-4">
              <div class="col image-text">
                <img class="zoom-image"
                  src="<?= get_stylesheet_directory_uri() ?>/assets/images/portfolio-2.png"
                  width="300px"
                  alt=""
                />
                <p style="font-size: 1.3em; width: 600px;">
                  Mr Remus Ong, Sales Manager of GBS was honoured to be
                  presented the “Sales Achievement Award” for EKK Semicon
                  Components, Inc at San Jose, California. Presenting the award
                  was Mr Patrick Giorda, President of EKK Semicon, Inc. “This
                  recognition serves as a big motivation to our Sales team “,
                  said Remus Ong
                </p>
                <p style="font-size: 1.3em; margin-left: 0px;">
                  EKKSC is a world leader in sealing products, Elastomer
                  O-rings, Magnetic Vacuum Seals and Welded Edge Bellows for the
                  semiconductor industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio container-fluid mt-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3>
              Partnerships for Capability Transformation (PACT) – By Spring
              Singapore & ST Kinetics
            </h3>
            <div class="row mt-4">
              <div class="col image-text">
                <img class="zoom-image"
                  src="<?= get_stylesheet_directory_uri() ?>/assets/images/portfolio-3.jpg"
                  width="300px"
                  alt=""
                />
                <p style="font-size: 1.3em; width: 600px;">
                  GBS was selected to participate the PACT program organized by
                  ST Kinetics, supported by Singapore Spring. Under the
                  Partnerships for Capability Transformation (PACT) initiative,
                  ST Kinetics will identify and implement collarborative
                  projects with GBS with the aim of transferring know-how in
                  enhancing our work processes such as Value-Stream Mapping, 5s
                  and Kaizen skillsets.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="portfolio container-fluid mt-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3>
              ISO Accredidated Since February 2014
            </h3>
            <div class="row mt-4">
              <div class="col image-text">
                <img class="zoom-image"
                  src="<?= get_stylesheet_directory_uri() ?>/assets/images/portfolio-4.jpg"
                  width="300px"
                  alt=""
                />
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- JS libraries -->
    <!-- Jquery -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>


    <!-- Common js -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>


    <script>
      $('.image-preview').hide()
      $('.zoom-image').click(function(){
        let image_src = $(this).attr('src');
        $('#preview').attr('src', image_src)
        $('.image-preview').show()
      })
      $('.close-button').click(function(){
        $('.image-preview').hide()
      })
    </script>
  </body>
</html>
