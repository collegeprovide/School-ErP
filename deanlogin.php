<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}

include_once 'dbConnection.php';
$ref=@$_GET['q'];
 $eno = $_POST['eno'];
 $password = $_POST['password'];

echo $eno;
echo $password;

/*
$email = stripslashes($email);
$email = addslashes($email);


$password = stripslashes($password); 
$password = addslashes($password);

$password=md5($password);*/

$result = mysqli_query($con,"SELECT * FROM dean WHERE email = '$eno' and pass = '$password'") or die('Error');

$count=mysqli_num_rows($result);

echo $count;


if($count==1)
{

while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$email = $row['email'];
	$dept = $row['dept'];
	$EmpCode = $row['EmpCode'];
	
	
 $_SESSION['name']= $name ;
$_SESSION['email']=$email;
$_SESSION['dept']=$dept;
$_SESSION['EmpCode']=$EmpCode;	

}

 



header("location:dean/dashbord.php");

}

else

header("location:deanindexerror.php");


?>