	<!DOCTYPE HTML>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>BuizHelp</title>
	
	<?php if (session_status() == PHP_SESSION_NONE) { session_start(); } ?>
		
	<script type="text/javascript" src="js/header1.js"></script>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		
	<script type="text/javascript">
	
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47263253-2', 'buizhelp.com');
	  ga('send', 'pageview');

	</script>
	
	<link rel="icon" href="images/favicon.png" type="image/png" > 
		
	</head>

		<body style="width:100%; overflow-x:hidden;" leftmargin='0 'topmargin='0' marginwidth='0' marginheight='0' >
			
		<div id="header" style="width:98%; height:63px; top:0; padding:1% 0; margin:0 1%; border-bottom-style:hidden;
		border-radius:2px; background:url(images/header_stars.png) center center repeat-x; background-color:#F5FFFA; ">
	
		 <label style=" display:block; position:relative; width:100%; font-family:Lucia Grande; font-size:18px; height:auto; 
		 font-weight:bolder; border:1px hidden #000000; padding:0; margin:0; float:left;">
		 
		 <center>
		 
		 <a href="index.php" target="_self"><img src="images/Datavo Logo yelp.png" height="50px" width="180px" 
		 style="vertical-align:middle;"></a>
		 
		 </center>
		 
		 </label>
		
         <span style="display:block; position:relative; width:70%; font-family:Lucia Grande; font-size:18px; height:auto; 
		 font-weight:bolder; border:1px hidden #000000; margin:0 15%; padding:0; float:left;">
		 
         <ul id="menu" style="display:block; height:auto; position:relative; width:100%; font-family:Times New Roman; 
         font-weight:600; font-size:16px; list-style:none; float:left; margin:0; padding:0;">
		 
         <a href="index.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="home" value="Home" style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer;
		 font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; outline:none;">
		 </span></li></a>
         
		 <a href="aboutus.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="aboutus" value="About Us" style="width:100%; border:0; color:#c41200; font-weight:bold; outline:none;
		 cursor:pointer; font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; ">
		 </span></li></a>
         
		 <a href="contact_us.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="review" value="Contact Us" style="width:100%; border:0; color:#c41200; font-weight:bold; outline:none;
		 cursor:pointer; font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; ">
		 </span></li></a>
         
		 <a href="events.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="events" value="Events" style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer;
		 font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; outline:none;">
		 </span></li></a>
		 
		  <?php 
		  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		  include("db.php");
		  $user_id = $_SESSION['user_id']; 
		  $result = mysql_query("select user_name,user_type from users where user_id='$user_id'");
		  $row = mysql_fetch_array($result); 
		  if($row['user_type']=='business') {		  
		  ?>
		 
		 <a href="dashboard_business.php?name=<?php echo $row['user_name'];?>" target="_self"><li><span style="display:inline-block; 
		 width:15%; margin-right:2%; float:left; position:relative;"><input type="text" name="dashboard" value="Dashboard" 
		 style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer; font-size:16px; text-align:center; 
		 position:relative; background:inherit; font-family:Times New Roman; outline:none;"></span></li></a>
		 
		 <?php } else { ?>		
		 
		 <a href="dashboard_personal.php?name=<?php echo $row['user_name'];?>" target="_self"><li><span style="display:inline-block; 
		 width:15%; margin-right:2%; float:left; position:relative;"><input type="text" name="dashboard" value="Dashboard" 
		 style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer; font-size:16px; text-align:center; 
		 position:relative; background:inherit; font-family:Times New Roman; outline:none;"></span></li></a> 
		 
		 <?php } ?>
		 
		 <a href="logout.php?name=<?php echo $row['user_name'];?>" target="_self"><li><span style="display:inline-block; width:15%; 
		 float:right; position:relative;"><input type="text" name="logout" value="Log Out" style="width:100%; border:0; color:#c41200; 
		 font-weight:bold; cursor:pointer; font-size:16px; text-align:center; position:relative; background:inherit; 
		 font-family:Times New Roman; outline:none;"></span></li></a>
		 
		 <?php } else { ?>
		 
		 <a href="login.php" target="_self"><li><span style="display:inline-block; width:15%; float:right; position:relative;">
         <input type="text" name="login" value="Log In" style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer;
		 font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; outline:none;">
		 </span></li></a>		 
		 
		 <a href="signup.php" target="_self"><li><span style="display:inline-block; width:15%; margin-right:2%; float:right; 
		 position:relative;">
         <input type="text" name="signup" value="Sign Up" style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer;
		 font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; outline:none;">
		 </span></li></a>		 
		 		 
		 <?php } ?>
         
		 </ul>
		 
         </span>
		
		</div>