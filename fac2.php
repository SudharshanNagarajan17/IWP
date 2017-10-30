<?php

$a=$_POST['t1'];
$b=$_POST['s1'];
$c=$_POST['d1'];
$d=$_POST['tt1'];
$e=$_POST['tt2'];
$f=$_POST['t2'];

if($e<=$d)
		echo "<script>alert('Incorrect Timings');	window.open(window.history.back(),'_self');</script>";

else{

include "link.php";	

$conn=openCon();
$k=0;
$t="SELECT * FROM workshop ORDER BY no,dat,tfr";
$a=mysqli_query($conn,$t);
while($row=mysqli_fetch_array($a))
{
	if(strcmp($row['no'],$b)==0 && strcmp($row['dat'],$c)==0)
	{
		if($row['tfr']<$d && $d<$row['tto'])
			$k=1;
		else if($row['tfr']<$e && $e<$row['tto'])
			$k=1;
		else if($d<$row['tfr'] && $e>$row['tfr'])
			$k=1;
	}
}
if($k==1)
	echo "<script>alert('Workshop taking place');	window.open(window.history.back(),'_self');</script>";
else
{
	$a=(string)$_POST['t1'];
	$b=(string)$_POST['s1'];
	$c=(string)$_POST['d1'];
	$d=(string)$_POST['tt1'];
	$e=(string)$_POST['tt2'];
	$f=(string)$_POST['t2'];
	$p="INSERT INTO workshop(name,no,dat,tfr,tto,det) VALUES('$a','$b','$c','$d','$e','$f')";
	$a=mysqli_query($conn,$p);
	if($a)
		echo "<script>alert('Workshop details added');	window.open('facwk.php','_self');</script>";
}
}
?>