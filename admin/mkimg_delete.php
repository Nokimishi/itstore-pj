     
		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM marketing WHERE m_id='{$_GET['sl_id']}'";
				$result = mysqli_query($con, $del);
				unlink("marketing_img/".$_GET['sl_img']);
				rmdir("marketing_img/".$_GET['sl_img']);
				echo "<script>alert('Image has been deleted successfully!')</script>";
				echo "<script>window.open('view_marketing_img.php','_self')</script>";
		  ?>
		
        