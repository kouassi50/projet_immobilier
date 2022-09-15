<?php include('includes/config.php');  ?>

<?php 

session_destroy(); //this will destroy/end all sessions.
header('location:' .SITEURL. 'login.php');//this will redirect us to the login page





?>


