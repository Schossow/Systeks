/*=======================================
  Control Panel - Funtions js
  Brifcase: https://www.techteks.net
  Date: 11/08/2020
  @author Alejandro Quezada
  @version v1.0.0
=========================================*/
$(document).ready(function(){
  $.post("modules/balance.php", function(res){
    $('#balance').html(res);
  });
});