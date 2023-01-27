<!DOCTYPE html>
<html>
<body>
 
<?php
 
    
 
    session_start();
    session_destroy();
    header('location: index.php');
    echo "Logged out successfully";
 
?>
 
</body>
</html>