/*=======================================
  Control Panel - Evends js
  Brifcase: https://www.techteks.net
  Date: 11/03/2020
  @author Alejandro Quezada
  @version v1.0.0
=========================================*/
/*==============================
          LOGIN FORM
===============================*/
$('#send_login').on('click', function(e){
  e.preventDefault();
  e.stopImmediatePropagation();
  result = true;
  var username = $('#username').val().toLowerCase();
  var password = $('#password').val().toLowerCase();
  // ======= Call functions ========
  validateUsername(username);
  validatePassword(password);
  // Condition to validate the result variable
  if(result){
    $('#send_login').val("Login");
    $('#mensage_error').css('display','none').html();
    // LET PASS
  }else{
    $('#send_login').val("Login");
    $('#mensage_error').css('display','none').html();
    return false;
  }
  $.ajax({
    url: 'modules/login.php',
    type: 'POST',
    data: $('#login_form').serialize(),
    beforeSend: function(){
      $('#send_login').val("Sending...");
    },
    success: function(res){
      if(res === ""){
        location.href="dashboard.php";
        // LET PASS
      }else{
        $('#send_login').val("Login");
        $('#login_form').trigger("reset");
        $('#mensage_error').css('display','block').html(res);
      }
    }
  });
});
/*==============================
          REGISTRY FORM
===============================*/
$('#send_registry').on('click', function(e){
  e.preventDefault();
  e.stopImmediatePropagation();
  result = true;
  var username = $('#username').val().toLowerCase();
  var full_name = $('#full_name').val().toLowerCase();
  var email = $('#email').val().toLowerCase();
  var adminType = $('#type').val().toLowerCase();
  var password = $('#password').val().toLowerCase();
  var confirm_password = $('#confirm_password').val().toLowerCase();
  // ======= Call functions ========
  validateUsername(username);
  validateFullName(full_name);
  validateEmail(email);
  validateAdminType(adminType);
  validatePassword(password);
  validateConfirmPassword(password, confirm_password);
  // Condition to validate the result variable
  if(result){
    $('html,body').animate({scrollTop:$('body').offset().top - 250},1500);
    $('#send_registry').val("Registry");
    $('#mensage_error').css('display','none').html();
    // LET PASS
  }else{
    $('html,body').animate({scrollTop:$('body').offset().top - 250},1500);
    $('#send_registry').val("Registry");
    $('#mensage_error').css('display','none').html();
    return false;
  }
  $.ajax({
    url: 'modules/registry.php',
    type: 'POST',
    data: $('#registry_form').serialize(),
    beforeSend: function(){
      $('#send_registry').val("Sending...");
    },
    success: function(res){
      if(res === ""){
        $('#mensage_error').removeClass('alert-danger').addClass('alert-success').css('display','block').html("Successful registration");
        $('#send_registry').val("Registry");
        $('#registry_form').trigger("reset");
        // LET PASS
      }else{
        var mensage_split = res.split(" ", res.length);
        mensage_split.forEach(element => {
          if(element === "'username'"){
            $('#send_registry').val("Registry");
            $('#mensage_error').css('display','none').html();
            $('#username_error').html("Username is already use.");
            $('#mensage_error').removeClass('alert-success').addClass('alert-danger').css('display','block').html("Error.");
            return false;
          }else if(element === "'email'"){
            $('#send_registry').val("Registry");
            $('#mensage_error').css('display','none').html();
            $('#email_error').html("Email is already use.");
            $('#mensage_error').removeClass('alert-success').addClass('alert-danger').css('display','block').html("Error.");
            return false;
          }else{
            $('#send_registry').val("Registry");
            $('#mensage_error').removeClass('alert-success').addClass('alert-danger').css('display','block').html(res);
            return false;
          }
        });
      }
    }
  });
});
/*==============================================
      Event to filter administrators list
==============================================*/
$('#filter_button').on('click', function(e){
  e.preventDefault();
  e.stopImmediatePropagation();
  result = true;
  var admins_filter = $('#admins_filter').val();
  var admins_key = $('#admins_key').val().toLowerCase();
  validateAdminsFilter(admins_filter, admins_key);
  if(result){
    $('html,body').animate({scrollTop:$('body').offset().top - 250},1500);
    $('#mensage_error').css('display','none').html("");
    // LET PASS
  }else{
    $('html,body').animate({scrollTop:$('body').offset().top - 250},1500);
    return false;
  }
  $.ajax({
    url: 'list/administrators-list.php',
    type: 'POST',
    data: $('#form_filter_admins').serialize(),
    success: function(res){
      if(res==""){
        $('#mensage_error').css('display','block').html("No results were found.");
      }else{
        $('#admins_table').html(res);
      }
    }
  });
});
/*====================================================
  Event to Validate the form for registry a amount
======================================================*/
$('#registry_amount').on('click', function(e){
  e.preventDefault();
  e.stopImmediatePropagation();
  result = true;
  var name = $('#name').val().toLowerCase();
  var name_error = $('#name_error');
  var type = $('#type').val().toLowerCase();
  var type_error = $('#type_error');
  var description = $('#description').val().toLowerCase();
  var description_error = $('#description_error');
  var amount = $('#amount').val();
  var amount_error = $('#amount_error');

  validateCompanyName(name, name_error);
  validateTypeAmount(type, type_error);
  validateDescription(description, description_error);
  validateAmount(amount, amount_error);

  if(result){
    $('html,body').animate({scrollTop:$('body').offset().top - 250},1500);
    $('#mensage_error').css('display','none').html("");
    // LET PASS
  }else{
    $('html,body').animate({scrollTop:$('body').offset().top - 250},1500);
    return false;
  }
  if(type=="income"){
    alert("Income");
    $.ajax({
      url: 'list/income-list.php',
      type: 'POST',
      data: $('#amount_form').serialize(),
      success: function(res){
        if(res==""){
          $('#mensage_error').removeClass('alert-success').addClass('alert-danger').css('display','block').html(res);
        }else{
          $('#mensage_error').removeClass('alert-danger').addClass('alert-success').css('display','block').html("Successful income registration");
          $('#income_table').html(res); 
        }
      }
    });
  }else{
    alert("Expenses");
    $.ajax({
      url: 'list/expenses-list.php',
      type: 'POST',
      data: $('#amount_form').serialize(),
      success: function(res){
        if(res==""){
          $('#mensage_error').removeClass('alert-success').addClass('alert-danger').css('display','block').html(res);
        }else{
          $('#mensage_error').removeClass('alert-danger').addClass('alert-success').css('display','block').html("Successful expenses registration");
          $('#income_table').html(res); 
        }
      }
    });
  }
});