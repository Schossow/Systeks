<?php
  # ****************************************
  # Control Panel - Module for login
  # Brifcase: https://www.techteks.net
  # Date: 10/26/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  # Connect to data base
  require_once '../config/db_connect.php';

  if(isset($_POST['confirm_password'])){ # Check if the variable session_start exit of the login form
    # Store variables of tried to login for post method
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $admin_type = $_POST['type'];
    $password = $_POST['password'];

    # Encrypt the password
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admins (username, full_name, email, user_type, password) VALUES('".$username."','".$full_name."','".$email."','".$admin_type."','".$password_hashed."')";
    $query2 = mysqli_query($dbQuery, $query) or die ("Error in the query of registry ->".mysqli_error($dbQuery));
    if($query2){
      // LET PASS
    }else{
      echo 'Error, please try again later.';
    }
  }else{
    echo 'Error, please try again later.';
  }