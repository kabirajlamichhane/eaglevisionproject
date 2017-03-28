<?php
session_start();


	if(!isset($_SESSION['email']))
	{
		header('location:loginform.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>wellcome to pageview</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">;
	<script src="static/js/jquery-3.1.1.min.js"></script>
    <script src="static/js/bootstrap.min.js"  ></script>
	<!-- <script src="delscript.js"></script> -->
</head>
<body>
 	<form method="post" action=""  >

	<a href="newpage.php" class="btn btn-info" role="button">ADD PAGE</a>
	<table border='1px' class="table">
 		<tr class="success">
	 		<th>id</th>
	 		<th>title</th>
	 		<th>content</th>
	 		<th>image</th>
	 		<th>EDIT</th>
	 		<th>DELETE</th>
 		</tr>
	
            <?php

                	include('crud.php');
                	include('slider.php');
					$obj = new crud();
					$result=$obj->SELECT();
					foreach ($result as $row)
				 	{
    					echo"<tr>";
 		     			echo"<td>".$row['id']."</td>";
 		     			echo"<td>".$row['title']."</td>";
 		     			echo"<td>".$row['content']."</td>";
 		     			echo "<td><img src='image/$row[image]' width='300px' height='150px'</td>";
  		     			echo"<td><a href='edit.php?edit_id=$row[id]' class='btn btn-info'>EDIT</a></td>" ;
 		     			echo"<td><a href='controller.php?del_id=$row[id]' class='btn btn-danger'onclick=\"return confirm('are u sure')\">delete</a></td>";
 		     			
 		     			echo"</tr>";
 					}  
			?>

 		 </table><br><br/>
 		  <a href="multipleimage.php" class="btn btn-warning">IMAGE COLLECTION</a>
 	</form>
</body>
</html>

