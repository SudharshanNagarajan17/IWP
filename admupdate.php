<?php

include 'https.php';

if(!($_FILES['f1']['type']=="text/csv" || $_FILES['f1']['type']=="application/vnd.ms-excel"))
{
	echo "<script>alert('Only CSV formats supported!!!');window.open('admwk.php','_self');</script>";
}
else
{
	$t=$_FILES["f1"]["name"];
	move_uploaded_file($_FILES["f1"]["tmp_name"],$t);


	include 'link.php';
	$conn=openCon();

	mysqli_query($conn,"DELETE FROM temp");

	mysqli_query($conn, "LOAD DATA LOCAL INFILE '".$t."' INTO TABLE temp FIELDS TERMINATED by ',' LINES TERMINATED BY '\r\n'");

	unlink($t);


	$i=1;
	while($i<=59)
	{
		mysqli_query($conn,"UPDATE lab set l".$i."=NULL");
		if($i==15)
			$i=19;
		else
			$i++;
	}
	
	$a=mysqli_query($conn,"SELECT * FROM temp");
	while($m=mysqli_fetch_array($a))
	{
		$parts=explode('+',$m['slot']);
		$tbno=substr($m['venue'],0,3);
		$tlno=substr($m['venue'],4);
		$tc=$m['code'];
		foreach($parts as $b)
		{
			$b="l".substr($b,1);
			$b=(string)$b;
			$tc=(string)$tc;
			$tbno=(string)$tbno;
			$tlno=(string)$tlno;
			$y=mysqli_query($conn,"UPDATE lab SET $b='$tc' WHERE block='$tbno' AND cno='$tlno'");
		}
	}

	echo "<script>alert('Database updated successfully');window.open('admwk.php','_self');</script>";
}
?>

<html>
<head>
  <title>VITCC-LMS</title>
  <link rel="shortcut icon" href="logo.png" />
</head>
</html>