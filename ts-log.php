<?php
/*
Template Name: Log
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

  <!-- Lightbox -->
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/assets/css/lightbox.min.css">
  <script defer src="<?= get_stylesheet_directory_uri() ?>/assets/js/lightbox-plus-jquery.min.js"></script>
  <style>
    h6 {
      font-weight: bold;
      font-size: 25px;
      margin-left: 0 !important;
    }

    .flex-start {
      display: flex;
      align-items: flex-start;
    }

    .img-p {
      align-items: flex-start !important;
      column-gap: 0 !important;
      grid-template-columns: 335px auto !important;
    }

    .img-p img {
      margin: 0 !important;
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
          <li class="active">
            <a id="transport" href="#">VISION SYSTEMS</a>
          </li>
          <div class="ts-sub">
            <li class="sub">
              <a href="ts-urban">URBAN & MUNICIPAL VEHICLES</a>
            </li>
            <li class="sub active">
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
      <div class="row upper-about-banner" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/ts-log-banner.jpg')">
        <div class="col heading">
          <h2>SOLUTIONS</h2>
        </div>
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Vision Systems – Logistics</h3>
            <p>
              Our cameras aid logistics support drivers of any vehicles to move more secure
              and efficient. The driver can perceive people and other objects in the
              camera’s detection zone earlier. Thus, effectively supporting the driver,
              save lives, and reduce costs.
            </p>
            <p>
              Our vision solutions are suitable for a suite of logistic vehicles.
              Here are some examples:

            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="expansion">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Semi-Trailer Truck </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Reversing, manoeuvring or making a right-hand turn can create potentially
                  dangerous situations for truck drivers. Despite all the available mirrors,
                  the truck driver does not have the necessary view into all dangerous zones.
                </p>
                <p>
                  Our cameras support the driver by covering every possible blind spots;
                  making the approach to loading and unloading areas easier. Consequently,
                  preventing accidents and saves costs through simple and fast operating
                  procedures.
                </p>

                <div class="slide-set-large">
                  <div class="thumbnail">
                    <div class="staged">
                      <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="trailer-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/trailer/1..png">
                    </div>
                  </div>                  
                  <div class="non-staged">
                    <img onclick="changeSlide(event, 'trailer-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/trailer/1..png">
                    <img onclick="changeSlide(event, 'trailer-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/trailer/2..png">
                    <img onclick="changeSlide(event, 'trailer-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/trailer/3..png">
                  </div>
              </div>

                
                <div class="flex">
                  <div>
                    <h3 class="mb-3 mt-5">Vision Components Used:</h3>

              <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="ckd-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'ckd-staged')" data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'ckd-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'ckd-staged')" data-title="FRONT CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                  <img onclick="changeSlide(event, 'ckd-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA-1.png">
                </div>
              </div>


                  </div>
                  <div>
                    <h6 class="mt-3">Key Benefits</h6>
                    <ul>
                      <li>Increased safety and road awareness</li>
                      <li>Easier for driver’s manoeuvring</li>
                      <li>Zero blind spots</li>
                    </ul>
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Long Heavy Goods Vehicle (HGV) </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Camera systems are a statutory requirement for over-length HGVs. A camera on
                  the rear of the vehicle or trailer records traffic and defuses critical
                  situations.
                </p>
                <p>
                  With a wide viewing angle of up to 120 degrees, the sturdy cameras record the
                  entire space behind the HGV and the outer edges of the tailgate. All our
                  vision solutions are tailored to the relevant vehicle combinations.
                </p>

                <div class="slide-set-large">
                  <div class="thumbnail">
                    <div class="staged">
                      <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="hgv-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/hgv/1..png">
                    </div>
                  </div>                  
                  <div class="non-staged">
                    <img onclick="changeSlide(event, 'hgv-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/hgv/1..png">
                    <img onclick="changeSlide(event, 'hgv-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/hgv/2..png">
                  </div>
              </div>
                <div class="flex">
                  <div>
                    <h3 class="mb-3 mt-5">Vision Components Used:</h3>
                    <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="hgv-vcu-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'hgv-vcu-staged')" data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'hgv-vcu-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'hgv-vcu-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                  <img onclick="changeSlide(event, 'hgv-vcu-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA-1.png">
                </div>
              </div>
                  </div>
                  <div>
                    <h6 class="mt-3">Key Benefits</h6>
                    <ul>
                      <li>Increased safety and road awareness</li>
                      <li>Easier for driver’s manoeuvring</li>
                      <li>Zero blind spots</li>
                    </ul>
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Front Loaders </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Front loaders can be fitted with up to 3 cameras. A camera is mounted on the
                  counterweight or cabin roof to monitor the rear area; which is automatically
                  activated when the vehicle reverses.
                </p>
                <p>
                  Other positions include the lift mast or the bottom edge of the mast to
                  ensure clear view of the aisle before moving off.
                </p>
                <div class="slide-set-large">
                  <div class="thumbnail">
                    <div class="staged">
                      <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="front-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ts-front-loaders.jpg">
                    </div>
                  </div>                  
                  <div class="non-staged">
                    <img onclick="changeSlide(event, 'front-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ts-front-loaders.jpg">
                  </div>
                </div>
                <div class="flex">
                  <div>
                    <h3 class="mb-3 mt-5">Vision Components Used:</h3>
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="loader-vcu-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'loader-vcu-staged')" data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'loader-vcu-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'loader-vcu-staged')" data-title="REAR CAMERA"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                </div>
              </div>
                   
                  </div>
                  <div>
                    <h6 class="mt-3">Benefits</h6>
                    <ul>
                      <li>Clear view into the aisle, even with high-volume load</li>
                      <li>Reverse camera activates automatically</li>
                      <li>Reduced approach and shunting damage</li>
                    </ul>
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Reach Truck </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Our cameras are fitted at the height of the load. This allows for fast and
                  reliable handling of pallets in high bay storage racks. The 50<sup>o</sup> view angle
                  allows driver to catch a clear view of the movement of both forks, incoming
                  personnel or surrounding objects.
                </p>
                <div class="slide-set-large">
                  <div class="thumbnail">
                    <div class="staged">
                      <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="reach-truck-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/reach/1..png">
                    </div>
                  </div>                  
                  <div class="non-staged">
                    <img onclick="changeSlide(event, 'reach-truck-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/reach/1..png">
                    <img onclick="changeSlide(event, 'reach-truck-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/reach/2..png">
                  </div>
                </div>
               
                <div class="flex">
                  <div>
                    <h3 class="mb-3 mt-5">Vision Components Used:</h3>
                    <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="reach-vcu-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'reach-vcu-staged')" data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'reach-vcu-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'reach-vcu-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                </div>
              </div>
                  </div>
                  <div>
                    <h6 class="mt-3">Key Benefits</h6>
                    <ul>
                      <li>Saves and rapid handling of pallets in high bay storage racks</li>
                      <li>No blind spot</li>
                      <li>Reduced shunting and handling damage – less chance for damaged goods</li>
                    </ul>
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Harbour Cranes </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Our motor zoom camera gives the crane driver a clear view of the load hook. The crane is fitted
                  with a suspended mount to the point of the crane outrigger. The operator can
                  zoom into the loading area during loading and unloading. He has a clear view
                  of the loads and its surroundings.
                </p>
                <p>
                  Other cameras are used to monitor critical points such as the engine/generator compartment
                  (overheating, smouldering fires, etc.) and the travelway.
                </p>

                <div class="slide-set-large">
                  <div class="thumbnail">
                    <div class="staged">
                      <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="cranes-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/harbour/1..png">
                    </div>
                  </div>                  
                  <div class="non-staged">
                    <img onclick="changeSlide(event, 'cranes-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/harbour/1..png">
                    <img onclick="changeSlide(event, 'cranes-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/harbour/2..png">
                  </div>
                </div>



                <div class="flex">
                  <div>
                    <h3 class="mb-3 mt-5">Vision Components Used:</h3>
                    <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="har-vcu-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'har-vcu-staged')"  data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'har-vcu-staged')" data-title="In-Vehicle 7” Monitor"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'har-vcu-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                </div>
              </div>
                  </div>
                  <div>
                    <h6 class="mt-3">Benefits</h6>
                    <ul>
                      <li>Optimal control of the outrigger and the load hook</li>
                      <li>Faster and more reliable handling</li>
                      <li>Prevent failures/downtime</li>
                      <li>Reduced accidents and shunting damage</li>
                    </ul>
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Logistic Vehicles </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Logistic vehicles are specially shaped for different operational needs. Our cameras are
                  placed strategically to monitor surrounding movement and obstacles during
                  loading and unloading. Drivers have a clear view for fast and reliable
                  handling of containers.
                </p>

                <div class="slide-set-large">
                  <div class="thumbnail">
                    <div class="staged">
                      <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="logs-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/log-vehicles/1..png">
                    </div>
                  </div>                  
                  <div class="non-staged">
                    <img onclick="changeSlide(event, 'logs-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/log-vehicles/1..png">
                    <img onclick="changeSlide(event, 'logs-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/logistics/log-vehicles/2..png">
                  </div>
                </div>

                <div class="flex">
                  <div>
                    <h3 class="mb-3 mt-5">Vision Components Used:</h3>
                    <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="log-vcu-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'log-vcu-staged')"  data-title="IN VEHICLE DVR"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'log-vcu-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'log-vcu-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                </div>
              </div>
                  </div>
                  <div>
                    <h6 class="mt-3">Benefits</h6>
                    <ul>
                      <li>Faster and more reliable handling </li>
                      <li>Prevent failures/downtime</li>
                      <li>No blind spot </li>
                      <li>Reduced accidents and less chance for damaged goods</li>
                    </ul>
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
          <h3>Connect With Us</h3>

          <p>Let's see how we can serve you with our solutions and expertise</p>
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