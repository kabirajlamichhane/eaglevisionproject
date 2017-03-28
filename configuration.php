<?php
	include('slider.php');
	session_start();

	if(!isset($_SESSION['email']))
	{
		header('location:loginform.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>well come to configuration site</title>
	<h2>just for configuration</h2>
</head>
<body>
     <form method="post" action="admincontroller.php">
       <!-- <input type="hidden" name="id" value="<?php echo $id ?>">  --> 
     	email<input type="text" name="email" placeholder="your eamil"><br><br />
     	password<input type="password" name="password" placeholder="your password"><br><br />
     	<input type="submit" name="check" value="update">
     </form>
</body>
</html>