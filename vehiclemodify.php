 <?php 
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 

include 'headerstaff.php';
include ('dbconnect.php');

if(isset($_GET['id']))
{
    $vreg = $_GET['id'];
}

//Retrieve booking (JOIN)
$sql=" SELECT * FROM tb_vehicle WHERE v_reg= '$vreg'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result); 
?>


<div class="container">
    <form class="form-horizontal" method="POST" action="vehiclemodifyprocess.php">

        <table class="table table-hover">
<br><br>
        <h2>Modify Vehicle</h2><br><br>

        <tr>
            <td>Plate Number</td>
                <td><label for="vReg" class="col-lg-4 control-label"><?php echo $vreg;?></label></td>
        </tr>


        <tr>
            <td>Type</td>
            <td>
            <?php
                echo '<input name="vtype" class="form-control" id="changeType" value="'.$row['v_type'].'">';
             ?>
            </td>
        </tr>

        <tr>
            <td>Model</td>
            <td>
            <?php
                echo '<input name="vmodel" class="form-control" id="changeModel" value="'.$row['v_model'].'">';
             ?>
            </td>
        </tr>

        <tr>
            <td>Year</td>
            <td>
            <?php
                echo '<input name="vyear" class="form-control" id="changeSeat" value="'.$row['v_year'].'">';
             ?>
            </td>
        </tr>

        <tr>
            <td>Price</td>
            <td>
            <?php
                echo '<input name="vprice" class="form-control" id="changePrice" value="'.$row['v_price'].'">';
             ?>
            </td>
        </tr>

        <tr>
            <td>Image</td>
                <td>
                <?php
                    echo '<input class="form-control" type="file" name="uploadfile" id="addImg" value="'.$row['v_pic'].'">';
                ?>   
                </td>
        </tr>
        

        </table>

        <input type="hidden" name="vreg" class="form-control" id="vreg" value="<?php echo $row['v_reg'];?>"></input>
        <a href= 'vehicle.php'class ='btn btn-primary'>Back</a> 
      
                <button type="submit" name="upload" class="btn btn-success" >Update</button> 
    </form>
<br><br><br><br>
</div>


<?php include 'footermain.php'; ?>