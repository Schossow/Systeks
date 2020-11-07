<?php
  # ****************************************
  # Control Panel - Administrators list
  # Brifcase: https://www.techteks.net
  # Date: 11/05/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  # Print all list of administrators
  $query = "SELECT * FROM admins ORDER BY id ASC";
  $result = mysqli_query($dbQuery, $query) or die ("Error in the query of administrators -> ".mysqli_error($dbQuery));
  
  while($admins = mysqli_fetch_array($result)){
    if($admins['username'] == $_SESSION['username']){
      echo '<tr>
              <td><strong>'.$admins['id'].'</strong></td>
              <td>'.$admins['username'].'</td>
              <td>'.$admins['full_name'].'</td>
              <td>'.$admins['email'].'</td>
              <td>'.$admins['user_type'].'</td>
              <td>b</td>
            </tr>';
    }else{
      echo '<tr>
              <td><strong>'.$admins['id'].'</strong></td>
              <td>'.$admins['username'].'</td>
              <td>'.$admins['full_name'].'</td>
              <td>'.$admins['email'].'</td>
              <td>'.$admins['user_type'].'</td>
              <td>a</td>
            </tr>';
    }
  } // End while