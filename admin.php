<?php
if(isset($_POST['submit']))
{
    $user = $_POST['un'];
    $pass = $_POST['pass'];

    if($user == "Ransingh" && $pass == "ran@123")
    {
        header("Location: display.php");
        exit;
    }
    else
    {
        echo "Try Again!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>

<h1>ADMIN LOGIN</h1>

<form method="post">

    Username:
    <input type="text" name="un"><br><br>

    Password:
    <input type="password" name="pass"><br><br>

    <input type="submit" name="submit" value="Login">

</form>

</body>
</html>