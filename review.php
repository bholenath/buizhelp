<?php
include("db.php");
include("header1.php");
if(isset($_GET["id"]))
    {
$biz = $_GET["id"];
    }
if(isset($_GET["cat"]))
    {
$category_id = $_GET["cat"];
    }
if(isset($_GET["name"]))
    {
$name = $_GET["name"];
    }
	
function stars($var)
{
if($var>=4.7)
return "5.png";
else if($var<4.7&&$var>=4.2)
return "4.5.png";
else if($var<4.2&&$var>=3.7)
return "4.png";
else if($var<3.7&&$var>=3.2)
return "3.5.png";
else if($var<3.2&&$var>=2.7)
return "3.png";
else if($var<2.7&&$var>=2.2)
return "2.5.png";
else if($var<2.2&&$var>=1.7)
return "2.png";
else if($var<1.7&&$var>=1.2)
return "1.5.png";
else if($var<1.2&&$var>=0.7)
return "1.png";
else if($var<0.7&&$var>=0.2)
return "0.5.png";
else
return "0.png";
}	
	
?>	

<hr width="98%" style="height:1;"></hr>

<div style=" display:block; position:relative; padding-top:0; padding-left:1%; padding-right:1%; padding-bottom:0.5%; 
width:98%; height:auto;">

<div style="width:98%; position:relative; display:block; overflow:hidden; height:auto; float:left; border-bottom: 1px hidden #000000; padding:0.2% 0.5%;">

<font style="font-weight:bold; text-transform:capitalize; float:left; font-family:times new roman; color:#c41200; margin-bottom:1%; 
font-size:17px; "><u>Reviews for <?php echo $name; ?></u></font>
<br>

<?php
$query3=mysql_query("select review , user_id , rating from review where biz_id='$biz' and category_id='$category_id'");

while($row3=mysql_fetch_array($query3))
{

echo "<span style=' display:block; float:left; width:100%; padding:0.5% 0; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;>";

echo "<label style=' display:block; float:left; width:6%; font-family:times new roman; font-size:14px; height:7%; color:#000000; 	font-weight:bolder; position:relative; margin-left:0; margin-right:1%; border:1px solid #BBBBBB; border-radius:2px;'>";

$user = $row3['user_id'];
$query4=mysql_query("select user_type from users where user_id='$user'");
$row4=mysql_fetch_array($query4);
if($row4['user_type']=='business')
{
$query5=mysql_query("select image , name from business_profile where user_id='$user'");
$row5=mysql_fetch_array($query5);
$name = ucwords($row5['name']);
}
else if($row4['user_type']=='personal')
{
$query5=mysql_query("select image , fname , lname from profile where user_id='$user'");
$row5=mysql_fetch_array($query5);
$name = ucwords($row5['fname']." ".$row5['lname']);
}
$aExtraInfo1 = getimagesize("upload/".$row5['image']);

$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$row5['image']));

echo "<img src='" . $sImage1 . "' title='". $name ."' width='6%' height='50px' style='border-radius:2px; float:left;'>";

echo "</label>";

echo "<label style='display:block; float:left; margin-left:1%; width:93%; font-size:15px; height:auto; color:#000000;  
background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize; position:relative; font-weight:bold;
text-align:justify; padding-top:7px; font-family:times new roman;'>";
echo $row3['review'];
echo "<br/>";
$src = stars($row3['rating']);
echo "<font style='color:#c41200;'><img src='images/".$src."' title='".$row3['rating']."&nbsp;Stars Rating' height='15px' width='auto' 
style='vertical-align:sub;'></font>";
echo "</label>";

echo "<label style=' display:block;  width:0; font-family:Arial; font-size:14px; height:1%; font-weight:bolder; 
border:1px hidden #007eff;'></label>";

echo "<label style='display:block; left:0; right:0; position:relative; float:left; width:100%;'> ";
echo "<center>";
echo "<hr width='100%' style='height:1; color:#E5E5E5;'></hr>";
echo "</center>";
echo "</label>";

echo "</span>";
}

?>

</div>

</div>

<center>

<div style=" display:block; position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer.php");
?>
 
</label> 

</div>

</center>