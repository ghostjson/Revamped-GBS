<?php
/*
Template Name: Sealing
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
  </head>
  <body>
<style>h6{font-weight: bold; font-size: 25px;margin-left: 0 !important;}</style>
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
              <a id="semi-conductor" href="#">SEMI-CONDUCTOR</a>
            </li>
            <div class="sc-sub">
              <li class="sub active">
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

    <section class="about-banner">
      <div class="container-fluid">
        <div class="row upper-about-banner" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/sc-sealing.jpg');background-position: bottom;">
        </div>
        <div class="row lower-about-banner">
          <div class="col">
            <div class="container">
                <h3>Semiconductor - Sealing Solutions</h3>
                <p>  
                GBS has partnered with strategic manufacturers to meet the 
                strenuous demands of semiconductor processes. These processes 
                often involve corrosive chemicals, plasma and high temperatures.
              </p>
              <p>
                Our sealing solutions are designed with enhanced durability as 
                the main attribute. Not only can they withstand the harsh elements, 
                they possess a longer product lifespan than its counterparts in the 
                market based on some tests conducted in the field.

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
                    <h5 class="expand" > <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> O-Rings </h5>
                    <div class="exp-content">
                      <div class="text">
                        <p>
                            O-rings are one of the common seals used in the semiconductor 
                            industry; which exposes to diverse harsh environments from 
                            extreme temperatures, aggressive plasma to corrosive chemicals.
                        </p>
                        <p>
                            Partnering with EKK, the Superior Series advantage starts with
                            our super-premium base polymers and the expertise to perfect them. 
                        </p>
                        <p>
                            The benefits of our streamlined process are unequalled focus and
                             efficiency, from base polymer manufacturing to compounding and moulding.
                        </p>
                        <p>
                            This results in cost-effective sealing solutions with exceptional 
                            cleanliness throughout the manufacturing process.
                        </p>
                      </div>
                      <div class="img-p">
                        <div class="image">
                          <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/o-rings.jpg">
                        </div>
                        <div class="content">
                          <h6>Benefits</h6>
                          <ul>
                            <li>Extended product life expectancy</li>
                            <li>Excellent extreme temperature resistance</li>
                            <li>High plasma resistance</li>
                            <li>High corrosive chemicals resistance</li>
                            <li>Low outgas generation</li>
                            <li>Improved production focus and efficiency</li>
                            <li>Cost effectiveness across every manufacturing stage</li>
                          </ul>
                        </div>
                      </div>
                      <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                        <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
                      </a>
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="expand"> <img  src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Bonded Doors/Gates </h5>
                    <div class="exp-content">
                        <div class="text">
                          <p>Bonded Door is an enhancement option over the O-ring when it comes to dynamic applications.</p>
                          <p>
                              Used in semiconductor processing, Bonded Door (from EKK) increases the life 
                              expectancy and enhances the performance of the door’s seal. The seal, made 
                              from perfluoroelastomer or Fluorcarbon compound, is bonded to an aluminium 
                              or stainless steel door.
                          </p>
                        </div>
                        <div class="img-p">
                          <div class="image">
                            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/bonded-doors.jpg">
                          </div>
                          <div class="content">
                            <h6>Benefits</h6>
                            <ul>
                              <li>Extended product life expectancy</li>
                              <li>Improved sealing performance</li>
                              <li>Improved production focus and efficiency</li>
                              <li>Lower cost </li>
                              <li>Negligible leakage/ contamination</li>
                            </ul>
                          </div>
                        </div>
                        <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                          <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
                        </a>
                      </div>
                </div>
                <div class="col-12">
                    <h5 class="expand"> <img  src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Magnetic Fluid Vacuum Seal </h5>
                      <div class="exp-content">
                          <div class="text">
                            <p>
                                Used widely in the Semiconductor industry, the Magnetic Fluid 
                                Vacuum Seal is a clean seal which retains magnetic fluid around a 
                                rotary shaft by using magnets. 
                            </p>
                            <p>
                                EKK’s vacuum seal is best for Semiconductor manufacturing 
                                equipment and flat panel display manufacturing equipment. It 
                                is also used as a dust seal for bearings of conveying robots.
                            </p>
                          </div>
                          <div class="img-p">
                            <div class="image">
                              <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/mangetic-fluid-vacuum-seal.jpg">
                            </div>
                            <div class="content">
                              <h6>Benefits</h6>
                              <ul>
                                <li>Excellent thermal resistance (up to 200 <sup>o</sup>C)</li>
                                <li>High vacuum resistance</li>
                                <li>No need for lubricants</li>
                                <li>Extended product life expectancy</li>
                                <li>Improved sealing performance</li>
                                <li>Negligible leakage/ contamination</li>
                              </ul>
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
              <li>Low product life span resulting in frequent change of parts</li>
              <li>Less than optimal throughput yield</li>
              <li>Frequent asset breakdown / unscheduled downtime</li>
              <li>Exposure to corrosive chemicals and extreme conditions</li>
            </ul>

            <p> <strong> Facing similar problems? Connect with us for a personal consultation and how we can meet your needs.</strong></p>
          </div>
        </div>
      </div>
    </section>
  

    <section class="contact">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
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
