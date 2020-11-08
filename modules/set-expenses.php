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

    $query = "INSERT INTO expenses (name, description, amount, by_username, date, date_time, visibility) VALUES('".$name."','".$description."','".$amount."','".$_SESSION['username']."', CURDATE(), NOW(),'yes')";
    $result = mysqli_query($dbQuery, $query) or die ("Error in the query of insert a expenses -> ".mysqli_error($dbQuery));

    $query = "SELECT * FROM expenses ORDER BY id DESC";
    $result = mysqli_query($dbQuery, $query) or die ("Error in the query of expensess -> ".mysqli_error($dbQuery));
    
    while($expenses = mysqli_fetch_array($result)){
      echo '<tr>
              <td><strong>'.$expenses['id'].'</strong></td>
              <td>'.$expenses['name'].'</td>
              <td>'.$expenses['date'].'</td>
              <td style="color:red;"><strong>-$'.number_format($expenses['amount'],2).'</strong></td>
              <td><ion-icon class="btn btn-outline-primary btn-sm" name="eye"></ion-icon><ion-icon class="btn btn-outline-danger btn-sm" name="trash-sharp"></ion-icon></td>
            </tr>';
    } // End while
  }