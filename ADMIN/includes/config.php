<?php     
 
 session_start(); //this will start all our session as we shall see...

//let us create constants to store our localhost,root,password and database...
define(LOCALHOST, 'localhost');
define(ROOT, 'root');
define(PASSWORD, '');
define(DATABASE, 'bd_immogest');
define(SITEURL, 'http://localhost:8090/projet_immobilier/ADMIN/'); //here is our site....url for our project and we shall keep it is this variable. (SITEURL)
       
  
//let us connect to our database========>
$conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die(mysqli_error('Failed to connect !'));
$db_select = mysqli_select_db($conn, DATABASE) or die(mysqli_error('Failed to select Database'));

class Config {
    const SMTP_HOST = 'smtp.mailtrap.io';


    const SMTP_PORT = 2525;

    const SMTP_USER = '3094146a7d4624';

    const SMTP_PASSWORD = '3b6f67d72d0b41';
}


?>