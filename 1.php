<!doctype html>
<html>
<style>
	td{
		text-align: center;
	}
	th{
		background-color: blue;
		color: white;
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


echo "<table align='center'>
		<tr>
			<th>Block</th>
			<th>Class No.</th>
			<th>Course Code</th>
			<th>Faculty Incharge</th>
			<th>Lab Assistant</th>
		</tr>";

$result=mysqli_query($conn,$a);

$ls=$_GET['ls'];

if($ls=='F1' || $ls=='ext')
{
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
		echo "<td>-</td>";
		echo "<td><div><a onmouseover=facdet('$i')>".$row['inc_name']."</a></td><td><a onmouseover=incdet('$i')>".$row['ast_name']."</div></td></tr>";
		$i++;
	}
}

else
{
	$i=0;
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
		if($row[$ls]==NULL)
			echo "<td>-</td>";
		else
			echo "<td>".$row[$ls]."</td>";
		echo "<td><div><a onmouseover=facdet('$i')>".$row['inc_name']."</a></td><td><a onmouseover=incdet('$i')>".$row['ast_name']."</div></td></tr>";
		$i++;
	}
}

echo "</table>";

?>

<script>
	function facdet(x)
	{
		a=<?php echo json_encode($fn); ?>;
		b=<?php echo json_encode($fp); ?>;
		c=<?php echo json_encode($fm); ?>;		
		alert(a[x]+" "+b[x]+" "+c[x]);
	}
	function incdet(x)
	{
		a=<?php echo json_encode($an); ?>;
		b=<?php echo json_encode($ap); ?>;
		c=<?php echo json_encode($am); ?>;		
		alert(a[x]+" "+b[x]+" "+c[x]);
	}
</script>