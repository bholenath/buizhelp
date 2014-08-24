<?php
session_start();

    if(isset($_GET['id']))
    {
    $data = $_GET['id'];
    }

include("header1.php");
include("db.php");
$query = "SELECT *
FROM business_profile
WHERE biz_id = '$data' ";
$result=mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

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

<div style=" display:block; position:relative;  padding-left:1%; padding-right:1%; padding-bottom:0.5%; width:98%; height:auto;">

<div style="width:100%; display:inline-block; overflow:hidden; height:auto;  position:relative; border-bottom: 1px hidden #000000;">

<div id="image" style="width:100%; padding-top:0.3%; padding-left:0.4%; padding-right:0.4%; padding-bottom:10000px; 
margin-bottom:-10000px; display:inline-block; position:relative; border:1px hidden #FFD735; border-radius:5px;">

<label style=' display:block; float:left; width:8%; font-family:times new roman; font-size:14px; height:75px; color:#000000; 	font-weight:bolder; position:relative; background-color:#ffffff; margin-right:2%; border:1px solid #BBBBBB; border-radius:2px;'>

<?php
$aExtraInfo1 = getimagesize("upload/".$row['image']);
$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$row['image']));
echo "<img src='" . $sImage1 . "' width='100%' height='75px' style='border-radius:2px; float:left;'/>";
?>

</label>

<label style=' display:block; float:left; width:48.8%; font-family:times new roman; font-size:14px; height:auto; color:#c41200; 	font-weight:bolder; background-color:#ffffff; text-align:left; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize;
position:relative; text-align:left; margin-right:1%;'>

<?php
echo "<font style=' font-family:Times New Roman; font-size:20px;'>".$row['name']."</font>";
echo "<br>";
$query1 = "SELECT category_name
FROM food_category
WHERE category_id = '$row[category_id]' ";
$result1=mysql_query($query1) or die(mysql_error());
$row1 = mysql_fetch_array($result1);
echo "<font style=' font-family:Times New Roman; font-size:14px; color:#663399;'>".$row1['category_name']."</font>";
echo "<br>";
echo "<font style='font-family:Times New Roman; font-size:14px; color:#c41200;'>".$row['address']."</font></a>";
echo "<br>";
$count_review = mysql_query("select sum(rating) as sum , count(review_id) as id from review where biz_id = '$data'") 
or die(mysql_error());
$count1=mysql_fetch_array($count_review);

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

echo "<a href='review.php?id=".$data."&&cat=".$row['category_id']."&&name=".$row['name']."' target='_blank' title='User Reviews'>
<font style = 'font-family : Times New Roman; text-align:left; font-size:14px; color:#663399;'><img src='images/".$src."' title='".
number_format($avg,1)."&nbsp;Stars Rating' height='15px' width='auto' style='vertical-align:sub;'><font style='margin-right:2%;'></font>"
.$count1['id']."<font style='margin-left:2%;'>Reviews</font></font></a>";
?>

</label>

<label style=' display:block; float:right; width:38%; font-family:times new roman;  height:auto; font-weight:bolder; 
background-color:#ffffff; padding-right:2%; border:1px hidden #BBBBBB; border-radius:2px; position:relative; text-transform:capitalize; 
text-align:right; text-align:right;'>

<a href="login_check.php?id=<?php echo $data;?>" target="_self"><font style="color:#c41200; font-size:16px;"><u>Wish to Write a Review?</u></font></a>

</label>

</div>

<div id="display" style="width:100%; padding-top:0.3%; padding-left:0.4%; padding-right:0.4%; display:block; 
border:1px hidden #FFD735; position:relative; border-radius:1px;">

<!-- <label style=' display:block; float:left; width:100%; font-family:times new roman; font-size:14px; height:auto; color:#000000; 	 background-color:#ffffff; text-align:left; border:1px hidden #BBBBBB; border-radius:2px; 
text-transform:capitalize;'>
 -->
<?php

$country="select * from country where country_id='$row[country_id]'";
$country1=mysql_query($country) or die(mysql_error());
$country2=mysql_fetch_array($country1);
$state="select * from state where state_id='$row[state_id]'";
$state1=mysql_query($state) or die(mysql_error());
$state2=mysql_fetch_array($state1);
$city="select * from city where city_id='$row[city_id]'";
$city1=mysql_query($city) or die(mysql_error());
$city2=mysql_fetch_array($city1);
$area="select * from area where area_id='$row[area_id]'";
$area1=mysql_query($area) or die(mysql_error());
$area2=mysql_fetch_array($area1);
echo "<div style='display:block; float:left; width:100%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder; margin-bottom:2%; margin-top:2%;'>";
echo "<label style='display:block; float:left; position:relative; width:24%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Area <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $area2['area_name'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:24%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "City <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $city2['city_name'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:24%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "State <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $state2['state_name'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:24%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Country <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $country2['country_name'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; float:left; width:100%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder; margin-bottom:2%;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff;  margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Contact No. <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['contact_number'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff;  margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Mobile No. <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['mobile_number'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff;  margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Website <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200; text-transform:lowercase;'>";
echo "<a href='http://".$row['website']."' target='_blank'>".$row['website']."</a>";
echo "</span>";
echo "</label>";
echo "</div>";
$type=array();
$c=0;
if($row['cash']=='1')
{ 
$type[]='Cash'; 
$c++;
} 
if($row['card']=='1')
{
$type[]='Card'; 
$c++;
}
if($row['voucher']=='1')
{ 
$type[]='Voucher'; 
$c++;
} 
if($row['others']=='1')
{ 
$type[]='Others'; 
$c++;
}
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Payment Types <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
for($i=0; $i<$c; $i++) 
{ 
echo $type[$i];
echo "&nbsp;&nbsp;&nbsp;";
}
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Open - Since <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['open_since'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Working Hours <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['opening_hours'].":00&nbsp;-&nbsp;".$row['closing_hours'].":00";
echo "</span>";
echo "</label>";
echo "</div>";
if($row1['category_name']=="Hotel" || $row1['category_name']=="Lodge")
{
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "No. of Beds <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['beds'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "No. of Rooms <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['rooms'];
echo "</span>";
echo "</label>";
echo "</div>";
}
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Reservation <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['reservation'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Parking <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['parking'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Home Delivery <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['home_delivery'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "For Group <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['groups'];
echo "</span>";;
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "For Couples <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['couples'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "For Kids <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['kids'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Take Out <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['take_out'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Waiter Service <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['waiter_service'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Outdoor Seating <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['outdoor_seating'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Wi-Fi <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['wi_fi'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Alcohol <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['alcohol'];
echo "</span>";;
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "TV <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['tv'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Catering <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['catering'];
echo "</span>";
echo "</label>";
echo "<label style='display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Wheel-Chair <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $row['wheel_chair'];
echo "</span>";
echo "</label>";
$noise="select * from noise where noise_id='$row[noise_id]'";
$noise1=mysql_query($noise) or die(mysql_error());
$noise2=mysql_fetch_array($noise1);
echo "<label style='display:block; float:left; position:relative; width:33%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:37%; float:left;'>";
echo "Noise Level <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:63%; float:right; text-align:center; color:#c41200;'>";
echo $noise2['noise_level'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:98%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:12%; float:left;'>";
echo "Ambience <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:88%; float:right; text-align:justify; color:#c41200;'>";
echo "&nbsp;&nbsp;&nbsp;".$row['ambience'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%; float:left; margin-bottom:2%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; position:relative; width:98%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; margin-right:1%; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:12%; float:left;'>";
echo "Speciality <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:88%; float:right; text-align:justify; color:#c41200;'>";
echo "&nbsp;&nbsp;&nbsp;".$row['speciality'];
echo "</span>";
echo "</label>";
echo "</div>";
echo "<div style='display:block; width:100%;  float:left; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;'>";
echo "<label style='display:block; float:left; margin-right:1%; position:relative; width:98%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; text-align:left; border:1px hidden #BBBBBB; border-radius:2px;'>";
echo "<span style='width:12%; float:left;'>";
echo "Attire <font style='float:right; padding-right:2%;'>:</font>";
echo "</span>";
echo "<span style='width:88%; float:right; text-align:justify; color:#c41200;'>";
echo "&nbsp;&nbsp;&nbsp;".$row['attire'];
echo "</span>";
echo "</label>";
echo "</div>";
?>

<!-- </label>-->

</div>

</div>

</div>

<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; color:#000000; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer.php");
?>
 
</label> 

</div>

</center>
