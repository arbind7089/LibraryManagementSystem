<?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());

$id=$_GET['id'];
mysqli_query($con, "update book set status = 'Archive' where book_id='$id'")or die(mysqli_error());
header('location:books.php');
?>
