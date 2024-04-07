
<?php 
session_start();

//DB connection
include("dbconnect.php");

//Retrieve input
$fic = $_POST['fic'];
$fpwd = $_POST['fpwd'];


//Get user data from DB
$sql = "SELECT * FROM tb_user WHERE u_id='$fic' AND u_pwd='$fpwd'";

//Execute SQL
$result=mysqli_query ($con,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

//Login check
if($count==1)   //user found
{

    //set session to protect our web page
    //to send variable
    $_SESSION['u_id'] = session_id();
    $_SESSION['uid'] = $fic;

   if($row['u_type'] == 1)//Admin
        {
            ?>
            <script>
                window.alert("Successfully login!");
                window.location.href='staff.php';
            </script>
            <?php
        }

   else//Customer
        {
            ?>
            <script>
                window.alert("Successfully login!");
                window.location.href='customerindex.php';
            </script>
            <?php
        }
}

else            //user not found
{
    //display error
    include 'headermain.php' ;
    echo"<script>alert('Invalid Password and User ID !')</script>";
    include 'footermain.php' ;
}

mysqli_close($con);
?>
<br><br>
<div class="container">
    <h3>Invalid Password and User ID !</h3>
    <a href="login.php">Login Page</a>
    
</div>



