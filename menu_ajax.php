<?php
include("db.php");

if(isset($_GET["category_id"]))
    {
$category_id = $_GET["category_id"];
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

$query=mysql_query("select biz_id from business_profile where category_id='$category_id'");
$query1=mysql_query("select category_name from food_category where category_id='$category_id'");
$row1=mysql_fetch_array($query1);

echo "<span name='menuajax' id='menuajax' style='width=100%; position:relative; overflow:scroll; z-index:4;'>";

echo "<body onLoad=\"<script> document.getElementById('loading').style.display = 'none'; </script>\">";

echo "<label style=' display:block; float:left;  width:100%; font-family:arial; font-size:18px; height:auto; color:#c41200; 	        
font-weight:bolder; padding-top:1%; padding-bottom:1%; border:1px hidden #BBBBBB; border-radius:2px;'>";

echo "<u>".$row1['category_name']."</u>";

echo "</label>";

$i=1;
while($row=mysql_fetch_array($query))
{

if($i<=5)
{

echo "<span style=' display:block; float:left; width:100%; padding-top:0.7%; padding-bottom:0; padding-left:2%; padding-right:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;>";

echo "<label style=' display:block; float:left; width:8%; font-family:times new roman; font-size:14px; height:8%; color:#000000; 	font-weight:bolder; position:relative; margin-bottom:2%; margin-right:1%; border:1px solid #BBBBBB; border-radius:2px;'>";

$biz=$row['biz_id'];		
$query2=mysql_query("select address , image , name , biz_id from business_profile where biz_id='$biz'");
$row2=mysql_fetch_array($query2);
$aExtraInfo1 = getimagesize("upload/".$row2['image']);
$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$row2['image']));
echo "<a href='main_view.php?id=".$row2['biz_id']."' title=".$row2['name']." target='_blank' title='Bussiness Details'>
<img src='" . $sImage1 . "' width='8%' height='55px' style='border-radius:2px; position:relative; float:left;'/></a>";

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:3%; width:89%; font-family:times new roman; font-size:14px; height:3%; 
color:#000000; font-weight:bolder; margin-bottom:0.4%; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize; position:relative; text-align:left;'>";

echo $i.".&nbsp;"."<a href='main_view.php?id=".$row2['biz_id']."' target='_blank' title='Bussiness Details'><font style='color:#663399;'>
<u>".$row2['name']."</u></font></a>";
$i++;

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:3%; width:89%; font-family:times new roman; font-size:13px; height:2%; 
color:#000000; font-weight:500; margin-bottom:0.3%; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize; position:relative; text-align:left;'>";

echo "<a href='main_view.php?id=".$row2['biz_id']."' target='_blank' title='Bussiness Details'><font style='color:#c41200;'>"
.$row2['address']."</font></a>";

echo "</label>";

$count_review = mysql_query("select sum(rating) as sum , count(review_id) as id from review where biz_id = '$biz'") 
or die(mysql_error());
$count1=mysql_fetch_array($count_review);

echo "<label style=' display:block; float:left; margin-left:3%; width:89%; font-family:times new roman; font-size:12px; height:2%; 
color:#663399; font-weight:bold; margin-bottom:0; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize; position:relative; text-align:left;'>";

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

echo "<a href='review.php?id=".$biz."&&cat=".$category_id."&&name=".$row2['name']."' target='_blank' title='User Reviews'><font style= 
'color:#663399;'><img src='images/".$src."' title='".number_format($avg,1)."&nbsp;Stars Rating' height='15px' width='50%' 
style='vertical-align:sub;'><font style='margin-right:5%;'></font>".$count1['id']."<font style='margin-left:3%;'>Reviews</font></font>
</a>";
 
echo "</label>";

echo "</label>";

echo "</span>";

echo "<label style=' display:block;  width:0; font-family:Arial; font-size:14px; height:0.3%; font-weight:bolder; 
border:1px hidden #007eff;'></label>";

echo "<span style=' display:block; float:left; position:relative; width:100%; height:auto;'>";

echo "<label style='display:block; position:relative; float:left; width:100%;'> ";

echo "<center>";
echo "<hr width='96%' style='height:1; color:#E5E5E5;'></hr>";
echo "</center>";

echo "</label>";

echo "</span>";

}

else
{
echo "<font style=' float: right; top:0px; font-family:times new roman; font-size:12px; font-weight:500; display:block; position:relative; margin-right:2%;'>";
echo "<a href='view_all.php?cat=".$category_id."' target='_blank' style='color:#663399;'><u> see all </u></a>";
echo "</font>";
exit(0);
}

}

echo "<font style=' float: right; font-family:times new roman; font-size:12px; font-weight:500; display:block; position:relative; 
margin-right:2%;'>";
echo "<a href='view_all.php?cat=".$category_id."' target='_blank' style='color:#663399;'><u> see all </u></a>";
echo "</font>";

exit(0);

echo "</body>";
echo "</span>";
?>
