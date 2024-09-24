<?php include('partials/menu.php') ?>


<!-- check -->

<?php 
error_reporting(1);
if(isset($_POST['submit']))
{
    $ad_name=$_POST['ad_name'];
    $ad_pass=$_POST['ad_pass'];

    $insert_ad="INSERT INTO user VALUES ('$ad_name','$ad_pass')";
    $query = mysqli_query($con,$insert_ad);
    echo "<script>alert('Admin add successsful!')</script>";
    echo "<script>window.open('manage_admin.php','_self')</script>";	

}

?>

<!-- Main content -->
<div class="main-content">
        <div class="container">
            <h2>Add admin</h2><br/><br/>
            <form method="post" action="">
                <table class=" w-50 p-3  " cellpadding="10px">
                    <tr>
                        <td>Name : </td>
                        <td>
                            <input type="text" name="ad_name" placeholder="Enter Your Name" required >
                        </td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td>
                            <input type="password" name="ad_pass" placeholder="Enter Your Password" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="submit"  class="btn btn-success">ADD</button>
                        </td>
                    </tr>
                </table>
            </form>



<?php include('partials/footer.php') ?>