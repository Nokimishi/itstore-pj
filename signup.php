<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GOJIRA IT STORE-Signup</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets\images/gz.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
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
	
	$name=$_REQUEST['n'];
	$eid=$_REQUEST['eid'];
	$pass=$_REQUEST['pwd'];
	$ph=$_REQUEST['phno'];
	$gen=$_REQUEST['r1'];
	$city=$_REQUEST['city'];
	$tsp=$_REQUEST['tsp'];
	$noti=$_REQUEST['r2'];
	if(isset($_REQUEST['reg']))
	{
		$sql=mysqli_query($con,"SELECT * FROM sign_up WHERE email='$eid' ");
		$arr=mysqli_fetch_array($sql);
		if($arr['email']==$eid )
		{
         $err='<tr>
                <td colspan="2"><font color="red" size="3">User Already Exist</font></td>
              </tr>';

          $err2='<tr>
                  <td colspan="2"><font color="violet" size="3">Change Your Email !</font></td>
              </tr>';
		}
    else 
    {
      mysqli_query($con,"INSERT INTO sign_up VALUES('$name','$eid','$pass','$ph','$gen','$city','$tsp','$noti')");
			      
      echo "<script>location.href='signup-success.php?first=$name &  wel=$eid'</script>";
    }
		
	}
?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>SIGN UP</h3>
          <span class="breadcrumb"><a href="index.php">Home</a> > SIGN UP</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
      <h2 align="center">Create an account!!</h2><br./><br />
      <form method="post"  >
				<table border="0" cellpadding="15px" style="font-size:16px; font-weight:bold;" align="center">
          
					<tr>
            <td>Name</td>
						<td><input type="text" name="n" required>    <i class="fa-solid fa-user fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="eid"  required>    <i class="fa-solid fa-envelope fa-lg" style="color: #B197FC;"></i>
            </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd"  required>    <i class="fa-solid fa-lock fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					<tr>
						<td>Phone No.</td>
						<td><input type="text" name="phno"  required>    <i class="fa-solid fa-phone fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="radio" name="r1" value="male">Male <i class="fa-solid fa-person fa-lg" style="color: #B197FC;"></i>&nbsp; 
            <input type="radio" name="r1" value="female">Female <i class="fa-solid fa-person-dress fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="city" required>    <i class="fa-solid fa-city fa-lg" style="color: #B197FC;"></i></td>
					</tr>
					<tr>
						<td>Township</td>
						<td><input type="text" name="tsp" required>   <i class="fa-solid fa-building fa-lg" style="color: #B197FC;"></i></td>
					</tr>
          <?php echo $err ?>
          <?php echo $err2 ?>
					<tr>
						<td colspan="2" align="center" class="text-warning fw-bold">Send Email Notification?  <i class="fa-solid fa-bell fa-lg" style="color: #B197FC;"></i><br>
														<input type="radio" name="r2" value="yes">Yes &nbsp; <input type="radio" name="r2" value="no">No
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center" >
													  
                             <button type="submit" class="btn btn-primary" name="reg">Create account  <i class="fa-solid fa-right-to-bracket fa-lg" style="color: #63e6be;"></i></button> &nbsp;
                             <button type="reset"  class="btn btn-primary">Cancel <i class="fa-solid fa-xmark fa-lg" style="color: #FFD43B;"></i></button>
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

