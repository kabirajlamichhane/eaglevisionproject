<!DOCTYPE html>
<html>
<head>
  <title>well-come to imagemanager </title>
</head>
<body>
      <form method="post" action="" enctype="mutipart/form-data">
       <!-- <a href="multiplefile.php">ADD MULTIEIMAGE</a> -->
       <a href="multiplefile.php">ADD MULTIEIMAGE</a>
          <table border='1px'>
              <tr>
                <th>id</th>
                <th>IMAGE</th>
                <th>PID</th>
                <!-- <th>DELETE</th> -->
              </tr>



<?php
    include('crud.php');
    $obj = new crud;
    $res=$obj->IMAGEVIEW();
    foreach($res as $row)
    {         
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td><img src='image/$row[image]' width='200px',height='200px'></td>";
                echo"<td>".$row['pid']."</td>";
                // echo"<td><a href='controller.php?delete_id=$row[id]'>delete</td>";
                echo"</tr>";
    }
?>           
          </table>

      </form>
</body>
</html>