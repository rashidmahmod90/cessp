<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cssp_alumni';
$mysqli = new mysqli($host , $user, $pass, $db);
if ($mysqli->connect_error){
        die('Could not connect to database!');
    }

if(isset($_POST['user_email']))
{
 $emailId=$_POST['user_email'];
$statement = $mysqli->prepare("SELECT email FROM users WHERE email=?");
    $statement->bind_param('s', $emailId);
    $statement->execute();
    $statement->bind_result($emailId);
    if($statement->fetch() > 0){
    	echo 'OK';
    }else{
    	echo 'Not Exists';
    }
}
if(isset($_POST['email1'])){
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
    $statement1 = $mysqli->prepare("SELECT email FROM users WHERE email=? AND password=?");
    $statement1->bind_param('ss', $email1,$password1);
    $statement1->execute();
    $statement1->bind_result($emailId);
    if($statement1->fetch()){
        echo 'OK';
    }else{
        echo 'Not Exists';
    }
}
?>