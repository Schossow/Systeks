<?php
  # ****************************************
  # Control Panel - View of admin information
  # Brifcase: https://www.techteks.net
  # Date: 11/08/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  session_start();
  # Databases conection
  require_once '../config/db_connect.php';
  
  $query = "SELECT * FROM admins WHERE username='".$_SESSION['username']."'";
  $result = mysqli_query($dbQuery, $query) or die ("Error in the query for show admin information -> ".mysqli_error($dbQuery));
  $admins = mysqli_fetch_array($result);
  
  echo '
  <div class="container" style="padding-top:40px;">
    <div class="row justify-content-center">
      <div class="col-md-6 mb-5">
        <div class="card">
          <h3 class="card-header">Edit my acount</h3>
          <div class="card-body">
            <form id="edit_admin_form" action="" method="POST">
              <div class="form-group">
                <label>Username:</label>
                <input type="text" id="username" name="username" class="form-control" value="'.$admins['username'].'">
                <small class="error" id="username_error"></small>
              </div>
              <div class="form-group">
                <label>Full name:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" value="'.$admins['full_name'].'">
                <small class="error" id="full_name_error"></small>
              </div>
              <div class="form-group">
                <label>Email:</label>
                <input type="text" id="email" name="email" class="form-control" value="'.$admins['email'].'">
                <small class="error" id="email_error"></small>
              </div>
              <div class="form-group">
                <?php
                  if('.$_SESSION['type'].' == "principal"){
                ?>
                  <label>Admin type:</label>
                  <select id="type" name="type" class="form-control">
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
                <input type="password" id="password" name="password" class="form-control">
                <small class="error" id="password_error"></small>
              </div>
              <div class="form-group">
                <label>Confirm password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                <small class="error" id="confirm_password_error"></small>
              </div>
              <div class="form-group">
                <label>Enter your last password:</label>
                <input type="password" id="last_password" name="last_password" class="form-control" placeholder="Enter your last password">
                <small class="error" id="last_password_error"></small>
              </div>
              <input type="submit" id="send_edit" class="btn btn-success py-2 px-5" value="Edit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>';
