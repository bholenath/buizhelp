// JavaScript Document

	function take()
	
	{
	"<?php 
	
	if (isset($_SESSION['client1']))
    {
    $name = $_SESSION['client1'];
	}
	?>"
	
	}
	
    var id1="<?php echo $name; ?>";
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