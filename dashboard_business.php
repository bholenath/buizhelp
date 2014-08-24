<?php
session_start();
include("db.php");
include("header1.php");

if (isset($_GET['name']) && trim($_GET['name'])!="")
{
$uname = $_GET['name'];
}
else
{
header('Location: index.php');
}

$sql="select date_visit , time_visit  from track where id=(select max(id) from track where user_name='$uname' and 
id < (select max(id) from track where user_name='$uname'))";
$result=mysql_query($sql) or die('Could not connect: ' . mysql_error());
$row = mysql_fetch_array($result);
$date1 = $row['date_visit'];
$substr = explode("-", $date1);
$date = $substr[2].'-'.$substr[1].'-'.$substr[0];
$time = $row['time_visit'];
$iname=htmlspecialchars($uname);
$_SESSION['client']=$iname;
?>

<script type="text/javascript">

	function take()	
	{
	"<?php 	
	if (isset($_SESSION['client']))   
    $name = $_SESSION['client'];	
	?>"	
	}
	
	var id1 = "<?php echo $name; ?>";	
	var timer = 0;	   
		
	function set_interval() 
	{ 	
	//id1 = "<?php $_SESSION['client'] ?>"; 
   	timer = setInterval(function(){ auto_logout() }, 300000);	
	}

	function reset_interval() 
	{ 
	if(timer!=0)
	{	
  	clearInterval(timer);	
    timer = 0; 	
    timer = setInterval(function(){ auto_logout() }, 300000);		
	}
  	}	
	
	function auto_logout() 
	{ 	
  	window.location.href = "logout.php?name="+id1;
	}
	
	//window.onbeforeunload = auto_logout();		

</script>

<body onLoad="set_interval()" onLoad="take()" onMouseMove="reset_interval()" onClick="reset_interval()" onKeyPress="reset_interval()" 
onScroll="reset_interval()" onUnload="auto_logout()">

<hr width="98%" style="height:1;"></hr>

<div style=" display:block; position:relative; padding-top:0; padding-left:1%; padding-right:1%; padding-bottom:1%; 
width:98%; height:auto;">

<div style="width:100%; position:relative; display:block; overflow:hidden; height:auto; float:left; 
border-bottom: 1px hidden #000000;">

<label style="float:left; text-align:left; width:75%; height:auto; padding-top:5px; padding-bottom:5px; position:relative; 
color:#3B65A7;font-family:Times New Roman; font-size:15px; margin-right:2%; ">
Welcome :<font style="font-size:13px; margin-left:1%; margin-right:2%; color:#DA0E03; text-transform:uppercase;"><?php echo $uname; ?>
</font> Last Login :<font style="margin-left:1%; margin-right:2%;"><?php echo $date;?></font><?php echo $time; ?>
</label>

<span style="width:23%; float:left; position:relative;">

<label style=" width:44%; margin-left:15%; text-align:left; height:auto; float:right; position:relative; font-size:15px; ">
<a href="profile_business.php?name=<?php echo $uname; ?>" target="_self"><input type="button" name="submit" value=" Profile " 
style="background-color:#DA0E03;  padding-top:5px; padding-bottom:5px; color:#ffffff; font-family:Lucia Grande; float:right; 
cursor:pointer; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:auto; width:100%;">
</a>
</label>

<label style="float:right; width:41%; height:auto; padding-top:5px; padding-bottom:5px; position:relative; color:#3B65A7; 
font-family:Times New Roman; font-size:15px; text-align:left; position:relative; ">
<a href="logout.php?name=<?php echo $uname; ?>" style="color:#3B65A7; " target="_self">Log Out</a>
</label>

</span>

</div>

<br>

</div>

<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>

</body>

<?php
include("footer.php");
?>
 
</label> 

</div>

</center>