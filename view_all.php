<?php
include("header1.php");
include("db.php");

if(isset($_GET["cat"]))
    {
$category_id = $_GET["cat"];
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

echo "<hr width='98%' style='height:1;'></hr>";

echo "<div style=' display:block; position:relative; padding-top:0; padding-left:1%; padding-right:1%; padding-bottom:0.5%; 
width:98%; height:auto;'>";

echo "<div style='width:100%; position:relative; display:block; overflow:hidden; height:auto; float:left; 
border-bottom: 1px hidden #000000;'>";

$query=mysql_query("select biz_id from business_profile where category_id='$category_id'");
$query1=mysql_query("select category_name from food_category where category_id='$category_id'");
$row1=mysql_fetch_array($query1);

echo "<span style='width=100%; position:relative; display:block;'>";

echo "<label style=' display:block; float:left;  width:100%; font-family:arial; font-size:18px; height:auto; color:#c41200; 	        
font-weight:bolder; padding-top:0.5%; padding-bottom:0.5%; background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<u>".$row1['category_name']."</u>";
echo "</label>";

$i=1;
while($row=mysql_fetch_array($query))
{

echo "<span style=' display:block; float:left; width:100%; padding-top:0.5%; padding-bottom:0; padding-left:2%; padding-right:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;>";

echo "<label style=' display:block; float:left; width:6%; font-family:times new roman; font-size:14px; height:8%; color:#000000; 	font-weight:bolder; position:relative; margin-bottom:2%; margin-right:1%; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;'>";

$biz=$row['biz_id'];		
$query2=mysql_query("select address , image , name , biz_id from business_profile where biz_id='$biz'");
$row2=mysql_fetch_array($query2);
$aExtraInfo1 = getimagesize("upload/".$row2['image']);
$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$row2['image']));

echo "<a href='main_view.php?id=".$row2['biz_id']."' title=".$row2['name']." target='_blank'><img src='" . $sImage1 . "' width='6%' height='52px' style='border-radius:2px; position:relative; float:left;'/></a>";

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:3%; width:89%; font-family:times new roman; font-size:14px; height:3%; 
color:#000000; font-weight:bolder; background-color:#ffffff; margin-bottom:0.2%; border:1px hidden #BBBBBB; border-radius:2px; 
text-transform:capitalize; position:relative; text-align:left;'>";

echo $i.".&nbsp;"."<a href='main_view.php?id=".$row2['biz_id']."' target='_blank'><font style='color:#663399;'>
<u>".$row2['name']."</u></font></a>";
$i++;

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:3%; width:89%; font-family:times new roman; font-size:13px; height:2%; 
color:#000000; font-weight:500; background-color:#ffffff; margin-bottom:0.1%; border:1px hidden #BBBBBB; border-radius:2px; 
text-transform:capitalize; position:relative; text-align:left;'>";

echo "<a href='main_view.php?id=".$row2['biz_id']."' target='_blank'><font style='color:#c41200; text-decoration:none;'>"
.$row2['address']."</font></a>";

echo "</label>";

$count_review = mysql_query("select sum(rating) as sum , count(review_id) as id from review where biz_id = '$biz'") 
or die(mysql_error());
$count1=mysql_fetch_array($count_review);

echo "<label style=' display:block; float:left; margin-left:3%; width:89%; font-family:times new roman; font-size:12px; height:2%; 
color:#663399; font-weight:bold; background-color:#ffffff; margin-bottom:0; border:1px hidden #BBBBBB; border-radius:2px; 
text-transform:capitalize; position:relative; text-align:left;'>";

if($count1['id'] != 0)
{
$avg= $count1['sum']/$count1['id'];
$src = stars(number_format($avg,1));
}
else
{
$avg = 0;
$src = stars(number_format($avg,1));
}

echo "<label name='review' style='width=100%; position:relative; float:left; display:block;'>";
echo "<a href='review.php?id=".$biz."&&cat=".$category_id."&&name=".$row2['name']."' target='_blank'/><font style='color:#663399;'>
<img src='images/".$src."' title='".number_format($avg,1)."&nbsp;Stars Rating' height='15px' width='50%' style='vertical-align:sub;'>
<font style='margin-right:3%;'></font>".$count1['id']."<font style='margin-left:2%;'>Reviews</font></font></a>"; 
echo "</label>";

echo "</label>";

echo "</span>";

echo "<label style=' display:block;  width:0; font-family:Arial; font-size:14px; height:0.2%; font-weight:bolder; 
border:1px hidden #007eff;'></label>";

echo "<span style=' display:block; float:left; position:relative; width:100%; height:auto;'>";

echo "<label style='display:block; position:relative; float:left; width:100%;'> ";
echo "<center>";
echo "<hr width='96%' style='height:1; color:#E5E5E5;'></hr>";
echo "</center>";

echo "</label>";

echo "</span>";

}

echo "</span>";

echo "</div>";

echo "</div>";

?>

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