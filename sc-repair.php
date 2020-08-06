<?php
/*
Template Name: Repair
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
          <li class="active">
            <a id="semi-conductor" class="" href="#">SEMI-CONDUCTOR</a>
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
            <li class="sub active">
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
      <div class="row upper-about-banner"
        style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/repair-banner.jpg');background-position: bottom;">
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Semiconductor –Repair & Refurbishment</h3>
            <p>
              We offer refurbishment/repair services for lasers and
              electromechanical systems.
            </p>
            <p>
              Parts received are disassembled and inspected in a clean room
              facility. Irreparable components are replaced and working parts
              are thoroughly cleaned and calibrated for reassembling and
              testing.

            </p>

            <p>Benefits:</p>
            <ul>
              <li>Quick turnaround time for repaired parts </li>
              <li>Extended product life expectancy</li>
              <li>Guaranteed working functionality for repaired parts (Proprietary Functional tests)</li>
              <li>Lower production downtime & replacement cost</li>
            </ul>

            <p>Here are some of the products we repair/refurbish:</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="expansion">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Lasers </h5>
            <div class="exp-content">
              <!-- Image block starts here -->
              <h3 class="mb-4 mt-4">Lasers for Semiconductor Wafer Inspection
              </h3>
              <div class="flex-start">
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="laser-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/KLA PUMA 9000, 9100 LASER.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">KLA PUMA 9000, 9100 LASER</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'laser-staged')" data-title="KLA PUMA 9000, 9100 LASER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/KLA PUMA 9000, 9100 LASER.png">
                  <img onclick="changeSlide(event, 'laser-staged')" data-title="HITACHI IS3000 LASER" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/HITACHI IS3000 LASER.png">
                <img onclick="changeSlide(event, 'laser-staged')" data-title="SONY BS65" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SONY BS65.png">
                  <img onclick="changeSlide(event, 'laser-staged')" data-title="SONY BS76" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SONY BS76.png">
                </div>
              </div>

              </div>
              <!-- Image block ends here  -->

              <!-- Image block starts here -->
              <h3 class="mb-4 mt-4">Spectra Physics Laser Diode Refurbishing</h3>
              <div class="flex-start">
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="spectra-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SPECTRA PHYSICS PROLITE DIODE.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">SPECTRA PHYSICS PROLITE DIODIDE</h6>
                </div>
                <div class="non-staged mb-4">
                  <img onclick="changeSlide(event, 'spectra-staged')" data-title="SPECTRA PHYSICS PROLITE DIODIDE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SPECTRA PHYSICS PROLITE DIODE.png">
                  <img onclick="changeSlide(event, 'spectra-staged')" data-title="SPECTRA PHYSICS PROLITE DIODIDE" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/cable.png">
                </div>
              </div>

              </div>
              <!-- Image block ends here  -->

              <!-- Image block starts here -->
              <!-- <h3 class="mb-4 mt-4">Lasers for Semiconductor Wafer Inspection
              </h3>
              <div class="flex-start">
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="wafer-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SONY BS65.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'wafer-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SONY BS65.png">
                  <img onclick="changeSlide(event, 'wafer-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/SONY BS76.png">
                </div>
              </div>
              </div> -->
              <!-- Image block ends here  -->


              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>

        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Valves </h5>
            <div class="exp-content">
              <div>
                <!-- Image block starts here -->
                <h3 class="mb-4 mt-4">CKD Valve
                </h3>
                <div class="flex-start">
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img  class="highlight-image" onclick="zoomStaged(event)" id="ckd-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/CKD Valve (4c001, VYX-0245-VALVE, KF-80) copy.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">CKD Valve (4c001, VYX-0245-VALVE, KF-80)</h6>
                </div>
                <div class="non-staged mb-4">
                  <img onclick="changeSlide(event, 'ckd-staged')" data-title="CKD Valve (4c001, VYX-0245-VALVE, KF-80)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/CKD Valve (4c001, VYX-0245-VALVE, KF-80) copy.png">
                  <img onclick="changeSlide(event, 'ckd-staged')" data-title="CKD Valve (9I001, VEC-VH8-X0111, KF80)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/CKD Valve (9I001, VEC-VH8-X0111, KF80).png">
                </div>
              </div>
                </div>
                <!-- Image block ends here  -->

                <!-- Image block starts here -->
                <h3 class="mb-0 mt-4">Gate Valve
                </h3>
                <div class="flex-start">
                                  <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="gate-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Auto Manual Gate Valve copy 2.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">Auto Manual Gate Valve</h6>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'gate-staged')" data-title="Auto Manual Gate Valve" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Auto Manual Gate Valve copy 2.png">
                  <img onclick="changeSlide(event, 'gate-staged')" data-title="Butterfly Gate Valve" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Butterfly Gate Valve.png">
                  <img onclick="changeSlide(event, 'gate-staged')" data-title="Door Standard Gate Valve" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Door Standard Gate Valve.png">
                  <img onclick="changeSlide(event, 'gate-staged')" data-title="Double Housing Gate Valve" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Double Housing Gate Valve.png">
                  <img onclick="changeSlide(event, 'gate-staged')" data-title="Protection Gate Valve" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Protection Gate Valve.png">
                  <img onclick="changeSlide(event, 'gate-staged')" data-title="Rectangular Gate Valve" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Gate-Valve/Rectangular Gate Valve.png">
                </div>
              </div>
                </div>
                <!-- Image block ends here  -->

              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>


        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Pumps </h5>
            <div class="exp-content">
              <div class="text">
                <!-- Image block starts here -->
                <h3 class="mb-4 mt-5">Chemical Pumps
                </h3>
                <div class="flex-start">
                                  <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="chemical-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/pump 1.png">
                  </div>
                </div>
                <div class="non-staged">
                  <img onclick="changeSlide(event, 'chemical-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/pump 1.png">
                  <img onclick="changeSlide(event, 'chemical-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/pump 2.png">
                  <img onclick="changeSlide(event, 'chemical-staged')" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/pump 3.png">
                </div>
              </div>
                </div>
                <!-- Image block ends here  -->

                <!-- Image block starts here -->
                <h3 class="mb-4 mt-5">Turbo Pumps
                </h3>
                <div class="flex-start">
                                  <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="turbo-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/Ebara Turbo Pumps (ET300WS, ET450WS.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">EBARA TURBO PUMPS</h6>
                </div>
                <div class="non-staged mb-4">
                  <img onclick="changeSlide(event, 'turbo-staged')" data-title="EBARA TURBO PUMPS"  src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/Ebara Turbo Pumps (ET300WS, ET450WS.png">
                  <img onclick="changeSlide(event, 'turbo-staged')" data-title="PFEIFFER TURBO PUMPS (TMH 064, TPH 1201)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/Pfeiffer Turbo Pumps (TMH 064, TPH 1201).png">
                  <img onclick="changeSlide(event, 'turbo-staged')" data-title="TURBOVAC - TMP SERIES (TMP50, TW250)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/Pumps/Turbovac - TMP Series (TMP50, TW250).png">
                </div>
              </div>
                </div>
                <!-- Image block ends here  -->


              </div><a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Robots </h5>
            <div class="exp-content">
              <div class="text">
                <div class="slide-set">
                <div class="thumbnail">
                  <div class="staged">
                    <img class="highlight-image" onclick="zoomStaged(event)" id="robots-staged" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/MAG.png">
                  </div>
                  <h6 class="slide-title mb-5" style="color: white !important;">MAGNATRAN 7.1  (BROOKS)</h6>
                </div>
                <div class="non-staged mb-4">
                  <img onclick="changeSlide(event, 'robots-staged')" data-title="MAGNATRAN 7.1  (BROOKS)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/MAG.png">
                  <img onclick="changeSlide(event, 'robots-staged')" data-title="CONTROLLER &  PRE-ALIGNER  (BROOKS)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/CONTROLLER.png">
                  <img onclick="changeSlide(event, 'robots-staged')" data-title="ARMSET" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/AMRSET.png">
                  <img onclick="changeSlide(event, 'robots-staged')" data-title="MAGNATRAN 7.1 ARMSET (BROOKS)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/MAG ARM.png">
                  <img onclick="changeSlide(event, 'robots-staged')" data-title="RR710 SERIES (RORZE)" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/RORZE.png">
                  <img onclick="changeSlide(event, 'robots-staged')" data-title="VTM SERIES" src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/repair/robots/VTM.png">
                </div>
              </div>
                <!-- <h3 class="mb-3 mt-4"></h3>  -->

                <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                  <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
                </a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="common-problems">
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
                <form>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" class="form-control" id="contact" aria-describedby="contact" placeholder="Enter Your Contact Number">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" aria-describedby="company" placeholder="Enter Your Company">
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
    </section> -->




  <!-- JS libraries -->
  <!-- Jquery -->
  <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/jquery-3.2.1.min.js"></script>

  <!-- Common js -->
  <script src="<?= get_stylesheet_directory_uri() ?>/assets/js/common.js"></script>
</body>

</html>