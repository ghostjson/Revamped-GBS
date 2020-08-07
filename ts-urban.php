<?php
/*
Template Name: Urban
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
            <li class="sub active">
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
      <div class="row upper-about-banner" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/ts-urban-banner.png')">
        <div class="col heading mb-5">
          <h2>SOLUTIONS</h2>
        </div>
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Vison Systems – Urban & Municipal Vehicles</h3>
            <p>
              Urban and municipal vehicles are larger than commercial cars; with
              some possessing unique shape and features. These drivers are seated
              at elevated heights and collide into pedestrians hidden from their line
              of sight. Hence, it is more difficult to navigate safely along narrow
              roads and denser human population areas.
            </p>
            <p>
              Our cameras aid logistics support drivers of any vehicles to move more secure
              and efficient. The driver can perceive people and other objects in the camera’s
              detection zone earlier. Thus, effectively supporting the driver, save lives, and
              reduce costs.
            </p>
            <p>Our vision solutions are suitable for urban & municipal vehicles. Here are some examples: </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="expansion">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Urban Vehicles </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  Commercial buses often ferry from 40 to 60 passengers. It is
                  imperative that bus drivers apply extra caution on the roads.
                  However, its long exterior allows for many blind spots especially
                  on the sides. Our cameras support the driver by covering these blind spots.
                </p>
                

              <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="buses-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ts-bus.jpg">
                  </div>
                  
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'buses-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/ts-bus.jpg">
                  <img onclick="changeSlide(event, 'buses-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/Coach Van.jpg">
                  <img onclick="changeSlide(event, 'buses-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/RV.jpeg">
                </div>
              </div>
              
              <div class="flex"> 
                <div> 
                <h3 class="mb-3 mt-5">Vision Components Used:</h3>
              
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="vcu-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                   
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>

                </div>
                <div class="non-staged" id="vcu1">
                  <img onclick="changeSlide(event, 'vcu-staged')" data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'vcu-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'vcu-staged')" data-title="FRONT CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                  <img onclick="changeSlide(event, 'vcu-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA-1.png">
                </div>
              </div>
              </div>
              
                    

              <div>
                <h6 class="mt-3">Key Benefits</h6>
                <ul>
                  <li>Increased safety and road awareness</li>
                  <li>Easier for driver’s manoeuvring</li>
                  <li>Zero blind spots</li>
                  <li>Improved perception of distances</li>
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
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Fire Truck</h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  In times of emergency, fire truck needs to navigate swiftly to the location. Loaded with its
                  equipment, it can be difficult to move fast, and driver can overlook the blind spots; endangering
                  people in the surrounding.
                </p>
                <p>
                  Up to four cameras can be fitted onto fire trucks (front, rear and sides) to watch for potential
                  collisions.
                </p>
                <div class="slide-set-large">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="truck-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/firetruck/1. fire.png">
                  </div>
                  
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'truck-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/firetruck/1. fire.png">
                  <img onclick="changeSlide(event, 'truck-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/firetruck/2. fire.png">
                  <img onclick="changeSlide(event, 'truck-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/firetruck/3. fire.png">
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

                <h6 class="mt-5 ml-2">Key Benefits</h6>
                <ul class="ml-4">
                  <li>Zero blind spots</li>
                  <li>Avoid accidents</li>
                  <li>Safe manoeuvring</li>
                  <li>360 secure view </li>
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
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Refuse Truck</h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  The critical part of the refuse truck is the rear area. A camera installed at more than 90<sup>o</sup>
                  allows the driver to monitor the entire rear surroundings. These images are shown on a monitor at the
                  side. More cameras can be retrofitted to watch for incoming traffic from different directions.
                </p>
                <div class="slide-set-large">
                <div class="thumbnail slide-large">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="refuse-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/refuse/1. refuse.png">
                  </div>
                </div>
                <div class="non-staged icon-large">
                  <img onclick="changeSlide(event, 'refuse-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/refuse/1. refuse.png">
                  <img onclick="changeSlide(event, 'refuse-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/refuse/2. refuse.png">
                  <img onclick="changeSlide(event, 'refuse-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/refuse/3. refuse.png">
                </div>
              </div>

         
                <h3 class="mb-3 mt-5">Vision Components Used:</h3>

            <div class="flex">
            
              <div>
             <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image"  style="margin-top: 0px;" onclick="zoomStaged(event)" id="vcu1-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  </div>
                  <h6 class="slide-title mb-5">IN VEHICLE DVR</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'vcu1-staged')" data-title="IN VEHICLE DVR" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/dvr.png">
                  <img onclick="changeSlide(event, 'vcu1-staged')" data-title="In-Vehicle 7” Monitor" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/MONITOR.png">
                  <img onclick="changeSlide(event, 'vcu1-staged')" data-title="FRONT CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA.png">
                  <img onclick="changeSlide(event, 'vcu1-staged')" data-title="REAR CAMERA" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/urban/CAMERA-1.png">
                </div>
              </div>
              </div>

              <div>
                <h6 class="mt-5 ml-4">Key Benefits</h6>
                <ul class="ml-5">
                  <li>Increased road safety</li>
                  <li>Reduced approach and shunting damage</li>
                  <li>Sturdy camera - suitable for permanent external use (regardless of weather)</li>
                  <li>Vibration and shock proof</li>
                  <li>High level of modularity</li>
                </ul>
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