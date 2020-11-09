<?php
  # ****************************************
  # Control Panel - Admin Information
  # Brifcase: https://www.techteks.net
  # Date: 11/08/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
  session_start();
  # Connect to data base
  require_once 'config/db_connect.php';


	if(!isset($_SESSION['type'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<?php
  include("templates/head.php");
?>


<body>

  <?php
    include("templates/navbar.php");
  ?>

  <div class="alert alert-danger text-center" id="mensage_error" style="display:none;" role="alert"></div>

  <div id="admin">

    <?php
      require 'views/admin-information-view.php';
    ?>
  
  </div>

  <?php
    include("templates/footer.php");
  ?>
</body>
</html>