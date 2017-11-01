<style>
	.curdisp{
		color: red;
		font-style: italic;
	}

</style>

<?php

include 'link.php';

$conn=openCon();

$sd=(string)date('Y-m-d');

$a = "SELECT * FROM workshop WHERE dat='$sd' ORDER BY tfr,no";

$result=mysqli_query($conn,$a);
echo "<h3>Workshops taking place:</h3>";

while($m=mysqli_fetch_array($result))
{
	echo "<p class='curdisp'>".$m['det']." in ".$m['no']." from ".$m['tfr']." to ".$m['tto']."</p>";
}

?>