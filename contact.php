<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Contact Me</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page Loader-->
    <div id="page-loader">
      <div class="page-loader-body">
        <div class="cssload-spinner">
          <div class="cssload-cube cssload-cube0"></div>
          <div class="cssload-cube cssload-cube1"></div>
          <div class="cssload-cube cssload-cube2"></div>
          <div class="cssload-cube cssload-cube3"></div>
          <div class="cssload-cube cssload-cube4"></div>
          <div class="cssload-cube cssload-cube5"></div>
          <div class="cssload-cube cssload-cube6"></div>
          <div class="cssload-cube cssload-cube7"></div>
          <div class="cssload-cube cssload-cube8"></div>
          <div class="cssload-cube cssload-cube9"></div>
          <div class="cssload-cube cssload-cube10"></div>
          <div class="cssload-cube cssload-cube11"></div>
          <div class="cssload-cube cssload-cube12"></div>
          <div class="cssload-cube cssload-cube13"></div>
          <div class="cssload-cube cssload-cube14"></div>
          <div class="cssload-cube cssload-cube15"></div>
        </div>
      </div>
    </div>
    
      <?php
        include_once('includes/header.php')
      ?>

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(images/3.jpg);">
        <div class="shell">
          <h1 class="breadcrumbs-custom__title">Contact Me</h1>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Me</li>
          </ul>
        </div>
      </section>

      <!-- Get in Touch-->
      <section class="section section-md bg-white text-center">
        <div class="shell">
          <div class="range range-md-center">
            <div class="cell-md-11 cell-lg-10">
              <h2 class="text-bold">Get in Touch</h2>
              <p><span class="box-width-2">I am available 24/7 by fax, e-mail or by phone. You can also use a quick contact form to ask a question about my services.</span></p>
              <div class="layout-columns">
                <div class="layout-columns__main">
                  <div class="layout-columns__main-inner">
                    <!-- RD Mailform-->
                    <form class="rd-mailform" method="post" action="includes/alldb.php">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-date" type="text" data-time-picker="date" name="date" data-constraints="@Required">
                        <label class="form-label" for="contact-date">Event Date</label>
                      </div>
                      <div class="form-wrap">
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-name">Your Name</label>
                      </div>
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email">E-mail</label>
                      </div>
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message">Your Message</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                      <div class="form-wrap form-button offset-1">
                        <button class="button button-block button-primary-outline button-ujarak" type="submit" name="submitcontact">make an appointment</button>
                      </div>
                    </form>


                  </div>
                </div>
                <div class="layout-columns__aside">
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Socials</p>
                    <div class="divider-modern"></div>
                    <ul class="list-inline-xs">
                      <li><a class="icon icon-md icon-gray-7 fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-md icon-gray-7 fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-md icon-gray-7 fa fa-google" href="#"></a></li>
                      <li><a class="icon icon-md icon-gray-7 fa fa-youtube" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Phone</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary material-icons-local_phone"></span></div>
                      <div class="unit__body"><a href="tel:#">1-800-1234-567</a></div>
                    </div>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Address</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary material-icons-location_on"></span></div>
                      <div class="unit__body"><a href="#">267 Park Avenue New York, NY 90210</a></div>
                    </div>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">opening hours</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary mdi mdi-clock"></span></div>
                      <div class="unit__body"><span>I work every day 9:00–23:00</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
      include_once('includes/footer.php')
    ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>