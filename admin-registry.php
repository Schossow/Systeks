<?php
  # ****************************************
  # Control Panel - Registry
  # Brifcase: https://www.techteks.net
  # Date: 10/26/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  session_start();

	if(!isset($_SESSION['type'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<?php
  include("templates/head.php");
?>


<body>

  <?php
    include("templates/navbar.php");
  ?>

  <div class="alert alert-danger text-center" id="mensage_error" style="display:none;" role="alert"></div>
  <div class="container" style="padding-top:40px;">
    <div class="row justify-content-center">
      <div class="col-md-6 mb-5">
        <div class="card">
          <h3 class="card-header">Admin Registry</h3>
          <div class="card-body">
            <form id="registry_form" action="" method="POST">
              <div class="form-group">
                <label>Username:</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
                <small class="error" id="username_error"></small>
              </div>
              <div class="form-group">
                <label>Full name:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter your full name">
                <small class="error" id="full_name_error"></small>
              </div>
              <div class="form-group">
                <label>Email:</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email">
                <small class="error" id="email_error"></small>
              </div>
              <div class="form-group">
                <?php
                  if($_SESSION['type'] == 'principal'){
                ?>
                  <label>Admin type:</label>
                  <select id="type" name="type" class="form-control">
                    <option value="NULL">Admin type</option>
                    <option value="principal">Principal</option>
                    <option value="regular">Regular</option>
                  </select>
                  <small class="error" id="type_error"></small>
                <?php
                  }else{
                ?>
                  <label>Admin type:</label>
                  <input id="type" name="type" class="form-control" value="Regular" disabled>
                  </select>
                  <small class="error" id="type_error"></small>
                <?php
                  }
                ?>
              </div>
              <div class="form-group">
                <label>Password:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                <small class="error" id="password_error"></small>
              </div>
              <div class="form-group">
                <label>Confirm password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm password">
                <small class="error" id="confirm_password_error"></small>
              </div>
              <input type="submit" id="send_registry" class="btn btn-success py-2 px-5" value="Registry">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include("templates/footer.php");
  ?>
</body>
</html>