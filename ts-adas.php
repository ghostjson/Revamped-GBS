<?php
/*
Template Name: ADAS
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

    .upper-about-banner {
      background-position: 80%;
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
            <li class="sub">
              <a href="ts-mil">MILITARY & HOMELAND SECURITY</a>
            </li>
            <li class="sub active">
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
      <div class="row upper-about-banner" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/ts-ves-banner.jpg')">
        <div class="col heading">
          <h2>SOLUTIONS</h2>
        </div>
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Vision systems – Advanced Driver-Assistance Systems (ADAS)</h3>
            <p>
              Automotive Vision (AMV) series is the specialised smart solution developed
              by GBS for any special vehicles with 3 key aims:
            </p>
            <p class="border-top">
              1. &nbsp; Driver Centric <br>
              Intuitive driver user interface
            </p>
            <p>
              2. &nbsp; Increased Safety <br>
              Alert drivers on potential dangers and collision with an advanced warning system
            </p>
            <p class="border-bottom">
              3. &nbsp; Reduced Cost of Ownership <br>
              Reduced collisions save on business expenses such as repairs,
              insurance premiums and other indirect costs
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
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> AMV 2 </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Both front and rear cameras are installed into the specialty vehicle
                  and connected to the monitor near the driver’s seat.
                </p>
                <p>
                  The front camera is activated at ignition to observe for
                  potential collisions and pedestrians. When reversing, the rear
                  camera is activated to watch for any obstacles.
                </p>
                <h6 class="mt-5">Product Features</h6>
                <ul>
                  <li>Forward collision warning</li>
                  <li>Lane departure warning</li>
                  <li>Pedestrian collision warning</li>
                </ul>
                <div class="flex mt-5" style="align-items: flex-start; justify-content: space-between;">
                  <div>
                    <h6 class="">Compatible Vehicles</h6>
                    <ul>
                      <li>Bus</li>
                      <li>Rigid Lorry</li>
                      <li>Road sweeper</li>
                      <li>Ambulances</li>
                      <li>Garbage Truck</li>
                      <li>Low loader</li>
                      <li>Prime Mover</li>
                      <li>Courier</li>
                      <li>Reach stacker</li>
                    </ul>
                  </div>
                  <div>

                <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="amv2-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/1.png">
                  </div>
                  <h6 class="slide-title mb-5">BUS</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="BUS" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/1.png">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="RIGID LORRY"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/2.png">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="ROAD SWEEPER"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/3.png">
                  <!-- <img onclick="changeSlide(event, 'amv2-staged')" data-title="AMBULANCES" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/4.png"> -->
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="GARBAGE TRUCK" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/5.png">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="LOW LOADER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/6.png">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="PRIME MOVER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/7.png">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="COURIER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/8.png">
                  <img onclick="changeSlide(event, 'amv2-staged')" data-title="REACH STACKER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV2/9.png">

                </div>
              </div>

                   
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> AMV 4 </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Due to its size and length, rear mirrors are insufficient to cover all the blind
                  spots for specialty vehicles. Our 4-camera solution provides an
                  omni-directional coverage for the vehicle’s blind spots. AMV 4 can
                  watch for pedestrians and cyclists on all sides and alert drivers
                  at any time; reducing likelihood of accidents especially when navigating
                  through crowded areas and narrow spaces.
                </p>
                <h6 class="mt-5">Product Features</h6>
                <ul>
                  <li>Forward collision warning</li>
                  <li>Lane departure warning</li>
                  <li>Pedestrian collision warning</li>
                  <li>Blind spot detection</li>
                </ul>
                <div class="flex mt-5" style="align-items: flex-start; justify-content: space-between;">
                  <div>
                    <h6>Compatible Vehicles</h6>
                    <ul>
                      <li>Bus</li>
                      <li>Semitrailer truck</li>
                      <li>Petrol tanker</li>
                      <li>Fire trucks</li>
                    </ul>
                  </div>
                  <div>

              <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="amv4-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV4/1.png">
                  </div>
                  <h6 class="slide-title mb-5">BUS</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'amv4-staged')" data-title="BUS" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV4/1.png">
                  <img onclick="changeSlide(event, 'amv4-staged')" data-title="SEMITRAILER TRUCK" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV4/2.png">
                  <img onclick="changeSlide(event, 'amv4-staged')" data-title="PETROL TANKER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV4/3.png">
                  <img onclick="changeSlide(event, 'amv4-staged')" data-title="FIRE TRUCK" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV4/4.png">

                </div>
              </div>

                   
                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> AMV 360 </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  The AMV 360 offers a complete coverage for all the vehicle’s blind spots.
                  Four specialized cameras are installed onto each side of the vehicle.
                  Our processors will seamlessly stitch the images together to render a
                  real-time, 3D top down view of the vehicle’s surroundings.
                </p>
                <p>
                  When supplemented with radars, AMV 360 accurately identifies humans
                  and objects within a designated range and alerts the driver of potential
                  collisions in the vicinity.
                </p>
                <h6 class="mt-5">Product Features</h6>
                <ul>
                  <li>Blind spot detection</li>
                  <li>Easy Manoeuvring</li>
                </ul>
                <div class="flex mt-5" style="align-items: flex-start; justify-content: space-between;">
                  <div>
                    <h6 class="mt-0">Compatible Vehicles</h6>
                    <ul>
                      <li>Petrol tanker</li>
                      <li>Semitrailer truck</li>
                      <li>Heavy haulage system</li>
                      <li>Fire trucks</li>
                    </ul>
                  </div>
                  <div>

              <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="amv360-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV360/1.png">
                  </div>
                  <h6 class="slide-title mb-5">SEMITRAILER TRUCK</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'amv360-staged')" data-title="SEMITRAILER TRUCK" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV360/1.png">
                  <img onclick="changeSlide(event, 'amv360-staged')" data-title="PETROL TANKER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV360/2.png">
                  <img onclick="changeSlide(event, 'amv360-staged')" data-title="HEAVY HAULAGE SYSTEM" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV360/3.png">
                  <img onclick="changeSlide(event, 'amv360-staged')" data-title="FIRE TRUCK" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMV360/4.png">

                </div>
              </div>

                  </div>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> AMV (R) </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Designed in accordance to military standards, the AMV (R) is a ruggedized smart
                  module that can be retrofitted with any military vehicle’s existing vision
                  systems.
                </p>
                <p>
                  With AMV (R), TI and rear cameras now double as strategic surveillance
                  sensors to alert for potential collisions and detect possible threats in
                  hostile environments. Thus, saving lives and reducing costs.
                </p>
                <h6 class="mt-5">Product Features</h6>
                <ul>
                  <li>Retrofit into Vision systems </li>
                  <li>Long distance recognition</li>
                  <li>Heavy duty</li>
                  <li>High Electromagnetic compatibility</li>
                  <li>Special protection layering</li>
                </ul>
                <div class="flex mt-5" style="align-items: flex-start; justify-content: space-between;">
                  <div>
                    <h6 class="mt-0">Compatible Vehicles</h6>
                    <ul>
                      <li>Military light utility vehicle</li>
                      <li>Armoured fighting vehicle</li>
                      <li>Reconnaissance vehicle</li>
                      <li>Military engineering vehicle</li>
                      <li>Military ambulances</li>
                      <li>Electronic warfare vehicles</li>
                    </ul>
                  </div>
                  <div>


              <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="amvr-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/1.png">
                  </div>
                  <h6 class="slide-title mb-5">MILITARY LIGHT UTILITY VEHICLE</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'amvr-staged')" data-title="MILITARY LIGHT UTILITY VEHICLE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/1.png">
                  <img onclick="changeSlide(event, 'amvr-staged')" data-title="ARMOURED FIGHTING VEHICLE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/2.png">
                  <img onclick="changeSlide(event, 'amvr-staged')" data-title="RECONNAISSANCE VEHICLE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/3.png">
                  <img onclick="changeSlide(event, 'amvr-staged')" data-title="MILITARY ENGINEERING VEHICLE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/4.png">
                  <img onclick="changeSlide(event, 'amvr-staged')" data-title="MILITARY AMBULANCES" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/5.png">
                  <img onclick="changeSlide(event, 'amvr-staged')" data-title="ELECTRONIC WARFARE VEHICLE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/AMVR/6.png">

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


  <section class="about-banner mt-5">
    <div class="container-fluid">
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h4>Optional Add-On: Driver Status Monitoring</h4>
            <p>
              The Driver Status Monitoring (DSM) feature is an optional add-on
              feature that complements the AMV system.
            </p>
            <p>
              DSM is activated when the driver starts the vehicle. During the
              journey, the in-vehicle camera monitors the driver’s facial
              expressions and actions. DSM alerts the driver for any risky
              actions made; allowing him to be more conscious of his actions.
            </p>
            <p>
              Our DSM can be easily retrofitted into any current fleet management
              system. We provide integration as an add-on service for the DSM.
              Real-time information recorded is simultaneously sent to the fleet manager who can take real-time action
              to enforce safety.
            </p>
            <div class="ml-auto">


              <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="op-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/Addon/1.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">DRIVER USING PHONE</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'op-staged')" data-title="DRIVER USING PHONE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/Addon/1.png">
                  <img onclick="changeSlide(event, 'op-staged')" data-title="DRIVER YAWNING"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/Addon/2.png">
                  <img onclick="changeSlide(event, 'op-staged')" data-title="DRIVER SMOKING"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/Addon/3.png">
                  <img onclick="changeSlide(event, 'op-staged')" data-title="DRIVER DISTRACTED"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/Addon/4.png">
                  <img onclick="changeSlide(event, 'op-staged')" data-title="DRIVER FALLING ASLEEP"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ADAS/Addon/5.png">

                </div>
              </div>

         
            </div>
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