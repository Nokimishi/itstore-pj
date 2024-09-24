<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GOJIRA IT STORE- Product Detail</title>

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
                      <li><a href="product-details.php" class="active">Product Detail</a></li>
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
<!-- PHP connect-->

<?php

	error_reporting(1);
	include("admin/function.php");

?>


  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Product Details</h3>
          <span class="breadcrumb"><a href="index.php">Home</a>  >  <a href="shop.php">Products</a>  > Product Detail</span>
        </div>
      </div>
    </div>
  </div>


  <div class="single-product section ">
    <div class="container">
      <div class="row">
        <!-- PHP Start -->
        <?php
			  if(isset($_GET['pro_id']))
			  {
				$product_id = $_GET['pro_id'];
				$get_pro = "SELECT * FROM product WHERE p_id='$product_id'";
				$run_pro = mysqli_query($con,$get_pro);
				while($row_pro = mysqli_fetch_array($run_pro))
				{
					$pro_id = $row_pro['p_id'];
					$pro_model = $row_pro['p_model'];
					$pro_price = $row_pro['p_price'];
          $pro_cashback=$row_pro['p_cashback'];
          $pro_cate = $row_pro['p_cate'];
					$pro_image = $row_pro['p_image'];
					$pro_desc = $row_pro['p_desc'];
					echo " 
					
              <div class='col-lg-6 tr1'>
                <div class='left-image'>
                  <img src='admin/product_image/$pro_image' alt=''>
                </div>
              </div>
              <div class='col-lg-6 align-self-center'>
                <h4>$pro_model</h4>
                <span class='price'>$pro_price</span>
                <p class='text-success fw-bolder fs-5' >Cashback $pro_cashback</p>
                <p><h6>Specification</h6><br>$pro_desc</p>
                <form id='qty' action=''>
                  <a href='shop.php' class='btn btn-primary'>Go Back</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <a href='login.php?buy_pro=$pro_id' class='btn btn-primary'>BUY</a>
                </form>
                <ul>
                  <li><span>Product ID:</span>$pro_id</li>
                  <li><span>Category</span>$pro_cate</li>
                  
                </ul>
              </div>
              <div class='col-lg-12'>
                <div class='sep'></div>
              </div>
						
					";
				}
			  }
			?>
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





       