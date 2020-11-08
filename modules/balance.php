<?php
  # ****************************************
  # Control Panel - Balance list
  # Brifcase: https://www.techteks.net
  # Date: 11/08/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  session_start();
  # Connect to data base
  require_once '../config/db_connect.php';
  # Print all list of expenses
  $query = "SELECT amount FROM expenses ORDER BY id DESC";
  $result = mysqli_query($dbQuery, $query) or die ("Error in the query of expenses balance -> ".mysqli_error($dbQuery));
  $amount = 0;
  while($expenses = mysqli_fetch_array($result)){
    $amount = $amount + $expenses['amount'];
  } // End while

  $query = "SELECT amount FROM income ORDER BY id DESC";
  $result = mysqli_query($dbQuery, $query) or die ("Error in the query of income balance -> ".mysqli_error($dbQuery));
  $amount2 = 0;
  while($income = mysqli_fetch_array($result)){
    $amount2 = $amount2 + $income['amount'];
  } // End while
  echo '<h3 style="text-align:center;">BALANCE: $'.number_format($amount2 - $amount, 2).'</h3>';