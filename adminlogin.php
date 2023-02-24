<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}

include_once 'dbConnection.php';
$ref=@$_GET['q'];
$eno = $_POST['eno'];
$password = $_POST['password'];


/*
$email = stripslashes($email);
$email = addslashes($email);


$password = stripslashes($password); 
$password = addslashes($password);

$password=md5($password);*/

$result = mysqli_query($con,"SELECT name,email FROM admin WHERE email = '$eno' and password = '$password'") or die('Error');

$count=mysqli_num_rows($result);



if($count==1)
{
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$email = $row['email'];
	
	

}


$_SESSION["name"] = $name;
$_SESSION["email"] = $email;

header("location:admindash/dashbord.php");

}

else

header("location:adminindexerror.php");


?>