<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<style>

html, body{
	height: 100%;
}
table.table4{
	table-layout: fixed;
	border-collapse: collapse;
	width: 80%;
	height: 100%;
	border:1px solid black;
}
table.table4 th{
	border:1px solid black;
	text-align: center;
	height:20px;
	width: 4%;
}
table.table4 td{
	height:20px;
	width: 4%;
	text-align: center;
	border:1px solid black;
}
table.table4 tr{
	border-bottom: 1px solid black;
	width: 4%;
}
p{
	cursor: default;
}
a:link {
    text-decoration: none;
    color: black;
}
.pos{
	position: relative;
	left: 25px;
}
</style>
</html>

<?php

$i=$_GET['i'];;


include 'link.php';

$conn=openCon();

$a = "SELECT * FROM lab,incharge WHERE (incharge.block=lab.block and incharge.cno=lab.cno)";

$result=mysqli_query($conn,$a);

$j=0;
while($j<=$i)
	{
		$row=mysqli_fetch_array($result); 
		$j++;
	}

$fn=$row['inc_no'];
$fm=$row['inc_mail'];
if($fn=="")
	$fn="NIL";
if($fm=="")
	$fm="NIL";
$an=$row['ast_no'];
$am=$row['ast_mail'];
if($an=="")
	$an="NIL";
if($am=="")
	$am="NIL";

$fd="Mobile No: ".$fn."<br />Maid ID: ".$fm;
$ad="Mobile No: ".$an."<br />Maid ID: ".$am;


echo "<h2 class='pos'>".$row['block']." ".$row['cno']."</h2>";
 
echo "
<div class='container'>
<div class='table-responsive'>
<table class='table4' align='center' height=60%>

<tr>
<th rowspan='2'>Theory</th><th>Start</th><th>08:00</th><th>09:00</th><th>10:00</th><th>11:00</th><th>12:00</th><th></th><th rowspan='14'>Lunch</th><th>14:00</th><th>15:00</th><th>16:00</th><th>17:00</th><th>18:00</th><th></th>
</tr>
<tr bgcolor='#e0e0d1'>
<th>End</th><th>08:50</th><th>09:50</th><th>10:50</th><th>11:50</th><th>12:50</th><th></th><th>14:50</th><th>15:50</th><th>16:50</th><th>17:50</th><th>18:50</th><th></th>
</tr>
<tr>
<th rowspan='2'>Lab</th><th>Start</th><th>08:00</th><th>-</th><th>10:00</th><th>-</th><th>11:50</th><th>-</th><th>14:00</th><th>-</th><th>16:00</th><th>-</th><th>17:50</th><th>-</th>
</tr>
<tr bgcolor='#e0e0d1'>
<th>End</th><th>-</th><th>09:40</th><th>-</th><th>11:40</th><th>-</th><th>13:30</th><th>-</th><th>15:40</th><th>-</th><th>17:40</th><th>-</th><th>19:30</th>
</tr>

<tr>
	<td rowspan='1' colspan='2'><b>MONDAY</b></td>
	<td colspan='2'>".$row['l1']."</td>
	<td colspan='2'>".$row['l3']."</td>
	<td colspan='2'>".$row['l5']."</td>
	<td colspan='2'>".$row['l31']."</td>
	<td colspan='2'>".$row['l33']."</td>
	<td colspan='2'>".$row['l35']."</td>	
</tr>

<tr bgcolor='#e0e0d1'>
	<td rowspan='1' colspan='2'><b>TUESDAY</b></td>
	<td colspan='2'>".$row['l7']."</td>
	<td colspan='2'>".$row['l9']."</td>
	<td colspan='2'>".$row['l11']."</td>
	<td colspan='2'>".$row['l37']."</td>
	<td colspan='2'>".$row['l39']."</td>
	<td colspan='2'>".$row['l41']."</td>
</tr>

<tr>
	<td rowspan='1' colspan='2'><b>WEDNESDAY</b></td>
	<td colspan='2'>".$row['l13']."</td>
	<td colspan='1'></td>
	<td colspan='3'><b>Extramural</b></td>
	<td colspan='2'>".$row['l43']."</td>
	<td colspan='2'>".$row['l45']."</td>
	<td colspan='2'>".$row['l47']."</td>
</tr>

<tr bgcolor='#e0e0d1'>
	<td rowspan='1' colspan='2'><b>THURSDAY</b></td>
	<td colspan='2'>".$row['l19']."</td>
	<td colspan='2'>".$row['l21']."</td>
	<td colspan='2'>".$row['l23']."</td>
	<td colspan='2'>".$row['l49']."</td>
	<td colspan='2'>".$row['l51']."</td>
	<td colspan='2'>".$row['l53']."</td>
</tr>

<tr>
	<td rowspan='1' colspan='2'><b>FRIDAY</b></td>
	<td colspan='2'>".$row['l25']."</td>
	<td colspan='2'>".$row['l27']."</td>
	<td colspan='2'>".$row['l29']."</td>
	<td colspan='2'>".$row['l55']."</td>
	<td colspan='2'>".$row['l57']."</td>
	<td colspan='2'>".$row['l59']."</td>
</tr>

</table></div></div>

<div class='pos'>
<br><b>Lab Incharge: </b><a href='#popupBasic1' data-rel='popup' data-transition='pop'>Prof. ".$row['inc_name']."</a>




<br><b>Lab Assistant: </b><a href='#popupBasic2' data-rel='popup' data-transition='pop'>".$row['ast_name']."</a>

<div data-role='popup' id='popupBasic1'>
<p>".$fd."</p>
</div>

<div data-role='popup' id='popupBasic2'>
<p>".$ad."</p>
</div></div>";


?>