<?php include('partials/menu.php') ?>

<main>
    <div class="container mt-4">
        <h2>Orders</h2>
            <!-- PHP START -->
            <?php
				error_reporting(1);
	
				$view = "SELECT * FROM buy";
				$result = mysqli_query($con, $view);
				
				echo "<table class='table table-bordered border-primary' cellspacing='0' cellpadding='5px'>";
				echo "<tr>
						  <th>Brand</th>
					  	  <th>Model</th>
					  	  <th>Price</th>
						  <th>cashback</th>
					  	  <th>Phone</th>
						  <th>Address</th>
						  <th>Order_no</th>
					  </tr>
					 ";
				
				while(list($b,$m,$p,$c,$phno,$add,$order_no) = mysqli_fetch_array($result))
				{
					echo "<tr align='center'>";
					echo "<td>". $b ."</td>";
					echo "<td>". $m ."</td>";
					echo "<td>". $p ."</td>";
					echo "<td>". $c ."</td>";
					echo "<td>". $phno ."</td>";
					echo "<td>". $add ."</td>";
					echo "<td>". $order_no ."</td>";
					echo "</tr>";
				}
				echo "</table>";
		    ?>
    </div>
</main>

<?php include('partials/footer.php') ?>
