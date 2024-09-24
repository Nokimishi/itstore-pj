<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GOJIRA IT STORE -Contact</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets\images/gz.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="shop.php">Product</a></li>
                      <li><a href="contact.php" class="active">Contact Us</a></li>
                      <li><a href="signup.php">Sign In</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="index.php">Home</a>  >  Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Hello!</h2>
            </div>
            <p>Go Pre-Order Buy & Get Best Prices For You!
              </p>
            <ul>
              <li><span>Address</span> Yangon,Ahlone Township</li>
              <li><span>Phone</span> 09424162523</li>
              <li><span>Email</span> GOJIRA@gmail.com</li>
            </ul><br><br>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-beat-fade fa-2xl"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter fa-beat-fade fa-2xl"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-beat-fade fa-2xl"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-beat-fade fa-2xl"></i></a>
          </div>
        </div>

        <!-- PHP START -->

        <?php
          error_reporting(1);
          include("dbconnect.php");
          if(isset($_REQUEST['send']))
          {
            $eadd = $_REQUEST['eadd'];
            $ph= $_REQUEST['ph'];
            $msg = $_REQUEST['msg'];
            $check = mysql_query("SELECT email FROM sign_up WHERE email='$eadd'");
            $run = mysql_fetch_array($check);
            if($eadd==$run['email'])
            {
              mysql_query("INSERT INTO feedback VALUES('$eadd', '$ph', '$msg')");
              $shw="Your feedback has been sent successfully!";
              $thk="Thank you for your feedback.";
            }
            else 
            {
              $error = "Email does not match!";
              $wrn= "Doesn't have account? Please Sign Up First!"; ;
            }
          }
        ?>

        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14419.156409095423!2d96.13321394119241!3d16.81935372452001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195cb45d53d97%3A0xfc46de3d4f2e4df7!2sPage%20Myanmar(Web%20Engineer%2C%20Programming%20On%20Job%20Training)!5e0!3m2!1sen!2smm!4v1704893667380!5m2!1sen!2smm" width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <h5 class="text-success"><?php echo $shw ?></h5>
                    <p class="text-info"><?php echo $thk ?></p>

                    <h5 class="text-danger"><?php echo $error ?></h5>
                    <p class="text-warning"><?php echo $wrn ?></p>
                    
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="eadd" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="ph" id="name" placeholder="Phone Number.." autocomplete="on" required>
                      </fieldset>
                    </div>
                    
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="msg" id="message" name="msg" placeholder="Your Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" name="send" id="form-submit" class="orange-button">Send Message Now   <i class="fa-solid fa-paper-plane fa-lg" style="color: #74C0FC;"></i></button> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        <button type="reset"  class="orange-button">Cancel  <i class="fa-solid fa-rectangle-xmark fa-lg" style="color: #FFD43B;"></i></button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 GOJIRA IT Store.&nbsp; All rights reserved. &nbsp;&nbsp; Design By KST@</p>     
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>