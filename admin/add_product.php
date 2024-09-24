<?php include('partials/menu.php') ?>
<?php
	error_reporting(1);
	
	
	
	if(isset($_POST['insert']))
	{
		
		$p_brands = $_POST['p_brands'];
		$p_model = $_POST['p_model'];
		$p_price = $_POST['p_price'];
		$p_cash = $_POST['p_cash'];
		$p_cate = $_POST['p_cate'];
		$p_desc = $_POST['p_desc'];
		$p_img = $_FILES['p_img']['name'];
		
		
		
		move_uploaded_file($_FILES['p_img']['tmp_name'],"product_image/$p_img");
		
		$insert_p = "INSERT INTO product VALUES('','$p_brands','$p_model','$p_price','$p_cash','$p_cate','$p_img','$p_desc')";
		$query = mysqli_query($con,$insert_p);
		echo "<script>alert('Product has been successfully inserted into the database.')</script>";
		echo "<script>window.open('add_product.php','_self')</script>";	
			
		
	}
?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container mt-2 mb-5">
            <h2 class="text-center p-2 text-decoration-underline">Insert Product</h2>
            <form method="post" action="add_product.php" enctype="multipart/form-data">
			<table border="0" cellpadding="10px" align="center" style="font-size:16px; font-weight:bold;">
				<tr>
						<td><i class="fa-solid fa-object-group fa-lg" style="color: #4200bd;"></i>Product Category</td>
						<td>
							<select name="p_cate" required>
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
						<select name="p_brands" required>
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
					<td><input type="text" name="p_model" required></td>
				</tr>
				<tr>
					<td><i class="fa-solid fa-hand-holding-dollar fa-lg" style="color: #4200bd;"></i>Product Price</td>
					<td><input type="text" name="p_price" required></td>
				</tr>
				<tr>
					<td><i class="fa-solid fa-percent fa-lg" style="color: #4200bd;"></i>Cash Back</td>
					<td><input type="text" name="p_cash" ></td>
				</tr>
				<tr>
					<td><i class="fa-solid fa-file-export fa-lg" style="color: #4200bd;"></i>Product Image</td>
					<td><input type="file" name="p_img" required></td>
					
				</tr>
				<tr>
					<td><i class="fa-solid fa-keyboard fa-lg" style="color: #4200bd;"></i>Product Description</td>
					<td><textarea name="p_desc" cols="20"  rows="10" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" name="insert"  class="btn btn-success">Add Product</button></td>
				</tr>
			</table>
		  </form>
        </div>
    </div>

    <?php include('partials/footer.php') ?>
