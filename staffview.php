<?php 

include 'cbssession.php';
if(!session_id())
{
  session_start();
} 

include 'headerstaff.php';
include ('dbconnect.php');

//Retrieve new bookings

$sql="SELECT * FROM tb_booking 
      LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
      LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
      LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id
      WHERE b_status != '1'";
$result = mysqli_query($con,$sql);

?>



<style>
#myInput {
  background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat 13px center;
  background-position: 10px 10px;
  width: 100%;
  font-size: 16px;
  padding: 9px 4px 9px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>


<div class ="container">
<br><h3>Booking List </h3>
<input type="text" id="myInput" placeholder="Search booking" >
<table class="table table-hover" id="dataTableHover">
  <thead>
    <tr>
      <th scope="col">Booking ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Vehicle</th>
      <th scope="col">Pick-up Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>

  <tbody>
    <?php
    while ($row =mysqli_fetch_array($result))
    {
        echo '<tr>';
        echo "<td>".$row['b_id']."</td>";
        echo "<td>".$row['u_name']."</td>";
        echo "<td>".$row['v_model']."</td>";
        echo "<td>".$row['b_pdate']."</td>";
        echo "<td>".$row['b_rdate']."</td>";
        echo "<td>".$row['b_total']."</td>";
        echo "<td>".$row['s_desc']."</td>";
        echo "<td>";
           echo "<a href='staffmodify.php?id=".$row['b_id']."' class = 'btn btn-warning' >Change</a>";
    
           
        echo "</td>";
        echo '</tr>';
    }

    ?>

    
    
  </tbody>
</table>

<script>
myInput.addEventListener("keyup",function(){
var keyword = this.value;
keyword = keyword.toUpperCase();
var table_3 = document.getElementById("dataTableHover");
var all_tr = table_3.getElementsByTagName("tr");
for(var i=0; i<all_tr.length; i++){
var all_columns = all_tr[i].getElementsByTagName("td");
for(j=0;j<all_columns.length; j++){
if(all_columns[j]){
var column_value = all_columns[j].textContent || all_columns[j].innerText;
 column_value = column_value.toUpperCase();
if(column_value.indexOf(keyword) > -1){
all_tr[i].style.display = ""; // show
break;
}else{
all_tr[i].style.display = "none"; // hide
            }
          }
        }
     }
}) 
</script>


</div><br><br><br><br><br><br>

<?php include 'footermain.php';?>
