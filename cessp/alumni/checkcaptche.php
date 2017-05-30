<?php
session_start();

if(isset($_POST['captche_value'])){
	$value = $_POST['captche_value'];
	if($_SESSION['captcha'] == $value){
		echo 'OK';
    }else{
    	echo 'Not Exists';
    }
}
?>