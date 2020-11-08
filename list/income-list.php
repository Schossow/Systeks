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
              <td style="color:mediumblue;">+$'.number_format($income['amount'],2).'</td>
              <td><ion-icon class="btn btn-outline-primary btn-sm" style="margin-right: 5px;" name="eye"></ion-icon><ion-icon class="btn btn-outline-danger btn-sm" name="trash-sharp"></ion-icon></td>
            </tr>';
    } // End while
  }
