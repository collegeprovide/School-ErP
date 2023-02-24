<?php

session_start();

include('config.php');

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select email from student where email='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['email'];

//if(!isset($login_session))
if(($login_session) == Null)

{

?> 

<script type="text/javascript">

window.location = "http://localhost/tdf_php/chlogin.php";

</script>


<?php 

}

?>
