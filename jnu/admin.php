<?php
include("config.php");
include("header.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="Css/Kfms_style.css" />

</head>

<body>

            <div class="container">
                <div class="col-md-8">
            </div>
            
            <div class="col-md-8">
	        <img src="images/ad.jpg" alt="adminlogo" width="105" height="100"   style="align-items:center;">
			</div>
			 <div class="col-md-8">
             <form  style="margin-top:3% ;" method="POST" action="" >
			   
            <input class="field" type="text" name="username"placeholder="Enter user  Id" required=""/><br>
			<input class="field" type="password" name="password"placeholder="Enter your password" required=""/><br>

                <input  class="field" name="submit" type="submit" value="login">
                <input  class="field" type="submit" value="forgot password">
                
             </form>     
         </div> </div></div>
			 <div style="margin-top:100px; background-color:red;">
<h1>address: jaipur national university</h1>
<p> near Rto </p>
 <footer style="background-color:black;
  font-size:20px;
  margin-bottom:5%;color:white; text-align:center;"> MADE BY :shubham jha | © 2020 Jaipur National University. All Rights Reserved.</footer>
  </div>
          
                    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $adminusername = $_POST['username'];
    $adminpass = $_POST['password'];

    $sel_admin = mysqli_query($conn,"SELECT * FROM admin where username='$adminusername' AND pass='$adminpass'");

    if($sel_admin)
    {
        echo "login Successfull";
        header("location:adminpanel.php");
    }
    else
    {
        echo "login Failed";
    }

}

?>