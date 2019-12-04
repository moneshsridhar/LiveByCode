<?php
	$con = mysqli_connect('localhost','root','','questions');
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$sql = "SELECT * FROM question";
	$res = mysqli_query($con, $sql);	

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2 style="font-family: sans-serif;">LiveByCode</h2>
		<hr>
	</div>
	<table cellpadding="5px">
		<?php 
			while($rows=mysqli_fetch_assoc($res))
			{
		?>
		<tr>
			<td><?php echo $rows['qno']; ?></td>
			<td><?php echo $rows['question']; ?></td>
			
		</tr>

		<?php
			}
		?>
	</table>
</body>
</html>