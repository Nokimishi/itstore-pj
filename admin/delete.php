     
		  <?php
				error_reporting(1);
	
				include("dbconnect.php");
	
				$del = "DELETE FROM product WHERE p_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_image/".$_GET['pro_img']);
				rmdir("product_image/".$_GET['pro_img']);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('view_product.php','_self')</script>";
		  ?>
		
        