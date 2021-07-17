<?php
include 'head.php';
include 'navbar.php';
?>


<?php

require_once 'process.php';
 
?>

<?php

if(isset($_SESSION['massage'])): ?>

  <div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php

echo $_SESSION['massage'];

unset ($_SESSION['massage']);

?>
</div>
<?php
  endif
  ?>

<section class="container-fluid">

<section class="row justify-content-center">
	<section class="col-12 col-sm-6 col-md-3">


form class="form-container" action="process.php" method="POST">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
  </div>
  <label for="gender">Gender:</label>
    <input type="text" name="gender" class="form-control" placeholder="Enter gender" required>
  </div>
  <div class="form-group">
    <label for="course">Course:</label>
    <input type="text" name="course" class="form-control" placeholder="Enter course" required>
  </div>
 <label for="level">Level:</label>
    <input type="text" name="level" class="form-control" placeholder="Enter level" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" class="form-control" placeholder="Enter phoneNo." required>
  </div>
 
  <button type="submit" name="save" class="btn btn-primary btn-block ">Save</button>
</form>
		

	</section>
</section>

</section>

<?php

include 'footer.php';

?>

		
