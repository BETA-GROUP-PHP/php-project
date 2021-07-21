<?php
session_start();
/*database connection to contact page*/

$mysqli =new mysqli('localhost', 'root', '', 'group') or die(mysqli_error($mysqli));


if (isset($_POST['send'])){
    
   
    $email= '';
    $massage= '';
  


    $email=$_POST['email'];
    $massage=$_POST['massage'];
   
 
    $mysqli ->query ("INSERT INTO mail (email,massage) VALUES('$email','$massage')") or die ($mysqli->error);    
   
    $_SESSION['massage']="massage sent!";
    $_SESSION['msg_type']="success";

    header("location:contact.php");
} 




?>
