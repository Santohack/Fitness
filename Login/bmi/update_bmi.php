<?php 
@ob_start();
session_start();
include '../conn.php';
if(!empty($_POST)){
	$user_id = $_SESSION['user_id'];
	$bmi = $_POST['bmi'];
	$eails ="Update register set bmi= $bmi, break_fast_response='', lunch_response = '', dinner_response= '' WHERE id =$user_id";
	$ql = mysqli_query($connection,$eails);
}