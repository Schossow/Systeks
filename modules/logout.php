<?php
  # ****************************************
  # Control Panel - Module for logput
  # Brifcase: https://www.techteks.net
  # Date: 11/04/2020
  # @author Alejandro Quezada
  # @version v1.0.0
  #*****************************************

  session_start();
  unset($_SESSION['id']);
  unset($_SESIION['username']);
  unset($_SESSION['name']);
  unset($_SESSION['type']);
  session_destroy();
  header("Location: ../index.php");
  exit;