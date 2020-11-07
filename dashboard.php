<?php
  # ****************************************
  # Control Panel - Login
  # Brifcase: https://www.techteks.net
  # Date: 10/26/2020
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

  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <div class="table-style">
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <caption><span class="icon-table"></span> Income</caption>

              <thead>

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>

              </thead>

              <tbody id="income_table">
                <?php
                  require 'list/income-list.php';
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="table-style">
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <caption><span class="icon-table"></span> Expenses</caption>
              <thead>

                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>

              </thead>

              <tbody id="expenses_table">
                <?php
                  require 'list/expenses-list.php';
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-sm-4" style="padding-top:20px; padding-bottom:25px;">
        <div class="card">
          <h3 class="card-header">Registry</h3>
          <div class="card-body">
            <form id="" action="" method="POST">
              <div class="form-group">
                <label>Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                <small class="error" id="name_error"></small>
              </div>
              <div class="form-group">
                <label>What is?</label>
                <select id="type" name="type" class="form-control">
                  <option value="income">Income</option>
                  <option value="expenses">Expenses</option>
                </select>
                <small class="error" id="type_error"></small>
              </div>
              <div class="form-group">
                <label>Description:</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Description">
                <small class="error" id="description_error"></small>
              </div>
              <div class="form-group">
                <label>Amount:</label>
                <input type="number" id="amount" name="amount" class="form-control" placeholder="Amount">
                <small class="error" id="amount_error"></small>
              </div>
              <input type="button" id="registry_amount" class="btn btn-success" value="Registry" name="registry_amount">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php
    include("templates/footer.php");
  ?>
</body>
</html>