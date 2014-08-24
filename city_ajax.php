<?php
        include("db.php");
		if(isset($_GET["state_id"]))
    {
        $state_id = $_GET["state_id"];
        
    }
		$query2="select * from city where state_id='$state_id'";
		$query=mysql_query($query2) or die(mysql_error());
		
		echo "<label style=' display:block; float:right;  width:32%; font-family:Times New Roman; font-size:14px; height:auto; 	        font-weight:bolder; background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px;'>";
		echo "<select name='city' id='city' onchange='load_area(this.value)' style='width:100%;'>";
		echo "<option value='0'>Select City</option>";
		while($row=mysql_fetch_array($query))
		{
			echo "<option value='$row[city_id]'>$row[city_name]</option>";
		}
		
		echo "</select>";
		echo "</label>";
		
?>
		
		