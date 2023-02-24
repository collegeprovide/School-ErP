<!DOCTYPE html>
<!-- saved from url=(0062)https://erp.aktu.ac.in/WebPages/Public/Students/Dashboard.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description"><meta name="author" content="G Krishna Chauhan"><title>
	 ERP
</title><link href="./jjss/bootstrap.min.css" rel="stylesheet"><link href="./jjss/metisMenu.min.css" rel="stylesheet"><link href="./jjss/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="./jjss/jquery.min.js.download"></script>
    <script src="./jjss/bootstrap.min.js.download"></script>
    <script src="./jjss/metisMenu.min.js.download"></script>
    <script src="./jjss/sb-admin-2.js.download"></script>
    <script src="./jjss/ERPPopUp.js.download"></script>
    <script src="./jjss/validations.js.download"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7015057872730743",
          enable_page_level_ads: true
     });
</script>
    <style>
    @media only screen and (max-width: 600px) {
        #pic-design{
            margin-top: -90px;
            margin-bottom: 10px;
        }
    }
    </style>
    
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
    
    <style>
        @media screen and (max-width: 480px) {
  
              #imgres{
                 margin-left: 15%;
                      }

    }
    </style>
    
    
    </head>
<body>



<?php
 
include_once 'dbConnection.php';
 
session_start();

  if(!(isset($_SESSION['AdmNo'])))
  {
header("location:http://bbcskderp.epizy.com/erp/index.php");
  }

else
{

//include_once 'dbConnection.php';

$ref=@$_GET['q'];

$name = $_SESSION['name'];
$email=$_SESSION['email'];
$AdmNo=$_SESSION['AdmNo'];
$Class=$_SESSION['Class'];
$FatherName=$_SESSION["FatherName"];

}?>

<?php

{

$result = mysqli_query($con,"SELECT * FROM userr WHERE AdmNo = '$AdmNo'") or die('Error');



$count=mysqli_num_rows($result);


if($count==1)
{

while($row = mysqli_fetch_array($result)) {

	$FatherName = $row['FatherName'];
	$stmobileno = $row['stmobileno'];
	$RollNo = $row['RollNo'];
	$FatherMobile= $row['FatherMobile'];

	$DOB= $row['DOB'];
	$Section= $row['Section'];
	$SAddress= $row['SAddress'];	
	$email= $row['email'];	
	$image_src = $row['image'];

	
}
}

}?>








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
                        <img src="./imgs/" style="height: 25px; width: 25px; display: inline-block;">
                        <span style="margin-left: 10px;"><span style="font-weight: 600;"> ERP</span></span></a>                </div>

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

    <h3 class="page-header"> <a href="http://bbcskderp.epizy.com/erp/dash/dashbord.php"> Student Dashboard </a>	<div style="width: 60%; float:right">
   <div align="right">
   
   <a href="logout.php">    <img src="imgs/logout.png" alt="logout" width="105" height="36"></a>
   
   </div>
</div></h3>
    
	<div>
	


	

	
	<div class="row">
        <div id="ContentPlaceHolder1_pnlDashboard" class="panel panel-primary">
	
            <div class="panel-heading">
                <h3 class="panel-title">Student Options 
                <div style="width: 60%; float:right">
   <div align="right">Hi !&nbsp;  <?php echo $name; ?>
   
   
   
   </div>
</div>
				</h3>
				
            </div>
           
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                            <center>
                             <h3>  <b> Student Profile </b></h3>
                          </center>
                           
                      </div>
                  </div>
				  
				  
				  <div class="row"></div>

                  <div class="row">
                        <div class="col-md-4">
                            <center>
                            <div class="row"></div>
                            <div class="row"></div>
                            </center>
                        </div>
<?php

include_once 'dbConnection.php';
session_start();

// $Batch=$_SESSION['Batch'];
$Branch=$_SESSION['Branch'];
$semester=$_SESSION['semester'];

// echo $Batch;
// echo $Branch;
// echo $semester;
// echo $AdmNo;

$result1 = mysqli_query($con,"SELECT *  FROM picsign WHERE AdmNo='$AdmNo'") or die('Error');

$count1=mysqli_num_rows($result1);


while($row = mysqli_fetch_array($result1))

{        
    $image_src = $row['image']; $sign_src2 = $row['sign'];
 

?>






                

                       
                        <div class="col-md-4">
                          <center>
                          
                
                                  
                    
                  
                             <td><img id="imgres" src='<?php echo $image_src; ?>' height="100" width="100" >  </td> 
                            
                            <?php
}
?>
                            
                            <br>
							</div>
                              <p>&nbsp;</p>
                              <br>
                              <br>
                              <br>
                   
                            
                              </center>
                              
                                  
                                          <form method="post" action="pic.php" id="pic-design" enctype='multipart/form-data'>
                                    
                                       
                                          <input  name="AdmNo1" type="hidden" value="<?php echo $AdmNo;?>" ><br>
                                        
 			                               <input style="margin-left: 45%;"   type='file' name='file' /><br>
 			                            
 			                           
 			                                
 			                              <input style="margin-left: 45%;" type='submit' value='Upload Img.' name='but_upload'>
 			                              
 			                             
				                     </form>
				             
                              
                              
                              <table id="tblCustomers" class="table table-striped table-hover" >

                              <tr>
                                  <td width="125"><span class="style1">Name :</span></td>
                                  <td width="270">  <span class="style2"><?php echo $name;?></span></td>
                                </tr>
                              <tr>
                                  <td><strong>Admission No. : </strong></td>
                                  <td> <?php echo $AdmNo;?> </td>
                                </tr>
                                
                                <tr>
                                  <td><strong>Enrolment No. : </strong></td>
                                  <td> <?php echo $RollNo;?> </td>
                                </tr>
                                <tr>
                                  <td><strong>Class :</strong></td>
                                  <td><?php echo $Class;?></td>
                                </tr>
                                
                                
                                <tr>
                                  <td><strong>Section :</strong></td>
                                  <td><?php echo $Section;?></td>
                                </tr>
                                
                                
                                
                                 <tr>
                                  <td><strong>Mob. No. : </strong></td>
                                  <td><?php echo $stmobileno;?></td>
                                </tr>
                                <tr>
                                  <td><strong>E-Mail:</strong></td>
                                  <td><?php echo $email;?> </td>
                                </tr>
                                
                                <tr>
                                  <td><strong>Father's Name : </strong></td>
                                  <td> <?php echo $FatherName;?> </td>
                                </tr>
                               
                                <tr>
                                  <td><strong>Father's Mob. No. : </strong></td>
                                  <td><?php echo  $FatherMobile ?> </td>
                                </tr>
                                
                                <tr>
                                  <td><strong>Date of Birth : </strong></td>
                                  <td><?php echo $DOB;?></td>
                                </tr>
                                <tr>
                                  <td><strong>Address :</strong></td>
                                  <td><?php echo $SAddress;?></td>
                                  
                                </tr>
                                
                              </table>

							  <p>&nbsp;</p>
							</div>
                            </div>
                          </center>
                        </div>
						
                        <div class="col-md-4">
                          <center>
                            <div class="row"></div>
                            <div class="row"></div>
                          </center>
                        </div>
                  </div>
				  
				  
				  
				    
            </div>
        
</div>
    </div>

            </div>
            
            
            
                     <div class="row">
        <div id="ContentPlaceHolder1_pnlDashboard" class="panel panel-primary">
	
            <div class="panel-heading">
             <h3 class="panel-title">
                <center> <h3 class="panel-title">     <center> Copyright © <?php echo date('Y');?> @ ERP  </CENTER>
</div></div>
		
  
        </div>

</div>

    </form>

    <script src="./jjss/material.js.download"></script>
    <script src="./jjss/ripples.min.js.download"></script>
    <script>
        $.material.init();
    </script>






</body></html>