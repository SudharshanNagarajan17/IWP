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

$result1=mysqli_query($conn,$a);

$j=0;
while($j<=$i)
	{
		$row1=mysqli_fetch_array($result1); 
		$j++;
	}

$ln1=$row1['cno'];
$bn1=$row1['block'];
$a = "SELECT * FROM infrahw WHERE block='$bn1' and cno='$ln1'";


$file1 = fopen("hw-$bn1-$ln1.csv","w");

$k=0;
$list1=array();
$list1[$k++]= "System Configuration;Brand;No. of Systems";
$list1[$k++]= ";;";


echo "<h2 class='pos'>".$row1['block']." ".$row1['cno']."</h2>";

echo "<h3>Hardware Details (Click to edit)</h3>";

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
	$i=$row1['sno'];
	echo "<tr><td><a onclick='updhw(1,$i)'>".$row1['sysConfig']."</a></td><td><a onclick='updhw(2,$i)'>".$row1['brand']."</a></td><td><a onclick='updhw(3,$i)'>".$row1['num']."</a></td><td><a onclick='delhw($i)'>Delete</a></td></tr>";
	
	$list1[$k++]=$row1['sysConfig'].";".$row1['brand'].";".$row1['num'];
}

$a = "SELECT SUM(num) FROM infrahw WHERE block='$bn1' and cno='$ln1'";
$result1=mysqli_query($conn,$a);
$row1=mysqli_fetch_array($result1);
echo "<tr><td class='total' colspan=2><b>Total = </b></td><td><b>".$row1['SUM(num)']."</b></td></tr>";

echo "</table></div></div><br>";

$list1[$k++]=";;";
$list1[$k++]=";Total = ;".$row1['SUM(num)'];

foreach ($list1 as $line)
{
  fputcsv($file1,explode(';',$line));
}
fclose($file1);

echo "<center><button><a class='down' href='hw-$bn1-$ln1.csv' download>Download</a></button></center><br>";

$i=$_GET['i'];
echo "<center><button onclick='addrow($i)'>Add</button></center><br>";

$b = "SELECT * FROM infrasw GROUP BY block,cno ORDER BY block,cno";

$result2=mysqli_query($conn,$b);

$x=0;
while($x<=$i)
	{
		$row2=mysqli_fetch_array($result2); 
		$x++;
	}

$ln2=$row2['cno'];
$bn2=$row2['block'];
$b = "SELECT * FROM infrasw WHERE block='$bn2' and cno='$ln2'";


$file2 = fopen("sw-$bn2-$ln2.csv","w");

$y=0;
$list2=array();
$list2[$y++]= "Package;Brand;License";
$list2[$y++]= ";;";


echo "<h3>Software Details (Click to edit)</h3>";

echo "<div class='container'>
		<div class='table-responsive'>
		<table border=2>
		<tr>
			<th>Package</th>
			<th>Brand</th>
			<th>License</th>
		</tr>";

$result2=mysqli_query($conn,$b);
while($row2=mysqli_fetch_array($result2))
{
	$i=$row2['sno'];
	echo "<tr><td><a onclick='updsw(1,$i)'>".$row2['package']."</a></td><td><a onclick='updsw(2,$i)'>".$row2['brand']."</a></td><td><a onclick='updsw(3,$i)'>".$row2['license']."</a></td><td><a onclick='delsw($i)'>Delete</a></td></tr>";
	
	$list2[$y++]=$row2['package'].";".$row2['brand'].";".$row2['license'];
}

echo "</table></div></div><br>";

foreach ($list2 as $line)
{
  fputcsv($file2,explode(';',$line));
}
fclose($file2);

echo "<center><button><a class='down' href='sw-$bn2-$ln2.csv' download>Download</a></button></center><br>";

$i=$_GET['i'];
echo "<center><button onclick='addrowSW($i)'>Add</button></center><br><br>";

?>

<script type="text/javascript">
	function updhw(n,i)
	{
		if(n==1)
			x=prompt('Enter the updated system configuration');
		else if(n==2)
			x=prompt('Enter the updated brand');
		else if(n==3)
		{
			x=prompt('Enter the updated no. of systems');
			if (isNaN(x)) 
  			{
    			alert("Invalid Input");
    			return false;
  			}
  		}
  		if(x.indexOf(";")>-1)
  			alert("Character ; is invalid");
		else if(x)
			window.open("progupd.php?n="+n+"&i="+i+"&x="+x+"&tab=infrahw","_self");
	}
	function addrow(i)
	{
		x=prompt('Enter the system configuration');
		y=prompt('Enter the brand');
		z=prompt('Enter the no. of systems');
		if (isNaN(z)) 
  		{
    		alert("Invalid Input");
    		return false;
  		}
  		if(x.indexOf(";")>-1 || y.indexOf(";")>-1 || z.indexOf(";")>-1)
  			alert("Character ; is invalid");
		else if(x && y && z)
			window.open("progadd.php?x="+x+"&y="+y+"&z="+z+"&i="+i+"&tab=infrahw","_self");
	}
	function updsw(n,i)
	{
		if(n==1)
			x=prompt('Enter the updated package type');
		else if(n==2)
			x=prompt('Enter the updated brand');
		else if(n==3)
			x=prompt('Enter the updated license');
		if(x.indexOf(";")>-1)
  			alert("Character ; is invalid");
		else if(x)
			window.open("progupdSW.php?n="+n+"&i="+i+"&x="+x+"&tab=infrasw","_self");
	}
	function addrowSW(i)
	{
		x=prompt('Enter the package type');
		y=prompt('Enter the brand');
		z=prompt('Enter the license');
		if(x.indexOf(";")>-1 || y.indexOf(";")>-1 || z.indexOf(";")>-1)
  			alert("Character ; is invalid");
		else if(x && y)
			window.open("progaddSW.php?x="+x+"&y="+y+"&z="+z+"&i="+i+"&tab=infrasw","_self");
	}
	function delhw(i)
	{
		x=confirm('Do you want to delete it?');
		if(x==1)
		{
			window.open("delhw.php?x="+i,"_self");
		}
	}
	function delsw(i)
	{
		x=confirm('Do you want to delete it?');
		if(x==1)
		{
			window.open("delsw.php?x="+i,"_self");
		}
	}
</script>

<script type="text/javascript">
    // all content including images has been loaded
    window.onload = function() {
        // post our message to the parent
        window.parent.postMessage(
            // get height of the content
            document.body.scrollHeight
            // set target domain
            ,"*"
        )
    };
</script>