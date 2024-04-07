<?php
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 

include("dbconnect.php");
$uid = $_SESSION['uid'];
$fic = $_POST['fic'];
$fpwd = $_POST['fpwd'];
$fname = $_POST['fname'];
$fadd = $_POST['fadd'];
$fcontact = $_POST['fcontact'];
$flno = $_POST['flno'];

$sql = "UPDATE tb_user 
	SET u_id ='$fic', u_pwd='$fpwd', u_name='$fname', u_address='$fadd', u_phone='$fcontact', u_lno='$flno', u_type='2'
        WHERE u_id='$uid' ";

mysqli_query ($con,$sql);
mysqli_close($con);

header('location: customer.php');
?>



<?php include 'footermain.php';?>