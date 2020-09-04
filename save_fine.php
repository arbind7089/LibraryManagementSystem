<?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());


if (isset($_POST['submit'])){
$id=$_POST['id'];
$fine=$_POST['fine'];
mysqli_query($con, "update borrow set fine='$fine' where borrow_id='$id'")or die(mysql_error());

 header('location:view_borrow.php');
}
?>
