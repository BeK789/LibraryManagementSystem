<?php 
//Delete:
session_start();

if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	include "database.php";
	
	$del=" delete from students where ID='$id' ";
	$run=$connect->query($del);
	
	$image=$_GET['filename'];
	
	unlink('images/'.$image);
	
	header('location:dashboard.php?page=student/manstd');
	
	$_SESSION['del']="Deleted Successfully !";
	
}
?>