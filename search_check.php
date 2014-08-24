<?php
include("header1.php");
include("db.php");

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

<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>

<script> 
function visibility()
{
document.getElementById('search').style.visibility = 'visible'; 
}
</script>

<hr width="98%" style="height:1;"></hr>
        
<div style=" display:block; position:relative; padding-top:0; padding-left:1%; padding-right:1%; padding-bottom:0.5%; 
width:98%; height:auto;">

<div style="width:100%; position:relative; display:block; overflow:hidden; height:auto; float:left; border-bottom: 1px hidden #000000;">

<?php
$name = trim(mysql_real_escape_string($_POST['find1']));
$place = trim(mysql_real_escape_string($_POST['place']));
?>

<font style="font-weight:bold; width:100%; float:left; font-family:times new roman; color:#c41200; 
margin-bottom:1%; font-size:17px; "><u>Search for <?php echo stripslashes(strtoupper($name)); ?> in 
<?php echo strtoupper($place); ?> </u></font>
<br>

<?php

$place1 = explode(" ",$place,3);
$name1 = explode(" ",$name,3);

$count = count($place1);
$count1 = count($name1);

if($count == 3)
{
$first = strtolower($place1[0]);
$second = strtolower($place1[1]);
$third = strtolower($place1[2]);
}
elseif($count == 2)
{
$first = strtolower($place1[0]);
$second = strtolower($place1[1]);
}
else
{
$first = strtolower($place1[0]);
}

if($count1 == 3)
{
$first1 = strtolower($name1[0]);
$second1 = strtolower($name1[1]);
$third1 = strtolower($name1[2]);
}
elseif($count1 == 2)
{
$first1 = strtolower($name1[0]);
$second1 = strtolower($name1[1]);
}
else
{
$first1 = strtolower($name1[0]);
}

if(!empty($first) && !empty($second) && !empty($third))
{
$query = mysql_query(" select area_id from area where ( (area_name LIKE '%".$first." ".$second." ".$third."%') 
OR (area_name LIKE '%".$first." ".$second."%') OR (area_name LIKE '%".$first." ".$second.$third."%') 
OR (area_name LIKE '%".$first.$second." ".$third."%') OR (area_name LIKE '%".$first.$second.$third."%') 
OR (area_name LIKE '%".$first.$second."%') OR (area_name like '%".$first."%') OR (area_name LIKE '%".$second."%') 
OR (area_name LIKE '%".$third."%') ) ");

$query1 = mysql_query(" select city_id from city where ( (city_name LIKE '%".$first." ".$second." ".$third."%') 
OR (city_name LIKE '%".$first." ".$second."%') OR (city_name LIKE '%".$first." ".$second.$third."%') 
OR (city_name LIKE '%".$first.$second." ".$third."%') OR (city_name LIKE '%".$first.$second.$third."%') 
OR (city_name LIKE '%".$first.$second."%') OR (city_name LIKE '%".$first."%') OR (city_name LIKE '%".$second."%') 
OR (city_name LIKE '%".$third."%') ) ");

$query2 = mysql_query(" select state_id from state where ( (state_name LIKE '%".$first." ".$second." ".$third."%') 
OR (state_name LIKE '%".$first." ".$second."%') OR (state_name LIKE '%".$first." ".$second.$third."%') 
OR (state_name LIKE '%".$first.$second." ".$third."%') OR (state_name LIKE '%".$first.$second.$third."%') 
OR (state_name LIKE '%".$first.$second."%') OR (state_name LIKE '%".$first."%') OR (state_name LIKE '%".$second."%') 
OR (state_name LIKE '%".$third."%') ) ");
}

else if(!empty($first) && !empty($second) && empty($third))
{
$query = mysql_query(" select area_id from area where ( (area_name LIKE '%".$first." ".$second."%') 
OR (area_name LIKE '%".$first.$second."%') OR (area_name LIKE '%".$first."%') OR (area_name LIKE '%".$second."%') ) ");

$query1 = mysql_query(" select city_id from city where ( (city_name like '%".$first." ".$second."%') 
OR (city_name LIKE '%".$first.$second."%') OR (city_name LIKE '%".$first."%') OR (city_name LIKE '%".$second."%') )  ");

$query2 = mysql_query(" select state_id from state where ( (state_name like '%".$first." ".$second."%')
OR (state_name LIKE '%".$first.$second."%') OR (state_name LIKE '%".$first."%') OR (state_name LIKE '%".$second."%') ) ");
}

else if(!empty($first) && empty($second) && empty($third))
{
$query = mysql_query(" select area_id from area where ( area_name LIKE '%".$first."%' ) ");

$query1 = mysql_query(" select city_id from city where ( city_name LIKE '%".$first."%' ) ");

$query2 = mysql_query(" select state_id from state where ( state_name LIKE '%".$first."%' ) ");
}


if(!empty($first1) && !empty($second1) && !empty($third1))
{
$query5 = mysql_query(" select category_id, category_name from food_category where ( ( category_name LIKE '%".$first1." ".$second1." ".
$third1."%' ) OR ( category_name LIKE '%".$first1." ".$second1."%' ) OR (category_name LIKE '%".$first1." ".$second1.$third1."%') 
OR ( category_name LIKE '%".$first1.$second1." ".$third1."%' ) OR ( category_name LIKE '%".$first1.$second1.$third1."%' ) 
OR ( category_name LIKE '%".$first1.$second1."%' ) OR ( category_name LIKE '%".$first1."%' ) OR ( category_name LIKE '%".$second1."%') 
OR ( category_name LIKE '%".$third1."%') ) ");

$query6 = mysql_query(" select name from business_profile where ( (name LIKE '%".$first1." ".$second1." ".$third1."%') 
OR (name LIKE '%".$first1." ".$second1."%') OR (name LIKE '%".$first1." ".$second1.$third1."%' ) 
OR (name LIKE '%".$first1.$second1." ".$third1."%' ) OR (name LIKE '%".$first1.$second1.$third1."%') 
OR (name LIKE '%".$first1.$second1."%') OR (name LIKE '%".$first1."%')  OR ( name LIKE '%".$second1."%')
OR ( name LIKE '%".$third1."%') )  ");
}

else if(!empty($first1) && !empty($second1) && empty($third1))
{
$query5 = mysql_query(" select category_id, category_name from food_category where ( ( category_name LIKE '%".$first1." ".$second1."%' )
OR ( category_name LIKE '%".$first1.$second1."%' ) OR ( category_name LIKE '%".$first1."%' ) 
OR (category_name LIKE '%".$second1."%') ) ");

$query6 = mysql_query(" select name from business_profile where ( ( name LIKE '%".$first1." ".$second1."%') 
OR (name LIKE '%".$first1.$second1."%') OR (name LIKE '%".$first1."%')  OR (name LIKE '%".$second1."%') ) ");
}

else if(!empty($first1) && empty($second1) && empty($third1))
{
$query5 = mysql_query(" select category_id , category_name from food_category where ( category_name LIKE '%".$first1."%' ) ");

$query6 = mysql_query(" select name from business_profile where ( name LIKE '%".$first1."%' ) ");
}

$row = mysql_fetch_array($query);
$row1 = mysql_fetch_array($query1);
$row2 = mysql_fetch_array($query2);
$row5 = mysql_fetch_array($query5);
/*$row6 = mysql_fetch_array($query6);*/

$area = addslashes($row['area_id']);
$city = addslashes($row1['city_id']);
$state = addslashes($row2['state_id']);
$category = addslashes($row5['category_id']);

$c=0;
$company_name = array();
while($row6 = mysql_fetch_array($query6))
{
$company_name[$c] = addslashes($row6['name']);
$c++;
}

if( (empty($row['area_id']) && empty($row1['city_id']) && empty($row2['state_id']) ) || ( empty($row5['category_id']) && 
empty($company_name) ) )
{
echo "<font style=' width:100%; float:left; margin:3% 0.5%; font-weight:bold; color:#c41200;'>
Sorry! No such Data Found....</font>";

$name = stripslashes($name);

$query_data_unfound = mysql_query("insert into unfound_data(search_name,search_location) values('$name','$place')") 
or die('Could not connect : ' . mysql_error());

echo "<span style=' display:block; margin:1% 0.3%; float:left; position:relative; width:17%; '>";

echo "<label style=' display:block; margin:0 1%; float:left; position:relative; width:100%; '>";

echo "<input type='submit' name='submit' onClick='visibility()' value=' New Search ' style='background-color:#DD0D04; cursor:pointer; 
color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; 
width:100%;'>";

echo "</label>";

echo "</span>";

include("search_show.php");

exit(0);

}

if(!empty($company_name) && !empty($category))
{
$string = implode("','", array_map('mysql_real_escape_string', $company_name));
$string = stripslashes($string);

$query4 =  mysql_query(" select * from business_profile where ( ( area_id = '".$area."' AND name IN ('".$string."') 
AND category_id = '".$category."' ) OR ( city_id = '".$city."' AND name IN ('".$string."') AND category_id = '".$category."' ) 
OR ( state_id = '".$state."' AND name IN ('".$string."') AND category_id = '".$category."' ) ) ");

if(mysql_num_rows($query4) == 0)
{
$query4 = mysql_query(" select * from business_profile where ( (area_id = '".$area."' AND category_id = '".$category."') 
OR ( city_id = '".$city."' AND category_id = '".$category."' ) OR ( state_id = '".$state."' AND category_id = '".$category."' ) ) ");

if(mysql_num_rows($query4) != 0)
{
/*echo "<font style='font-weight:bold; width:100%; float:left; font-family:times new roman; color:#c41200; 
margin-bottom:0.7%; font-size:14px;'><b> Sorry! No Such Data Found..... </b></font>";

echo"<br>";*/

echo "<font style='font-weight:bold; width:100%; float:left; font-family:times new roman; color:#663399; 
margin-bottom:0.7%; font-size:13px;'><u><i>Showing results for</u>&nbsp;&nbsp;<b>".$row5['category_name']."&nbsp;&nbsp;</b><u>in</u>
&nbsp;&nbsp;<b>".ucwords($place)."</b></i></font>";
}

else
{
echo "<font style='margin-left:0.5%; width:100%; float:left; margin-top:3%; font-weight:bold; color:#c41200;'>
Sorry! No such Data Found....</font>";

$name = stripslashes($name);

$query_data_unfound = mysql_query("insert into unfound_data(search_name,search_location) values('$name','$place')") 
or die('Could not connect : ' . mysql_error());

echo "<span style=' display:block; margin:1% 0.3%; float:left; position:relative; width:17%; '>";

echo "<label style=' display:block; margin:0 1%; float:left; position:relative; width:100%; '>";

echo "<input type='submit' name='submit' onClick='visibility()' value=' New Search ' style='background-color:#DD0D04; cursor:pointer; 
color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; 
width:100%;'>";

echo "</label>";

echo "</span>";

include("search_show.php");

exit(0);
}

}

else
{
echo "<font style='font-weight:bold; width:100%; float:left; font-family:times new roman; color:#663399; 
margin-bottom:0.7%; font-size:13px;'><u><i>Showing results for</u>&nbsp;&nbsp;<b>".ucwords($name)."&nbsp;&nbsp;</b><u>in</u>
&nbsp;&nbsp;<b>".ucwords($place)."</b></i></font>";
}

}

else if(!empty($company_name) && empty($category))
{
$string = implode("','", array_map('mysql_real_escape_string', $company_name));
$string = stripslashes($string);

$query4 =  mysql_query(" select * from business_profile where ( ( area_id = '".$area."' AND name IN ('".$string."') ) 
OR ( city_id = '".$city."' AND name IN ('".$string."') ) OR ( state_id = '".$state."' AND name IN ('".$string."') ) ) ");

if(mysql_num_rows($query4) == 0)
{
echo "<font style='margin-left:0.5%; width:100%; float:left; margin-top:3%; font-weight:bold; color:#c41200;'>
Sorry! No such Data Found....</font>";

$name = stripslashes($name);

$query_data_unfound = mysql_query("insert into unfound_data(search_name,search_location) values('$name','$place')") 
or die('Could not connect : ' . mysql_error());

echo "<span style=' display:block; margin:1% 0.3%; float:left; position:relative; width:17%; '>";

echo "<label style=' display:block; margin:0 1%; float:left; position:relative; width:100%; '>";

echo "<input type='submit' name='submit' onClick='visibility()' value=' New Search ' style='background-color:#DD0D04; cursor:pointer; 
color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; 
width:100%;'>";

echo "</label>";

echo "</span>";

include("search_show.php");

exit(0);
}

else
{
echo "<font style='font-weight:bold; width:100%; float:left; font-family:times new roman; color:#663399; 
margin-bottom:0.7%; font-size:13px;'><u><i>Showing results for</u>&nbsp;&nbsp;<b>".ucwords($name)."&nbsp;&nbsp;</b><u>in</u>
&nbsp;&nbsp;<b>".ucwords($place)."</b></i></font>";
}

}

else if(empty($company_name[0]) && !empty($category))
{

$query4 = mysql_query(" select * from business_profile where ( (area_id = '".$area."' AND category_id = '".$category."') 
OR ( city_id = '".$city."' AND category_id = '".$category."' ) OR ( state_id = '".$state."' AND category_id = '".$category."' ) ) ");

if(mysql_num_rows($query4) == 0)
{
echo "<font style='margin-left:0.5%; width:100%; float:left; margin-top:3%; font-weight:bold; color:#c41200;'>
Sorry! No such Data Found....</font>";

$name = stripslashes($name);

$query_data_unfound = mysql_query("insert into unfound_data(search_name,search_location) values('$name','$place')") 
or die('Could not connect : ' . mysql_error());

echo "<span style=' display:block; margin:1% 0.3%; float:left; position:relative; width:17%; '>";

echo "<label style=' display:block; margin:0 1%; float:left; position:relative; width:100%; '>";

echo "<input type='submit' name='submit' onClick='visibility()' value=' New Search ' style='background-color:#DD0D04; cursor:pointer; 
color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; 
width:100%;'>";

echo "</label>";

echo "</span>";

include("search_show.php");

exit(0);
}

else
{
echo "<font style='font-weight:bold; width:100%; float:left; font-family:times new roman; color:#663399; 
margin-bottom:0.7%; font-size:13px;'><u><i>Showing results for</u>&nbsp;&nbsp;<b>". $row5['category_name']."&nbsp;&nbsp;</b><u>in</u>
&nbsp;&nbsp;<b>".ucwords($place)."</b></i></font>";
}

}

$i=1;

while($row4=mysql_fetch_array($query4))

{

echo "<span style=' display:block; float:left; width:100%; padding:0.5% 0; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;>";

echo "<label style=' display:block; float:left; width:5%; font-family:times new roman; font-size:14px; height:8%; color:#000000; 	font-weight:bolder; position:relative; margin-left:0; margin-right:1%; border:1px solid #BBBBBB; border-radius:2px;'>";

$aExtraInfo1 = getimagesize("upload/".$row4['image']);
$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$row4['image']));

echo "<a href='main_view.php?id=".$row4['biz_id']."' title=".$row4['name']." target='_blank'><img src='" . $sImage1 . "' width='5%' 
height='50px' style='border-radius:2px; float:left;'/></a>";

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:3%; width:92%; font-family:arial; font-size:15px; height:3%; 
color:#000000; font-weight:bolder; background-color:#ffffff; margin-bottom:0.1%; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize; position:relative; text-align:left;'>";

echo $i.".&nbsp;"."<a href='main_view.php?id=".$row4['biz_id']."' target='_blank'><font style='color:#663399;'>
<u>".$row4['name']."</u></font></a>";
$i++;

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:3%; width:92%; font-family:times new roman; font-size:13px; height:2%; 
color:#000000; font-weight:400; background-color:#ffffff; margin-bottom:0.1%; border:1px hidden #BBBBBB; border-radius:2px; 
text-transform:capitalize; position:relative; text-align:left;'>";

echo "<a href='main_view.php?id=".$row4['biz_id']."' target='_blank'><font style='color:#c41200;'>".$row4['address']."</font></a>";

echo "</label>";

$count_review = mysql_query(" select sum(rating) as sum , count(review_id) as id from review where biz_id = '".$row4['biz_id']."' ") 
or die(mysql_error());
$count1=mysql_fetch_array($count_review);

echo "<label style=' display:block; float:left; margin-left:3%; width:92%; font-family:arial; font-size:12px; height:2%; 
color:#663399; font-weight:bold; background-color:#ffffff; margin-bottom:0; border:1px hidden #BBBBBB; border-radius:2px; 
text-transform:capitalize; position:relative; text-align:left;'>";

if($count1['id'] != 0)
{
$avg= $count1['sum']/$count1['id'];
$src = stars(number_format($avg,1));
}
else
{
$avg= 0;
$src = stars(number_format($avg,1));
}

echo "<label name='review' style='width=100%; position:relative; float:left; display:block;'>";

echo "<a href='review.php?id=".$row4['biz_id']."&&cat=".$row4['category_id']."&&name=".$row4['name']."' target='_blank'/>
<font style='color:#663399;'><img src='images/".$src."' title='".number_format($avg,1)."&nbsp;Stars Rating' height='15px' width='47%' 
style='vertical-align:sub;'><font style='margin-right:3%;'></font>".$count1['id']."<font style='margin-left:2%;'>Reviews
</font></font></a>"; 

echo "</label>";

echo "</label>";

echo "<label style='display:block; float:left; width:100%; margin:0.4% 0; position:relative;'></label>";

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

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>
<?php
include("footer1.php");
?>
 
</label> 

</div>

</center>