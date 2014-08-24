<?php
include("db.php");
if(isset($_GET["search_data"]))
    {
$search_data = $_GET["search_data"];
    }

$query5 = mysql_query(" select category_name from food_category where category_name LIKE '%".$search_data."%' ");

$query6 = mysql_query(" select name from business_profile where name LIKE '%".$search_data."%'");

echo "<span name='searchajax' id='searchajax' style=' position:relative; z-index:4; width:20%; margin-left:3.5%; height:auto; 
float:left; display:block; padding:0.5%; background:#D7D7D7; border:1px solid #663399; border-top:0; top:0px; '>";

while($row5=mysql_fetch_array($query5))
{

echo "<span style=' display:block; float:left; width:100%; padding:0; position:relative; font-family:times new roman; font-size:14px; height:auto; font-weight:bold; color:#000000;>";

if(!empty $row5['category_name']) { echo $row5['category_name']; echo "<br>"; }

echo "</span>";

}

while($row6=mysql_fetch_array($query6))
{

echo "<span style=' display:block; float:left; width:100%; padding:0; position:relative; font-family:times new roman; font-size:14px; height:auto; font-weight:bold; color:#000000;>";

if(!empty $row6['name']) { echo $row6['name']; echo "<br>"; }

echo "</span>";

}

echo "</span>";

?>
