<?php

$a=$_POST['t1'];
$b=$_POST['s1'];
$c=$_POST['d1'];
$d=$_POST['tt1'];
$e=$_POST['tt2'];
$f=$_POST['t2'];

if($e<=$d)
		echo "<script>alert('Incorrect Timings');	window.open(window.history.back(),'_self');</script>";

include "link.php";	

$conn=openCon();
$t="SELECT * FROM workshop";
$a=mysqli_query($conn,$t);
while($row=mysqli_fetch_array($a))
{
	if(strcmp($row['no'],$b)==0 && strcmp($row['dat'],$c)==0)
		echo "<script>alert('Workshop taking place');	window.open(window.history.back(),'_self');</script>";
}
$conn=openCon();
$p="INSERT INTO workshop(name,no,dat,tfr,tto,det) VALUES('w','t','r','d','a','c')";
$a=mysqli_query($conn,$p);
if($a)
	echo "<script>alert('Workshop details added');	window.open('facwk.php','_self');</script>";
?>