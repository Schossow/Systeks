<?php
  # ****************************************
  # Control Panel - Set expenses
  # Brifcase: https://www.techteks.net
  # Date: 11/05/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  session_start();
  # Connect to data base
  require_once '../config/db_connect.php';

  if(isset($_POST['name'])){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO expenses (name, description, amount, by_username, date, date_time, visibility) VALUES('".$name."','".$description."','".$amount."', CURDATE(), NOW(),'yes')";
    $result = mysqli_query($dbQuery, $query) or die ("Error in the query of insert a expenses -> ".mysqli_error($dbQuery));

    $query2 = "SELECT * FROM expenses ORDER BY id ASC";
    $result = mysqli_query($dbQuery, $query2) or die ("Error in the query of expensess -> 1".mysqli_error($dbQuery));
    
    while($expenses = mysqli_fetch_array($result)){
      echo '<tr>
              <td><strong>'.$expenses['id'].'</strong></td>
              <td>'.$expenses['name'].'</td>
              <td>'.$expenses['date'].'</td>
              <td>'.$expenses['amount'].'</td>
              <td>a</td>
            </tr>';
    } // End while
  }