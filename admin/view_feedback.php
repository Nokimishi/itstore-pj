<?php include('partials/menu.php') ?>

<main>
    <div class="container mt-4">
    <h2>All Feedbacks </h2>
    <!-- PHP START -->
        <?php
				error_reporting(1);

				$view = "SELECT * FROM feedback";
				$result = mysqli_query($con, $view);
				
				echo "<table class='table table-bordered border-primary' cellspacing='0' cellpadding='5px'>";
				echo "<tr>
						  <th>Email</th>
					  	  <th>Phone</th>
					  	  <th>Message</th>
					  	 
					  </tr>
					 ";
				
				while(list($eadd, $ph, $msg) = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>". $eadd ."</td>";
					echo "<td>". $ph ."</td>";
					echo "<td>". $msg ."</td>";
					echo "</tr>";
				}
				echo "</table>";
		  ?>
		  
    </div>

</main>

<?php include('partials/footer.php') ?>
