<?php

include 'cbssession.php';

if(!session_id())
{
  session_start();
} 

include("dbconnect.php");

$uid = $_SESSION['uid'];
$fvec = $_POST['fvec'];
$fpdate = $_POST['fpdate'];
$frdate = $_POST['frdate'];

//Calculate number of days
$pickup = date('Y-m-d H:i:s', strtotime($fpdate));
$return = date('Y-m-d H:i:s', strtotime($frdate));
$daydiff = abs(strtotime($frdate)-strtotime($fpdate));  //Seconds
//$daydiff = abs($return-$pickup);

$daynum = $daydiff/(60*60*24);


//Retrieve price from DB
$sqlprice = "SELECT v_price FROM tb_vehicle WHERE v_reg ='$fvec'";
$resultprice = mysqli_query($con,$sqlprice);
$rowprice = mysqli_fetch_array($resultprice);

//Calculate total price
$totalprice = $daynum * ($rowprice['v_price']);

if (isset($_POST['fpdate'], $_POST['frdate'])) {
    $fpdate = $_POST['fpdate'];
    $frdate = $_POST['frdate'];
    if ($frdate < $fpdate) {
         include 'headercustomer.php' ;
 
         echo "<br><br>";
        echo "Return date can not set before the pickup date";
        echo "<br><br>";
         echo "<a href='customer.php? ' class = 'btn btn-warning' >Back</a>";
         
        include 'footermain.php' ;
        exit;
    } else {
        //process the booking
        
    }
}

//Record (Insert) new booking into DB

$sql = "INSERT INTO tb_booking (b_customer, b_vehicle, b_pdate, b_rdate, b_total, b_status)
        VALUES ('$uid','$fvec','$fpdate','$frdate','$totalprice','1')";

mysqli_query ($con,$sql);
mysqli_close($con);

//Succesful notification or redirect
include 'headercustomer.php' ;
echo "<div>";
echo "<br><br>";
 echo"<script>alert('Your Booking is Successfully!')</script>";
 echo"<h1>See Your Booking</h1>";
 echo "<a href='customermanage.php? ' class = 'btn btn-success' >Your Booking</a>";
 echo "</div>";
 include 'footermain.php' ;
?>



<?php include 'footermain.php';?>