<?php
  #****************************************
  # Control Panel - Income list
  # Brifcase: https://www.techteks.net
  # Date: 11/05/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  if(isset($_SESSION['type'])){
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
