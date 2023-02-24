
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
 
 


 
}?>  


 
<?php

 include_once 'dbConnection.php';
 
$con= new mysqli('localhost','erpiec','erpiec','erpiec')or die("Could not connect to mysql".mysqli_error($con));

$sql1="SELECT * FROM MarksDelete WHERE Facultyname='$name'";
$sql2="SELECT * FROM MarksDelete WHERE Facultyname='$name'";
   $result=mysqli_query($con,$sql1);
 $result1=mysqli_query($con,$sql2);
 $result3=mysqli_query($con,$sql2);
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
                             <h3>  <b>Teacher Marks Record</b></h3>
                          </center>

                      </div>
         
                  </div>


<div style="width: 80%; margin-left:15%;" >
                  <center>
<table class="table-hover table " >
    <tr>
        <th>Date</th>
        <th>Branch</th>
        <th>Subject Name</th>
        <th>Subject Code</th>
        <th>Semester</th>
        <th>Status</th>
        
    </tr>
 <?php
 while($row = mysqli_fetch_array($result))

{   

                ?>
    
    
    <tr>
        <td><?php echo $row[6];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        
        <?php   
    
            }
          
           ?>  
    </tr>
    
    
</table>
</center>
</div>
<br>
<br>

<div style="width: 80%; margin-left:15%;" >
                  <center>
<table class="table-hover table " >
    <form action="marksdelete.php" method="post">
    
    <tr>
    <td colspan="2" style="background-color: #B71C1C; color:#fff; text-align: center;"> 
    If You Want to Delete Please Select
    </td>
    </tr>
    <tr>
        <td>
            Select Date:
        </td>
        <td>
         <select name="date">
             <option>Please Select</option>
                             <?php
 while($row2 = mysqli_fetch_array($result3))

{   
?>
                <option>
                
                    
                     <?php echo $row2[6];?>
                     

                </option>
                <?php   
    
            }
          
           ?> 
             
         </select>
        
            
        </td>
    </tr>
    <tr>
        <td>Select Subject</td>
        <td>
            <select name="Subjectname">
                <option>Please Select</option>
                <?php
 while($row1 = mysqli_fetch_array($result1))

{   
?>
                <option>
                
                    
                     <?php echo $row1[2];?>
                     

                </option>
                <?php   
    
            }
          
           ?> 
            </select>
            
        </td>
    </tr>
    <tr>
        <td> </td>
        <td><input type="submit" value="Delete"/></td>
    </tr>
    
    </form>
    </table>
    </center>
    </div>

<?php

header('Location: https:/iec.edu.in/erp/faculty/Marks-Delete.php');

?>

</body></html>
