<?php
	 $conn = new mysqli("localhost","root","",100);
	
	 
	 $id=$_GET['edit_id'];
	 $sql= "SELECT * FROM pages where id='$id'";
	 $res=mysqli_query($conn,$sql);
	 $result=mysqli_fetch_assoc($res);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
	<script src="JS/newscript.js"></script>
</head>
<body>
	<form method="post" action="controller.php?edit_id=<?php echo $id; ?>" enctype="multipart/form-data" onsubmit= "return validation()">
	
	
	 <input type="hidden" name="id" value="<?php echo $id?>">
	TITLE:
	<input name="title" id="title" value="<?php echo  $result['title']; ?>" rows="5" cols="25"><br />
	CONTENT:
	<textarea name="content"  id="content" rows="7" cols="50"><?php echo  $result['content']; ?></textarea><br />
	<input type="file" name="image" value="<?php echo  $result['image']; ?>"/>
	<!-- <input type="hidden" name="$img" value="<?php echo $img;?>" /> -->
	<input type="submit" name="update" value="EDIT">	
	</form>
</body>
</html>