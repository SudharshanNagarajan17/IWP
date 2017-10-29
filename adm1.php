<?php
error_reporting(0);
$username="admin";
$password="admin";

$u=$_POST['t1'];
$p=$_POST['t2'];

if(strcmp($username,$u)!=0 || strcmp($password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open(window.history.back(),'_self');</script>";

include 'navbar.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	td{
		text-align: center;
	}
	th{
		background-color: blue;
		color: white;
		text-align: center;
		min-width: 100px;
	}
	tr:nth-child(even){
		background-color: #e6e6e6;
	}
	table{
		cursor: default;
		white-space: nowrap;
		width: 100%;
	}
	a{
		cursor: pointer;
		color: red;
	}
	a:hover{
		color: red;
	}
	h3{
		margin-left: 50px;
	}
	.down{
		color: black;
	}
	.down:hover{
		color: black;
		text-decoration: none;
	}
	.down:visited {
    	color: black;
		text-decoration: none;
	}
	button:hover{
		background-color:#595959; 
	}
	button {
    background-color: #bfbfbf;
    border: none;
    color: white;
    padding: 4px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://chennai.vit.ac.in/" class="navbar-brand">VITCC</a>
        </div>

            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="table.php">Search by slot</a></li>
                    <li><a href="dropdown.php">Search by lab number</a></li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FFCS <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="https://academicscc.vit.ac.in/student/stud_login.asp">Student Login</a></li>
                            <li class="sel"><a href="https://academicscc.vit.ac.in/faculty/fac_login.asp">Faculty Login</a></li>
                        </ul>
                    </li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workshops <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="stwk.php">View</a></li>
                            <li class="sel"><a href="facwk.php">Faculty Login</a></li>
                            <li  class="active" class="sel"><a href="admwk.php">Admin Login</a></li>
                        </ul>
                    </li>
                    <li><a href="http://moodlecc.vit.ac.in">Moodle</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
</nav>
</body>
</html>

<?php
include 'link.php';

$conn=openCon();

$a = "SELECT * FROM workshop ORDER BY dat,tfr,no";

$result=mysqli_query($conn,$a);


$file = fopen("workshop-date.csv","w");

$k=0;
$list=array();
$list[$k++]= "Date,From,To,Lab Number,Workshop Details,Faculty Name";
$list[$k++]= ",,,,,";


echo "<h3>Date Wise</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table>
		<tr><th>Date</th><th>From</th><th>To</th><th>Lab Number</th><th>Workshop Details</th><th>Faculty Name</th>";
while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	echo "<tr><td>".$m['dat']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td>".$m['no']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td><a onclick='del(".$i.")'>Delete</a></td></tr>";

	$list[$k++]=$m['dat'].",".$m['tfr'].",".$m['tto'].",".$m['no'].",".$m['det'].",".$m['name'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(',',$line));
}

echo "</table></div></div><br><br>";

fclose($file);
echo "<center><button><a class='down' href='workshop-date.csv' download>Download</a></button></center><br><br>";


$a = "SELECT * FROM workshop ORDER BY no,dat";
$result=mysqli_query($conn,$a);

$file = fopen("workshop-lno.csv","w");

$k=0;
$list=array();
$list[$k++]= "Lab Number,Workshop Details,Faculty Name,Date,From,To";
$list[$k++]= ",,,,,";

echo "<h3>Lab Wise</h3>";
echo "<div class='container'>
		<div class='table-responsive'>
		<table>
		<tr><th>Lab Number</th><th>Workshop Details</th><th>Faculty Name</th><th>Date</th><th>From</th><th>To</th>";
while($m=mysqli_fetch_array($result))
{
	$i=$m['sno'];
	echo "<tr><td>".$m['no']."</td><td>".$m['det']."</td><td>".$m['name']."</td><td>".$m['dat']."</td><td>".$m['tfr']."</td><td>".$m['tto']."</td><td><a onclick='del(".$i.")'>Delete</a></td></tr>";
	$list[$k++]=$m['no'].",".$m['det'].",".$m['name'].",".$m['dat'].",".$m['tfr'].",".$m['tto'];
}

foreach ($list as $line)
{
  fputcsv($file,explode(',',$line));
}

echo "</table></div></div>";

fclose($file);
echo "<center><button><a class='down' href='workshop-lno.csv' download>Download</a></button></center>";
?>

<script type="text/javascript">
	function del(i)
	{
		x=confirm('Do you want to delete it?');
		if(x==1)
		{
			window.open("del.php?x="+i,"_self");
		}
	}
</script>