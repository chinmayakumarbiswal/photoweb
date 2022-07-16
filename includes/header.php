<header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html">
                      <div class="brand__name">
                        <img class="brand__logo-dark" src="images/logo-243x57.png" alt="" width="243" height="57"/>
                        <img class="brand__logo-light" src="images/logo-inverse-243x57.png" alt="" width="243" height="57"/>
                      </div></a></div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-element">
                    <ul class="list-icons list-inline-sm">
                      <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                      <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                      <li><a class="icon icon-sm fa fa-pinterest icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                    </ul>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li><a href="contact.php">Book Your Photo Shoot</a>
                    </li>
                    <li><a href=""  data-toggle="modal" data-target="#login">Admin Login</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>







      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="includes/alldb.php">
            <div class="modal-body">
              <input type="text" name="email" placeholder="Email" class="single-input-primary" required /><br><br>
              <input type="password" name="password" placeholder="Password" class="single-input-primary" required />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="loginto">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>