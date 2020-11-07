<?php
  # ****************************************
  # Control Panel - Login
  # Brifcase: https://www.techteks.net
  # Date: 10/26/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  # Login to update global variables
  session_start();
  # Connect to data base
  require_once 'config/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
  include("templates/head.php");
?>

<body>

  <script language="JavaScript">
    // AVOID SUBMIT WHEN REFILLING PAGE WITH FORM
    if (window.history.replaceState) { // Verify availability
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm text-body">
    <div class="container">
      <a class="navbar-brand" href="index.php"><strong><img src="images/TECH-TEKS-04.png" width="35" height="auto"> Systeks</strong></a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="https://api.whatsapp.com/send?phone=50762064626&text=Tengo%20un%20problema%20en%20el%20panel%20de%20control%20de%20Tracking%20Box.">
          <span class="icon-settings"></span><ion-icon name="settings-sharp"></ion-icon> Support</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="alert alert-danger text-center" id="mensage_error" style="display:none;" role="alert"></div>

  <div class="padding-topbottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
          <div class="card">
            <h3 class="card-header">Login</h3>
            <div class="card-body">
              <form id="login_form" action="" method="POST">
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
                  <small class="error" id="username_error"></small>
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                  <small class="error" id="password_error"></small>
                </div>
                <input type="checkbox" checked> Remember log
                <input type="submit" id="send_login" class="btn btn-success" style="float:right;" value="Login" name="start_session">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include('templates/footer.php');
  ?>
</body>
</html>