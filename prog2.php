<?php
include 'https.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

</html>

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
 	.down{
		color: black;
	}
	.down:hover{
		color: black;
		text-decoration: none;
	}
	.down:visited {
    	color: black;
		text-decoration: none;
	}
	button:hover{
		background-color:#595959; 
	}
	button,input[type=submit]{
    	background-color: #bfbfbf;
    	border: none;
    	color: white;
    	padding: 4px 8px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
    	margin: 4px 2px;
    	cursor: pointer;
    	border-radius: 4px;
    	color: black;
	}
	a{
		cursor: pointer;
		color: red;
	}
	a:hover{
		color: red;
	}
</style>

<?php

$i=$_GET['i'];

include 'link.php';

$conn=openCon();

$a = "SELECT * FROM infrahw GROUP BY block,cno ORDER BY block,cno";

$result=mysqli_query($conn,$a);

$j=0;
while($j<=$i)
	{
		$row=mysqli_fetch_array($result); 
		$j++;
	}

$ln=$row['cno'];
$bn=$row['block'];
$a = "SELECT * FROM infrahw WHERE block='$bn' and cno='$ln'";


$file = fopen("hw-$bn-$ln.csv","w");

$k=0;
$list=array();
$list[$k++]= "System Configuration;Brand;No. of Systems";
$list[$k++]= ";;";


echo "<h2 class='pos'>".$row['block']." ".$row['cno']."</h2>";

echo "<h3>Hardware Details (Click to edit)</h3>";

echo "<div class='container'>
		<div class='table-responsive'>
		<table border=2>
		<tr>
			<th>System Configuration</th>
			<th>Brand</th>
			<th>No. of Systems</th>
		</tr>";

$result=mysqli_query($conn,$a);
while($row=mysqli_fetch_array($result))
{
	$i=$row['sno'];
	echo "<tr><td><a onclick='updhw(1,$i)'>".$row['sysConfig']."</a></td><td><a onclick='updhw(2,$i)'>".$row['brand']."</a></td><td><a onclick='updhw(3,$i)'>".$row['num']."</a></td></tr>";
	
	$list[$k++]=$row['sysConfig'].";".$row['brand'].";".$row['num'];
}

$a = "SELECT SUM(num) FROM infrahw WHERE block='$bn' and cno='$ln'";
$result=mysqli_query($conn,$a);
$row=mysqli_fetch_array($result);
echo "<tr><td class='total' colspan=2><b>Total = </b></td><td><b>".$row['SUM(num)']."</b></td></tr>";

echo "</table></div></div><br>";

$list[$k++]=";;";
$list[$k++]=";Total = ;".$row['SUM(num)'];

foreach ($list as $line)
{
  fputcsv($file,explode(';',$line));
}
fclose($file);

echo "<center><button><a class='down' href='hw-$bn-$ln.csv' download>Download</a></button></center><br>";

$i=$_GET['i'];
echo "<center><button onclick='addrow($i)'>Add</button></center><br><br>";

?>

<script type="text/javascript">
	function updhw(n,i)
	{
		if(n==1)
			x=prompt('Enter the updated system configuration');
		else if(n==2)
			x=prompt('Enter the updated brand');
		else if(n==3)
			x=prompt('Enter the updated no. of systems');

		window.open("progupd.php?n="+n+"&i="+i+"&x="+x+"&tab=infrahw","_self");
	}
	function addrow(i)
	{
		x=prompt('Enter the system configuration');
		y=prompt('Enter the brand');
		z=prompt('Enter the no. of systems');

		window.open("progadd.php?x="+x+"&y="+y+"&z="+z+"&i="+i+"&tab=infrahw","_self");
	}
</script>