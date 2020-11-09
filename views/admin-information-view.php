<?php
  # ****************************************
  # Control Panel - View of admin information
  # Brifcase: https://www.techteks.net
  # Date: 11/08/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************

  $query = "SELECT * FROM admins WHERE username='".$_SESSION['username']."'";
  $result = mysqli_query($dbQuery, $query) or die ("Error in the query for show admin information -> ".mysqli_error($dbQuery));
  $admins = mysqli_fetch_array($result);
  
  echo ' 
    <div class="container" style="padding-top:40px;">
      <div class="row justify-content-center">
        <div class="col-md-6 mb-5">
          <div class="card">
            <h3 class="card-header">My Acount</h3>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" class="form-control" value="'.$admins['username'].'" disabled>
                </div>
                <div class="form-group">
                  <label>Full name:</label>
                  <input type="text" class="form-control" value="'.$admins['full_name'].'" disabled>
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="text" class="form-control" value="'.$admins['email'].'" disabled>
                </div>
                <div class="form-group">
                  <label>Admin type:</label>
                  <input type="text" class="form-control" value="'.$admins['user_type'].'" disabled>
                </div>
                <input type="button" id="edit" class="btn btn-success py-2 px-5" value="Edit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>';
