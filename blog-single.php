<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GBS</title>

    <!-- Jqeury -->
    <script src="./assets/js/jquery-3.2.1.min.js"></script>

    <!-- Boostrap Stylesheet -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

    <!-- Common Stylesheet -->
    <link rel="stylesheet" href="./assets/css/common.css" />

    <!-- About Page Stylesheet -->
    <link rel="stylesheet" href="./assets/css/about.css" />

    <style>
      body {
        background-color: white;
        color: black;
      }

      article {
        padding-bottom: 1.5rem;
        border-bottom: 2px solid #527f92;
      }

      .article-heading {
        background: #527f92;
        font-size: 1.2em;
        font-weight: 600;
        text-align: center;
        height: 50px;
        line-height: 50px;
      }

      .page-heading {
        text-align: center;
        padding-top: 30px;
      }

      .social-icons img {
        width: 30px;
      }

      .aritcle-heading {
        font-family: font-times;
        color: #527f92;
        font-size: 2em;
        margin-top: 10px;
      }

      .article-description {
        font-size: 1.5em;
        font-family: "Times New Roman", Times, serif;
      }

      .social-icons a {
        margin: 0 5px;
      }
    </style>
  </head>
  <body>
    <nav class="menu">
      <div class="close-btn">
        <img src="./assets/icons/times-solid.svg" alt="hide" />
      </div>
      <div class="show-btn">
        <img src="./assets/icons/bars-solid.svg" alt="show" />
      </div>
      <ul>
        <li>
          <a href="/"><img src="./assets/images/logo.png" alt="logo" /></a>
        </li>
        <li>
          <a href="/about.html">ABOUT US</a>
        </li>
        <li>
          <a href="#" id="solution">SOLUTIONS</a>
          <ul class="sub-menu">
            <li class="">
              <a id="semi-conductor" href="#">SEMI-CONDUCTOR</a>
            </li>
            <div class="sc-sub">
              <li class="sub">
                <a href="sc-sealing.html">SEALING SOLUTIONS</a>
              </li>
              <li class="sub">
                <a href="sc-heater.html">HEATER PEDESTALS</a>
              </li>
              <li class="sub">
                <a href="sc-optics.html">OPTICS & COATINGS</a>
              </li>
              <li class="sub">
                <a href="sc-repair.html">REPAIR & REFURBISHMENT</a>
              </li>
              <li class="sub">
                <a href="sc-asset.html">ASSET ENHANCEMENT SOLUTIONS</a>
              </li>
            </div>
            <li class="">
              <a id="transport" href="#">VISION SYSTEMS</a>
            </li>
            <div class="ts-sub">
              <li class="sub">
                <a href="ts-urban.html">URBAN & MUNICIPAL VEHICLES</a>
              </li>
              <li class="sub">
                <a href="ts-log.html">LOGISTICS</a>
              </li>
              <li class="sub">
                <a href="ts-mil.html">MILITARY & HOMELAND SECURITY</a>
              </li>
              <li class="sub">
                <a href="ts-adas.html">ADVANCED DRIVER-ASSISTANCE SYSTEMS (ADAS)</a>
              </li>
            </div>
          </ul>
        </li>
        <li>
          <a href="portfolio.html">OUR PORTFOLIO</a>
        </li>
        <li>
          <a href="#" id="news">NEWS & UPDATES</a>
          <ul class="sub-news">
            <li class="active" >
              <a href="articles.html">ARTICLES</a>
            </li>
            <li class="">
              <a href="career.html">CAREER OPPORTUNITIES</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="/contact.html">CONTACT US</a>
        </li>
      </ul>
    </nav>

    <section class="about-banner">
      <div class="container-fluid">
        <div
          class="row upper-about-banner"
          style="background-image: url('./assets/images/news-banner.jpg');"
        >
          <div class="col heading">
            <h2>NEWS AND UPDATE</h2>
          </div>
        </div>
        <div class="row article-heading">
          <div class="col">
            <p>ARTICLES</p>
          </div>
        </div>
        <div class="row page-heading">
          <div class="col">
            <h2>
              Most Downloaded Materials Science in Semiconductor Processing
              Articles
            </h2>
          </div>
        </div>
      </div>
    </section>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 mb-4">
          <a href="#">
            <article class="">
              <img
                width="100%"
                src="./assets/images/article-image.jpg"
                alt=""
              />
              <p class="article-description">
                The most downloaded articles from Materials Science in
                Semiconductor Processing in the last 90 days. Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Veniam necessitatibus
                nihil perspiciatis a, est ipsa quam earum quaerat praesentium?
              </p>
              <p class="article-description">
                Amet illo eos saepe pariatur quibusdam fugiat praesentium
                laboriosam. Fugit, iste? Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Laborum repellat nobis fugit eligendi dolorum.
                Dolores sint labore accusantium, quas vel explicabo porro optio
                quasi consequatur, rem neque nulla, excepturi voluptatum?
              </p>

              <p class="article-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima
                consequatur neque hic, eaque recusandae natus est similique.
                Eveniet corporis quas, molestias, hic cumque, quo libero nam
                natus quam aut expedita. Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. A delectus sapiente iusto voluptate placeat
                molestias eligendi aliquid voluptas sit deleniti dolor ratione,
                molestiae asperiores veniam cumque quam non? Voluptas,
                excepturi. Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Dicta, quo aut. A cum, distinctio doloribus aspernatur rem
                commodi velit voluptates culpa sed sequi incidunt quam quo
                beatae adipisci, fugiat optio?
              </p>
              <div class="social-icons">
                <a href="#">
                  <img src="./assets/icons/facebook.svg" alt="" />
                </a>
                <a href="#">
                  <img src="./assets/icons/twitter.svg" alt="" />
                </a>
                <a href="#">
                  <img src="./assets/icons/linkedin.svg" alt="" />
                </a>
              </div>
            </article>
          </a>
        </div>
      </div>
    </div>

    <!-- JS libraries -->
    <!-- Jquery -->
    <script src="./assets/js/jquery-3.2.1.min.js"></script>

    <!-- Common js -->
    <script src="./assets/js/common.js"></script>
  </body>
</html>
