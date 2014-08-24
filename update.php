<?php
include("db.php");
if(isset($_GET["data"]))
    {
        $data = $_GET["data"];
       
    }
$insert1="update users set verification = 'yes' where user_name='$data'";
$result1=mysql_query($insert1);
if($result1)
{
echo "<script>alert(' Account Verified Successfully Log In to Continue ');</script>";
echo "<script>location.href='login.php';</script>";
}
else
die('Could not connect: ' . mysql_error());
?>
