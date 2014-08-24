<?php
include("header.php");
include("db.php");
echo "<script type='text/javascript'>
window.onload=load_menu(1);
</script>";
?>

<script>

	$(document).ready(function()
	{
		
	document.getElementById('menu_display').focus();
	
	var v = new Array('http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448567760490371',
	'http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448562142467831',
	'http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448642896685708',
	'http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448558088348585',
	'http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138731178120383223',
	'http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138731185699081506');
	
	var i=0;
			
	var change = setInterval(function(){ if(i<=v.length-1) { $('#slider1 iframe').attr('src', v[i]).fadeIn('slow'); i++; } 
	else i=0; } , 15000);	
		
	$('#slider').cycle
	({
	fx: 'scrollLeft', 
    speed: 'slow',
	timeout:5000,
	pause:true
	});
						
	});
	
</script>

<hr width="98%" style="height:1;"></hr>

<div style="display:block; position:relative; padding: 0 1%; width:98%;">

<div id="main">

<img src="../images/back1.jpg" width="100%" height="200px">

<!-- <div id="account">

<label style="display:block; position:relative; float:left; width:100%;"> 

<font style="font-family:Arial Black; font-size:21px; color:#C41200;">Buizhelp is a new way To find great Destinations</font>

</label>

<br>

<label style="display:block; position:relative; float:left; padding-top:1.2%; width:100%;"> 

<font style="font-family:arial; position:relative; font-size:17px; text-align:justify; color:#000000;">
People use Buizhelp to search for everything from the city's trending joints to the most luxurious accomodations. What you wish to uncover in your neighborhood?
</font>

</label>

<label style="display:block; position:relative; float:left; padding-top:2.2%; padding-bottom:1%; bottom:0px; width:55%;">

<form method="post" target="_self" action="signup.php" name="frm2" id="frm2">

<input type="submit" name="free" value="Create Your Free Account" style="background-color:#663399; cursor:pointer; text-align:center;
color:#FFFFFF; position:relative; font-family:Arial; font-size:18px; font-weight:bolder; border-radius:3px; border:1px hidden #000000; 
height:auto; padding-top:0.9%; padding-bottom:0.9%; width:100%;">

</form>

</label> 

<span style="display:block; float:left; border:0 hidden #ffffff; width:58%; left:0px; border-bottom:1px solid #FFD735; margin-right:1.3%;
bottom:0px; position:absolute;">
</span>

</div><!-- * Closing of div account -->

<!-- <div id="ads">

<label style="display:block; width:100%; position:relative; font-family:Arial; font-size:21px; height:inherit; text-align:center; 
color:#C41200; font-weight:bolder; border:1px hidden #000000;">

Get <font size="+3">2-10%</font> Discount on your favourite destinations<br> Just Log in from our site and avail great Offers<br>
<center><font size="+2">Hurry Now! Limited Offer</font></center>

</label>

<span style="display:block; float:left; border:0 hidden #ffffff; width:40.7%; left:59.3%; border-bottom:1px solid #cacaca; bottom:0px; 
position:absolute;"></span>

</div> --> <!-- * Closing of div ads -->

</div><!-- * Closing of outer div -->

<label style="display:block; float:left; position:relative; width:100%; visibility:hidden; font-family:Lucia Grande; font-size:18px; 
height:4px; font-weight:bolder; background-color:#b3b3b3; border:1px hidden #000000; border-radius:2px;"></label> 

<label style="display:block; float:left; position:relative; padding-top:0.3%; width:100%; margin:0; padding:0;">

<span style="width:30%; float:left; margin-right:1%; position:relative; display:block; padding:1% 0;">

<font style="font-family:Arial; font-weight:bold; font-size:21px; color:#C41200;">Recipie Of Buizhelp</font>

</span>

<span style="width:68%; float:right; position:relative; display:block; margin:0; margin-left:1%; padding:0;">

<!-- <iframe src='http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448407281031252' height=45 width=660 align="right" 
scrolling='no' frameborder=0 style="display:block; float:right; text-align:right; width:98%; margin:0; padding:0 0 0 2%;"></iframe> -->

</span>

</label>

<label style="display:block; float:left; position:relative; width:100%; visibility:hidden; font-family:Lucia Grande; font-size:18px; 
height:4px; font-weight:bolder; background-color:#b3b3b3; border:1px hidden #000000; border-radius:2px;"></label>

<div id="data">

<div id="account1">

<span style="margin:0; display:block; float:left; width:20%; white-space:nowrap; font-weight:bold; text-align:left; 
font-family:Times New Roman; font-size:13px;">

<?php
$query_category=mysql_query("select category_id,category_name from food_category") or die(mysql_error());
while($row_category=mysql_fetch_array($query_category))
{
?>
<input class="button" type="button" onClick="load_menu(<?php echo $row_category['category_id']; ?>)" id="menu_display"
value="<?php echo $row_category['category_name']; $id=$row_category['category_id']; echo "\r\n"; 
$query_category1 = mysql_query("select count(biz_id) as id from business_profile where category_id = '$id'") or die(mysql_error());
$row_category1=mysql_fetch_array($query_category1); echo $row_category1['id']; echo '&nbsp;Entries'; ?>" >
<?php
}
?>

</span>

<span id="menuajax" style="width:76%; height:inherit; float:left; display:block; padding:0 2%;">

<span id='loading'>
<img id='loading-image' align='absmiddle' src='images/new_burst_loader_big.gif' alt='Loading...' />
</span>

</span>

<span style="display:block; float:left; border:0 hidden #ffffff; width:64.5%; left:0px; border-bottom:1px solid #FFD735; bottom:0px; 
margin-right:0.8%; position:absolute;"></span>

</div>

<div id="ads1">

<span style="display:block; float:left; width:98%; position:relative; font-family:Arial; font-size:16px; color:#C41200; 
padding:0 1%; font-weight:bold;">
Reviews
</span>

<?php 
$query21 = mysql_query("select * from review");
?>

<div id="slider" style="display:block; position:relative; width:100%; font-family:Arial; font-size:16px; height:auto; float:left;
color:#C41200; font-weight:bold;">

<?php
while($row21 = mysql_fetch_array($query21))
{
echo '<div style="position:relative; height:130px; width:98%; padding-top:3%; padding-bottom:0.5%; font-family:times new roman; 
font-weight:500; font-size:14px; text-transform:capitalize; padding-right:1%; color:#663399; padding-left:1%; text-align:center;">';
$biz = $row21['biz_id']; $user = $row21['user_id'];
$cat = $row21['category_id']; $rating = $row21['rating'];
$query22 = mysql_query(" select category_name from food_category where category_id = '$cat' ");
$row22 = mysql_fetch_array($query22);
$query23 = mysql_query(" select name from business_profile where biz_id = '$biz' ");
$row23 = mysql_fetch_array($query23);
echo "<span>";
echo "<strong><u><a href='main_view.php?id=".$biz."' target='_blank' style='color:#663399;'>".$row23['name']."&nbsp;";
echo "(".$row22['category_name'].")</a></u></strong>";
echo "</span>";
echo "<br><br>";
echo $row21['review'];
$query4=mysql_query("select user_type from users where user_id='$user'");
$row4=mysql_fetch_array($query4);
if($row4['user_type']=='business')
{
$query5=mysql_query("select image , name , city_id from business_profile where user_id='$user'");
$row5=mysql_fetch_array($query5);
$name = $row5['name'];
}
else if($row4['user_type']=='personal')
{
$query5=mysql_query("select image , fname , lname , city_id  from profile where user_id='$user'");
$row5=mysql_fetch_array($query5);
$name = $row5['fname']."&nbsp;".$row5['lname'];
}
$query6=mysql_query("select city_name from city where city_id='$row5[city_id]'");
$row6=mysql_fetch_array($query6);
echo "<br><br>";
echo "<span>";
echo "<strong><u><font style='text-transform:capitalize;'>-&nbsp;".$name."&nbsp;(".$row6['city_name'].")</font></u></strong>";
echo "</span>";
echo "</div>";
}
?>

</div>

<div style="display:block; float:left; position:relative; width:98%; font-family:Arial; font-size:16px; height:auto; color:#ADADAD; 
padding-left:1%; padding-right:1%; font-weight:bold;">

<center><hr width="100%" style="height:1px; "></hr></center>

</div>

<div style="display:block; width:98%; position:relative; font-family:Arial; font-size:16px; color:#C41200; padding:0 1%; float:left; 
font-weight:bold; border:1px hidden #000000;">
Advertisements
</div>

<div align="center" id="slider1" style="display:block; position:relative; width:100%; font-family:Arial; font-size:16px; color:#C41200; 
font-weight:bold;">

<center>

<iframe src="http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138448558088348585" frameborder="0" height="250" width="91%" 
align="middle" style="padding:1.5% 4.5%; display:block; float:none; vertical-align:middle;"></iframe>

</center>

</div> 

<span style="display:block; float:left; border:0 hidden #ffffff; width:34.7%; left:65.3%; border-bottom:1px solid #cacaca; bottom:0px; 
position:absolute;"></span>

</div>

</div>

</div>

<center>

<div style="display:block; position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer.php");
?>
 
</label> 

</div>

</center>