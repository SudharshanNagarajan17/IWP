<?php
include 'https.php';
$i=$_GET['x'];
include "link.php";
$conn=openCon();
$a = "DELETE FROM infrahw WHERE sno='$i';";
mysqli_query($conn,$a);
echo "<script>parent.closeIFrame();</script>";
?>