<?php
  #****************************************
  # Control Panel - Income list
  # Brifcase: https://www.techteks.net
  # Date: 11/05/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************

  if(isset($_POST['name'])){
    session_start();
    # Connect to data base
    require_once '../config/db_connect.php';

    $name = $_POST['name'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO income (name, description, amount, by_username, date, date_time, visibility) VALUES('".$name."','".$description."','".$amount."', CURDATE(), NOW(),'yes')";
    $result = mysqli_query($dbQuery, $query) or die ("Error in the query of insert a income -> ".mysqli_error($dbQuery));

    $query2 = "SELECT * FROM income ORDER BY id ASC";
    $result = mysqli_query($dbQuery, $query2) or die ("Error in the query of incomes -> 1".mysqli_error($dbQuery));
    
    while($income = mysqli_fetch_array($result)){
      echo '<tr>
              <td><strong>'.$income['id'].'</strong></td>
              <td>'.$income['name'].'</td>
              <td>'.$income['date'].'</td>
              <td>'.$income['amount'].'</td>
              <td>a</td>
            </tr>';
    } // End while
  }else{
    # Print all list of income
    $query = "SELECT * FROM income ORDER BY id DESC";
    $result = mysqli_query($dbQuery, $query) or die ("Error in the query of incomes -> 2".mysqli_error($dbQuery));
    
    while($income = mysqli_fetch_array($result)){
      echo '<tr>
              <td><strong>'.$income['id'].'</strong></td>
              <td>'.$income['name'].'</td>
              <td>'.$income['date'].'</td>
              <td>'.$income['amount'].'</td>
              <td>a</td>
            </tr>';
    } // End while
  }
