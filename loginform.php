<!DOCTYPE html>
<html>
<head>
  <title>login form </title>
      <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="static/css/style.css">
      <script src="static/js/jquery-3.1.1.min.js"></script>
      <script src="static/js/bootstrap.min.js"  ></script>
      <script src="static/script/script.js"></script>
</head>
<body>
  <div class="container">
  <div class="jumbotron">
    <form method="post" action="controller.php" onsubmit="return validation()">
      <h4>LOGIN FROM</h4>
      Email: &nbsp &nbsp &nbsp &nbsp <input type="text" name="email" id="email" placeholder="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>"><br><br/>
      Password: <input type="password" name="password" id="password" placeholder="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"><br><br />
      remember me<input type="checkbox" ="" name="rememberme"> <br ><br />
      <button type="submit" name="login" value="login" class="btn btn-success">submit</button><br /><br />
      <a href="forgotpassword.php"><button type="button" class="btn btn-warning">forgot password?</button></a> 
    </form>
  </div>
  </div>  
</body>
</html>