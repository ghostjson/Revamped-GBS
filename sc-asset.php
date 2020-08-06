<?php
/*
Template Name: Assets
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
            <li class="sub active">
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
        style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/assets-banner.jpg');background-position: bottom;">
      </div>
      <div class="row lower-about-banner">
        <div class="col">
          <div class="container">
            <h3>Semiconductor - Asset Enhancement Solutions</h3>

            <h4>All in One GoBot system</h4>
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/gobot-system.jpg" class="gsys-img">
            <p>
              Wafer fabs need to shift from reactive to proactive maintenance strategies.
              It is reported unplanned downtime costs 10 times more than scheduled
              maintenance.
            </p>
            <p>
              Partnering with GUTC Taiwan, GBS presents GoBot - the all-in-one solution to
              meet the needs of the semiconductor industry. GoBot is designed with these goals:
            </p>
            <ul>
              <li>Improve reliability and availability of production assets</li>
              <li>Reduce unscheduled downtime </li>
              <li>Reduce maintenance costs</li>
            </ul>

            <p>
              GoBot is customisable and can be retrofitted to integrate to your manufacturing systems.
              Our solution enhances the system’s overall competencies by monitoring for defects, trigger points and
              anticipate asset breakdown.
            </p>

            <h4>Our GoBot Solution consists of 3 main features:</h4>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="expansion">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Data mining using IOT sensors </h5>
            <div class="exp-content">
              <div class="text">
                <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/msd-systems.jpg" class="data-min" alt="">
              </div>
              <h4>Multi-sensory device (MSD)</h4>
              <div class="data-min-img-p">
                <div class="image">
                  <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/solutions-msd.jpg">
                </div>
                <div class="content">
                  <p>
                    By adding the MSD (Multi Sensor Device), wafer fabs automate
                    visual inspections and manual data collection. Data is digitally
                    recorded and delivered to a centralised interface to help
                    decision-makers with accurate, 24hrs 365days real-time information.
                  </p>
                </div>
              </div>
              <p>Engineers leverage on real-time monitoring of changes in key parameters to assess
                the reliability and performance of assets. Hence, improving the rate of
                control and reduce occurrence of similar technical issues.
              </p>
              <p>
                We develop solutions for data acquisition according to our customer’s needs
                (e.g. pressure difference, temperature and humidity pressure, vibration,
                photo resist flow, or special customized requirements).
              </p>

              <h4>Example Photo Resist flow sensor</h4>
              <div class="img-p">
                <div class="image">
                  <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/solutions/example.jpg">
                </div>
                <div class="content">
                  <h6>Key Benefits:</h6>
                  <ul>
                    <li>Customised sensors for different needs</li>
                    <li>Extreme temperature and pressure resistance</li>
                    <li>Real-time monitoring of equipment</li>
                    <li>Real-time data recording and upload </li>
                  </ul>
                </div>
              </div>
              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Remote Control Management (RCM)
            </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  With GoBot, engineers can remotely control entire production asset fleets in the whole smart factory.
                  The centralised interface utilizes configuration and calibration data to ensure
                  assets are operating effectively. This allows Real-time monitoring and remote
                  control assessing assets health allows them to promptly identify breakdowns
                  and resolve the issue.
                </p>
                <p>
                  Hence, reducing unplanned downtime and minimising disruptions for safer and more reliable
                  operations. Engineers can now focus their efforts on developing qualitative
                  strategies that value-add to the manufacturing process.
                </p>
                <h6>Key Benefits</h6>
                <ul>
                  <li>Improved management efficiency</li>
                  <li>Centralised and remote control </li>
                  <li>Faster response to emergencies</li>
                  <li>Enhanced security – zero chance for virus infections</li>
                  <li>Minimise human interactions (during pandemic)</li>
                </ul>
              </div>

              <a style="margin-left: 35px;" href="<?= get_stylesheet_directory_uri() ?>/assets/downloads/GBS PDF placeholder.pdf">
                <img style="width: 300px;" src="<?= get_stylesheet_directory_uri() ?>/assets/images/pdf-download.png" alt="">
              </a>
            </div>
        </div>
        <div class="col-12">
          <h5 class="expand"> <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/triangle.png" width="30px"> Learning A.I. </h5>
            <div class="exp-content">
              <div class="text">
                <p>
                  It costs 50% more to repair a failed asset than addressing the
                  issue prior to failure and up to 5% production capacity loss annually
                  from unplanned shutdowns.
                </p>
                <p>
                  Predictive maintenance help avoid unplanned shutdowns and
                  cost-inefficient practices. GoBot shifts from break-fix maintenance
                  to condition-based strategies via predictive analysis of the variation
                  in the asset’s performance. Thus, eliminating unnecessary maintenance and
                  improving asset reliability.
                </p>
                <p>
                  In addition, our GoBot solutions are complemented with learning functionalities
                  to process new faults and develop appropriate solutions. They are capable
                  of automatically performing measurement and parameter adjustment
                  according to MIS automatic scheduling; interspersed with idle time
                  of production assets.
                </p>
                <h6>Key Benefits</h6>
                <ul>
                  <li>Up-to-date learning and processing</li>
                  <li>Smart asset-ratification system</li>
                  <li>Predictive analysis of assets</li>
                  <li>Reduced downtime for maintenance</li>
                  <li>Increased operational efficiency</li>
                </ul>
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

          <p> <strong> Facing similar problems? Connect with us for a personal consultation and how we can meet your
              needs.</strong></p>
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