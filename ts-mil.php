<?php
/*
Template Name: Mil
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
            <li class="sub">
              <a href="ts-log">LOGISTICS</a>
            </li>
            <li class="sub active">
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
      <div class="row upper-about-banner" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/ts-mil-banner.jpg')">
        <div class="col heading">
          <h2>SOLUTIONS</h2>
        </div>
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Vision Systems - Defence</h3>
            <p>
              Our vision solutions are designed to support military personnel
              with effectiveness and efficiency under such harsh environments
              (e.g. deserts, sandstorms, extreme winters and jungles).
            </p>
            <p>
              Compliant to industrial military standards, our vision
              solutions are the perfect auxiliary support for drivers of any
              logistical and tactical. Commanders, drivers and crew can recognize
              surroundings threats and take action. Thus, saving lives and reducing damages.

            </p>
            <p class="border-top">
              1. &nbsp Robust & Sturdy <br>
              Able to withstand harsh environments. Shock and vibration resistant.
              Maintains camera functionalities in permafrost conditions (-60 °C).
              [MIL-STD-810G]
            </p>
            <p>
              2. &nbsp Heavy-duty
              Perform under high intensity and long hours of usage, designed validated
              by 10,000 Km in variety of terrains. [MIL-STD-810G]
            </p>
            <p class="border-bottom">
              3. &nbsp High Electromagnetic Compatibility <br>
              Clarity in the signal and images transmitted from our
              cameras (from 0.01MHz to 100 MHz). [MIL-STD-461E]
            </p>
            <p>
              Our vision solutions are suitable for a variety of military
              vehicles. Here are some examples:
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
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> All-Round Surveillance </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Positioned and angled to monitor the immediate areas, our ruggedized camera solutions provide an
                  all-round visibility. Drivers and commanders now have enhanced 360 degree field vision to support
                  their operations in a close-hatched, protected environment. They can access any camera independently
                  to view the live feed during the day or low light conditions at night
                </p>
                <div class="slide-set-large">
                <div class="thumbnail slide-large">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="all-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/1.png">
                  </div>
                </div>
                <div class="non-staged icon-large">
                  <img onclick="changeSlide(event, 'all-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/1.png">
                  <img onclick="changeSlide(event, 'all-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/2.png">
                  <img onclick="changeSlide(event, 'all-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/3.png">
                </div>
              </div>

                <h3 class="mb-3 mt-5">COMPONENTS</h3>
                <div class="flex">
                  <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="com-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/1.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'com-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/1.png">
                  <img onclick="changeSlide(event, 'com-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/2.png">
                  <img onclick="changeSlide(event, 'com-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/3.png">
                  <img onclick="changeSlide(event, 'com-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/4.png">
                  <img onclick="changeSlide(event, 'com-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/5.png">
                  <img onclick="changeSlide(event, 'com-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/surveillance/components/6.png">

                </div>
              </div>

                  <div class="ml-4">
                    <h6 class="mt-3">Key Benefits</h6>
                    <ul>
                      <li>Added protection for military personnel</li>
                      <li>Military standard components</li>
                      <li>Ruggedized cameras for harsh environments</li>
                      <li>Detect human up to 15m in foggy or dark conditions</li>
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
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Rear View Monitoring </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Our vision solutions are strategically mounted at the rear to reduce blind spots. We provide different
                  configurations and customisation to adapt to the vehicle’s structure.
                </p>
                <p>For instance, our 2-in-1 solution monitors all immediate activity within the vehicle’s rear with the
                  120HFOV lower camera. The upper camera can extend up to 90 degrees HFOV to watch for any activities
                  from afar. </p>
                <p>
                  Operators will receive clear live video feed, enhancing their situational awareness of their
                  environment. Hence, effectively assisting drivers to safely navigate these large vehicular bodies
                  through challenging settings at increased speed and operating range.
                </p>
                <div class="slide-set-large">
                <div class="thumbnail slide-large">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="rear-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/1.png">
                  </div>
                </div>
                <div class="non-staged icon-large">
                  <img onclick="changeSlide(event, 'rear-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/1.png">
                  <img onclick="changeSlide(event, 'rear-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/2.png">
                  <img onclick="changeSlide(event, 'rear-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/3.png">
                  <img onclick="changeSlide(event, 'rear-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/4.png">
                </div>
              </div>
               

                <h3 class="mb-3 mt-5">COMPONENTS</h3>
                <div class="flex">

                  <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="com1-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/components/1.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'com1-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/components/1.png">
                  <img onclick="changeSlide(event, 'com1-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/components/2.png">
                  <img onclick="changeSlide(event, 'com1-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/rear-mon/components/3.png">

                </div>
              </div>

                  <div class="ml-4">
                    <h6 class="mt-3">Benefits</h6>
                    <ul>
                      <li>Increased situational awareness</li>
                      <li>Customised solution according to vehicle</li>
                      <li>90-120 degrees wide ranged HFOV at the rear</li>
                      <li>Captures clear feed from as far as 20m away</li>
                      <li>Clear feed under bright & low light conditions</li>
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
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> In-Vehicle Monitoring </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Hinged at different angles, our cameras capture a panoramic view of the vehicle’s interior video feed
                  recorded into the ruggedized DVR. Vehicle commanders can monitor for obstacles within the vicinity of
                  the – crew’s movement and activity, obscure to commander.
                </p>
                <p>This gives sufficient time to warn personnel and get them to move to a safe distance before
                  proceeding with their command. Hence, improving the overall safety capabilities for in-vehicle
                  operations. </p>


                  <div class="slide-set-large">
                <div class="thumbnail slide-large">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="mon-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/1.png">
                  </div>
                </div>
                <div class="non-staged icon-large">
                  <img onclick="changeSlide(event, 'mon-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/1.png">
                  <img onclick="changeSlide(event, 'mon-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/2.png">
                </div>
              </div>

              


                <h3 class="mb-3 mt-5">COMPONENTS</h3>
                <div class="flex">


              <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="com2-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/components/1.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'com2-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/components/1.png">
                  <img onclick="changeSlide(event, 'com2-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/components/2.png">
                  <img onclick="changeSlide(event, 'com2-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mil/in-mon/components/3.png">

                </div>
              </div>

                  <div class="ml-4">
                    <h6 class="mt-3">Benefits</h6>
                    <ul>
                      <li>Increased situational awareness in-vehicle</li>
                      <li>Clear view of in-vehicle operations</li>
                      <li>Up to 140-degrees HFOV in-vehicle</li>
                      <li>Clear feed under Low-light conditions</li>
                      <li>Secure access to DVR system</li>
                      <li>Also compliant with MIL-STD 810 & 1275</li>
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
        <div class="col-12 mt-5">
          <p>
            All our solutions can be equipped with a Rugged Display Panel PC.
          </p>
          <div class="flex mt-5" style="align-items: center;">

            <div>

              <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="rug-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/Foot/1.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'rug-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/Foot/1.png">
                  <img onclick="changeSlide(event, 'rug-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/Foot/2.png">
                  <img onclick="changeSlide(event, 'rug-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/Foot/3.png">
                </div>
            </div>
            <div class="ml-4">
              <h6 class="mt-3">Benefits</h6>
              <ul>
                <li>Increased situational awareness in-vehicle</li>
                <li>Clear view of in-vehicle operations</li>
                <li>Up to 140-degrees HFOV in-vehicle</li>
                <li>Clear feed under Low-light conditions</li>
                <li>Secure access to DVR system</li>
                <li>Also compliant with MIL-STD 810 & 1275</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-5">
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
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="contact">Contact Number</label>
              <input type="text" class="form-control" id="contact" aria-describedby="contact"
                placeholder="Enter Your Contact Number">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" class="form-control" id="company" aria-describedby="company"
                placeholder="Enter Your Company">
            </div>
            <div class="form-group">
              <label for="service">Topic/Service of Interest</label>
              <select class="form-control" id="service">
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