<?php
  $conn=new mysqli("localhost","root","","100");
  $sql="SELECT * FROM images";
  $result=mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<title>for multiple image selction</title>
	<h1>plz enter the filed</h1>
</head>
<body>

	<form method="post" action="controller.php" enctype="multipart/form-data">
	<select name="pid">
	<?php while($res=mysqli_fetch_assoc($result))
	{
		echo"<option>{$res['id']}</option>";
	}
	?>
	</select>
	<input type="file" name="image">
		<input type="submit" name="select" value="select">
	</form>

</body>
</html>