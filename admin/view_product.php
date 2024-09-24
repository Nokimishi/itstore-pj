<?php include('partials/menu.php') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2>View Products</h2>
            <?php
				error_reporting(1);
				$view = "SELECT * FROM product";
				$result = mysqli_query($con, $view);
				
				echo "<table  class='table table-bordered border-primary'>";
				echo "<tr>
						  <th>Product id</th>
					  	  <th>Product brands</th>
					  	  <th>Product model</th>
					  	  <th>Product price</th>
						  <th>Cash Back</th>
						  <th>Category</th>
					  	  <th>Product image</th>
					  	  <th>Product description</th>
						  <th>Delete</th>
					  </tr>
					 ";
				
				while(list($p_id, $p_brands, $p_model,$p_cate, $p_price,$p_cash, $p_img, $p_desc) = mysqli_fetch_array($result))
				{
					echo "<tr align='center'>";
					echo "<td>". $p_id ."</td>";
					echo "<td>". $p_brands ."</td>";
					echo "<td>". $p_model ."</td>";
					echo "<td>". $p_cate ."</td>";		
					echo "<td>". $p_price ."</td>";
					echo "<td>". $p_cash ."</td>";
					echo "<td>"."<img src='product_image/$p_img' width='80px' height='70px'"."</td>";
					echo "<td>". $p_desc ."</td>";
					
					echo "<td>"."<a href='delete.php?pro_id=$p_id & pro_img=$p_img'>Delete</a>"."</td>";
				    echo "</tr>";
				}
				echo "</table>";
		  ?>
		
        </div>
    </div>

    <?php include('partials/footer.php') ?>
