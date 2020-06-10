<?php
 if(isset($_POST['submit']))

 	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
    // $email = $_POST['email'];
    // $mno = $_POST['mno'];
    //  $gender = $_POST['gender'];
    // $purpose= $_POST['purpose'];
    // $edate = $_POST['edate'];
    
    $insert_query = "INSERT INTO registration (fname,lname) 
       VALUES ('$fname','$lname')";
    mysqli_query($insert_query);
}





?>