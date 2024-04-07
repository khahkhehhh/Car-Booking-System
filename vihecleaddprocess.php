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

    $pname = rand(1000,10000)."-".$_FILES["uploadfile"]["name"];

    $tname = $_FILES["uploadfile"]["tmp_name"];

    $uploads_ = 'img/';

    move_uploaded_file($tname, $uploads_.'/'.$pname);

    #sql query to insert into database
    $sql = "INSERT INTO tb_vehicle (v_reg, v_pic, v_type, v_model, v_year, v_price)
            VALUES ('$vreg', '$pname', '$vtype', '$vmodel', '$vyear', '$vprice')";

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

