<?php
$server="localhost";
$username="root";
$password="";
$db="trip";

$conn=mysqli_connect($server,$username,$password,$db) or die("error establishing database connection due to ".mysqli_connect_error());
if($conn)
echo "success";
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];

$pincode=$_POST['pincode'];
$card=$_POST['card'];
$cno=$_POST['cno'];
$cvv=$_POST['cvv'];
$date=$_POST['date'];

$sql="INSERT INTO `form` (`sl no`, `name`, `email`, `message`) VALUES ('2', 'ew', 'dw', 'dew')";
$result=mysqli_query($conn,$sql);
if($result)
echo "submission successful";
?>