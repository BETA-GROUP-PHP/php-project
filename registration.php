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




		