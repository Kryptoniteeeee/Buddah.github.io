<?php
include('dbcon.php');
$id=$_POST['id'];
mysqli_query($conn,"delete from schedule where id='$id'") or die(mysqli_error($conn));
?>