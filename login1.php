<?php

Include("header.php");
Include("connect.php");

	if(isset($_POST['log'])) {
		$username = mysqli_real_escape_string($dbcon, $_POST['username']);
		$password = mysqli_real_escape_string($dbcon, md5($_POST['password']));
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($dbcon, $sql);
		$rows = mysqli_num_rows($result); 
		if($rows == 1) {
			$_SESSION['username'] = $username;
			header("location: admin.php");
			} 
			else {
			echo "incorrect details";	
			echo "<br/>";
			}
}  else {
		?>
	<div class ="w3-container w3-green">Login</div>
<form action ="" method ="POST" class="w3-container">
	<label>Username </label>
	<input type="text" name="username" class="w3-input w3-border">
		<label>Password</label>
		<input type="password" name ="password" class="w3-input w3-border">
			<input type ="submit" name ="log" value="Login" class="w3-btn w3-green">
				</form>
<?php
}
Include("footer.php"); 
?>