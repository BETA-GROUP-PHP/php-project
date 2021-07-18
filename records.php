<?php

include 'head.php';
include 'navbar.php';
?>


<sectiom class="container">

<div >
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

</tr>

<?php


endwhile ;

?>



</table>

</div>
</div>



</section>





<?php

include 'footer.php';
?>