<!DOCTYPE html>
<html lang="en">
<head>
  <title>Power Car Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="img/logo.jpg" rel="icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>

</head>
<body>
 <body style="background-color:#ffffff;">



<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:darkblue;">
 <div class="container-fluid">
            <a href="staff.php" class="navbar-brand">
              &nbsp&nbsp&nbsp<img src="img/logo.jpg" width="80" height="60" >
            </a>


            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking Manage</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="staffbooking.php" class="dropdown-item">Booking Approval</a>
                            <a href="staffview.php" class="dropdown-item">Change Aprroval</a>
                      
                        </div>
                    </div>

                        <a href="vehicle.php" class="nav-link " >Vehicle Manage</a>

                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a class="nav-link" href="logout.php">Logout</a>

                     
                    
 
                </div>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>


             <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
               
          
       
            </ul>



            </div>
        </nav>







    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
             <a class="nav-link" href="staffbooking.php">Booking List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="staffview.php">Booking Modify List</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>



</body>
</html>
