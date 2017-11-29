<?php
include 'https.php';
?>

<!doctype html>
<html>
<head>
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	td{
		text-align: center;
	}
	th{
		background-color: blue;
		color: white;
		text-align: center;
		width: 5%;
	}
	tr:nth-child(even){
		background-color: #e6e6e6;
	}
	table{
		cursor: default;
		white-space: nowrap;
		min-width: 550px;
	}
	a{
		cursor: pointer;
	}
	a:link {
    	text-decoration: none;
    	color: black;
	}
	a:visited {
    	color: green;
	}
	.container{
		position: relative;
		top: 20px;
	}
</style>



</html>


<?php
include 'link.php';
$conn=openCon();

$a = "SELECT * FROM lab,incharge WHERE (incharge.block=lab.block and incharge.cno=lab.cno) ORDER BY incharge.block,incharge.cno";

$result=mysqli_query($conn,$a);
$i=0;
while($row=mysqli_fetch_array($result))
{
	$fn[$i]=$row['inc_name'];
	$fp[$i]=$row['inc_no'];
	$fm[$i]=$row['inc_mail'];
	$an[$i]=$row['ast_name'];
	$ap[$i]=$row['ast_no'];
	$am[$i]=$row['ast_mail'];
	$i++;
}


echo "<div class='container'>
<div class='table-responsive'><table align='center'>
		<tr>
			<th>Block</th>
			<th>Class No.</th>
			<th>Course Code</th>
			<th>Lab Incharge</th>
			<th>Lab Assistant</th>
		</tr>";

$result=mysqli_query($conn,$a);

$ls=$_GET['ls'];

{
	$i=0;
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
		if($row[$ls]==NULL)
			echo "<td>-</td>";
		else
			echo "<td>".$row[$ls]."</td>";
		if($row['inc_name']==NULL)
			echo "<td>-</td>";
		else
			echo "<td><a href='#popupa".$i."' data-rel='popup' data-transition='pop' style='color: black;'>Prof. ".$row['inc_name']."</a></td>";
		if($row['ast_name']==NULL)
			echo "<td>-</td>";
		else
			echo "<td><a href='#popupb".$i."' data-rel='popup' data-transition='pop' style='color: black;'>".$row['ast_name']."</a></td></tr>";
		$i++;
	}
}



echo "</table></div></div>";



for($j=0;$j<15;$j++)
{
echo "
	<div data-role='popup' id='popupa".$j."'>
		<p><b>Name:</b> Prof. ".$fn[$j]."<br /><b>Mobile No:</b> ".$fp[$j]."<br /><b>Mail ID:</b> ".$fm[$j]."</p>
	</div>

	<div data-role='popup' id='popupb".$j."'>
		<p><b>Name:</b> ".$an[$j]."<br /><b>Mobile No:</b> ".$ap[$j]."<br /><b>Mail ID:</b> ".$am[$j]."</p>
	</div>";
}


?>