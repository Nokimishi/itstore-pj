<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GOJIRA IT STORE-BUY</title>
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
                      <li><a href="contact.php">Contact Us</a></li>
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

  <!-- PHP Connect -->

  <?php
	error_reporting(1);
	
	include("dbconnect.php");
	
	$product_brand = $_REQUEST['buy_pro'];
	
	if(isset($_REQUEST['buy']))
	{
		$b = $_REQUEST['b'];
		$m = $_REQUEST['m'];
		$p = $_REQUEST['p'];
    $c = $_REQUEST['c'];
		$phno = $_REQUEST['phno'];
		$add = $_REQUEST['add'];
		$order_no = no.rand(1,100);
		if(mysqli_query($con,"INSERT INTO buy VALUES('$b', '$m', '$p','$c','$phno',  '$add', '$order_no')"))
		{
			echo "<script>location.href='buysuccess.php?order_no=$order_no'</script>";
		}
	}
?>



  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>BUY</h3>
          <span class="breadcrumb"><a href="index.php">Home</a>  >  BUY</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row ">
        
        <form method="post" >
          <!-- PHP Start -->

      <?php
				
				$sel=mysqli_query($con,"select * from product where p_id='$product_brand'");
				$mat=mysqli_fetch_array($sel);

			?>
          <div class="form-row m-2 p-2 ">
            <div class="form-group col-md-6 p-2">
              <label for="inputName">Brand   <i class="fa-solid fa-globe fa-lg" style="color: #B197FC;"></i></label>
              <input type="text" class="form-control text-primary"  id="inputName" name="b" readonly value="<?php echo $mat['p_brand']; ?>">
            </div>
            <div class="form-group col-md-6 p-2">
              <label for="inputEmail">Model   <i class="fa-brands fa-buromobelexperte fa-lg" style="color: #B197FC;"></i></label>
              <input type="text" class="form-control text-primary" id="inputEmail" name="m" readonly value="<?php echo $mat['p_model']; ?>">
            </div>
            <div class="form-group col-md-6 p-2">
              <label for="inputEmail">Price  <i class="fa-solid fa-money-bill fa-lg" style="color: #B197FC;"></i></label>
              <input type="text" class="form-control text-primary" id="inputEmail" name="p" readonly value="<?php echo $mat['p_price']; ?>">
            </div>
            <div class="form-group col-md-6 p-2">
              <label for="inputEmail">Cashback   <i class="fa-solid fa-hand-holding-dollar fa-lg" style="color: #B197FC;"></i></label>
              <input type="text" class="form-control text-primary" id="inputEmail" name="c" readonly value="<?php echo $mat['p_cashback']; ?>">
            </div>
            <div class="form-group col-md-6 p-2">
              <label for="inputEmail">Phone Number   <i class="fa-solid fa-phone fa-lg" style="color: #B197FC;"></i></label>
              <input type="text" class="form-control text-warning" id="inputEmail" placeholder="Enter Phone number" name="phno" required>
            </div>
            <div class="form-group col-md-6 p-2">
              <label for="floatingTextarea2">Adress   <i class="fa-solid fa-address-card fa-lg" style="color: #B197FC;"></i></label>
              <textarea class="form-control" placeholder="Adress" name="add" id="floatingTextarea2" style="height: 100px" required></textarea>
            </div>
          </div>
      
          <div class="form-group m-4">
            <button type="submit" class="btn btn-primary" name="buy"><i class="fa-solid fa-cart-shopping fa-lg" style="color: #63E6BE;"></i>    Buy</button>
            <button type="reset" class="btn btn-primary"><i class="fa-solid fa-rectangle-xmark fa-lg" style="color: #FFD43B;"></i>  Cancle</button>
          </div>
        </form>
      
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