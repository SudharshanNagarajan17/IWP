<?php
include 'https.php';
?>
<html>
<head>
	<title>VITCC-LMS</title>
	<link rel="shortcut icon" href="logo.png" />
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
        table-layout: fixed;
        border-collapse: collapse;
		cursor: default;
		white-space: nowrap;
		width: 100%;
	}
	h3{
		margin-left: 50px;
	}
    .navbar-nav .active a{
      background: #999999 !important;
 }
</style>
<nav class="navbar navbar-inverse navbar-static-top">
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
                    <li><a href="index.php">Search by slot</a></li>
                    <li><a href="dropdown.php">Search by lab number</a></li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FFCS <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li  class="sel"><a href="https://academicscc.vit.ac.in/student/stud_login.asp">Student Login</a></li>
                            <li  class="sel"><a href="https://academicscc.vit.ac.in/faculty/fac_login.asp">Faculty Login</a></li>
                        </ul>
                    </li>
                    <li class="drdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Workshops <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sel"><a href="stwk.php">View</a></li>
                            <li class="sel"><a href="facwk.php">Faculty Login</a></li>
                            <li class="sel"><a href="admwk.php">Admin Login</a></li>
                        </ul>
                    </li>
                    <li><a href="http://moodlecc.vit.ac.in">Moodle</a></li>
                    <li class="drdn">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lab Details <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                            <li  class="sel"><a href="infra1.php">Infra</a></li>
                            <li  class="sel"><a href="progwk.php">Programmer Login</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
</nav>
</html>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){

        $("#drp1").click(function(){
            $("#iFr2").slideDown("fast");
        });
    });

</script>
<style>
    .navbar-inverse .navbar-nav .open .dropdown-menu .navbar-inverse .navbar-nav .open .dropdown-menu {
        background-color: #333333;
        color:#ffffff;
    }
.drdn:hover .dropdown-menu {
        display: block;
    }
.drdn hover .sel{
    background-color: #3e8e41;
}
	#iFr2{
		display: none;
	}
	.dropdown{
		left: 20px;
	}
</style>

<?php

include 'link.php';

$conn=openCon();

$a = "SELECT * FROM infrahw GROUP BY block,cno ORDER BY block,cno";

$result=mysqli_query($conn,$a);
$i=0;
while($row=mysqli_fetch_array($result))
{
	$bl[$i]=$row['block'];
	$cn[$i]=$row['cno'];
	$i++;
}


$result=mysqli_query($conn,$a);
$i=0;
echo "<div class='dropdown' id='drp1'>
 		<button class='dropbtn'>Select lab number<span class='caret'></span></button>
  		<div class='dropdown-content'>";
$i=0;
while($row=mysqli_fetch_array($result))
{
	echo "<a onclick=disp('$i')>".$bl[$i]." ".$cn[$i]."</a>";
	$i++;
}
echo "</div>
		</div>";

?>

<!DOCTYPE html>
<html>
<style>
	/* Style The Dropdown Button */
	.dropbtn {
   		background-color: #4CAF50;
    	color: white;
    	padding: 10px;
    	font-size: 16px;
    	border: none;
    	cursor: pointer;
    	border-radius: 4px;
	}
	/* The container <div> - needed to position the dropdown content */
	.dropdown {
   		position: relative;
    	display: inline-block;
	}
	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
    	display: none;
    	position: absolute;
    	background-color: #f9f9f9;
    	min-width: 160px;
    	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    	z-index: 1;
	}
	/* Links inside the dropdown */
	.dropdown-content a {
	    color: black;
	    padding: 10px;
    	text-decoration: none;
    	display: block;
	}
	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {
		background-color: #d9d9d9;
	}
	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-content {
    	display: block;
	}
	/* Change the background color of the dropdown button when the dropdown content is shown */
	.dropdown:hover .dropbtn {
    	background-color: #3e8e41;
	}
	.dropdown-content{
		cursor: pointer;
	}
</style>
	<div class="wr">
		<iframe name="if4" width="100%" style="position: absolute;" height="100%" id="iFr2" frameborder="0" scrolling="yes"></iframe>
	</div>
</html>



<script>
	function disp(i)
	{
		window.open("infra2.php?i="+i,'if4');
	}
</script>