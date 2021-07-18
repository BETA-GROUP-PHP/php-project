
<?php
session_start();




$mysqli =new mysqli('localhost', 'root', '', 'group') or die(mysqli_error($mysqli));
$id=0;
$update = false;
$name= '';
$email= '';
$gender= '';
$course= '';
$level= '';
$phone= '';

    if (isset($_POST['save'])){
    
    

    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $level=$_POST['level'];
    $phone=$_POST['phone'];
 
    $mysqli ->query ("INSERT INTO data (name,email,gender,course,level,phone) VALUES('$name','$email','$gender','$course','$level','$phone')") or die ($mysqli->error);    
   
    $_SESSION['massage']="Record has been saved!";
    $_SESSION['msg_type']="success";

    header("location:registration.php");
} 



if(isset($_GET['delete'])){

$id=$_GET['delete'];
$mysqli ->query ("DELETE FROM data WHERE id=$id") or die($mysqli->error());
$_SESSION['massage']="Record has been deleted!";
$_SESSION['msg_type']="danger";

header("location:edit.php");
}


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
    $update=true;
    $sql=("SELECT * FROM data WHERE id =$id") ;
    $result=$mysqli->query($sql);
if($result->num_rows>0){
        $row = $result->fetch_array();

        $name=$row['name'];
        $email=$row['email'];
        $gender=$row['gender'];
        $course=$row['course'];
        $level=$row['level'];
        $phone=$row['phone'];
       
}
}

if(isset($_POST['update'])){

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$level=$_POST['level'];
$phone=$_POST['phone'];
$mysqli->query("UPDATE data SET name='$name',email='$email',gender='$gender',course='$course',level='$level',phone='$phone' WHERE id=$id") or die ($mysqli->error);
$_SESSION['massage']="Record has been updated!";
$_SESSION['msg_type']="warning";
header("location:edit.php");

}
