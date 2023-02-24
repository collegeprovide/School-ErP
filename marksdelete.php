<?php
 
include_once 'dbConnection.php';
 
session_start();

  if(!(isset($_SESSION['email1'])))
  {
header("location:https://iec.edu.in/erp/facindex.php");
  }

else
{

//include_once 'dbConnection.php';

$ref=@$_GET['q'];

 $name = $_SESSION['name'];
 $email=$_SESSION['email1'];

 $dept=$_SESSION['dept'];
 $EmpCode=$_SESSION['EmpCode'];
 $Facultyname=$name.$EmpCode;

}?>                    

<?php


include_once 'dbConnection.php';

 $name;
 $date = $_POST['date'];
 $Subjectname = $_POST['Subjectname'];








$sql="DELETE FROM `Marks` WHERE `Facultyname`='$name' && `Subjectname`='$Subjectname' && `date`='$date'";

$iec=mysqli_query($con,$sql);

if($iec==1){
    

$sql2="DELETE FROM `MarksDelete` WHERE `Facultyname`='$name' && `Subjectname`='$Subjectname' && `date`='$date'";
mysqli_query($con,$sql2);

}




header('Location: /erp/faculty/Teacher-Attendence-Record.php');





?>