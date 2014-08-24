// JavaScript Document
	
	function take()	
	{
	session = "<?php 	
	if (isset($_SESSION['client']))   
    $name = $_SESSION['client'];	
	?>"	
	}
	console.log(session);
    var id1 = "<?php $name ?>";
	console.log(id1);
	var timer = 0;

    window.onbeforeunload = auto_logout();

	function set_interval() {
  
   	timer = setInterval("auto_logout()", 300000);
  
	}

	function reset_interval() {
 
  	if (timer != 0) {
    clearInterval(timer);
    timer = 0;
  
    timer = setInterval("auto_logout()", 300000);
    
  	}
	}
	
	function auto_logout() {
 	
  	window.location = "logout.php?name="+id1;
	}