<?php
include 'https.php';
$i=(int)$_GET['i'];
$n=(int)$_GET['n'];
$t=(string)$_GET['tab'];


include "link.php";
$conn=openCon();

if($n==1)
{
	$ch="sysConfig";
	$x=(string)$_GET['x'];
}
else if($n==2)
{
	$ch="brand";
	$x=(string)$_GET['x'];
}
else if($n==3)
{
	$ch="num";
	$x=(int)$_GET['x'];
}

$a = "UPDATE $t SET $ch='$x' WHERE sno=$i;";

if(mysqli_query($conn,$a))
	echo "<script>alert('Records updated successfully.');parent.closeIFrame();</script>";

?>