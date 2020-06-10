<?php
include("config.php");
include("header.php")
?>
<!DOCTYPE html>
<html>
<head>
<title>heading 2</title>
   <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="Css/Kfms_style.css" />
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <body>
<!-- registration form -->
<div class="container">
  <div class="col-lg-12 d-flex justify-content-center col-md-12 col-12">
    <h1 class="text-center text-muted">Registration for visitor </h1>
     <form method="post" action="" enctype="multipart/form-date">
        <div class="form-group">
          <label> ENTER YOUR FIRST NAME:</label>
          <input class="form-control" type="text" name="fname" placeholder="Enter first name" required=""/>
        </div>
        <div class="form-group">
          <label>ENTER YOUR LAST NAME:</label>
          <input class="form-control" type="text" name="lname" placeholder="Enter last name" required=""/>
        </div>
        <div class="form-group">
          <label>ENTER YOUR EMAIL:</label>
          <input class="form-control" type="text" name="email" placeholder="Enter email name" required=""/>
        </div>
        <div class="form-group">
          <label>ENTER YOUR MOBILE NO:</label>
          <input class="form-control" type="text" name="mno"placeholder="Enter Mobile number" required=""/>
        </div> 
        <label>SELECT YOUR PURPOSE :</label> 
        <div class="form-group"> 
          <select name="purpose" class="form-control">
            <option value="select">select</option>
            <option value="meeting">meeting</option>
            <option value="interview">interview</option>
            <option value="addmision">Addmision</option>
            <option value="addmision">other</option>      
          </select>  
      </div>
        <div class="form-group">       
          <div class="form-group">
            <label>DATE AND TIME OF VISITING:</label>
            <input type="datetime-local" class="form-control" name="edate" required=""/><br>    
          </div>
        </div>
        <input  class="btn btn-primary" type="submit" name="submit" value="submit"> 
    </form>     
  </div>
</div>
<?php
 include ("footer.php");
?>
</body>
</html>
<?php

 if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$gender =$_POST['gender'];
$purpose= $_POST['purpose'];
$edate = $_POST['edate'];

$insert_query = "INSERT INTO registration (fname,lname,email,mno,gender,purpose,edate) 
                      VALUES ('$fname','$lname','$email','$mno','$gender','$purpose','$edate')";
mysqli_query($conn,$insert_query);

    }
?>
