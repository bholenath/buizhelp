<?php 
include("header1.php");
session_start();
include("db.php");
if(isset($_GET['idb']))
{
$biz_id = $_GET['idb'];
}
if(isset($_GET['idu']))
{
$user_id = $_GET['idu'];
}
if(isset($_GET['type']))
{
$user_type = $_GET['type'];
}
$result1=mysql_query("select name,category_id from business_profile where biz_id=$biz_id");
$row1=mysql_fetch_array($result1);
$result2=mysql_query("select user_name from users where user_id=$user_id");
$row2=mysql_fetch_array($result2);
if($user_type == 'personal')
{
$result=mysql_query("select fname,lname,image from profile where user_id=$user_id");
$row = mysql_fetch_array($result);
$name = $row['fname']."&nbsp;".$row['lname'];
$image = $row['image'];
}
elseif($user_type == 'business')
{
/*$result=mysql_query("select name,image from business_profile where user_id=$user_id");
$row = mysql_fetch_array($result);
$name = $row['name'];
$image = $row['image'];*/
echo '<script>alert("You cannot Review from a Business Account. Please login from a Personal Account.");</script>';
echo "<script>window.location.href='logout.php?name=".$row2['user_name']."'</script>";
exit();
}
?>

<script type="text/javascript">

function display_rating()
{
var data = $("#points").val();
$("#display_rating").html(data);
}

</script>


<hr width="98%" style="height:1;"></hr>

<div style=" display:block; position:relative; float:left; width:98%; margin:1%; height:auto;">

<div style="width:96%; display:block; overflow:hidden; height:auto; position:relative; font-size:16px; color:#200; font-family:arial; 
float:left; margin:2%;">

<span style="float:left; width:100%; margin:1% 0;">

<span style="float:left; width:36%; margin-right:1%;">

<strong>Welcome</strong><font style="font-size:18px; color:#c41200; font-family:arial; font-weight:bolder; text-transform:uppercase;
margin-left:1%; text-align:justify; text-decoration:underline;"><?php echo $name;?></font>

</span>

<span style="float:left; width:30%; margin:0 1%;">

<center>

<a href="dashboard_personal.php?name=<?php echo $row2['user_name']; ?>" target="_self"><input type="button" name="dashboard" 
value="Go to Dashboard" style="background-color:#DA0E03; padding-top:5px; padding-bottom:5px; color:#ffffff; font-family:Lucia Grande; 
text-align:center; cursor:pointer; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:auto; width:100%;"></a>

</center>

</span>

<span style="float:right; width:30%; margin-left:1%; text-align:right;">

<font style="font-size:16px; color:#663399; font-family:arial; font-weight:bold; text-transform:capitalize; text-align:right; 
text-decoration:underline;"><a href="logout.php?name=<?php echo $row2['user_name']; ?>" style="color:#3B65A7;" target="_self">Log Out</a></font>

</span>

</span>

<center>

<span style="float:left; width:100%; margin:1% 0;">

<font style="font-size:18px; color:#200; font-family:arial; font-weight:bolder; text-transform:capitalize; 
margin-left:1%; text-align:justify; text-decoration:underline;">Review for <?php echo $row1['name'];?></font>

</span>

</center>

<form name="details7" id="details7" method="POST" action="review_submit.php" target="_self" onSubmit="return validate7()" 
enctype="multipart/form-data">

<span style="float:left; width:100%; margin:1% 0;">

<span style="float:left; width:18%; margin-right:2%;">

<img src="upload/<?php echo $image;?>" style="vertical-align:top; float:right; width:50px; height:50px; border:1px solid #b3b3b3; 
border-radius:1px;">

</span>

<span style="float:right; width:80%;">

<textarea name="review" required placeholder="Your Review Here..." rows="4" maxlength="500" style="position:relative; font-size:14px; 
padding:2px; font-family:Times New Roman; width:97%; border-radius:5px; height:auto; background-color:#ffffff; outline:none; 
border:1px solid #FFD735;">
</textarea>

<input type="hidden" name="biz_id" value="<?php echo $biz_id; ?>"/> <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
<input type="hidden" name="cat_id" value="<?php echo $row1['category_id'];?>">

</span>

</span>

<span style="float:left; width:50%; margin:1% 0 1% 20%;">

<span id="display_rating" style="float:left; width:20%; margin-right:2%; background-color:#CCCCCC; color:#200; font-weight:bold; 
height:22px; padding:5px; text-align:center;">0</span>

<span style="float:right; width:70%; margin-left:2%; height:30px;">

<font style="font-size:16px; color:#200; font-family:arial; font-weight:bold; text-transform:capitalize; margin-left:1%; 
text-align:justify;">Rating Points :&nbsp;&nbsp;0&nbsp;<input type="range" name="points" id="points" value="0" min="0" max="5" 
onChange="display_rating()" style="outline:none; vertical-align:middle; padding:4px;">&nbsp;5</font>

</span>

</span>

<br/>

<span style="float:left; width:30%; margin:1% 0 1% 20%;">

<input type="submit" name="submit" value="Submit" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia 
Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:49%; float:left; 
outline:none; margin-right:1%;">

<input type="reset" name="submit" value="Reset" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande;
font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:49%; float:left; outline:none; 
margin-left:1%;">

</span>

</form>

</div>

</div>

</div>

<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer1.php");
?>
 
</label> 

</div>

</center>