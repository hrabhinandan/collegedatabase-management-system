<?php
session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"]==True){
header('location: admin.html');
}
$error = "";
if(isset($_POST['username']) && isset($_POST['pwd'])){
$username = $_POST['username'];
$password = $_POST['pwd'];
if($username == "admin" && $password == "admin"){
header('location: admin.html');
}
else {
$error = "Invalid username or password!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<div class="container">
      <div class="row col-md-7 col-md-offset---4">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>College Database System</h1>
          </div>
              </div>
          </div>
        </div>
</head>

<body>
<form method="post" action="admin.html" name="login_form" id="login_form">
<div class="container">
<h4><div class="row col-md-4 col-md-offset-1"><div class="panel panel-primary"><div class="panel-heading text-center">
</div>Login</h4>
</div>
<div class="container">
      <div class="row col-md-4 col-md-offset-1">
        <div class="panel panel-primary"><div class="panel-heading text-center">
</div>
<div class="form-element">
<label>Username</label>
<input type="text" name="username" id="username" required >
<div class="form-element">
<label>Password</label>
<input type="password" name="password" id="password" required />
</div>
<button type="submit" id="Login" name="Login" value="Login">Login</button>
</form>
</body>
<style>
body{
margin-left: 40%;
margin-top: 5%;
max-width: 350px;
  background-image: url('3.jpg');
}
.head {
margin-left: 98px;
font-size: 10px;
font-weight: 900;
text-transform: uppercase;
}
#login_form{
font-color: #fffff;
border: 1px  #ffffff;
padding: 15px;
}
.form-element{margin: 20px;}
#Login{
font-weight: 1000;
margin-left: 152px;
padding: 7px;
color: darkred;
}
label{font-weight: 900;}
h4{text-align: center; text-decoration: underline;}
</style>
</html>