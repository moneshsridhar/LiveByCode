<?php

include("connect.php");
if(!isset($_SESSION['username'])) {
header("location: indexblog.php");
} 
if(isset($_GET['id'])){
$id = $_GET['id'];
 
$sql = "DELETE FROM posts WHERE id = '$id'";
 
$result = mysqli_query($dbcon, $sql);
if($result) {
header('location: indexblog.php');
}
else {
	echo "Failed to delete.".mysqli_connect_error();
}
}
mysqli_close($dbcon);
?>
 