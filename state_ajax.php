 <?php
        include("db.php");
		if(isset($_GET["country_id"]))
    {
        $country_id = $_GET["country_id"];
        
    }
		$query1="select * from state where country_id='$country_id'";
		$query=mysql_query($query1) or die(mysql_error());
		
		echo "<label style=' display:block; float:left; width:31%; font-family:Times New Roman; font-size:14px; height:auto; 	        font-weight:bolder; background-color:#ffffff; border:1px hidden #BBBBBB; border-radius:2px;'>";
		echo "<select name='state' id='state' onchange='load_city(this.value)' style='width:100%;'>";
		echo "<option value='0'>Select State</option>";
		while($row=mysql_fetch_array($query))
		{
		    echo "<option value='$row[state_id]'>$row[state_name]</option>";
		}
		
		echo "</select>";
		echo "</label>";
	
?>
		
