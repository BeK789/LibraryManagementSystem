<?php 
//Delete:
session_start();

if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	include "database.php";
	
	$del="  UPDATE `issue_books` SET `status`=1  WHERE `id`='$id' ";
	$run=$connect->query($del);
	header('location:dashboard.php?page=books/issued');
	
	$_SESSION['del']="Approved Successfully!";
	
}
?>