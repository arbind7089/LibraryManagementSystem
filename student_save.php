<?php
$con = mysqli_connect('localhost','root','', 'lms')or die(mysqli_error());
if (isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];

mysqli_query($con, "insert into member(username, password, firstname,lastname,gender,address,contact,type,year_level) values('$username','$password','$firstname','$lastname','$gender','$address','$contact','$type','$year_level')")or die(mysql_error());

header('location:student.php');
}
?>
