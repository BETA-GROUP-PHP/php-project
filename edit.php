<?php
include 'head.php';
include 'navbar.php';
?>

<?php
require_once 'process.php' ;
	?>

  <?php
if(isset($_SESSION['massage'])): ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php

echo $_SESSION['massage'];

unset ($_SESSION['massage']);

?>
</div>
<?php endif; ?>

<div  class="container">

  <?php
$mysqli =new mysqli('localhost', 'root', '', 'group') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM data") or die(mysqli->error);
//pre_r($result);
?>
 <section>
<div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Gender</th>
<th>Course</th>
<th>level</th>
<th>Phone</th>
<th colspan="2">Action</th>
</tr>
</thead>
<?php
while($row=$result->fetch_assoc()):
?>
<tr>
<td><?php  echo $row['name']; ?></td>
<td><?php  echo $row['email']; ?></td>
<td><?php  echo $row['gender']; ?></td>
<td><?php  echo $row['course']; ?></td>
<td><?php  echo $row['level']; ?></td>
<td><?php  echo $row['phone']; ?></td>
<td><a href="edit.php?edit=<?php echo $row['id'] ; ?>" class="btn btn-info">Edit
</a> 
<a href="process.php?delete=<?php echo $row['id'] ; ?>" class="btn btn-danger">Delete
</a>
</td>

</tr>

<?php


endwhile ;

?>



</table>

</div>


<?php

function pre_r($array){

     echo '<pre>';
     print_r($array);
          echo'</pre>';

}

?>

<section class="container-fluid">

<section class="row justify-content-center">
	<section class="col-12 col-sm-6 col-md-3">


<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name"  value="<?php echo $name ;?>" class="form-control"  placeholder="Enter Name" required >
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email"  name="email" value="<?php echo $email ;?>" class="form-control"   placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Gender:</label>
    <input type="text"  name="gender" value="<?php echo $gender ; ?>" class="form-control"  placeholder="Enter gender" required>
  </div>
  <div class="form-group">
    <label for="course">Course:</label>
    <input type="text" name="course"  value="<?php echo $course ;?>" class="form-control"  placeholder="Enter Course"required >
  </div>
  <div class="form-group">
    <label for="level">Level:</label>
    <input type="text"  name="level" value="<?php echo $level ;?>" class="form-control"   placeholder="Enter Level" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text"  name="phone" value="<?php echo $phone ; ?>" class="form-control"  placeholder="Enter phone no."required >
  </div>
 
  
 <?php if($update==true): ?>
 <button type="submit"  class="btn btn-info" name="update">update</button>
<?php else: ?>
  <button type="submit"  name="save" class="btn btn-primary">Save</button>
  <?php endif; ?>
 
</form>

		

	</section>
</section>

</section>






</div>
</section>
<section>
<br>
</section>
<?php
include 'footer.php'

?>