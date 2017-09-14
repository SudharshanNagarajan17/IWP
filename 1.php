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


echo "<table>
		<tr>
			<th>Block</th>
			<th>Class No.</th>
			<th>Course Code</th>
			<th>Faculty Incharge</th>
			<th>Lab Assistant</th>
		</tr>";

$result=mysqli_query($conn,$a);


//1
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(0)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(0)>".$row['ast_name']."</div></td></tr>";


//2
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(1)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(1)>".$row['ast_name']."</div></td></tr>";


//3
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(2)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(2)>".$row['ast_name']."</div></td></tr>";


//4
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(3)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(3)>".$row['ast_name']."</div></td></tr>";


//5
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(4)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(4)>".$row['ast_name']."</div></td></tr>";


//6
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(5)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(5)>".$row['ast_name']."</div></td></tr>";


//7
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(6)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(6)>".$row['ast_name']."</div></td></tr>";


//8
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(7)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(7)>".$row['ast_name']."</div></td></tr>";


//9
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(8)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(8)>".$row['ast_name']."</div></td></tr>";


//10
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(9)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(9)>".$row['ast_name']."</div></td></tr>";


//11
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(10)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(10)>".$row['ast_name']."</div></td></tr>";


//12
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(11)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(11)>".$row['ast_name']."</div></td></tr>";


//13
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(12)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(12)>".$row['ast_name']."</div></td></tr>";


//14
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(13)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(13)>".$row['ast_name']."</div></td></tr>";


//15
$row=mysqli_fetch_array($result);
echo "<tr><td>".$row['block']."</td><td>".$row['cno']."</td>";
if($row['l3']==NULL)
	echo "<td>-</td>";
else
	echo "<td>".$row['l3']."</td>";
echo "<td><div><a onmouseover=facdet(14)>".$row['inc_name']."</a></td><td><a onmouseover=incdet(14)>".$row['ast_name']."</div></td></tr>";



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