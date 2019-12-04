<?php require_once 'controllers/authController.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>LiveByCode &mdash; Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


   <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block"> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> livebycode@googlegroups.com</a> 
          </div>
          
        </div>
      </div>
    </div>
       
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Login</h2>
              <p>You Login to LiveByCode.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>
    <form action="login.php" method="post">
    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                  <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                      <?php foreach($errors as $error): ?>
                        <li> <?php echo $error ?></li>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Username or Email</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Log In" name="login-btn" class="btn btn-primary btn-lg px-5">
                        <br>
                        <p>Not yet a member? <a href="signup.php">Sign Up</a></p>
                        <div><a href="forget_password.php">Forgot your password?</a></div>
                        </div>
                    </div>
                </div>
            </div>
            

          
        </div>
    </div>
  </form>

    

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p><b>&nbsp; &nbsp; &nbsp;THINK. IMPLEMENT. QUIT. REPEAT.</b></p>  
            
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Department</span></h3>
              <ul class="list-unstyled">
                  <li><a href="http://www.saranathan.ac.in/dept.php?tgt=itabout&dept=IT">Information Technology</a></li>
              </ul>
              <h3 class="footer-heading"><span>Our College</span></h3>
              <ul class="list-unstyled">
                  <li><a href="http://www.saranathan.ac.in">Saranathan College of Engineering</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Compiler Language support</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Bash (4.0 | 4.4)</a></li>
                <li><a href="#">Basic (fbc 1.05.0)</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">C++</a></li>
                <li><a href="#">Clojure (1.8.0)</a></li>
                <li><a href="lang.html">Read More</a></li>
            </ul>
          </div>
          
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact us at</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Gmail</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Whatsapp</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </i> by <a href="index.html" target="_blank" >Live By Code</a>
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>