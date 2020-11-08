/*=======================================
  Control Panel - js Validations
  Brifcase: https://www.techteks.net
  Date: 11/02/2020
  @author Alejandro Quezada
  @version v1.0.0
=========================================*/

// ========= Definicion of variable for reserved words ==========
reserved_words = ["delete","insert","update","select","create","alter","change","add","script","scripts","value","values","null"]; // Use in username, password

//=== Definition of variable for reserved characters ===
reserved_characters = ["{","}","[","]","<",">"]; // Use in username, password

// =========== Expressions ==============
exp_alphabetical = /^[a-z]$/; // Use in 
exp_alphanumeric = /^[a-zA-z0-9]$/; // Use in 
/*==============================
        VALIDATE USERNAME
===============================*/
function validateUsername(username){
  this.username = username;
  if(this.username === ""){
    $('#username_error').html("*Username can not be empty.");
    result = false;
    return false;
  }
  if(this.username.length<5||this.username.length>15){
    $('#username_error').html("*Username can not be less than 5 characters or more than 15 characters.");
    result = false;
    return false;
  }
  var split_username = this.username.split(" ",this.username.length);
  split_username.forEach(element => {
    reserved_words.forEach(element2 => {
      if(element === element2){
        $('#username_error').html("*" + element2 +" can not be use for username.");
        result = false;
        return false;
      }
    });
  });
  reserved_characters.forEach(element3 => {
    for(j=0;j<this.username.length;j++){
      var username_characters = this.username.charAt(j);
      if(username_characters === element3){
        $('#username_error').html("*" + element3 +" can not be use for username.");
        result = false;
        return false;
      }
    }
  });
  if(result){
    $('#username_error').html("");
  }else{
    result = false;
    return false;
  }
}
/*==============================
        VALIDATE PASSWORD
===============================*/
function validatePassword(password){
  this.password = password;
  if(this.password === ""){
    $('#password_error').html("*Password can not be empty");
    result = false;
    return false;
  }
  if(this.password.length<8||this.password.length>100){
    $('#password_error').html("*Password can not be less than 8 characters or more than 100 characters.");
    result = false;
    return false;
  }
  var split_password = this.password.split(" ",this.password.length);
  split_password.forEach(element => {
    reserved_words.forEach(element2 => {
      if(element === element2){
        $('#password_error').html("*" + element2 +" can not be use for password.");
        result = false;
        return false;
      }
    });
  });
  reserved_characters.forEach(element3 => {
    for(j=0;j<this.password.length;j++){
      var password_characters = this.password.charAt(j);
      if(password_characters === element3){
        $('#password_error').html("*" + element3 +" can not be use for password.");
          result = false;
          return false;
      }
    }
  });
  if(result){
    $('#password_error').html("");
  }else{
    result = false;
    return false;
  }
}
/*==============================
        VALIDATE EMAIL
===============================*/
function validateEmail(email){
  this.email = email;
  var exp_email = /^[a-z0-9._]+@[a-z0-9-]+\.[a-z.]{2,5}$/; //Expresion for EMail (example.123@gmail.com)
  if(this.email===""){
    $('#email_error').html("*Email can not be empty.");
    result = false;
    return false;
  }
  if(this.email.length>50){
    $('#email_error').html("*Email can not be more than 50 characters.");
    result = false;
    return false;
  }
  if(!exp_email.test(this.email)){
    $('#email_error').html("*Email invalid.");
    result = false;
    return false;
  }
  $('#email_error').html("");
}
/*===============================
        VALIDATE FULL NAME
================================*/
function validateFullName(full_name){
  this.full_name = full_name;
  if(this.full_name === ""){
    $('#full_name_error').html("*Full name can not be empty.");
    result = false;
    return false;
  }
  if(this.full_name.length<10||this.full_name.length>35){
    $('#full_name_error').html("*Full name can not be less than 10 characters or more than 35 characters.");
    result = false;
    return false;
  }
  var split_full_name = this.full_name.split(" ",this.full_name.length);
  split_full_name.forEach(element => {
    reserved_words.forEach(element2 => {
      if(element === element2){
        $('#full_name_error').html("*" + element2 +" can not be use for full name.");
        result = false;
        return false;
      }
    });
  });
  reserved_characters.forEach(element3 => {
    for(j=0;j<this.full_name.length;j++){
      var full_name_characters = this.full_name.charAt(j);
      if(full_name_characters === element3){
          $('#full_name_error').html("*" + element3 +" can not be use for full name.");
          result = false;
          return false;
      }
    }
  });
  if(result){
    $('#full_name_error').html("");
  }else{
    result = false;
    return false;
  }
}
/*=================================
        VALIDATE ADMIN TYPE
=================================*/
function validateAdminType(adminType){
  this.adminType = adminType;
  if(this.adminType==="NULL"||this.adminType===""){
    $('#type_error').html("*This option if require.");
    result = false;
    return false;
  }
  if(this.adminType!=="principal"&&this.adminType!=="regular"){
    $('#type_error').html("*This opcion is invalid");
    result = false;
    return false;
  }
  $('#type_error').html("");
}
/*====================================
      VALIDATE CONFIRM PASSWORD
====================================*/
function validateConfirmPassword(password, confirm_password){
  this.password = password;
  this.confirm_password = confirm_password;
  if(this.confirm_password!==password){
    $('#confirm_password_error').html("*The password confirmation is not the same as the password.");
    result = false;
    return false;
  }
  if(this.confirm_password === ""){
    $('#confirm_password_error').html("*Confirm password can not be empty");
    result = false;
    return false;
  }
  if(this.confirm_password.length<8||this.confirm_password.length>100){
    $('#confirm_password_error').html("*Confirm password can not be less than 8 characters or more than 100 characters.");
    result = false;
    return false;
  }
  var split_confirm_password = this.confirm_password.split(" ",this.confirm_password.length);
  split_confirm_password.forEach(element => {
    reserved_words.forEach(element2 => {
      if(element === element2){
        $('#confirm_password_error').html("*" + element2 +" can not be use for confirm password.");
        result = false;
        return false;
      }
    });
  });
  reserved_characters.forEach(element3 => {
    for(j=0;j<this.confirm_password.length;j++){
      var confirm_password_characters = this.confirm_password.charAt(j);
      if(confirm_password_characters === element3){
        $('#confirm_password_error').html("*" + element3 +" can not be use for confirm password.");
          result = false;
          return false;
      }
    }
  });
  if(result){
    $('#confirm_password_error').html("");
  }else{
    result = false;
    return false;
  }
}
/*================================
      VALIDATE ADMIN FILTER
==================================*/
function validateAdminsFilter(admins_filter, admins_key){
  this.admins_filter = admins_filter;
  this.admins_key = admins_key;
  if(this.admins_filter!="0"&&this.admins_filter!="1"&&this.admins_filter!="2"&&this.admins_filter!="3"){
    $('#mensage_error').css('display','block').html("The filter option is invalid.");
    result = false;
    return false;
  }
  if(this.admins_filter=="0"){
    if(this.admins_key==""){
      // LET PASS
    }else{
      var split_admins_key = this.admins_key.split(" ",this.admins_key.length);
      split_admins_key.forEach(element => {
        reserved_words.forEach(element2 => {
          if(element === element2){
            $('#mensage_error').css('display','block').html("The key is invalid.");
            result = false;
            return false;
          }
        });
      });
      reserved_characters.forEach(element3 => {
        for(j=0;j<this.admins_key.length;j++){
          var admins_key_characters = this.admins_key.charAt(j);
          if(admins_key_characters === element3){
            $('#mensage_error').css('display','block').html("The key is invalid.");
            result = false;
            return false;
          }
        }
      });
    }
  }else if(this.admins_filter=="1"){
    validateUsername(this.admins_key);
    $('#mensage_error').css('display','block').html("Username invalid.");
  }else if(this.admins_filter=="2"){
    validateAdminType(this.admins_key);
    $('#mensage_error').css('display','block').html("Admin type invalid.");
  }else if(this.admins_filter=="3"){
    validateEmail(this.admins_key);
    $('#mensage_error').css('display','block').html("Email invalid.");
  }else{
    // LET PASS
  }
  if(result){
    // LET PASS
  }else{
    result = false;
    return false;
  }
}
/*================================
      VALIDATE NAME COMPANY
==================================*/
function validateCompanyName(name,name_error){
  this.name = name;
  this.name_error = name_error;
  if(this.name == ""){
    this.name_error.html("Name can not be empty.");
    result = false;
    return false;
  }
  if(this.name.length<2||this.name.length>50){
    this.name_error.html("Name can not be less than 2 or more than 50 characters.");
    result = false;
    return false;
  }
  var split_name = this.name.split(" ",this.name.length);
  split_name.forEach(element => {
    reserved_words.forEach(element2 => {
      if(element === element2){
        this.name_error.html("*" + element2 +" can not be use for name.");
        result = false;
        return false;
      }
    });
  });
  reserved_characters.forEach(element3 => {
    for(j=0;j<this.name.length;j++){
      var name_characters = this.name.charAt(j);
      if(name_characters === element3){
        this.name_error.html("*" + element3 +" can not be use for name.");
        result = false;
        return false;
      }
    }
  });
  if(result){
    this.name_error.html("");
  }else{
    result = false;
    return false;
  }
}
/*============================================
    VALIDATE IF IS A INCOME OR A EXPENSES
=============================================*/
function validateTypeAcount(type, type_error){
  this.type = type;
  this.type_error = type_error;
  if(this.type!="income"&&this.type!="expenses"){
    this.type_error.html("This option is invalid.");
    result = false;
    return false;
  }
  this.type_error.html("");
}
/*==============================
      VALIDATE DESCRIPTION
================================*/
function validateDescription(description, description_error){
  this.description = description;
  this.description_error = description_error;
  if(this.description==""){
    this.description_error.html("Description can by empty.");
    result = false;
    return false;
  }
  if(this.description.length<10||this.description.length>100){
    this.description_error.html("Description can not be less than 10 or more than 100 characters.");
    result = false;
    return false;
  }
  var split_description = this.description.split(" ",this.description.length);
  split_description.forEach(element => {
    reserved_words.forEach(element2 => {
      if(element === element2){
        this.description_error.html("*" + element2 +" can not be use for username.");
        result = false;
        return false;
      }
    });
  });
  reserved_characters.forEach(element3 => {
    for(j=0;j<this.description.length;j++){
      var description_characters = this.description.charAt(j);
      if(description_characters === element3){
        this.description_error.html("*" + element3 +" can not be use for description.");
        result = false;
        return false;
      }
    }
  });
  if(result){
    this.description_error.html("");
  }else{
    result = false;
    return false;
  }
}
function validateAmount(amount, amount_error){
  this.amount = amount;
  this.amount_error = amount_error;
  if(this.amount==""){
    this.amount_error.html("Amount can by empty.");
    result = false;
    return false;
  }
  if(isNaN(this.amount)){
    this.amount_error.html("Amount invalid.");
    result = false;
    return false;
  }
  this.amount_error.html("");
}