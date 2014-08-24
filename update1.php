<?php
include("db.php");
if(isset($_GET["data"]) && isset($_GET["data2"]))
    {
        $data = $_GET["data"];
        $data2 = $_GET["data2"];
    }
	$data1=urldecode(base64_decode($data2));
$insert2="update users set verification = 'yes' , password = '$data1' where user_name='$data'";
$result2=mysql_query($insert2);
if($result2)
{
echo "<script>alert(' Password Successfully Changed ');</script>";
echo "<script>location.href='login.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
?>
