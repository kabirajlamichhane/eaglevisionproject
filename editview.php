<?php
	 
	 $conn = new mysqli("localhost","root","",100);
	
	 
	 $id=$_GET['ad_id'];
	 $sql= "SELECT * FROM user where id='$id'";
	 $res=mysqli_query($conn,$sql);
	 $result=mysqli_fetch_assoc($res);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>auth admin</title>
	<script src="JS/newscript.js"></script>
</head>
<body>
	<form method="post" action="controller.php?ad_id=<?php echo $id; ?>"  onsubmit= "return validation()">
	
	email<input name="email"  value="<?php echo  $result['email']; ?>"><br />
	password<textarea name="password"  ><?php echo  $result['password']; ?></textarea><br />
	<input type="submit" name="adminupdate" value="UPDATE">	
	</form>
</body>
</html>