<?php

$username="faculty";
$password="faculty";

$u=$_POST['t1'];
$p=$_POST['t2'];

if(strcmp($username,$u)!=0 || strcmp($password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open(window.history.back(),'_self');</script>";


?>


<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button] {
    width: 100%;
    background-color: #ff4d4d;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #009900;
}
input[type=button]:hover {
    background-color: #ff1a1a;
}

input[type=date],[type=time]{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<body>




<h1><center>WORKSHOP DETAILS</center></h1>
<div>
  <form action="fac2.php" method="post">
    <label>Name</label>
    <input type="text" id="fname" name="t1" placeholder="Enter your name" required>
    <label>Lab Number</label>
 		<select name="s1" required>
  		<option disabled>Select lab number</option>
  				<?php
  				include "link.php";
  				$conn=openCon();
  				$a="SELECT block,cno FROM lab ORDER BY block,cno";
  				$t=mysqli_query($conn,$a);
  				while($row=mysqli_fetch_array($t))
  				{
  					$n=$row['block']."-".$row['cno'];
  					echo "<option value='".$n."'>$n</option>";
  				}
  				?>
  		</select>


    <label>Date</label>
    <input type="date" name="d1" min="2017-10-17" required>
    <label>From</label>
    <input type="time" name="tt1" required>
    <label>To</label>
    <input type="time" name="tt2" required>
    <label>Workshop Details</label>
    <input type="text" id="lname" name="t2" placeholder="Enter the workshop details">

    
  
    <input type="submit" value="Submit">
  </form>
  <input type="button" onclick="cancel()" value="Cancel">
</div>

</body>
<script>
	function cancel()
	{
		window.open(window.history.back(),"_self");
	}
</script>
</html>
