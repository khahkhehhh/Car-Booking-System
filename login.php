<?php include 'headermain.php'; ?>

<div class="container">

    <form class="form-horizontal" method="POST" action="loginprocess.php">
    <fieldset>
<br><br>
      <legend>Login</legend>

      <div class="form-group">
        <label for="inputIC" class="col-lg-2 control-label">IC Number</label>
        <div class="col-lg-10">
          <input type="text" name="fic" class="form-control" id="inputIC" placeholder="Enter your identification number" required>
        </div>
<br><br>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" name="fpwd" class="form-control" id="inputPassword" placeholder="Enter your password" required>
        </div>
      </div>
<br><br>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" class="btn btn-primary">Login</button>
          <button type="reset" class="btn btn-warning">Clear</button>
        </div>
      </div>
    </fieldset>
  </form>

</div>


<?php include 'footermain.php'; ?>