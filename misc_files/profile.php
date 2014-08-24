<?php
session_start();
include("header1.php");
include("db.php");

if (isset($_SESSION['client'])){
$pname = $_SESSION['client'];
$sql="select * from users where username='$pname'";
$result=mysql_query($sql,$con);
$row = mysql_fetch_array($result);
$date1 = $row['dob'];
$addr = $row['image'];
$substr= explode("-", $date1);
$day1 = $substr[0];
$month1 = $substr[1];
$year1 = $substr[2];

}
?>
<hr width="100%" style="height:1;"></hr>
<div style=" padding-left:75px; padding-right:75px; width:auto; height:auto;">
<div style="display:block; padding-left:35px; padding-right:35px; position:relative; padding-top:25px; padding-bottom:55px; width:auto; height:auto;  border: 1px hidden #FFD735; background-color:#ffffff; border-radius:5px;">
<center>
<font style="color:#C41200; font-size:21px; font-weight:bolder; ">Your Profile</font><br>
<font style="color:#000000; font-size:14px; font-weight:bold; ">Please fill your Relevant Information.</font>
<br><br>
<form name="details3" id="details3" method="POST" action="profile_update.php" target="_self" onSubmit="return validate4()" 
enctype="multipart/form-data">
<div style=" display:inline-block; width:81px; position:relative; font-family:Arial; font-size:14px; height:80px; font-weight:bolder;">
<label style=" display:inline-block; width:auto; position:relative; font-family:Times New Roman;  height:80px; 
font-weight:bolder;  background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<?php 
$aExtraInfo1 = getimagesize("upload/".$addr);
$sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents("upload/".$addr));
echo '<img src="' . $sImage1 . '" width="80px" height="80px"  />'; 
?>
</label>
</div>
<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:1px; font-weight:bolder; border:1px hidden #007eff;">
</label>
<label style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<label style=" display:block; width:auto; position:relative; font-family:Times New Roman; font-size:14px; height:23px; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="username1" placeholder="UserName/E-mail Id" value="<?php echo $pname; ?>" readonly="readonly" maxlength="64"  
  ; style=" border:1px hidden #000000; color:#999999; text-align:center; padding-top:2px; font-size:14px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">
</label>
</label>
<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>
<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<label style=" display:block; float:left;  width:180px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; margin-left:0; padding-left:0; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="name1" placeholder=" Your Name " value="<?php echo $row['name']; ?>" maxlength="64" onfocus="clearinputText7();" style="border:1px hidden #000000; text-align:center; font-size:14px; font-family:Times New Roman; padding-top:2px; width:auto; border-radius:1px; background-color:#ffffff;">
</label>
<label style=" display:block; float:right; width:180px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact" placeholder=" Your Conatct No." value="<?php echo $row['contact']; ?>" maxlength="20" onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">
</label>
</div>
<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>
<br>
<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<label style=" display:block; float:left;  width:180px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="city" placeholder=" Your City " value="<?php echo $row['city']; ?>" maxlength="20" onfocus="clearinputText9();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">
</label>
<label style=" display:block; float:right;  width:180px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="country" placeholder=" Your country " value="<?php echo $row['country']; ?>" maxlength="20" onfocus="clearinputText10();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">
</label>
</div>
<br>
<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>
<div style=" width:46%; height:auto; ">
<label style=" display:inline-block; float:left; position:relative;  width:100px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">  
  <select name="day" id="day" title="Birth Day is Required" onFocus="clearinputText11();" style="height:25px; position:relative; 
  width:100px; ">
  <option value="Day"> Birth Day </option>
  <option value="1" <?php if ($day1 == "1") echo "selected='selected'";?>>1</option>
  <option value="2" <?php if ($day1 == "2") echo "selected='selected'";?>>2</option>
  <option value="3" <?php if ($day1 == "3") echo "selected='selected'";?>>3</option>
  <option value="4" <?php if ($day1 == "4") echo "selected='selected'";?>>4</option>
  <option value="5" <?php if ($day1 == "5") echo "selected='selected'";?>>5</option>
  <option value="6" <?php if ($day1 == "6") echo "selected='selected'";?>>6</option>
  <option value="7" <?php if ($day1 == "7") echo "selected='selected'";?>>7</option>
  <option value="8" <?php if ($day1 == "8") echo "selected='selected'";?>>8</option>
  <option value="9" <?php if ($day1 == "9") echo "selected='selected'";?>>9</option>
  <option value="10" <?php if ($day1 == "10") echo "selected='selected'";?>>10</option>
  <option value="11" <?php if ($day1 == "11") echo "selected='selected'";?>>11</option>
  <option value="12" <?php if ($day1 == "12") echo "selected='selected'";?>>12</option>
  <option value="13" <?php if ($day1 == "13") echo "selected='selected'";?>>13</option>
  <option value="14" <?php if ($day1 == "14") echo "selected='selected'";?>>14</option>
  <option value="15" <?php if ($day1 == "15") echo "selected='selected'";?>>15</option>
  <option value="16" <?php if ($day1 == "16") echo "selected='selected'";?>>16</option>
  <option value="17" <?php if ($day1 == "17") echo "selected='selected'";?>>17</option>
  <option value="18" <?php if ($day1 == "18") echo "selected='selected'";?> >18</option>
  <option value="19" <?php if ($day1 == "19") echo "selected='selected'";?>>19</option>
  <option value="20" <?php if ($day1 == "20") echo "selected='selected'";?>>20</option>
  <option value="21" <?php if ($day1 == "21") echo "selected='selected'";?>>21</option>
  <option value="22" <?php if ($day1 == "22") echo "selected='selected'";?>>22</option>
  <option value="23" <?php if ($day1 == "23") echo "selected='selected'";?>>23</option>
  <option value="24" <?php if ($day1 == "24") echo "selected='selected'";?>>24</option>
  <option value="25" <?php if ($day1 == "25") echo "selected='selected'";?>>25</option>
  <option value="26" <?php if ($day1 == "26") echo "selected='selected'";?>>26</option>
  <option value="27" <?php if ($day1 == "27") echo "selected='selected'";?>>27</option>
  <option value="28" <?php if ($day1 == "28") echo "selected='selected'";?>>28</option>
  <option value="29" <?php if ($day1 == "29") echo "selected='selected'";?>>29</option>
  <option value="30" <?php if ($day1 == "30") echo "selected='selected'";?>>30</option>
  <option value="31" <?php if ($day1 == "31") echo "selected='selected'";?>>31</option>
  </select>
  </label>
  <label style=" display:block; float:left ; position:relative;  width:9%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>
  <label style=" display:block; float:left; position:relative; width:100px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
 <select name="month" title="Birth Month is Required" onFocus="clearinputText12();" style="height:25px; position:relative; width:100px; ">
  <option value="Month"> Birth Month </option>
  <option value="Jan" <?php if ($month1 == "Jan") echo "selected='selected'";?>>Jan</option>
  <option value="Feb" <?php if ($month1 == "Feb") echo "selected='selected'";?>>Feb</option>
  <option value="Mar" <?php if ($month1 == "Mar") echo "selected='selected'";?>>Mar</option>
  <option value="Apr" <?php if ($month1 == "Apr") echo "selected='selected'";?>>Apr</option>
  <option value="May" <?php if ($month1 == "May") echo "selected='selected'";?>>May</option>
  <option value="Jun" <?php if ($month1 == "Jun") echo "selected='selected'";?>>Jun</option>
  <option value="Jul" <?php if ($month1 == "Jul") echo "selected='selected'";?>>Jul</option>
  <option value="Aug" <?php if ($month1 == "Aug") echo "selected='selected'";?>>Aug</option>
  <option value="Sep" <?php if ($month1 == "Sep") echo "selected='selected'";?>>Sep</option>
  <option value="Oct" <?php if ($month1 == "Oct") echo "selected='selected'";?>>Oct</option>
  <option value="Nov" <?php if ($month1 == "Nov") echo "selected='selected'";?>>Nov</option>
  <option value="Dec" <?php if ($month1 == "Dec") echo "selected='selected'";?>>Dec</option></select>
  </label>
<label style=" display:inline-block; float:right; position:relative;  width:100px; font-family:Times New Roman; font-size:14px; height:23px; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">   
  <select name="year" title="Birth Year is Required" onFocus="clearinputText13();" style="height:25px; position:relative; width:100px; ">
  <option value="Year"> Birth Year </option>
	<option value="2013" <?php if ($year1 == "2013") echo "selected='selected'";?>>2013</option>
	<option value="2012" <?php if ($year1 == "2012") echo "selected='selected'";?>>2012</option>
	<option value="2011" <?php if ($year1 == "2011") echo "selected='selected'";?>>2011</option>
	<option value="2010" <?php if ($year1 == "2010") echo "selected='selected'";?>>2010</option>
	<option value="2009" <?php if ($year1 == "2009") echo "selected='selected'";?>>2009</option>
	<option value="2008" <?php if ($year1 == "2008") echo "selected='selected'";?>>2008</option>
	<option value="2007" <?php if ($year1 == "2007") echo "selected='selected'";?>>2007</option>
	<option value="2006" <?php if ($year1 == "2006") echo "selected='selected'";?>>2006</option>
 	<option value="2005" <?php if ($year1 == "2005") echo "selected='selected'";?>>2005</option>
	<option value="2004" <?php if ($year1 == "2004") echo "selected='selected'";?>>2004</option>
	<option value="2003" <?php if ($year1 == "2003") echo "selected='selected'";?>>2003</option>
	<option value="2002" <?php if ($year1 == "2002") echo "selected='selected'";?>>2002</option>
	<option value="2001" <?php if ($year1 == "2001") echo "selected='selected'";?>>2001</option>
	<option value="2000" <?php if ($year1 == "2000") echo "selected='selected'";?>>2000</option>
	<option value="1999" <?php if ($year1 == "1999") echo "selected='selected'";?>>1999</option>
	<option value="1998" <?php if ($year1 == "1998") echo "selected='selected'";?>>1998</option>
	<option value="1997" <?php if ($year1 == "1997") echo "selected='selected'";?>>1997</option>
	<option value="1996" <?php if ($year1 == "1996") echo "selected='selected'";?>>1996</option>
	<option value="1995" <?php if ($year1 == "1995") echo "selected='selected'";?>>1995</option>
	<option value="1994" <?php if ($year1 == "1994") echo "selected='selected'";?>>1994</option>
	<option value="1993" <?php if ($year1 == "1993") echo "selected='selected'";?>>1993</option>
	<option value="1992" <?php if ($year1 == "1992") echo "selected='selected'";?>>1992</option>
	<option value="1991" <?php if ($year1 == "1991") echo "selected='selected'";?>>1991</option>
	<option value="1990" <?php if ($year1 == "1990") echo "selected='selected'";?>>1990</option>
	<option value="1989" <?php if ($year1 == "1989") echo "selected='selected'";?>>1989</option>
	<option value="1988" <?php if ($year1 == "1988") echo "selected='selected'";?>>1988</option>
	<option value="1987" <?php if ($year1 == "1987") echo "selected='selected'";?>>1987</option>
	<option value="1986" <?php if ($year1 == "1986") echo "selected='selected'";?>>1986</option>
	<option value="1985" <?php if ($year1 == "1985") echo "selected='selected'";?>>1985</option>
	<option value="1984" <?php if ($year1 == "1984") echo "selected='selected'";?>>1984</option>
	<option value="1983" <?php if ($year1 == "1983") echo "selected='selected'";?>>1983</option>
	<option value="1982" <?php if ($year1 == "1982") echo "selected='selected'";?>>1982</option>
	<option value="1981" <?php if ($year1 == "1981") echo "selected='selected'";?>>1981</option>
	<option value="1980" <?php if ($year1 == "1980") echo "selected='selected'";?>>1980</option>
	<option value="1979" <?php if ($year1 == "1979") echo "selected='selected'";?>>1979</option>
	<option value="1978" <?php if ($year1 == "1978") echo "selected='selected'";?>>1978</option>
	<option value="1977" <?php if ($year1 == "1977") echo "selected='selected'";?>>1977</option>
	<option value="1976" <?php if ($year1 == "1976") echo "selected='selected'";?>>1976</option>
	<option value="1975" <?php if ($year1 == "1975") echo "selected='selected'";?>>1975</option>
	<option value="1974" <?php if ($year1 == "1974") echo "selected='selected'";?>>1974</option>
	<option value="1973" <?php if ($year1 == "1973") echo "selected='selected'";?>>1973</option>
	<option value="1972" <?php if ($year1 == "1972") echo "selected='selected'";?>>1972</option>
	<option value="1971" <?php if ($year1 == "1971") echo "selected='selected'";?>>1971</option>
	<option value="1970" <?php if ($year1 == "1970") echo "selected='selected'";?>>1970</option>
	<option value="1969" <?php if ($year1 == "1969") echo "selected='selected'";?>>1969</option>
	<option value="1968" <?php if ($year1 == "1968") echo "selected='selected'";?>>1968</option>
	<option value="1967" <?php if ($year1 == "1967") echo "selected='selected'";?>>1967</option>
	<option value="1966" <?php if ($year1 == "1966") echo "selected='selected'";?>>1966</option>
	<option value="1965" <?php if ($year1 == "1965") echo "selected='selected'";?>>1965</option>
	<option value="1964" <?php if ($year1 == "1964") echo "selected='selected'";?>>1964</option>
	<option value="1963" <?php if ($year1 == "1963") echo "selected='selected'";?>>1963</option>
	<option value="1962" <?php if ($year1 == "1962") echo "selected='selected'";?>>1962</option>
	<option value="1961" <?php if ($year1 == "1961") echo "selected='selected'";?>>1961</option>
	<option value="1960" <?php if ($year1 == "1960") echo "selected='selected'";?>>1960</option>
	<option value="1959" <?php if ($year1 == "1959") echo "selected='selected'";?>>1959</option>
	<option value="1958" <?php if ($year1 == "1958") echo "selected='selected'";?>>1958</option>
	<option value="1957" <?php if ($year1 == "1957") echo "selected='selected'";?>>1957</option>
	<option value="1956" <?php if ($year1 == "1956") echo "selected='selected'";?>>1956</option>
	<option value="1955" <?php if ($year1 == "1955") echo "selected='selected'";?>>1955</option>
	<option value="1954" <?php if ($year1 == "1954") echo "selected='selected'";?>>1954</option>
	<option value="1953" <?php if ($year1 == "1953") echo "selected='selected'";?>>1953</option>
	<option value="1952" <?php if ($year1 == "1952") echo "selected='selected'";?>>1952</option>
	<option value="1951" <?php if ($year1 == "1951") echo "selected='selected'";?>>1951</option>
	<option value="1950" <?php if ($year1 == "1950") echo "selected='selected'";?>>1950</option>
	<option value="1949" <?php if ($year1 == "1949") echo "selected='selected'";?>>1949</option>
	<option value="1948" <?php if ($year1 == "1948") echo "selected='selected'";?>>1948</option>
	<option value="1947" <?php if ($year1 == "1947") echo "selected='selected'";?>>1947</option>
	<option value="1946" <?php if ($year1 == "1946") echo "selected='selected'";?>>1946</option>
	<option value="1945" <?php if ($year1 == "1945") echo "selected='selected'";?>>1945</option>
	</select>
</label>
</div>
<br>
<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>
<div style=" width:46%; height:auto; ">
<label style=" display:inline-block; float:left; position:relative;  width:auto; font-family:Times New Roman; font-size:14px; 
height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;"> 
<input type="file" name="photo" style="border:1px hidden #000000; position:relative; text-align:left; height:26px;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:auto; border-radius:1px; background-color:#ffffff;">
</label>
<label style=" display:block; float:right; padding-left:0px; position:relative; width:auto; padding-top:5px; font-family:Times New Roman; font-size:13px; height:auto;">
<font style="color:#3B65A7;"> * Upload Profile Photo </font>
</label>
</div>
<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>
<br>
<label style=" display:block;  position:relative; width:auto; font-family:Times New Roman; font-size:14px; height:35px;">
<font style="color:#C41200;"> Photo size should Be Less than 100KB </font>
</label>
<label style=" display:block; position:relative; width:auto; font-family:Times New Roman; font-size:14px; height:35px;">
<font style="color:#0000EE;">Your Information is Personal and will not be Shared with Anyone by Us.</font>
</label>
<label style=" display:block; width:15%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<label style=" display:block; float:left; position:relative; width:auto; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="submit" name="submit" value="Save" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:auto;">
</label>
<label style=" display:block; float:right; position:relative; width:auto; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="reset" name="submit" value="Reset" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:auto;">
</label>
</label>
</form>
</center>
</div>
</div>
<hr width="100%" style="height:1;"></hr>
<?php
include("footer1.php");
?>