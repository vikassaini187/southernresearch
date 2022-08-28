<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css"/>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>    
  	<script src='js/selectivizr-min.js'></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
          <div class="container-fluid">
            <div class="brand">
              <h1 class="brand_name">
                <a href="./">Consulting <span>co.</span></a>
              </h1>
            </div>

            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li>
                  <a href="./"><span>Home</span></a>
                  <ul>
                    <li>
                      <a href="#">Quisque nulla</a>
                    </li>
                    <li>
                      <a href="#">Vestibulum libero nis</a>
                    </li>
                    <li>
                      <a href="#" class="sub-menu">Porta vel scelerisque eget</a>
                      <ul>
                        <li>
                          <a href="#">Latest</a>
                        </li>
                        <li>
                          <a href="#">Archive</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Malesuada at neque</a>
                    </li>
                    <li>
                      <a href="#">Vivamus eget nibh</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="index-1.html"><span>About us</span></a>
                </li>
                <li>
                  <a href="index-2.html"><span>Services</span></a>
                </li>
                <li>
                  <a href="index-3.html"><span>Projects</span></a>
                </li>
                <li>
                  <a href="index-4.html"><span>Contacts</span></a>
                </li>
              </ul>
            </nav>

            <a class="search-form_toggle" href="#"></a>

            <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
              <label class="search-form_label">
                <input class="search-form_input" type="text" name="s" autocomplete="off"
                       placeholder="Search.."/>
                <span class="search-form_liveout"></span>
              </label>
              <button class="search-form_submit fa-search" type="submit"></button>
            </form>

          </div>
        </div>

      </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section id="content" class="content">
            <div class="container ">
                <h4>Search Results</h4>
                <div id="search-results"></div>
            </div>
        </section>
    </main>
    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <section class="well_ft-1 bg2 clr-default-dark">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <h3>Get in touch</h3>
                <div class="contact-info">
                  <address>8901 Marmora Road <br>
                    Glasgow, DO4 89GR.</address>
                  <dl class="freephone">
                    <dt>Freephone: </dt>
                    <dd><a href="callto:#">+1 800 559 6580</a></dd>
                  </dl>
                  <dl class="telephone">
                    <dt>Telephone:</dt>
                    <dd><a href="callto:#">+1 959 603 6035</a></dd>
                  </dl>
                  <dl class="fax">
                    <dt>FAX:</dt>
                    <dd><a href="callto:#">+ 1 504 889 9898</a></dd>
                  </dl>
                  <dl class="email">
                    <dt>E-mail: </dt>
                    <dd><a href="mailto:#">mail@demolink.org</a></dd>
                  </dl>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-xs-6">
                <h3>Menu</h3>
                <ul class="footer-menu">
                  <li><a href="./">Home</a></li>
                  <li><a href="index-1.html">About us</a></li>
                  <li><a href="index-2.html">Services</a></li>
                  <li><a href="index-3.html">Projects</a></li>
                  <li><a href="index-4.html">Contacts</a></li>
                </ul>

              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>Follow us</h3>
                <ul class="inline-list">
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-pinterest"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h3>Join our newsletter</h3>
                <p>And always stay informed of the latest company news and events!</p>
                <a href="#" class="btn btn-dark btn-md"><span>Sign up >></span></a>
              </div>
            </div>
          </div>
        </section>

        <section  class="rights">
          <div class="container">
            <p>
              &#169; <span id="copyright-year"></span> CONSULTING CO.
              <a href="index-5.html">Privacy policy</a>
            </p>
          </div>
        </section>
      </footer>
</div>

<script src="js/script.js"></script>

</body>
</html>