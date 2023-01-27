<?php
$conn = mysqli_connect('localhost','root');
$db = mysqli_select_db($conn,'collegedatabase');
if(isset($_POST['submit'])){
$query = "select * from student where usn = $_POST[usn]";
$query_run = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($query_run)){
echo $row['student_name'];
echo '<br>';
}
}
?>
<br>
<from> action="" method="post">
<input type="text" name='usn' placeholder='Enter usn'>
<input type='submit' value='submit'>
</form