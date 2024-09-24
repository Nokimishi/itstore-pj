<?php include('partials/menu.php') ?>
<!--PHP -->
<?php
	error_reporting(1);
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2>Welcome Admin</h2>
            <ul>
                <li><buttom><a href="view_feedback.php"><i class="fa-solid fa-binoculars" style="color: #9e0a0a;"></i>  View feedback</a></li>
                <li><a href="view_order.php"><i class="fa-solid fa-binoculars" style="color: #9e0a0a;"></i>View Order</a></li>
                <li><a href="view_product.php"><i class="fa-solid fa-binoculars" style="color: #9e0a0a;"></i>View products</a></li>
                <li><a href="view_bsp.php"><i class="fa-solid fa-binoculars" style="color: #9e0a0a;"></i>View Bestsell Products</a></li>
                <li><a href="view_marketing_img.php"><i class="fa-solid fa-binoculars" style="color: #9e0a0a;"></i>View marketing image</a></li><br/>
                <li><a href="?log=out"><i class="fa-solid fa-right-from-bracket" style="color: #e30d0d;"></i>Logout</a></li>
            </ul>
        </div>
    </div>

    <?php include('partials/footer.php') ?>
