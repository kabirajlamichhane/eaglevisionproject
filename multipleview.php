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
  <title>well-come to multiple view  </title>
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">;
  <script src="static/js/jquery-3.1.1.min.js"></script>
  <script src="static/js/bootstrap.min.js"  ></script>
</head>
<body>
      <form method="post" action="" enctype="mutipart/form-data">
      <table border='2px' class="table">
        <tr class="success">
            <th>id</th>
            <th>IMAGE</th>
            <th>DELETE</th>
        </tr>



<?php
    include('slider.php');
    include('crud.php');
    $obj = new crud;
    $res=$obj->IMGSELECT();
    foreach($res as $row)
    {         
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td><img src='image/$row[image]' width='200px',height='200px'></td>";
                echo"<td><a href='controller.php?delete_id=$row[id]' class='btn btn-danger' onclick=\"return confirm('are u sure')\">delete</td>";
                echo"</tr>";
    }
?>           
          </table>

      </form>
</body>
</html>