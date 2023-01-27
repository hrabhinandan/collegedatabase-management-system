<?php
  $ssid = $_POST['ssid'];
  $sem = $_POST['Sem'];
  $sec = $_POST['Sec'];
  //database connection
  $conn = new mysqli('localhost','root','','collegedatabase');
  if($conn->connect_error){
    header('location: collegedatabase.php.html');
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into semsec(ssid,sem,sec)values(?,?,?)");
    $stmt->bind_param("sis",$ssid,$sem,$sec);
    $stmt->execute();
   echo  header('location: class.php.html');
    $stmt->close();
    $conn->close();
  }
?>

