<?php
include("header1.php");
include("db.php");
?>

<hr width="98%" style="height:1;"></hr>

<div style=" display:block; position:relative; padding-top:1%; padding-left:1%; padding-right:1%; padding-bottom:1%; 
width:98%; height:auto;">

<center>

<div style="width:100%; position:relative; display:block; overflow:hidden; height:auto; float:left; border-bottom: 1px hidden #000000;
 background-color:#ffffff;">

<font style="color:#C41200; font-size:21px; font-weight:bolder; ">Your Profile</font><br>
<font style="color:#000000; font-size:14px; font-weight:bold; ">Please fill your Relevant Information.</font>

<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:9px; font-weight:bolder; border:1px hidden #007eff;">
</label>

<form name="details4" id="details4" method="POST" action="admin_update.php" target="_self" onSubmit="return validate5()" 
enctype="multipart/form-data">

<div style=" display:block; width:46%; position:relative; ">

<label style=" display:block; width:auto; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">
<font style="color:#3B65A7; text-align:justify; ">Please provide your Complete Business details, it would help our customers to easily 
find you.<br> Do not write Hotel, Restuarant etc. attached to your Business name. </font>
</label>

</div>

<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>


<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:auto; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="username1" placeholder="UserName/E-mail Id" value="Admin" readonly="readonly" maxlength="64" 
style=" border:1px hidden #000000; color:#999999; text-align:center; padding-top:2px; font-size:14px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff;">
</label>

</div>

<label style=" display:block;  width:0; font-family:Arial; font-size:14px; height:10px; font-weight:bolder; border:1px hidden #007eff;">
</label>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:inline-block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="category" style="height:auto; position:relative; width:100%; ">
  <option value="0"> Business Category </option>
  <?php
$query_category=mysql_query("select * from food_category") or die(mysql_error());
while($row_category=mysql_fetch_array($query_category))
{
?>
<option value="<?php echo $row_category['category_id'];?>"><?php echo $row_category['category_name'];?> </option>
<?php
}
?>	
</select>
</label>

<label style=" display:inline-block; margin-left:1%; float:right; position:relative; width:42%; background-color:#ffffff;">
<input type="text" name="res" value=" * Business Type " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="name2" required placeholder=" Your Company Registered Name " rows="1" maxlength="64" onfocus="clearinputText7();" 
style="border:1px hidden #000000; position:relative; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; height:auto; background-color:#ffffff;">
</textarea>
</label>

</div>

<br>

<div style=" width:46%;  display:block; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">

<span style=" display:inline-block; float:left; width:60%; height:auto; padding-bottom:0.3%; padding-top:0.3%; font-weight:bolder; background-color:#ffffff; position:relative; border:1px hidden #bbbbbb; border-radius:2px;">

<label style="width:49%; position:relative; margin-right:2%;">
<input type="radio" name="gender" id="male" value="male"   
style="border:1px hidden #000000; float:left; text-align:justify; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:10%; border-radius:1px; position:relative; background-color:#ffffff; height:auto;">
<input type="text" name="res1" value=" Male " readonly="readonly" style="border:1px hidden #000000; font-size:15px; font-weight:bold; color:#000000; font-family:Times New Roman; float:left; text-align:justify; width:15%; border-radius:1px; position:relative; ">
</label>

<label style="width:49%; position:relative;">
<input type="radio" name="gender" id="female" value="female" 
style="border:1px hidden #000000; float:left; text-align:justify; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:10%; border-radius:1px; position:relative; background-color:#ffffff; height:auto;">
<input type="text" name="res1" value=" Female " readonly="readonly" style="border:1px hidden #000000; font-size:15px; font-weight:bold;  color:#000000; font-family:Times New Roman; float:left; text-align:justify; width:19%; border-radius:1px; position:relative; ">
</label>

</span>

<span style=" display:block; margin-left:1%; float:right; position:relative; width:37%; ">
<input type="text" name="res" value=" * Your Gender " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; position:relative; ">
</span>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="address" required placeholder=" Your Official Address " rows="2" maxlength="100" onfocus="clearinputText8();" 
style="border:1px hidden #000000; position:relative; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; height:auto; background-color:#ffffff;">
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left;  width:30%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px;">
<select name="country" id="country" onchange="load_state(this.value)" style="width:100%;">
<option value="0">Select Country</option>
<?php
$query_country=mysql_query("select * from country") or die(mysql_error());
while($row_country=mysql_fetch_array($query_country))
{
?>
<option value="<?php echo $row_country['country_id'];?>"><?php echo $row_country['country_name'];?></option>
<?php
}
?>										
</select>
</label>

<label style=" display:block; float:left ; position:relative;  width:4%; font-family:Arial; font-size:14px; height:23px; 
font-weight:bolder; border:1px hidden #007eff;">
</label>

<label id="state">
</label>

<label id="city">
</label>

<br><br>

<label id="area">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact1" placeholder=" Your Contact No. "  maxlength="20" onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; 
font-family:Times New Roman; width:100%; border-radius:1px; background-color:#ffffff;">
</label>

<label style=" display:block; float:right; width:46%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; 
background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<input type="text" name="contact2" placeholder=" Your Mobile No. " maxlength="20" onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; background-color:#ffffff;">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="website" placeholder=" Your Website Address " rows="1" maxlength="30" onfocus="clearinputText8();" 
style="border:1px hidden #000000; position:relative; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; height:auto; background-color:#ffffff;">
</textarea>
</label>

</div>

<br>

<div style=" width:46%; position:relative; display:block; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder;">

<span style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#FDF7E1; 
border:1px solid #FFD735; border-radius:2px;">
<input type="checkbox"  name="payment[0]" id="payment" value="1"
style="border:1px hidden #000000;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%;"> Cash </font>

<input type="checkbox"  name="payment[1]" id="payment" value="1" 
style="border:1px hidden #000000;   font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%"> Credit/Debit Card </font>

<input type="checkbox"  name="payment[2]" id="payment" value="1"   
style="border:1px hidden #000000;   font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%"> Voucher </font>

<input type="checkbox"  name="payment[3]" id="payment" value="1"    
style="border:1px hidden #000000;   font-size:14px; padding-top:2px; font-family:Times New Roman; width:4%;">
<font style="color:#000000; width:8%"> Others </font>
</span>

<br>

<label style=" display:block; float:none; position:relative; width:100%; ">
<input type="text" name="res" value="* Payment Types Accepted (Select All that Applied)" readonly="readonly" 
style="border:1px hidden #000000; text-align:center;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; 
font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="month" onFocus="clearinputText12();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Opening Month </option>
  <option value="Jan" >Jan</option>
  <option value="Feb" >Feb</option>
  <option value="Mar" >Mar</option>
  <option value="Apr" >Apr</option>
  <option value="May" >May</option>
  <option value="Jun" >Jun</option>
  <option value="Jul" >Jul</option>
  <option value="Aug" >Aug</option>
  <option value="Sep" >Sep</option>
  <option value="Oct" >Oct</option>
  <option value="Nov" >Nov</option>
  <option value="Dec" >Dec</option></select>
  </label>
  
  <label style=" display:block; float:left ; position:relative;  width:1.5%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>

<label style=" display:inline-block; float:left; position:relative;  width:31%; font-family:Times New Roman; font-size:14px; 
height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">   
<select name="year"  onFocus="clearinputText13();" style="height:auto; position:relative; width:100%; ">
    <option value=""> Opening Year </option>
	<option value="2013" >2013</option>
	<option value="2012" >2012</option>
	<option value="2011" >2011</option>
	<option value="2010" >2010</option>
	<option value="2009" >2009</option>
	<option value="2008" >2008</option>
	<option value="2007" >2007</option>
	<option value="2006" >2006</option>
 	<option value="2005" >2005</option>
	<option value="2004" >2004</option>
	<option value="2003" >2003</option>
	<option value="2002" >2002</option>
	<option value="2001" >2001</option>
	<option value="2000" >2000</option>
	<option value="1999" >1999</option>
	<option value="1998" >1998</option>
	<option value="1997" >1997</option>
	<option value="1996" >1996</option>
	<option value="1995" >1995</option>
	<option value="1994" >1994</option>
	<option value="1993" >1993</option>
	<option value="1992" >1992</option>
	<option value="1991" >1991</option>
	<option value="1990" >1990</option>
	<option value="1989" >1989</option>
	<option value="1988" >1988</option>
	<option value="1987" >1987</option>
	<option value="1986" >1986</option>
	<option value="1985" >1985</option>
	<option value="1984" >1984</option>
	<option value="1983" >1983</option>
	<option value="1982" >1982</option>
	<option value="1981" >1981</option>
	<option value="1980" >1980</option>
	<option value="1979" >1979</option>
	<option value="1978" >1978</option>
	<option value="1977" >1977</option>
	<option value="1976" >1976</option>
	<option value="1975" >1975</option>
	<option value="1974" >1974</option>
	<option value="1973" >1973</option>
	<option value="1972" >1972</option>
	<option value="1971" >1971</option>
	<option value="1970" >1970</option>
	<option value="1969" >1969</option>
	<option value="1968" >1968</option>
	<option value="1967" >1967</option>
	<option value="1966" >1966</option>
	<option value="1965" >1965</option>
	<option value="1964" >1964</option>
	<option value="1963" >1963</option>
	<option value="1962" >1962</option>
	<option value="1961" >1961</option>
	<option value="1960" >1960</option>
	<option value="1959" >1959</option>
	<option value="1958" >1958</option>
	<option value="1957" >1957</option>
	<option value="1956" >1956</option>
	<option value="1955" >1955</option>
	<option value="1954" >1954</option>
	<option value="1953" >1953</option>
	<option value="1952" >1952</option>
	<option value="1951" >1951</option>
	<option value="1950" >1950</option>
	<option value="1949" >1949</option>
	<option value="1948" >1948</option>
	<option value="1947" >1947</option>
	<option value="1946" >1946</option>
	<option value="1945" >1945</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:30%; ">
<input type="text" name="res" value=" * Business Started " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="opening" id="opening" onload="value_chk();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Opening Hours </option>
  <option value="00" >00:00</option>
  <option value="01" >01:00</option>
  <option value="02" >02:00</option>
  <option value="03" >03:00</option>
  <option value="04" >04:00</option>
  <option value="05" >05:00</option>
  <option value="06" >06:00</option>
  <option value="07" >07:00</option>
  <option value="08" >08:00</option>
  <option value="09" >09:00</option>
  <option value="10" >10:00</option>
  <option value="11" >11:00</option>
  <option value="12" >12:00</option>
  <option value="13" >13:00</option>
  <option value="14" >14:00</option>
  <option value="15" >15:00</option>
  <option value="16" >16:00</option>
  <option value="17" >17:00</option>
  <option value="18" >18:00</option>
  <option value="19" >19:00</option>
  <option value="20" >20:00</option>
  <option value="21" >21:00</option>
  <option value="22" >22:00</option>
  <option value="23" >23:00</option>
</select>
</label>
 
  <label style=" display:block; float:left ; position:relative;  width:1.5%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>

<label style=" display:inline-block; float:left; position:relative;  width:31%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">   
<select name="closing" id="closing" onload="value_chk1();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Closing Hours </option>
  <option value="00" >00:00</option>
  <option value="01" >01:00</option>
  <option value="02" >02:00</option>
  <option value="03" >03:00</option>
  <option value="04" >04:00</option>
  <option value="05" >05:00</option>
  <option value="06" >06:00</option>
  <option value="07" >07:00</option>
  <option value="08" >08:00</option>
  <option value="09" >09:00</option>
  <option value="10" >10:00</option>
  <option value="11" >11:00</option>
  <option value="12" >12:00</option>
  <option value="13" >13:00</option>
  <option value="14" >14:00</option>
  <option value="15" >15:00</option>
  <option value="16" >16:00</option>
  <option value="17">17:00</option>
  <option value="18" >18:00</option>
  <option value="19" >19:00</option>
  <option value="20">20:00</option>
  <option value="21" >21:00</option>
  <option value="22" >22:00</option>
  <option value="23" >23:00</option>
</select>
</label>  

<label style=" display:block; float:right; position:relative; width:30%; ">
<input type="text" name="res" value=" * Working Hours " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:32%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="text" name="beds" placeholder=" No. of Beds " maxlength="4" onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; 
border-radius:1px; background-color:#ffffff;">

</label>
  
  <label style=" display:block; float:left ; position:relative;  width:1.5%; font-family:Arial; font-size:14px; height:23px; 
  font-weight:bolder; border:1px hidden #007eff;">
  </label>
  
  
<label style=" display:block; float:left; position:relative; width:31%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">

<input type="text" name="rooms" placeholder=" No. of Rooms " maxlength="4" onfocus="clearinputText8();" 
style="border:1px hidden #000000; text-align:center;  font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; 
border-radius:1px; background-color:#ffffff;">
  
</label>
  
<label style=" display:block; float:right; position:relative; width:32%; ">
<input type="text" name="res" value=" * No. of Beds and Rooms " readonly="readonly" 
style="border:1px hidden #000000; text-align:right; font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; 
font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>


<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="reservation" id="reservation" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Reservation </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Reservation Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="parking" id="parking" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Parking </option>
  <option value="Yes"  >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Parking Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="homedelivery" id="homedelivery" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Home Delivery </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * HomeDelivery Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="group" id="group" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Group Friendly </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Good for Groups " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="couples" id="couples" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Couples Friendly </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Good for Couples " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="kids" id="kids" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Kids Friendly </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Good for Kids " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br> 

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="takeout" id="takeout" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">

  <option value=""> Take Out </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Take Out Facility  " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="waiterservice" id="waiterservice" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Waiter Service </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Waiter Service " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="outdoorseating" id="outdoorseating" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Outdoor Seating </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Outdoor seating Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="wifi" id="wifi" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Wi-Fi </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Wi-Fi Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="alcohol" id="alcohol" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Alcohol </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * If Alcohol Allowed " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="tv" id="tv" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> TV </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * TV Available " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="catering" id="catering" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Catering </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Catering Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="wheelchair" id="wheelchair" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value=""> Wheel Chair </option>
  <option value="Yes" >Yes</option>
  <option value="No" >No</option>
</select>
</label> 

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * WheelChair Facility " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:54%; font-family:Times New Roman; font-size:14px; height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<select name="noise" id="noise" onload="value_chk2();" style="height:auto; position:relative; width:100%; ">
  <option value="0">Noise Level</option>
<?php
$query_noise=mysql_query("select * from noise") or die(mysql_error());
while($row_noise=mysql_fetch_array($query_noise))
{
?>
<option value="<?php echo $row_noise['noise_id'];?>"><?php echo $row_noise['noise_level'];?></option>
<?php
}
?>										
</select>
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Noise Level Around " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">

</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="attire" placeholder=" Your Place Attire " rows="2" maxlength="100" onfocus="clearinputText8();" style="border:1px hidden #000000; position:relative; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; height:auto; background-color:#ffffff;">
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="speciality" placeholder=" Your Place Speciality " rows="2" maxlength="100" onfocus="clearinputText8();" 
style="border:1px hidden #000000; position:relative; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; height:auto; background-color:#ffffff;">
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; width:100%; position:relative; font-family:Times New Roman; font-size:14px; height:auto; 
font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;">
<textarea name="ambience" placeholder=" Your Place Ambience " rows="2" maxlength="100" onfocus="clearinputText8();" style="border:1px hidden #000000; position:relative; font-size:14px; padding-top:2px; font-family:Times New Roman; width:100%; border-radius:1px; height:auto; background-color:#ffffff;">
</textarea>
</label>

</div>

<br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative;  width:54%; font-family:Times New Roman; font-size:14px; 
height:auto; font-weight:bolder; background-color:#ffffff; border:1px solid #BBBBBB; border-radius:2px;"> 
<input type="file" name="photo" style="border:1px hidden #000000; position:relative; text-align:left; height:auto;  font-size:14px;  font-family:Times New Roman; width:100%; border-radius:1px; background-color:#ffffff;">
</label>

<label style=" display:block; float:right; position:relative; width:43%; ">
<input type="text" name="res" value=" * Upload Profile Photo " readonly="readonly" style="border:1px hidden #000000; 
text-align:right;  font-size:13px; font-weight:500; padding-top:2px; color:#3B65A7; font-family:Times New Roman; width:100%; border-radius:1px; ">
</label>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<span style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#ffffff;">
<input type="text" name="jpg" value="Photo Size must be less than 20 KB and be in Jpeg/Jpg/Png Format" 
style="border:1px hidden #000000; color:#C41200; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff;">
</span>

</div>

<br><br>

<div style=" display:block; width:46%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; width:100%; height:auto; font-weight:bolder; background-color:#ffffff;">
<input type="text" name="jpg" value="Your Information is Personal and will not be Shared with Anyone by Us" 
style="border:1px hidden #000000; color:#0000EE; text-align:center; font-size:14px; padding-top:2px; font-family:Times New Roman; 
width:100%; border-radius:1px; background-color:#ffffff;">
</label>

</div>

<br><br>

<div style=" display:block; width:15%; position:relative; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">

<label style=" display:block; float:left; position:relative; width:40%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="submit" name="submit" value="Save" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;">
</label>

<label style=" display:block; float:right; position:relative; width:40%; font-family:Arial; font-size:14px; height:auto; font-weight:bolder;">
<input type="reset" name="submit" value="Reset" style="background-color:#DD0D04; cursor:pointer; color:#ffffff; font-family:Lucia Grande; font-size:14px; font-weight:bolder; border-radius:2px; border:1px hidden #000000; height:30px; width:100%;">
</label>

</div>

</form>

</div>

</center>

</div>

<center>

<div style=" display:block;  position:relative; width:98%; height:auto;">

<label style="display:block; position:relative; float:left; width:100%;"> 

<hr width="100%" style="height:1;"></hr>

</body>

<?php
include("footer.php");
?>
 
</label> 

</div>

</center>