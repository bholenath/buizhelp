
echo "<legend align='right' >
<img src='#' width='30px' height='30px'></legend>";

onClick=\"<script> document.getElementById('enquiry').style.display = 'none'; </script>\"


echo "<div id='enquiry'>";

echo "<div id='pop_up' align='center' style=' width:500px; height:400px; border: 2px double #000000; border-radius:2px;'>";

echo "<font style='font-weight:bold; width:100%; float:left; font-family:times new roman; color:#c41200; margin-bottom:0.7%; 
font-size:17px;'><u>Contact Information</u></font>";

echo "<span style='width:100%; float:left; font-family:times new roman; font-size:13px; display:block; text-align:center;'>";

Sorry! No Data found as of your request.We would love to serve you better. Please provide your details and we would inform you of your requested data as soon as possible.

echo "<label style=' display:block; margin:2% 1%; float:left; position:relative; width:30%; '>";

echo "<input type='text' name='name' value=' Name ' readonly='readonly' style='border:1px hidden #000000; text-align:left; 
font-size:16px; font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; border-radius:1px;'>";

echo "</label>";

echo "<label class='box' style=' display:block; width:64%; position:relative; font-family:Times New Roman; font-size:13px; 
font-weight:bold; margin:2% 1%; padding-right:2%; border:1px solid #D7D7D7; border-radius:2px; float:right;'>";

echo "<input type='text' name='name1' id='name1' placeholder='Your Name' required maxlength='64' style=' border:1px hidden #000000; 
color:#000000; text-align:left; padding:2px 4px; font-size:14px; font-family:Times New Roman; width:100%; '>";

echo "</label>";

echo "<label style=' display:block; margin:0 1%; float:left; position:relative; width:30%; '>";

echo "<input type='text' name='mail' value=' E-Mail Id ' readonly='readonly' style='border:1px hidden #000000; 
text-align:left; font-size:16px; font-weight:bold; padding-top:2px; color:#000000; font-family:Times New Roman; width:100%; 
border-radius:1px; '>";

echo "</label>";

echo "<label style=' display:block; width:64%; position:relative; margin:0 1%; padding-right:2%; border:1px solid #D7D7D7; 
border-radius:2px; float:right;'>";

echo "<input type='text' name='mail1' id='email' placeholder='Your Mail Id' required maxlength='64' style=' border:1px hidden #000000; 
color:#000000; text-align:left; padding:2px 4px; font-size:14px; font-family:Times New Roman; width:100%; '>";

echo "</label>";

echo "<span style=' display:block; margin-bottom:1%; float:left; position:relative; width:50%;'>";

echo "<label style=' display:block; margin:0 1%; float:left; position:relative; width:46%;'>";

echo "<input type='submit' name='submit' onClick='return validate6()' value='Submit' style='background-color:#DD0D04; cursor:pointer; 
color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; 
width:100%;'>";

echo "</label>";

echo "<label style=' display:block; width:46%; position:relative; float:right;'>";

echo "<input type='reset' name='submit' value='Reset' style='background-color:#DD0D04; cursor:pointer; color:#ffffff; 
font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;'>";

echo "</label>";

echo "</span>";

echo "</span>";

echo "</div>";

echo "</div>";

onClick='return validate6()'



$query3 = mysql_query(" select review , user_id from review where review_id = (select max(review_id) from review where 
biz_id = '".$row4['biz_id']."' and category_id = '".$row4['category_id']."') ");
$row3= mysql_fetch_array($query3);

if(!empty($row3['user_id']))

{

echo "<label style=' display:block; float:left; width:4%; font-family:times new roman; font-size:14px; height:6%; color:#000000; 	font-weight:bolder; position:relative; margin-left:0.7%; margin-right:1%; border:1px solid #BBBBBB; border-radius:2px;'>";

$user = $row3['user_id'];

$query7=mysql_query("select user_type from users where user_id='$user'");

$row7=mysql_fetch_array($query7);

if($row7['user_type']=='business')
{
$query8=mysql_query("select image , name from business_profile where user_id='$user'");
$row8=mysql_fetch_array($query8);
}

else if($row7['user_type']=='personal')
{
$query8=mysql_query("select image , concat(fname , lname) as name  from profile where user_id='$user'");
$row8=mysql_fetch_array($query8);
}

$aExtraInfo1 = getimagesize("upload/".$row8['image']);

$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$row8['image']));

echo "<a href='main_view.php' title=".$row8['name']." target='_blank'><img src='" . $sImage1 . "' width='100%' 
height='37px' style='border-radius:2px; float:left;'/></a>";

echo "</label>";

echo "<label style=' display:block; float:left; margin-left:2%; width:90%; font-size:14px; height:auto; color:#000000; font-weight:600; background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px; text-transform:capitalize; position:relative; 
text-align:justify; padding-top:7px; font-family:times new roman;'>";

echo $row3['review'];

echo "</label>";

}
