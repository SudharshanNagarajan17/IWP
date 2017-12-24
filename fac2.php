<?php

include 'https.php';
$a=$_POST['t1'];
$b=$_POST['s1'];
$c=$_POST['d1'];
$d=$_POST['tt1'];
$e=$_POST['tt2'];
$f=$_POST['t2'];
$choice=$_POST['choice'];
if($choice==2)
	$c2=$_POST['d2'];



$qwe=1;

if(strlen($e)!=5 || strlen($d)!=5)
{
	echo "<script>alert('Invalid Timings. Enter the time in 24 hr format (HH:MM)');</script>";
	$qwe=0;
}


else if($e<=$d)
{
	echo "<script>alert('Incorrect Timings');</script>";
	$qwe=0;
}
for($i=0;$i<strlen($a);$i++)
{
	if($a[$i]==";")
	{
		echo "<script>alert('Character ; is invalid');</script>";
		$qwe=0;
	}
}
for($i=0;$i<strlen($f);$i++)
{
	if($f[$i]==";")
	{
		echo "<script>alert('Character ; is invalid');</script>";
		$qwe=0;
	}
}
if($choice==2)
{
	if($c2<=$c)
	{	
		echo "<script>alert('Incorrect Dates');</script>";
		$qwe=0;
	}
}

if($qwe==0)
	echo "<script>window.open(window.history.back(),'_self');</script>";

else{

include "link.php";	

$conn=openCon();
$k=0;
$t="SELECT * FROM workshop ORDER BY no,dat,tfr";
$a=mysqli_query($conn,$t);


if($choice==1)
{
	while($row=mysqli_fetch_array($a))
	{
		if(strcmp($row['no'],$b)==0 && strcmp($row['dat'],$c)==0)
		{
			if($row['tfr']==$d)
				$k=1;
			else if($row['tfr']<$d && $d<$row['tto'])
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

else if($choice==2)
{
	while($row=mysqli_fetch_array($a))
	{
		if(strcmp($row['no'],$b)==0 && $row['dat']>=$c && $row['dat']<=$c2)
		{
			if($row['tfr']==$d)
				$k=1;
			else if($row['tfr']<$d && $d<$row['tto'])
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
		$d=(string)$_POST['tt1'];
		$e=(string)$_POST['tt2'];
		$f=(string)$_POST['t2'];
		$i=$c;
		while (strtotime($i) <= strtotime($c2))
		{
			$i2=(string)$i;
			$p="INSERT INTO workshop(name,no,dat,tfr,tto,det) VALUES('$a','$b','$i2','$d','$e','$f')";
			mysqli_query($conn,$p);
			$i = date ("Y-m-d", strtotime("+1 day", strtotime($i)));
		}
		echo "<script>alert('Workshop details added');	window.open('facwk.php','_self');</script>";
	}
}


}
?>

<html>
<head>
  <title>VITCC-LMS</title>
  <link rel="shortcut icon" href="logo.png" />
</head>
</html>