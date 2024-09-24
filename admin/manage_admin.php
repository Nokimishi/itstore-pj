<?php include('partials/menu.php') ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2>Manage admin</h2><br />
        <!-- Buttom -->
        <a href="insert-admin.php" class="btn-secondary  bg-info text-light p-1 text-decoration-none fw-bold">Add Admin</a>
        <br /><br />
        <!-- table start -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  

    <?php 
        error_reporting(1);
        // Query to get admin
        $sql="SELECT * FROM user";
        $res=mysqli_query($con,$sql);

        // Check the Query
        if($res==TRUE)
        {
            //Check data in database

            $count = mysqli_num_rows($res);
            //No.of rows in database
            $sn=1;
            
            if($count>0)
            {
                //Have data in database
                while($rows=mysqli_fetch_assoc($res))
                {
                    $full_name=$rows['name'];
                    $am_pass=$rows['password'];
                    
                    
                    //Display value in table
                    ?>
                        <tr>
                            <th scope="row"><?php echo $sn++; ?></th>
                            <th><?php echo $full_name; ?></th>
                            <th><?php echo $am_pass; ?></th>
                         </tr>
                    <?php
                    
                }
            }
           
        }

    ?>
  
</table>
<!-- table End -->
        </div>
    </div>

    <?php include('partials/footer.php') ?>
