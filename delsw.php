<?php
include 'https.php';
$i=$_GET['x'];
include "link.php";
$conn=openCon();
$a = "DELETE FROM infrasw WHERE sno='$i';";
mysqli_query($conn,$a);
echo "<script>alert('Record deleted successfully.');parent.closeIFrame();</script>";
?>