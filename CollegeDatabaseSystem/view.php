<?php 

    require_once("config.php");
    $query = " select * from student ";
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> USN </td>
                                <td> Student Name </td>
                                <td> Address </td>
                                <td> Phone Number </td>
                                <td> gender </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                            $conn = mysqli_connect("localhost","root","", "collegedatabase");
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
                                    
                                        $usn= $row['usn'];
                                        $student_name = $row['student_name'];
                                        $address = $row['address'];
                                        $phone_number = $row['phone_number'];
                                        $gender = $row['gender'];
                                    }
                            ?>
                                    <tr>
                                        <td><?php echo $usn ?></td>
                                        <td><?php echo $student_name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $phone_number ?></td>
                                        <td><?php echo $gender ?></td>

                                        <td><a href="edit.php?Getusn=<?php echo $usn ?>">Edit</a></td>
                                       
                                    </tr>                                                                }
                                    }


                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
}