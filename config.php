
<?php
$con = mysqli_connect("localhost","root","","4mtak") or die("Error: " . mysqli_error($con));
mysqli_query($con, "tbl_member"); 
?>
