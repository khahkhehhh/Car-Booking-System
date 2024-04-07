<?php 
ob_start();
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 
include ('dbconnect.php');

 
if (isset($_GET['id']))
{
    $vid = $_GET['id'];
}


//SQL DELETE 
$sql = "DELETE FROM tb_vehicle WHERE v_reg = '$vid' ";

 mysqli_query ($con,$sql);
header ('location: vehicle.php');
mysqli_close($con);
ob_end_flush();

?>
