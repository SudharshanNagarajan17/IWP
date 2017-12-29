<?php
include 'https.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<style>
	.pos{
		position: relative;
		left: 25px;
	}
	td{
		text-align: center;
	}
	th{
		background-color: blue;
		color: white;
		text-align: center;
		font-weight: bold;
	}
	tr:nth-child(even){
		background-color: #e6e6e6;
	}
	table{
		cursor: default;
		white-space: nowrap;
		width: 100%;
	}
	h3{
		margin-left: 50px;
	}
	.navbar-nav .active a{
      background: #999999 !important;
 	}
 	.total{
 		text-align: right;
 		padding-right: 15px;
 	}
</style>

</html>

<?php
$i=$_GET['i'];

include 'link.php';

$conn=openCon();

$a = "SELECT * FROM infrahw GROUP BY block,cno ORDER BY block,cno";
$b = "SELECT * FROM infrasw GROUP BY block,cno ORDER BY block,cno";

$result1=mysqli_query($conn,$a);
$result2=mysqli_query($conn,$b);

$j=0;
while($j<=$i)
	{
		$row1=mysqli_fetch_array($result1); 
		$j++;
	}
$k=0;
while($k<=$i)
	{
		$row2=mysqli_fetch_array($result2); 
		$k++;
	}

$ln1=$row1['cno'];
$bn1=$row1['block'];
$a = "SELECT * FROM infrahw WHERE block='$bn1' and cno='$ln1'";

echo "<h2 class='pos'>".$row1['block']." ".$row1['cno']."</h2>";

echo "<h3>Hardware Details</h3>";

echo "<div class='container'>
		<div class='table-responsive'>
		<table border=2>
		<tr>
			<th>System Configuration</th>
			<th>Brand</th>
			<th>No. of Systems</th>
		</tr>";

$result1=mysqli_query($conn,$a);
while($row1=mysqli_fetch_array($result1))
{
	echo "<tr><td>".$row1['sysConfig']."</td><td>".$row1['brand']."</td><td>".$row1['num']."</td></tr>";
}

$a = "SELECT SUM(num) FROM infrahw WHERE block='$bn1' and cno='$ln1'";
$result1=mysqli_query($conn,$a);
$row1=mysqli_fetch_array($result1);
echo "<tr><td class='total' colspan=2><b>Total = </b></td><td><b>".$row1['SUM(num)']."</b></td></tr>";

echo "</table></div></div>";


$ln2=$row2['cno'];
$bn2=$row2['block'];
$b = "SELECT * FROM infrasw WHERE block='$bn2' and cno='$ln2'";

echo "<h3>Software Details</h3>";

echo "<div class='container'>
		<div class='table-responsive'>
		<table border=2>
		<tr>
			<th>Packages</th>
			<th>Brand</th>
			<th>License</th>
		</tr>";

$result2=mysqli_query($conn,$b);
while($row2=mysqli_fetch_array($result2))
{
	echo "<tr><td>".$row2['package']."</td><td>".$row2['brand']."</td><td>".$row2['license']."</td></tr>";
}
echo "</table></div></div>";

?>