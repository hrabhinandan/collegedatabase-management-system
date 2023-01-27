<?php
  include 'config.php';
  if(isset($_POST['submit'])){
    $usn=$_POST['usn'];
    $student_name=$_POST['student_name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];

    $sql="insert into student (usn,student_name,address,gender)
    values('$usn','$student_name','$address','$gender')";
    $result= mysqli_query($con,$sql);
    if($result){
      echo "Data inserted sucessfully";
    } else{
      die(mysqli_error($con));
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
  <div class="form-group">
    <label>USN</label>
    <input type="text" class="form-control"  placeholder="Enter usn" name="usn" autocomplete="off">
  </div>
  <div class="container">
      <form method="post">
  <div class="form-group">
    <label>Student name</label>
    <input type="text" class="form-control"  placeholder="Enter student_name" name="student_name">
  </div>
  <div class="container">
      <form method="post">
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control"  placeholder="Enter address" name="address">
  </div>
  <div class="container">
      <form method="post">
  <div class="form-group">
    <label>Phone number</label>
    <input type="text" class="form-control"  placeholder="Enter number" name="phone_number">
  </div>
  <div class="container">
      <form method="post">
  <div class="form-group">
    <label>Gender</label>
    <input type="text" class="form-control"  placeholder="Enter gender" name="gender">
  </div>
 
    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <h1></h1>
  </body>
</html>