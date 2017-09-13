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

echo "<table>
		<tr>
			<th>Block</th>
			<th>Class No.</th>
			<th>Course Code</th>
			<th>Faculty Incharge</th>
			<th>Lab Assistant</th>
		</tr>";


while($row=mysqli_fetch_array($result))
{	
	echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
	if($row['l1']==NULL)
		echo "<td>-</td>";
	else
		echo "<td>".$row['l1']."</td>";
	$f1=$row['inc_name'];
	$f2=$row['inc_no'];
	$f3=$row['inc_mail'];
	$i1=$row['as_name'];
	$i2=$row['as_no'];
	$i3=$row['as_mail'];
	echo "<td><div><a onmouseover='facdet()'>".$row['inc_name']."</a></td><td><a onmouseover='incdet()'>".$row['as_name']."</a></div></td></tr></table>";
}

closeCon($conn);

?>

<script>
function facdet()
{
	a=<?php echo json_encode($f1); ?>;
	b=<?php echo json_encode($f2); ?>;
	c=<?php echo json_encode($f3); ?>;
	alert(a+" "+b+" "+c);
}
function incdet()
{
	a=<?php echo json_encode($i1); ?>;
	b=<?php echo json_encode($i2); ?>;
	c=<?php echo json_encode($i3); ?>;
	alert(a+" "+b+" "+c);
}
</script>