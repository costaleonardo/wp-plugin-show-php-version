jQuery(document).ready(function ($) { 

  $("#dashboard-widgets-wrap").before("<p class='spv-wrapper'><span class='spv-php'>Server running PHP version: <b style='color:green;'>" + spvObj.phpversion + "</b>.</span><span class='spv-mysql'> MySQL version: <b style='color:green';>" + spvObj.mysqlversion + "</b></span></p>");
  
});