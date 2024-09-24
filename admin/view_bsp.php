<?php include('partials/menu.php') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2>View Bestsell Products</h2>
            <?php
				error_reporting(1);
				$view = "SELECT * FROM bestsellpd";
				$result = mysqli_query($con, $view);
				
				echo "<table  class='table table-bordered border-primary'>";
				echo "<tr>
						  <th>Product id</th>
					  	  <th>Product brands</th>
					  	  <th>Product model</th>
						  <th>Category</th>
					  	  <th>Product image</th>

						  <th>Delete</th>
					  </tr>
					 ";
				
				while(list($bs_id, $bs_cate, $bs_brands, $bs_model, $bs_img) = mysqli_fetch_array($result))
				{
					echo "<tr align='center'>";
					echo "<td>". $bs_id ."</td>";
					echo "<td>". $bs_brands ."</td>";
					echo "<td>". $bs_model ."</td>";
					echo "<td>". $bs_cate ."</td>";		
					echo "<td>"."<img src='bsproduct_image/$bs_img' width='80px' height='70px'"."</td>";
					
					echo "<td>"."<a href='bsp_delete.php?pbs_id=$bs_id & pbs_img=$bs_img'>Delete</a>"."</td>";
				    echo "</tr>";
				}
				echo "</table>";
		  ?>
		
        </div>
    </div>

    <?php include('partials/footer.php') ?>
