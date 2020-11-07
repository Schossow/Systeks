<?php
  # ****************************************
  # Control Panel - Module for login
  # Brifcase: https://www.techteks.net
  # Date: 10/26/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  DEFINE('HOST','localhost');
  DEFINE('USER','root');
  DEFINE('PASS','root');
  DEFINE('DBNAME', 'systeks_db');

  $dbQuery = mysqli_connect(HOST, USER, PASS, DBNAME) or die("COULD NOT ESTABLISH A CONNECTION WITH THE DATABASE: ".mysqli_connect_error());
