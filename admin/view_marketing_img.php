<?php include('partials/menu.php') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2>View Marketing images</h2>
            <?php
				error_reporting(1);
				$view = "SELECT * FROM marketing";
				$result = mysqli_query($con, $view);
				
				echo "<table  class='table table-bordered border-primary'>";
				echo "<tr>
						  <th>No</th>
					  	  <th>Marketing image</th>
						  <th>#</th>
					  </tr>
					 ";
				
				while(list($m_id,$m_img) = mysqli_fetch_array($result))
				{
					echo "<tr align='center'>";
					echo "<td>". $m_id ."</td>";
					echo "<td>"."<img src='marketing_img/$m_img' width='80px' height='70px'"."</td>";
					
					echo "<td>"."<a href='mkimg_delete.php?sl_id=$m_id & sl_img=$m_img'>Delete</a>"."</td>";
				    echo "</tr>";
				}
				echo "</table>";
		  ?>
		
        </div>
    </div>

    <?php include('partials/footer.php') ?>
