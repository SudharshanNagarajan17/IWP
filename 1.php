<?php

include 'link.php';

$conn=openCon();

$a = "SELECT * FROM lab,incharge WHERE (incharge.block=lab.block and incharge.cno=lab.cno)";

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
	echo "<td>".$row['inc_name']."</td><td>".$row['as_name']."</td></tr></table>";
}

closeCon($conn);

?>