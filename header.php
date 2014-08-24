<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>BuizHelp</title>

<?php session_start(); ?>

<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<script type="text/javascript">

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47263253-2', 'buizhelp.com');
  ga('send', 'pageview');

</script>

<link rel="icon" href="images/favicon.png" type="image/png" > 
<link rel="stylesheet" type="text/css" href="css/style.css" >

</head>
	
	  <body style="width:100%; overflow-x:hidden;" leftmargin='0' topmargin='0' rightmargin='0' bottommargin='0' marginwidth='0' 
	  marginheight='0'>
	   
	   <center>
	    
		<div id="header" style="width:98%; height:63px; padding:1.7% 0 0 0; margin:0; border-bottom-style:hidden; border-radius:2px; 
		background:url(images/header_stars.png) center repeat-x; background-color:#F5FFFA; ">
		
		 <div style="display:block; float:left; width:16%; position:relative; height:62px; margin-right:1.5%;">
		 
		 <a href="index.php" target="_self"><img src="images/Datavo Logo yelp.png" height="50px" width="98%"></a>
		 
		 </div>
		 
		 <div style="display:block; float:left; width:82.5%; position:relative;">
		
		 <span style="width:100%; float:left; position:relative; display:block;">
		
		 <form  method="post" action="search_check.php" name="frm" id="frm" target="_blank" onSubmit="return validate();">
		 	 
		  <label style=" display:block; position:relative; float:left; width:4.5%; font-family:Lucia Grande; font-size:19px; height:auto;          background-color:#D7D7D7; border:1px hidden #000000; padding-top:0.15%; padding-bottom:0.15%; margin-top:0.09%;">
		  <input type="text" name="find" value="&nbsp;Find" readonly="readonly"  maxlength="64" onfocus="clearinputText();" 
		  style="border:1px hidden #000000; position:relative; width:100%; border-radius:1px; font-family:Times New Roman; 
		  font-weight:bold; background-color:#D7D7D7;">
		  </label>
		 
		  <label style=" display:block; position:relative; float:left; width:24%; font-family:Lucia Grande; font-size:19px; height:auto;          background-color:#D7D7D7; border:1px hidden #000000; padding-top:0.15%; padding-bottom:0.15%; padding-right:0.50%; 
		  margin-top:0.09%;">
		  <input type="text" name="find1" tabindex="1" placeholder="Restuarant,Hotel,Cafe etc." maxlength="64" 
		  style="border:1px hidden #000000; position:relative; width:100%; border-radius:1px; font-family:Times New Roman; 
		  background-color:#D7D7D7; outline:none;">
		  </label>
		 
		  <label style=" display:block; float:left; width:3%; visibility:hidden; font-family:Lucia Grande; font-size:19px; height:25px;          font-weight:bolder; background-color:#D7D7D7; border:1px hidden #000000; border-radius:2px;">
		  </label>
		 
		  <label style=" display:block; position:relative; float:left; width:4.5%; font-family:Lucia Grande; font-size:19px; height:auto;          background-color:#D7D7D7; border:1px hidden #000000; padding-top:0.15%; padding-bottom:0.15%; margin-top:0.09%;">
		  <input type="text" name="near" value="&nbsp;Near" readonly="readonly"  maxlength="64" onfocus="clearinputText();" 
		  style="border:1px hidden #000000; position:relative; width:100%; border-radius:1px; font-family:Times New Roman; 
		  font-weight:bold; background-color:#D7D7D7;">
		  </label>
		 
		  <label style=" display:block; position:relative; float:left; width:24%; font-family:Lucia Grande; font-size:19px; height:auto;          background-color:#D7D7D7; border:1px hidden #000000; padding-top:0.15%; padding-bottom:0.15%; padding-right:0.50%; 
		  margin-top:0.09%;">
		  <input type="text" name="place" tabindex="2" placeholder="Place to Look for" maxlength="64" style="border:1px hidden #000000; 
		  position:relative; width:100%; border-radius:1px; font-family:Times New Roman; background-color:#D7D7D7; outline:none;">
		  </label>
		 
		  <label style=" display:block; float:left; width:3%; visibility:hidden; font-family:Lucia Grande; font-size:18px; height:25px; 				          font-weight:bolder; position:relative; background-color:#D7D7D7; border:1px hidden #000000; border-radius:2px;">
		  </label>
		 
		  <label style=" display:block; position:relative; float:left; width:10%; font-family:Lucia Grande; font-size:18px; height:auto;          font-weight:bolder; background-color:#810000; border:1px hidden #000000; padding-top:0.15%; padding-bottom:0.15%; 
		  border-radius:2px;">
		  <input type="submit" name="submit" value="Submit" style="background-color:#810000; cursor:pointer; color:#CACACA; font-family:          Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px;  border:1px hidden #000000; height:auto; width:100%; 
		  outline:none;">
		  </label>
		  
		 </form>
		         
		 <label style=" display:block; float:left; width:3%; visibility:hidden; font-family:Lucia Grande; font-size:18px; height:25px; 
         font-weight:bolder; background-color:#D7D7D7; border:1px hidden #000000; border-radius:2px;">
         </label>
         
		 <label style=" display:block; float:right; position:relative; margin-right:4%; width:10%; font-family:Lucia Grande;
		 font-size:18px; font-weight:bolder; border:1px hidden #000000; border-radius:2px; padding-top:0.15%; height:auto; 
		 padding-bottom:0.15%; background-color:#810000; ">
         <a href="signup.php" target="_self"><input type="button" name="submit1" value="Sign Up" style="background-color:#810000; 
		 color:#CACACA; font-family:Lucia Grande; font-size:14px; cursor:pointer; font-weight:bolder; border-radius:2px; 
		 border:1px hidden #000000; height:auto; width:100%; outline:none;">
         </a>
         </label>
		 
		 </span>
		 
		 <!-- Menu Section Starts -->
				 
         <span style="display:block; position:relative; width:100%; font-family:Lucia Grande; font-size:18px; font-weight:bolder; 
		 border:1px hidden #000000; float:left; margin:0; padding:0; margin-top:1.3%;">
         
		 <ul id="menu" style="display:block; height:auto; position:relative; width:100%; font-family:Times New Roman; font-weight:600; 
		 font-size:16px; list-style:none; float:left; margin:0; padding:0;">
		 
		 <a href="index.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="home" value="Home" style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer;
		 font-size:16px; float:left; text-align:left; position:relative; background:inherit; font-family:Times New Roman; outline:none;">
		 </span></li></a>
         
		 <a href="aboutus.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="aboutus" value="About Us" style="width:100%; border:0; color:#c41200; font-weight:bold; 
		 cursor:pointer; font-size:16px; float:left; text-align:left; position:relative; background:inherit; outline:none;
		 font-family:Times New Roman; "></span></li></a>
         
		 <a href="contact_us.php"><li><span style="display:inline-block; width:15%; margin-right:2%; float:left; position:relative;">
         <input type="text" name="review" value="Contact Us" style="width:100%; border:0; color:#c41200; font-weight:bold; 
		 cursor:pointer;font-size:16px; float:left; text-align:center; position:relative; background:inherit; outline:none; 
		 font-family:Times New Roman; "></span></li></a>
         
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
		 width:15%; margin:0 1.5%; float:left; position:relative;"><input type="text" name="dashboard" value="Dashboard" 
		 style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer; font-size:16px; text-align:center; 
		 position:relative; background:inherit; font-family:Times New Roman; outline:none;"></span></li></a>
		 
		 <?php } else { ?>		
		 
		 <a href="dashboard_personal.php?name=<?php echo $row['user_name'];?>" target="_self"><li><span style="display:inline-block; 
		 width:15%; margin:0 1.5%; float:left; position:relative;"><input type="text" name="dashboard" value="Dashboard" 
		 style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer; font-size:16px; text-align:center; 
		 position:relative; background:inherit; font-family:Times New Roman; outline:none;"></span></li></a> 
		 
		 <?php } ?>
		 		 
		 <a href="logout.php?name=<?php echo $row['user_name'];?>" target="_self"><li><span style="display:inline-block; width:10%; 
		 float:right; margin-right:4%; position:relative;"><input type="text" name="logout" value="Log Out" style="width:100%; 
		 border:0; color:#c41200; font-weight:bold; cursor:pointer; font-size:16px; text-align:center; position:relative; 
		 background:inherit; font-family:Times New Roman; outline:none;"></span></li></a>
		 
		 <?php } else { ?>
		 
		 <a href="login.php" target="_self"><li><span style="display:inline-block; width:10%; margin-right:4%; float:right; 
		 position:relative;">
         <input type="text" name="login" value="Log In" style="width:100%; border:0; color:#c41200; font-weight:bold; cursor:pointer;
		 font-size:16px; text-align:center; position:relative; background:inherit; font-family:Times New Roman; outline:none; 
		 text-align:center;"></span></li></a>
		 
		  <?php } ?>
         
		 </ul>
         
		 </span>
		 
		 </div>
         
		</div>
         
	   </center>