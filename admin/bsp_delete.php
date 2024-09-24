     
		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM bestsellpd WHERE bs_id='{$_GET['pbs_id']}'";
				$result = mysqli_query($con, $del);
				unlink("bsproduct_image/".$_GET['pbs_img']);
				rmdir("bsproduct_image/".$_GET['pbs_img']);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('view_bsp.php','_self')</script>";
		  ?>
		
        