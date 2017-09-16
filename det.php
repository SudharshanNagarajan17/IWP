<!doctype html>
<html>

<style>
p{

}
</style>

</html>

<?php

$a=$_GET['ai'];
$b=$_GET['bi'];
$c=$_GET['ci'];
$d=$_GET['di'];

if($d==1)
	echo "<p>Name: Prof. ".$a."<br>Mobile No: ".$b."<br>Mail ID: ".$c."</p>";
else
	echo "<p>Name: ".$a."<br>Mobile No: ".$b."<br>Mail ID: ".$c."</p>";

?>