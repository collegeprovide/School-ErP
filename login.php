<?php
session_start();
if(isset($_SESSION["AdmNo"])){
session_destroy();
}

include_once 'dbConnection.php';
$ref=@$_GET['q'];
$eno = $_POST['eno'];
$password = $_POST['password'];


$result = mysqli_query($con,"SELECT Section,FatherName,name,AdmNo,Class FROM userr WHERE AdmNo = '$eno' and password = '$password'") or die('Error');

$count=mysqli_num_rows($result);

if($count==1)
{
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	
	$AdmNo = $row['AdmNo'];
	$Class= $row['Class'];
	$Father= $row['FatherName'];
	$Section= $row['Section'];
	
}


$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["AdmNo"] = $AdmNo;
$_SESSION["Class"] = $Class;
$_SESSION["Section"] = $Section;
$_SESSION["FatherName"] = $FatherName;

header("location:/azad/dash/dashbord.php",'_blank');
}

else

header("location:indexerror.php");


?>