<?php

include 'link.php';

$conn=openCon();

$sd=(string)date('Y-m-d');

$a = "SELECT * FROM workshop WHERE dat='$sd' ORDER BY tfr,no";

$result=mysqli_query($conn,$a);
echo "Workshops taking place:";

while($m=mysqli_fetch_array($result))
{
	echo "<br>".$m['det']." in ".$m['no']." from ".$m['tfr']." to ".$m['tto'];
}

?>