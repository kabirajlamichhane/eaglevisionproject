<?php
   $conn= mysqli_connect("localhost","root","","100");
   if(isset($_POST['check']))
   {
	   	$email=$_POST['email'];
	   	$password=$_POST['password'];
	    $sql="SELECT * FROM user WHERE email='$email' AND password='$password'"; 
	   	$result=mysqli_query($conn,$sql);
	   	   // print_r ($result);die;
	   	if(mysqli_num_rows($result) == 1)
		   	{
		   		// echo "finally";
		   		header('location:adminview.php');
		   	}
		   	else
		   	{
		   		echo "sorry";
		   	}
 	}
		
?>