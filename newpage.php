<?php
	if(isset($_GET['error']) && $_GET['error']==1)
		echo "Please enter all the fields";
?>

<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
	<script src="script/newscript.js"></script>
</head>
<body>
	<form method="post" action="controller.php" enctype="multipart/form-data" onsubmit= "return validation()">
	TITLE:
	<textarea name="title" id="title" rows="5" cols="25"></textarea><br>
	CONTENT:
	<textarea name="content"  id="content" rows="7" cols="50"></textarea>
	<input type="file" name="image" >
	<input type="submit" name="submit" value="ADD">	
	</form>
</body>
</html>