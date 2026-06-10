<?php
$servername="localhost";
$username="root";
$password="";
$database="kgi";
 $con=mysqli_connect($servername,$username,$password,$database);
 
 if($con)
 {
echo "Database Connected";	 
 }
 else
 {
	echo "Database is Not Connected"; 
 }

?>