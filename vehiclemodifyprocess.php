<?php 
ob_start();
include 'cbssession.php'; 
if(!session_id())
{
    session_start();
}

if (isset($_POST["upload"])){
    include ('dbconnect.php');

    $vreg = $_POST["vreg"];
    $vtype = $_POST["vtype"];
    $vmodel = $_POST["vmodel"];
    $vyear = $_POST["vyear"];
    $vprice = $_POST["vprice"];



    $sql = "UPDATE tb_vehicle
            SET v_type = '$vtype', v_model = '$vmodel',  v_year = '$vyear',  v_price = '$vprice'
            WHERE v_reg = '$vreg'";

    var_dump($sql);

    $result = mysqli_query($con, $sql);

    if($result){
        echo "File Successfully uploaded";
    }
    else{
        echo "error";
    }

    mysqli_close($con);
    header('Location: vehicle.php');
    obs_end_flush();
}
?>
