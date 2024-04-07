<?php 
ob_start();
include 'cbssession.php';
if(!session_id())
{
  session_start();
} 

include 'headerstaff.php';
include ('dbconnect.php');

?>


<div class="container">
    <form class="form-horizontal" method="POST" action="vihecleaddprocess.php" enctype="multipart/form-data">

        <table class="table table-hover">
<br><br>
        <h2>Add New Vehicle</h2><br><br>

        <tr>
            <td>Plate Number</td>
            <td>
                <input name="vreg" class="form-control" id="addReg">
            </td>
        </tr>

 
        <tr>
            <td>Type</td>
            <td>
                <input name="vtype" class="form-control" id="addType">
            </td>
        </tr>

        <tr>
            <td>Model</td>
            <td>
                <input name="vmodel" class="form-control" id="addModel">
            </td>
        </tr>

        <tr>
            <td>Year</td>
            <td>
                <input name="vyear" class="form-control" id="addYear">
            </td>
        </tr>

        <tr>
            <td>Price</td>
            <td>
                <input name="vprice" class="form-control" id="addPrice">
            </td>
        </tr>

         <tr>
            <td>Image</td>
            <td>
                <input class="form-control" type="file" name="uploadfile" id="addImg">
            </td>
        </tr>


        </table>

        <input onclick="myFunction()" type="submit" name="upload" class="btn btn-success" value="Add">
    </form>
<br><br>
</div>

<script>
function myFunction() {
  alert("Vehicle is successfully added!");
}
</script>

<?php include 'footermain.php';?>