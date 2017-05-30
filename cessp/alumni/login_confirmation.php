<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cssp_alumni';
$mysqli = new mysqli($host , $user, $pass, $db);
if ($mysqli->connect_error){
        die('Could not connect to database!');
    }
if(isset($_POST['email'])){
    $email1 = $_POST['email'];
    $password1 = $_POST['password'];
    $statement1 = $mysqli->prepare("SELECT email FROM users WHERE email=? AND password=?");
    $statement1->bind_param('ss', $email1,$password1);
    $statement1->execute();
    echo $email1.'<br>'.$password1;
    $rows = $statement1->num_rows();
    echo $rows;
    $statement1->bind_result($emailId);
    if($statement1->fetch()){
        echo 'OK';
    }else{
        echo 'Not Exists';
    }
}

?>