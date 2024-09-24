<?php
	
	$con = mysqli_connect("localhost","root","","itstore");

	//getting the Categories from Categorie table.
	function getCategories()
	{
		global $con;
		$get_cate = "SELECT * FROM categorie";
		$run_cate = mysqli_query($con,$get_cate);
		while($row_cate = mysqli_fetch_array($run_cate))
		{
			$c_id = $row_cate['c_id'];
			$c_title = $row_cate['c_title'];
			echo "
			
			<li>
            	<a   href='shop.php?categorie=$c_title' >$c_title </a>
          	</li>";
            
		}
	}


	//getting the products from product table.
	function getProduct()
	{
	  if(!isset($_GET['categorie']))
	  {
		global $con;
		$get_pro = "SELECT * FROM product order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$pro_id = $row_pro['p_id'];
			$pro_brand = $row_pro['p_brand'];
			$pro_model = $row_pro['p_model'];
			$pro_price = $row_pro['p_price'];
			$pro_cashback=$row_pro['p_cashback'];
            $pro_cate = $row_pro['p_cate'];
			$pro_filter = $row_pro['p_filter'];
			$pro_image = $row_pro['p_image'];
			echo " 
					
			
                <div class='col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 $pro_filter'>
                    <div class='item'>
                        <div class='thumb'>
                            <a href='product-details.php?pro_id=$pro_id' ><img src='admin/product_image/$pro_image' alt='' style='height:200px'></a>
                            <span class='price'>$pro_price</span>
                        </div>
                        <div class='down-content'>
                            <span class='category'> $pro_cate</span>
                            <h4>$pro_model</h4>
							<p class='text-info fw-bolder'>Cashback $pro_cashback</p>
                            <a href='login.php?buy_pro=$pro_id'><i class='fa fa-shopping-bag'></i></a>
                        </div>
                    </div>
                </div>
        
           
			";
			
		}
	  }
	}
	
	function getcategoriepro()
	{
	  if(isset($_GET['categorie']))
	  {
		global $con;
		$cate_title = $_GET['categorie'];
		$get_cate_pro = "SELECT * FROM product WHERE p_cate='$cate_title'";
		$run_cate_pro = mysqli_query($con,$get_cate_pro);
		while($row_cate_pro = mysqli_fetch_array($run_cate_pro))
		{ 
			$pro_id = $row_cate_pro['p_id'];
			$pro_brand = $row_cate_pro['p_brand'];
			$pro_model = $row_cate_pro['p_model'];
			$pro_price = $row_cate_pro['p_price'];
			$pro_cashback=$row_cate_pro['p_cashback'];
            $pro_cate = $row_cate_pro['p_cate'];
			$pro_image = $row_cate_pro['p_image'];
			echo " 
        
            <div class='col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv'>
                <div class='item'>
                    <div class='thumb'>
                        <a href='product-details.php?pro_id=$pro_id'><img src='admin/product_image/$pro_image' alt='' style='height:200px'></a>
                        <span class='price'>$pro_price</span>
                    </div>
                    <div class='down-content'>
                        <span class='category'> $pro_cate</span>
                        <h4>$pro_model</h4>
						<p class='text-info fw-bolder' >Cashback $pro_cashback</p>
                        <a href='login.php?buy_pro=$pro_id'><i class='fa fa-shopping-bag'></i></a>
                    </div>
                </div>
            </div>
           
    
     
			
			
			";
			
		}
	  }
	}
	
	
	
	function getimg(){
		global $con;
		$get_mrk = "SELECT * FROM marketing";
		$run_mrk = mysqli_query($con,$get_mrk);
		while($row_mrk = mysqli_fetch_array($run_mrk))
		{
			$m_id = $row_mrk['m_id'];
			$m_img = $row_mrk['m_image'];
			echo "
			
                <div class='carousel-item active'>
                  <img src='admin/marketing_img/$m_img' class='d-block w-100 rounded-5' style='height: 450px;' alt=''>
                </div>
				
				
            ";
			
			
            
		}
	}

	function getbsp(){
		global $con;
		$get_bsp = "SELECT * FROM bestsellpd";
		$run_bsp = mysqli_query($con,$get_bsp);
		while($row_bsp = mysqli_fetch_array($run_bsp))
		{
			$bs_id = $row_bsp['bs_id'];
			$bs_cate=$row_bsp['bs_cate'];
			$bs_model=$row_bsp['bs_model'];
			$bs_img = $row_bsp['bs_img'];
			echo "
			<div class='col-lg-2 col-md-6 col-sm-6'>
				<div class='item'>
					<div class='thumb'>
						<img src='admin/bsproduct_image/$bs_img' alt='' style='height:150px'>
					</div>
					<div class='down-content'>
						<span class='category'>$bs_cate</span>
						<h4>$bs_model</h4>
					</div>
				</div>
        	</div>
			";
		}
	}
?>