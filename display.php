<?php
include("connection.php");
$query = "SELECT * FROM ram";
$data = mysqli_query($con,$query);

?>

<html>
<head>
          <title>Student login</title>
</head>
<body>


<h2>Student List</h2>

<table border="1" cellpadding="10">
    <tr>
	    <th>sr</th>
        <th>NAME</th>
        <th>Email</th>
        <th>Subject</th>
        <th>MSG</th>
        <th Colspan="2">REMARK</th>
    </tr>
	<?php
	while($row = mysqli_fetch_assoc($data))
	{
	?>
	<tr>
	<td><?php echo $row['sr']?></td>
	<td><?php echo $row['nm']?></td>
	<td><?php echo $row['email']?></td>
	<td><?php echo $row['subject']?></td>
	<td><?php echo $row['msg']?></td>

	<td><a href="update.php?sr=<?php echo $row['sr']; ?>&nm=<?php echo $row['nm']; ?>&email=<?php echo $row['email']; ?>&subject=<?php echo $row['subject']; ?>&msg=<?php echo $row['msg']; ?>">Update</a></td>
     <td><a href="delete.php?sr=<?php echo $row['sr']; ?>&nm=<?php echo $row['nm']; ?>&em=<?php echo $row['email']; ?>&subject=<?php echo $row['subject']; ?>&msg=<?php echo $row['msg']; ?>">Delete</a></td>
	
	<?php
	}
	?>
	
</body>
</html>