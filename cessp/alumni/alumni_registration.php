<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cssp_alumni';
$mysqli = new mysqli($host , $user, $pass, $db);
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
if ($mysqli->connect_error){
        die('Could not connect to database!');
    }
    if(isset($_POST['register'])){
    	$email = $_POST['email'];
    	$password = random_password(8);
    	$first_name = $_POST['first_name'];
    	$last_name = $_POST['last_name'];
    	$nic = $_POST['nic'];
    	$father_name = $_POST['father_name'];
    	$gender = $_POST['gender'];
    	$dob = $_POST['dob'];
    	$address = $_POST['address'];
    	$city = $_POST['city'];
    	$province = $_POST['province'];
    	$country = $_POST['country'];
    	$phone = $_POST['phone'];
    	$mobile = $_POST['mobile'];
    	$degree = $_POST['degree'];
    	$Specialization = $_POST['Specialization'];
    	$roll_number = $_POST['roll_number'];
    	$session = $_POST['session'];
    	$passing_year = $_POST['passing_year'];
    	$organization = $_POST['organization'];
    	$designation = $_POST['designation'];
    	$office_address = $_POST['office_address'];
    	$office_phone = $_POST['office_phone'];
    	$office_fax = $_POST['office_fax'];
    	$Expertise_area = $_POST['Expertise_area'];
    	$Experience_year = $_POST['Experience_year'];
    	$Specialized_sector = $_POST['Specialized_sector'];
    	$statement = $mysqli->prepare('INSERT INTO users(email,password,first_name,last_name,nic_no,father_name,gender,dob,address,city,province,country,phone,mobile,degree,specialization,roll_no,session,passing_year,organization,designation,office_address,office_phone,office_fax,expertise,experience_year,specialized_sector) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    	$statement->bind_param('sssssssssssssssssssssssssss', $email,$password,$first_name,$last_name,$nic,$father_name,$gender,$dob,$address,$city,$province,$country,$phone,$mobile,$degree,$Specialization,$roll_number,$session,$passing_year,$organization,$designation,$office_address,$office_phone,$office_fax,$Expertise_area,$Experience_year,$Specialized_sector);
    	$statement->execute();
        $message = 'Hi'.$first_name.',\n Your account has been created. Your email is '.$email.' and password is '.$password.'';
        mail($email,"Registration",$msg);
    	header('location: index.php');
    }
?>