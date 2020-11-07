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
            <td>'.$expenses['amount'].'</td>
            <td>a</td>
          </tr>';
  } // End while