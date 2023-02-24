<?php
session_start();
if(session_destroy())
{
header("Location:http://bbcskderp.epizy.com/azad/index.php");
}
?>