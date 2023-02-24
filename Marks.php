
<!DOCTYPE html>
<!-- saved from url=(0062)https://erp.aktu.ac.in/WebPages/Public/Students/Dashboard.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description"><meta name="author" content="G Krishna Chauhan"><title>
	IEC ERP
</title><link href="./jjss/bootstrap.min.css" rel="stylesheet"><link href="./jjss/metisMenu.min.css" rel="stylesheet"><link href="./jjss/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="./jjss/jquery.min.js.download"></script>
    <script src="./jjss/bootstrap.min.js.download"></script>
    <script src="./jjss/metisMenu.min.js.download"></script>
    <script src="./jjss/sb-admin-2.js.download"></script>
    <script src="./jjss/ERPPopUp.js.download"></script>
    <script src="./jjss/validations.js.download"></script>
    <link href="./jjss/bootstrap-material-design.css" rel="stylesheet"><link href="./jjss/ripples.min.css" rel="stylesheet"><link href="./jjss/sb-admin-2.css" rel="stylesheet">
    <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #000000}
-->
    </style>
    </head>
<body>


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
 $Branch=$_POST['Branch'];
 $Semester=$_POST['Semester'];
 $Subjectname=$_POST['Subjectname'];
 $Subjectcode=$_POST['Subjectcode'];
 
 $_SESSION['Branch']=$Branch;
  
 $nm= $_SESSION['Branch'];


 
}?>  
<?php

 include_once 'dbConnection.php';
 
$con= new mysqli('localhost','erpiec','erpiec','erpiec')or die("Could not connect to mysql".mysqli_error($con));

$sql1="SELECT * FROM SubjectAllote WHERE Facultyname='$Facultyname'";
$sql2="SELECT * FROM SubjectAllote WHERE Facultyname='$Facultyname'";
$sql3="SELECT * FROM SubjectAllote WHERE Facultyname='$Facultyname'";
$sql5="SELECT * FROM SubjectAllote WHERE Facultyname='$Facultyname'";
$result1=mysqli_query($con,$sql1);

$result2=mysqli_query($con,$sql2);
$result3=mysqli_query($con,$sql3);
$result5=mysqli_query($con,$sql5);
?>

<?php
 
if(isset($_POST['at1']))
{
   session_start(); 
    $_SESSION['Branch']=$Branch;
    $_SESSION['Subjectname']=$Subjectname;
    $_SESSION['Subjectcode']=$Subjectcode;
    $_SESSION['Semester']=$Semester;
    $ExamType=$_POST['ExamType'];
}


?>


 <?php
    include_once 'dbConnection.php';
    
    

    if(isset($_POST['att'])){

      

      foreach ($_POST['st_status'] as $i => $st_status) {
    
    
        $stat_id = $_POST['stat_id'][$i];
        $Name=$_POST['Name'][$i];
        $Branch=$_POST['Branch'][$i];
        $Semester=$_POST['Semester'];
        $dp = date('Y-m-d');
        
        
         $Branch =$_POST['Branch'];
         $Subjectname =$_POST['Subjectname'];
         $Subjectcode =$_POST['Subjectcode'];
         $Semeter =$_POST['Semeter'];
         $name =$_POST['name'];
         $ExamType =$_POST['ExamType'];
         
         
//  $sql = "insert into attendance(Facultyname,Branch,Subjectname,Subjectcode,Semester,stat_id,Name,st_status,stat_date) values('$name','$Branch','$Subjectname','$Subjectcode','$Semeter',$stat_id','$Name','$st_status','$dp')";
 // $sql = "insert into attendance(stat_id,Name,st_status,stat_date) values('$stat_id','$Name','$st_status','$dp')";
//$sql1="INSERT INTO `Marks` (`Facultyname`, `Branch`, `Subjectname`, `Subjectcode`, `Semester`, `stat_id`, `Name`, `st_status`, `stat_date`) VALUES ('$name', '$Branch', '$Subjectname', '$Subjectcode', '$Semester', '$stat_id', '$Name', '$st_status', '$dp')";
  
 $sql1=" INSERT INTO `Marks` (`Facultyname`, `Branch`, `Subjectname`, `Subjectcode`, `Semester`, `stat_id`, `Name`, `Marks`, `Date`,`ExamType`) VALUES ('$name', '$Branch', '$Subjectname', '$Subjectcode', '$Semester', '$stat_id', '$Name', '$st_status', '$dp','$ExamType')";
  
     mysqli_query($con, $sql1);
              
      }   
       
      //$sql2="INSERT INTO teacherAttendenceRecord(Facultyname,Branch,Subjectname,Subjectcode,Status) VALUES('$name','$Branch','$Subjectname','$Subjectcode','$Semeter','Yes')";
      $sql2="INSERT INTO `MarksDelete` (`Facultyname`, `Branch`, `Subjectname`, `Subjectcode`, `Semester`, `Status`, `date`) VALUES ('$name', '$Branch', '$Subjectname', '$Subjectcode', '$Semester', 'Yes', '$dp')";
     
     
      mysqli_query($con, $sql2);
  
      
      
           


 
         mysqli_close($con);
        
        //echo "Attendance Recorded.";

      
      
      
  
  


}

  
  
 ?>
 
  



<script src="./jjss/WebResource.axd" type="text/javascript"></script>


<script src="./jjss/ScriptResource.axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="./jjss/ScriptResource(1).axd" type="text/javascript"></script>

        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'masterPageForm', ['fctl00$ContentPlaceHolder1$upModal','ContentPlaceHolder1_upModal'], [], [], 90, 'ctl00');
//]]>
</script>

        <div id="wrapper">
            <nav class="navbar navbar-aktu navbar-static-top" role="navigation" style="margin-bottom: 0;">
                <div class="navbar-header" style="height: 50px; margin-top: -10px;">

                    <a id="hlpkNavBar" class="navbar-brand nav-name-user" style="padding: 19px 15px; letter-spacing: 4px; font-weight: 200;">
                        <img src="./imgs/iec.png" style="height: 25px; width: 25px; display: inline-block;">
                        <span style="margin-left: 10px;"><span style="font-weight: 600;">IEC - ERP</span></span></a>                </div>

            </nav>

            <div id="page-wrapper-public">


    <!-- Bootstrap Modal Dialog -->
    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="ContentPlaceHolder1_upModal">

                    <div class="modal-content">
                        <div class="modal-header" style="background: #b71c1c; color: #fff; padding-bottom: 15px; padding-top: 15px;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff; opacity: 1;">×</button>
                            <h5 class="modal-title">
                                <span id="ContentPlaceHolder1_lblModalTitle"></span></h5>

                        </div>
                        <div class="modal-body">
                            <span id="ContentPlaceHolder1_lblModalBody"></span>
                        </div>
                        <div class="modal-footer" style="border-top: 1px #eee solid; padding: 5px;">

                            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close (बंद करे)</button>
                        </div>
                    </div>

</div>
        </div>
    </div>

    <h3 class="page-header"> <a href="https://iec.edu.in/erp/faculty/dashbord.php"> Faculty Dashboard  </a>	<div style="width: 60%; float:right">
   <div align="right">

   <a href="logout.php">    <img src="imgs/logout.png" alt="logout" width="105" height="36"></a>

   </div>
</div></h3>

	<div>






	<div class="row">
        <div id="ContentPlaceHolder1_pnlDashboard" class="panel panel-primary">

            <div class="panel-heading">
                <h3 class="panel-title">Faculty Detalils from Database
				<div style="width: 60%; float:right">
   <div align="right">



   </div>
</div>
				</h3>

            </div>

            <div class="panel-body">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                            <center>
                             <h3>  <b>Marks Portal </b></h3>
                          </center>

                      </div>
         
                  </div>
                  
                <div style="width: 30%; margin-left:35%;" >
                  <center>
<table class="table-hover table " >
    <form action="" method="post" >
    <tr style="margin-buttom: 10px">
        <td>Name </td>
        <td><?php echo $name;?></td>
    </tr>
    <tr>
        <td> Branch</td>
        <td><select name="Branch">
        <option> Please Select </option>
                                         <?php
 while($row = mysqli_fetch_array($result1))

{
 
 
 ?>
   
  
 <option value="<?php echo $row[1]?>"> <?php echo $row[1]?>
 
 </option>
 <?php 
}
 ?>
   
    
    
    
      
  </select></td>
    </tr>
    <tr>
        <td>Subject Name</td>
        <td>  <select name="Subjectname">
        <option> Please Select </option>
                                         <?php
 while($row3 = mysqli_fetch_array($result3))

{
 
 
 ?>
   
   
 <option value="<?php echo $row3[3]?>"> <?php echo $row3[3]?>
 
 </option>
 <?php 
}
 ?>
   
    
    
    
      
  </select></td>
    </tr>
    <tr>
        <td>Subject Code</td>
         <td >
                                      
                                      
                                      
                                    
                                       <select name="Subjectcode">
        <option> Please Select </option>
                                         <?php
 while($row2 = mysqli_fetch_array($result2))

{
 
 
?>
   
   
 <option value="<?php echo $row2[2]?>"> <?php echo $row2[2]?>
 
 </option>
 <?php 
}
 ?>
   
    
    
    
      
  </select>
  </td>
        
    </tr>
    <tr>
        <td>Semester</td>
        <td><select name="Semester">
            <option>Please Select</option>
                                      <?php
 while($row5 = mysqli_fetch_array($result5))

{
 
 
 ?>
 
    <option Value="<?php echo $row5[5]?>"><?php echo $row5[5]?></option> 
    
    <?php
    }
    ?>
    </select></td>
        
    </tr>
    <tr>
        <td>Examination Type</td>
        <td>
            
            <select name="ExamType">
                <option>Please Select</option>
                <option value="CP1">
                    CP1
                </option>
                <option value="CP2">
                    CP2
                </option>
                <option value="POT">
                    POT
                </option>
                
            </select>
            
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="at1"/></td>
    </tr>
    </form>
</table>
</center>
</div>  
<br>
<br>
<div style="width: 40%; margin-left:30%;" >
                  <center>
<table class="table-hover table " >
<tr>
    <th>Branch</th>
    <th>Semester</th>
    <th>Subject Code</th>
    <th>Subject Name</th>
     <th>Examination Type</th>
</tr>
<tr>
    
    <td><?php echo $Branch;?></td>
    <td><?php echo $Semester;?></td>
    <td><?php echo $Subjectcode;?></td>
    <td><?php echo $Subjectname;?></td>
    <td><?php echo $ExamType;?></td>
</tr>



</table>
</center>
</div>


<?php

include_once 'dbConnection.php';




{





$result = mysqli_query($con,"SELECT * FROM student where Branch='$Branch' && Semester='$Semester' ") or die('Record Inserted Successfuly!');

$count=mysqli_num_rows($result);


}

?>


<body>
    
<table id="tblCustomers" class="table table-striped table-hover">

                    <tr>
                       
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>Branch</th>
                        

                         <th>Semester </th>
                         <th>Email </th>
                         
                         <th>Status</th>
                        
                    </tr>
                
                <tbody>
				
                <?php
                $i = 1;
              $radio = 0;
              
              
while($row = mysqli_fetch_array($result))

{   

                ?>
                
                
          <form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">          
                
                 <tr>
       <td><?php echo $row['st_id']; ?><input type="hidden" name="stat_id[]" value="<?php echo $row['st_id']; ?>"></td>
       <td><?php echo $row['Name']; ?></td>
       <td><?php echo $row['Branch']; ?><input type="hidden" name="Name[]" value="<?php echo $row['Name']; ?>"></td>
       <td><?php echo $row['Semester']; ?></td>
       <td><?php echo $row['email']; ?></td>
      
      <td><?php $Branch; ?><input type="hidden" name="Branch" value="<?php echo $Branch; ?>"></td>
      <td><?php $Subjectname; ?><input type="hidden" name="Subjectname" value="<?php echo $Subjectname; ?>"></td>
      <td><?php $Subjectcode; ?><input type="hidden" name="Subjectcode" value="<?php echo $Subjectcode; ?>"></td>
      <td><?php $Semester; ?><input type="hidden" name="Semester" value="<?php echo $Semester; ?>"></td>
      <td><?php $name; ?><input type="hidden" name="name" value="<?php echo $name; ?>"></td>
      <td><?php $ExapType; ?><input type="hidden" name="ExamType" value="<?php echo $ExamType; ?>"></td> 
       <td>
         <label>Marks</label>
         <input type="text" name="st_status[<?php echo $radio; ?>]"  >
         
         
       </td>
     </tr>
             
   <?php   
    $radio++;  
}
          
           ?>  
              
              
              
              
                </tbody>


 
                    <div class="row"></div>
                </div>
            </div>
        
</div>
    </div>

            </div>
        </div>
<tbody>
    
    <center><br>
    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Save!" name="att"  />
  </center>
</tbody>
 
    </form>
    
    
    <?php
     if(isset($_POST['att'])){
     
     
     header('Location: Teacher-Attendence-Record.php/');
     }
     ?>

    <script src="./jjss/material.js.download"></script>
    <script src="./jjss/ripples.min.js.download"></script>
    <script>
        $.material.init();
    </script>

<br />
       <input type="button" id="btnExport" value="Download In Excel" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="jjss/table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#btnExport").click(function () {
                $("#tblCustomers").table2excel({
                    filename: "Table.xls"
                });
            });
        });
    </script>




</body></html>
