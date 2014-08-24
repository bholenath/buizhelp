<?php
        include("db.php");
		if(isset($_GET["city_id"]))
    {
        $city_id = $_GET["city_id"];
        
    }
		$query3="select * from area where city_id='$city_id'";
		$query=mysql_query($query3) or die(mysql_error());
		
		echo "<label style=' display:block; float:left; width:30%; font-family:Times New Roman; font-size:14px; height:auto; 	        font-weight:bolder; background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px;'>";
		echo "<select name='area' id='area'  style='width:100%;'>";
		echo "<option value='0'>Select Area</option>";
		while($row=mysql_fetch_array($query))
		{
			echo "<option value='$row[area_id]'>$row[area_name]</option>";
		}
		
		echo "</select>";
		echo "</label>";
		
?>