<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GBS</title>

    <!-- Boostrap Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css" />

    <!-- Common Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/common.css" />

    <!-- About Page Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/index.css" />
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
          <a href="/contact">CONTACT US</a>
        </li>
      </ul>
    </nav>

    <div id="main-banner-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#main-banner-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#main-banner-carousel" data-slide-to="1"></li>
      <li data-target="#main-banner-carousel" data-slide-to="2"></li>
      <li data-target="#main-banner-carousel" data-slide-to="3"></li>
      <li data-target="#main-banner-carousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/banner-5.jpg');">
        <div class="text-container ban-pag-1">

            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/desktop/CuttingEdge.text.png"alt="">

        </div>
        
      </div>
      <div class="carousel-item" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/banner-4dark.jpg');">
        <div class="text-container ban-pag-2">
          <picture>
              <source media="(max-width: 450px)" srcset="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/mobile/ExpandingYour.text.png">
              <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/desktop/ExpandingYour.text.png" alt="" style="width: 100%;">
          </picture>
          <div class="find-out-more">
            <a href="./sc-sealing">
              <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/find-out-more.png" alt="">
            </a>
          </div>
        </div>
        
      </div>
      <div class="carousel-item banner-1" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/banner-3.jpg');">
        <div class="text-container ban-pag-3">
            <picture>
                <source media="(max-width: 450px)" srcset="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/mobile/Factory-4.0.text.png">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/desktop/Factory-4.0.text.png" alt="" width="100%">
            </picture>
          <div class="find-out-more">
              <a href="./sc-asset">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/find-out-more.png" alt="">
              </a>
            </div>
      </div>
      </div>
      <div class="carousel-item banner-1" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/banner-1.jpg');">
        <div class="text-container ban-pag-4">
            <picture>
                <source media="(max-width: 450px)" srcset="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/mobile/AMVSeries.text.png">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/desktop/AMVSeries.text.png" alt="" width="100%">
            </picture>
          <div class="find-out-more">
              <a href="./ts-adas">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/find-out-more.png" alt="">
              </a>
            </div>
      </div>
      </div>
      <div class="carousel-item banner-2" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/banner-2.jpg');">
        <div class="text-container ban-pag-5">
            <picture>
                <source media="(max-width: 450px)" srcset="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/mobile/VisionSystem.text.png">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/banner/desktop/VisionSystem.text.png" alt="" width="100%">
            </picture>
          <div class="find-out-more">
              <a href="ts-urban">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/find-out-more.png" alt="">
              </a>
            </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="copyright">
    <p>&copy; GBS (SINGAPORE) PTE LTD</p> 
  </div>


    <!-- JS libraries -->
    <!-- Jquery -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>

    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
    
    <!-- Common js -->
    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>

    <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/index.js"></script>
  </body>
</html>
