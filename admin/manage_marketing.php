<?php include('partials/menu.php') ?>
<?php
	error_reporting(1);
	
	
	
	if(isset($_POST['add']))
	{
		$m_img = $_FILES['m_img']['name'];
		
		
		
		move_uploaded_file($_FILES['m_img']['tmp_name'],"marketing_img/$m_img");
		
		$insert_m = "INSERT INTO marketing VALUES('','$m_img')";
		$query = mysqli_query($con,$insert_m);
		echo "<script>alert('Image has been successfully inserted into the database.')</script>";
		echo "<script>window.open('manage_marketing.php','_self')</script>";	
			
		
	}
?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container mt-2 mb-5">
            <h2 class="text-center p-2 text-decoration-underline">ADD Slider Image</h2>
            <form method="post" action="manage_marketing.php" enctype="multipart/form-data">
			<table border="0" cellpadding="10px" align="center" style="font-size:16px; font-weight:bold;">
				<tr>
					<td>Slider Image</td>
					<td><input type="file" name="m_img" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><button type="submit" name="add" class="btn btn-success" >ADD</button></td>
				</tr>
			</table>
		  </form>
        </div>
    </div>

    <?php include('partials/footer.php') ?>
