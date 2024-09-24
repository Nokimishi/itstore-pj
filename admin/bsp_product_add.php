<?php include('partials/menu.php') ?>
<?php
	error_reporting(1);
	
	
	
	if(isset($_POST['insert']))
	{
		
		$bs_brands = $_POST['bs_brands'];
		$bs_model = $_POST['bs_model'];
		$bs_price = $_POST['bs_price'];
        $bs_cate = $_POST['bs_cate'];
		$bs_img = $_FILES['bs_img']['name'];
		
		
		
		move_uploaded_file($_FILES['bs_img']['tmp_name'],"bsproduct_image/$bs_img");
		
		$insert_p = "INSERT INTO bestsellpd VALUES('','$bs_cate','$bs_brands','$bs_model','$bs_img')";
		$query = mysqli_query($con,$insert_p);
		echo "<script>alert('Product has been successfully inserted into the database.')</script>";
		echo "<script>window.open('bsp_product_add.php','_self')</script>";	
			
		
	}
?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container mt-2 mb-5">
            <h2 class="text-center p-2 text-decoration-underline">Insert Product</h2>
            <form method="post" action="bsp_product_add.php" enctype="multipart/form-data">
			<table border="0" cellpadding="10px" align="center" style="font-size:16px; font-weight:bold;">
				<tr>
						<td><i class="fa-solid fa-object-group fa-lg" style="color: #4200bd;"></i>Product Category</td>
						<td>
							<select name="bs_cate" required>
								<option>Select Category</option>
								<?php
									$get_cate = "SELECT * FROM categorie";
									$run_cate = mysqli_query($con,$get_cate);
									while($row_cate = mysqli_fetch_array($run_cate))
									{
										$c_id = $row_cate['c_id'];
										$c_title = $row_cate['c_title'];
										echo "<option value='$c_title'>$c_title</a></li>";
									}
								?>
							</select>
						</td>
				</tr>

				<tr>
					<td><i class="fa-solid fa-database fa-lg" style="color: #4200bd;"></i>Product Brands</td>
					<td>
						<select name="bs_brands" required>
							<option>Select brands</option>
							<?php
								$get_brand = "SELECT * FROM brands";
								$run_brand = mysqli_query($con,$get_brand);
								while($row_brand = mysqli_fetch_array($run_brand))
								{
									$b_id = $row_brand['b_id'];
									$b_title = $row_brand['b_title'];
									echo "<option value='$b_title'>$b_title</a></li>";
								}
							?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td><i class="fa-brands fa-bilibili fa-lg" style="color: #4200bd;"></i>Product Model</td>
					<td><input type="text" name="bs_model" required></td>
				</tr>
				<tr>
					<td><i class="fa-solid fa-file-export fa-lg" style="color: #4200bd;"></i>Product Image</td>
					<td><input type="file" name="bs_img" required></td>
					
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" name="insert"  class="btn btn-success">Add </button></td>
				</tr>
			</table>
		  </form>
        </div>
    </div>

    <?php include('partials/footer.php') ?>
