<?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());
$id=$_GET['id'];
mysqli_query($con, "delete from member where member_id='$id'") or die(mysqli_error());
header('location:student.php');
?>
