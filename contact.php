<?php
include 'head.php';
include 'navbar.php';
?>


<?php
if(isset($_SESSION['massage'])): ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php

echo $_SESSION['massage'];



?>
<?php endif; ?>


<div>

<section class="container">

<div class="content">
    <h2>Contact US</h2>
    <P>With decades of experience in the education industry, BETA is a
culmination of innovation and passion towards making the education
experience a positive one, not just for students and teachers, but also
for parents and administrators.</P>
</div>

    </div>

</div>
<section class="container-fluid">

<section class="row justify-content-center">
	<section class="col-12 col-sm-6 col-md-3">




		<form class="form-container" action="cont.php" method="POST">
 
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="massage">Massage:</label>
    <input type="text" name="massage" class="form-control" placeholder="Enter Massage" required>
  </div>
  <button type="submit" name="send" class="btn btn-primary btn-block ">Send</button>

</form>
		

	</section>
</section>

</section>


</section>

<br>
</div>



























<?php
include 'footer.php';

?>