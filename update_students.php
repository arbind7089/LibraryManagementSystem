<?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());
if (isset($_POST['submit'])){
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];

mysqli_query($con, "update member set username='$username', password='$password', firstname='$firstname',lastname='$lastname',gender='$gender',address = '$address',contact = '$contact',type = '$type',year_level = '$year_level' where member_id='$id'")or die(mysql_error());

header('location:student.php');
}
?>
