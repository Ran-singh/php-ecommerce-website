<?php
include("connection.php");

$nm=$_POST['nm'];
$em=$_POST['email'];
$sbj=$_POST['subject'];
$msg=$_POST['msg'];

$ins="insert into ram(nm,email,subject,msg) values('$nm','$em','$sbj','$msg')";
$q=mysqli_query($con,$ins);
if($q)
 {
header("location:thanku.html");
 }
 else
 {
	echo "Data is Not Inserted"; 
 }
?>
