<?php
  # ****************************************
  # Control Panel - Expenses list
  # Brifcase: https://www.techteks.net
  # Date: 11/05/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  # Print all list of administrators
  $query = "SELECT * FROM expenses ORDER BY id DESC";
  $result = mysqli_query($dbQuery, $query) or die ("Error in the query of expenses -> ".mysqli_error($dbQuery));
  
  while($expenses = mysqli_fetch_array($result)){
    echo '<tr>
            <td><strong>'.$expenses['id'].'</strong></td>
            <td>'.$expenses['name'].'</td>
            <td>'.$expenses['date'].'</td>
            <td style="color:red;">-$'.number_format($expenses['amount'],2).'</td>
            <td><ion-icon class="btn btn-outline-primary btn-sm" style="margin-right: 5px;" name="eye"></ion-icon><ion-icon class="btn btn-outline-danger btn-sm" name="trash-sharp"></ion-icon></td>
          </tr>';
  } // End while