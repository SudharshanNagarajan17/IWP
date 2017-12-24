<?php

session_start();
include 'https.php';
error_reporting(0);

include 'passwords.php';

$flag=0;

$u=$_POST['t1'];
$p=$_POST['t2'];


if(isset($_SESSION["facpass"]) && isset($_SESSION["facuser"]))
  $flag=1;
else if(strcmp($faculty_username,$u)!=0 || strcmp($faculty_password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open(window.history.back(),'_self');</script>";
else
{
  $flag=1;
  $_SESSION["facpass"]=$p;
  $_SESSION["facuser"]=$u;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>VITCC-LMS</title>
  <link rel="shortcut icon" href="logo.png" />
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

.ui-datepicker .ui-datepicker-title {
    margin: 0;
    line-height: 1.8em;
    text-align: center;
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
label{
  font-weight: bold;
}
.logoutLblPos{
   position:fixed;
   right:20px;
   top:5px;
}
.hovlog:hover{
    background-color: #ff8000;
    border-radius: 15px;
}
</style>
<body onload="radioreset()" onreset="radioreset()">

<h1><center>WORKSHOP DETAILS</center></h1>

<form align="right" name="form1" method="post" action="log_out.php">
  <label class="logoutLblPos hovlog">
  <input style="background-color: #ffb366; color: black;" name="submit2" type="submit" id="submit2" value="Sign out">
  </label>
</form>

<div class="form-group">
  <form action="fac2.php" method="post">
    <label>Name</label>
    <input type="text" id="fname" name="t1" placeholder="Enter your name" required>
    <br><br><label>Lab Number</label>
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


    <br><br><label>Date</label>
      <br><input type='radio' name='choice' id='ch1' required value=1 onclick="disabletodate()">Single day</input>
      <br><input type='radio' name='choice' id='ch2' required value=2 onclick="enabletodate()">Multiple days</input>

    <input placeholder="From" class="textbox-n" type="text" name='d1' onfocus="(this.type='date')" id='fromdate' required disabled min="<?php echo date('Y-m-d');?>">
    <input placeholder="To" class="textbox-n" type="text" name='d2' onfocus="(this.type='date')" id='todate' required disabled min="<?php echo date('Y-m-d');?>">

    <br><br><label>From</label>
    <input type="time" name="tt1" required><br>
    <label>To</label>
    <input type="time" name="tt2" required><br>
    
    <br><br><label>Workshop Details</label>
    <input type="text" id="lname" name="t2" required placeholder="Enter the workshop details">

    
  
    <input type="submit" value="Submit">
  </form>
  <input type="button" onclick="cancel()" value="Cancel">
</div>

</body>
<script>
  function cancel()
  {
    window.open("index.php","_self");
  }
  function enabletodate()
  {
    document.getElementById('todate').disabled=false;
    document.getElementById('todate').placeholder='To';
    document.getElementById('todate').type='text';
    document.getElementById('todate').value="";
    document.getElementById('fromdate').disabled=false;
    document.getElementById('fromdate').placeholder='From';
    document.getElementById('fromdate').type='text';
    document.getElementById('fromdate').value="";
  }
  function disabletodate()
  {
    document.getElementById('todate').disabled=true;
    document.getElementById('todate').placeholder='To';
    document.getElementById('todate').type='text';
    document.getElementById('todate').value="";
    document.getElementById('fromdate').disabled=false;
    document.getElementById('fromdate').placeholder='Choose the date';
    document.getElementById('fromdate').type='text';
    document.getElementById('fromdate').value="";
  }
  function radioreset()
  {
    document.getElementById('ch1').checked = false;
    document.getElementById('ch2').checked = false;
  }
</script>
</html>