<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GOJIRA IT STORE -Login</title>
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
                      <li><a href="signup.php" class="active">Sign In</a></li>
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

  <!-- PHP START -->
  <?php
	error_reporting(1);
	include("dbconnect.php");
	
	$id = $_REQUEST['buy_pro'];
	
	if(isset($_REQUEST['login']))
	{
		
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['pass'];
		$query = mysqli_query($con,"SELECT email,password FROM sign_up WHERE email='$email'");
		$arr = mysqli_fetch_array($query);
		if(($arr['email']==$email) && ($arr['password']==$pass))
		{
			echo "<script>location.href='buy.php?buy_pro=$id'</script>";
		
		}
		else
		{
			$er="UserID or Password do not match.Try again.";
		}
	}
	
?>


  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Login</h3>
          <span class="breadcrumb"><a href="index.php">Home</a>  >  LOGIN</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
            <p align="center" class="text-warning fw-bolder">Please Log in with your User account.  <i class="fa-solid fa-bomb fa-lg" style="color: #74C0FC;"></i></p>
			<form method="post">
				<table border="0" cellpadding="15px" style="font-size:16px; font-weight:bold;" align="center">
					<tr><td colspan="2"><?php echo "<font color='red'>$er</font>";?></td></tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email">    <i class="fa-solid fa-envelope fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass">     <i class="fa-solid fa-lock fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><button type="submit" name="login" class="btn btn-success"><i class="fa-solid fa-right-to-bracket fa-lg" style="color: #74C0FC;"></i>    Log In</button> <br><br>
													   <a href="signup.php">Create account     <i class="fa-solid fa-square-plus fa-xl" style="color: #63E6BE;"></i></a>
                             
						</td>
					</tr>
				</table>
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