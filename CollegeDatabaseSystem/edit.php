<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{   
    $usn = $_POST['usn'];
    
    $student_name=$_POST['student_name'];
    $address=$_POST['address'];
    $phone_number=$_POST['phone_number'];
     $gender=$_POST['gender']; 
    
    // checking empty fields
    if(empty($usn) || empty($student_name) || empty($address) || empty($phone_number) || empty($gender)) {          
        if(empty($usn)) {
            echo "<font color='red'>usn field is empty.</font><br/>";
        }
        
        if(empty($student_name)) {
            echo "<font color='red'>student name field is empty.</font><br/>";
        }
        
        if(empty($address)) {
            echo "<font color='red'>address field is empty.</font><br/>";
        }
        if(empty($phone_number)) {
            echo "<font color='red'>phone number field is empty.</font><br/>";
        }       
        if(empty($gender)){ 
            echo "<font color='red'>gender field is empty.</font><br/>"; 
              }          
     else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE student SET usn='$usn',student_name='$student_name',address='$address',phone_number='$phone_number',gender='$gender' WHERE usn=$usn");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index1.php");
    }
}
}
?>
<?php
$usn = $_GET['usn'];
$conn = mysqli_connect("localhost","root","", "collegedatabase");
$sql = "SELECT * FROM student WHERE usn=$usn";
$result = $conn->query($sql);
{
    $usn = $res['usn'];
    $student_name = $res['student_name'];
     $address = $res['address'];
      $phone_number = $res['phone_number'];
    $gender = $res['gender'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index1.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>USN</td>
                <td><input type="text" name="usn" value="<?php echo $usn;?>"></td>
            </tr>
            <tr> 
                <td>Student Name</td>
                <td><input type="text" name="student_name" value="<?php echo $student_name;?>"></td>
            </tr>
            <tr> 
                <td>ADDRESS</td>
                <td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr> 
                <td>Phone Number</td>
                <td><input type="text" name="phone_number" value="<?php echo $phone_number;?>"></td>
            </tr>
            <tr> 
                <td>Gender</td>
                <td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="usn" value=<?php echo $_GET['usn'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>