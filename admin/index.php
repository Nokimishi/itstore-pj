<!DOCTYPE html>
<html>
    <head>
        <title>GOJIRA-LOGIN</title>
        <link rel="stylesheet" href="style.css">

    <!-- PHP START -->
    <?php
      error_reporting(1);
      
      include("dbconnect.php"); 
      
      if(isset($_REQUEST['login']))
      {
        
        $uname = $_REQUEST['uname'];
        $pass = $_REQUEST['pass'];
        $check = mysqli_query($con,"SELECT name,password FROM user WHERE name='$uname'");
        $run = mysqli_fetch_array($check);  
        if(($run['name']==$uname) && ($run['password']==$pass))
        {
          echo "<script>location.href='home.php'</script>";
        }
        else
        {
          $error = "Wrong username or password!";
        }
      
      }

?>
    </head>

<body>
<div class="wrapper">
<form method="post" action="">
<h1>LOGIN</h1>
<div class="input-box">
    <input type="text" name="uname" placeholder="USERNAME" required>
</div>
<div class="input-box">
    <input type="password" name="pass" placeholder="PASSWORD" required>
</div>
<br /><br />
<?php error_reporting(1); 
echo "<font color='red'>$error</font>"; 
?>
<button type="submit" name="login" class="btn">Login</button>
</form>
</div>
</body>
</html>