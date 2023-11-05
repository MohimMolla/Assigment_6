<?php $conn=new mysqli('localhost','root','','assignment_6');

if(!$conn){
	die(mysqli_errno($conn));
}