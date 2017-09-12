<?php

include 'link.php';

$conn=openCon();

$a = "SELECT * FROM lab,incharge WHERE (incharge.block=lab.block and incharge.cno=lab.cno)";

$result=mysqli_query($conn,$a);


$t="";
while($row=mysqli_fetch_array($result))
{
	if($row['l1']==NULL)
		echo "Free<br>";
	else
		echo $row['l1'].'<br>';
}

?>