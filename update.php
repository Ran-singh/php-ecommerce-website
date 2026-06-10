<?php
include('connection.php');

if(isset($_GET['up']))
{
	$f = $_GET['sr'];
    $a = $_GET['nm'];
    $b = $_GET['email'];
    $d = $_GET['subject'];
    $e = $_GET['msg'];

    $update = "UPDATE ram SET
	sr='$f',
    nm='$a',
    email='$b',
    subject='$d',
    msg='$e'
	
	
    WHERE sr='$f'";

    $up = mysqli_query($con,$update);

    if($up)
    {
        echo "Updated Successfully";
    }
    else
    {
        echo "Not Updated";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>

<h2>Update Record</h2>

<form method="GET">

     sr :
    <input type="text" name="sr" value="<?php echo $_GET['sr']; ?>">

    Name :
    <input type="text" name="nm" value="<?php echo $_GET['nm']; ?>"><br><br>

    Email :
    <input type="text" name="email" value="<?php echo $_GET['email']; ?>"><br><br>

    Subject :
    <input type="text" name="subject" value="<?php echo $_GET['subject']; ?>"><br><br>

    Message :
    <textarea name="msg"><?php echo $_GET['msg']; ?></textarea><br><br>

    <input type="submit" name="up" value="Update">

</form>

</body>
</html>