<?php
  # ****************************************
  # Control Panel - Footer
  # Brifcase: https://www.techteks.net
  # Date: 11/02/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************
?>
  <script language="JavaScript"> 
    // AVOID SUBMIT WHEN REFRESH A PAGE WITH FORM
    if (window.history.replaceState) { // Verify Disponibility
       window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm text-body">
    <div class="container">
      <a class="navbar-brand" href="index.php"><strong><img src="images/TECH-TEKS-04.png" width="35" height="auto"> Systeks</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link active" href="index.php"><ion-icon name="albums" style="font-size:20px;"></ion-icon></ion-icon> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="administrators.php"><ion-icon name="people" style="font-size:20px;"></ion-icon> Administrators</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://api.whatsapp.com/send?phone=50762064626&text=Tengo%20un%20problema%20en%20el%20panel%20de%20control%20de%20Tracking%20Box.">
            <ion-icon name="settings-sharp"></ion-icon> Support</a>
          </li>
          <li class="nav-item dropdown pad-lr-5 hover-bb">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="person-sharp"></ion-icon><?php echo ' '.$_SESSION['username']; ?></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" id="admin_acount" href=""><ion-icon name="person-circle"></ion-icon> Admin accont</a>                       
              <a class="dropdown-item" href="admin-registry.php"><ion-icon name="person-add"></ion-icon> New admin accont</a>                       
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="modules/logout.php"><ion-icon name="log-out-outline"></ion-icon> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>