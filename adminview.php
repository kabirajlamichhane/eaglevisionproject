<!DOCTYPE html>
<html>
<head>
	<title>welcome to viewchange</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/boostrap.min.js"></script>

	<!-- <script src="delscript.js"></script> -->
</head>
<body>
 	<form method="post" action="controller.php"  onclick="return confirm('Are you sure?') ">
 		 
 		 <table border='1px'>
 		     <tr>
 		     	<th>id</th>
 		     	<th>email</th>
 		     	<th>password</th>
  		     	<th>action</th>
 		     </tr>
	
            <?php
                	include('crud.php');
					$obj = new crud();
					$result=$obj->change_select();
					foreach ($result as $row)
				 	{
    					echo"<tr>";
 		     			echo"<td>".$row['id']."</td>";
 		     			echo"<td>".$row['email']."</td>";
 		     			echo"<td>".$row['password']."</td>";
 		     			echo"<td><a href='editview.php?ad_id=$row[id]'>edit</a></td>";
 		     			// echo"<td><button type='submit' class='btn btn-primary'>Edit</button>";
  		     			echo"</tr>";
 					}  
			?>

 		 </table>
 		  
 	</form>
</body>
</html>


 	

