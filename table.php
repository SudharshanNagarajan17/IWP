<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){

            $("#t1").click(function(){
                $("#iFr").slideDown("fast");
                });
            });
    </script>
</head>
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
                    <li class="active"><a href="table.php">Search by slot</a></li>
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
                            <li class="sel"><a href="admwk.php">Admin Login</a></li>
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

<style>

    table.table1{
        border-collapse: collapse;
        width: 100%;
        min-width: 800px;
        border:1px solid black;
        height: 400;
        cursor: default;
    }
    table.table1 th{
    	text-align: center;
        border:1px solid black;
        height:20px;
        width: 5%;
    }
    table.table1 td{
        height:20px;
        width: 5%;
        text-align: center;
        border:1px solid black;

    }
    table.table1 tr{
        border-bottom: 1px solid black;
        width: 5%;
    }

    table.table2 td{
        border-left: 1px solid black;
        height: 20px;
        width: 5%;
        text-align: center;
    }
    table.table2{
    	border:1px solid black;
        table-layout: fixed;
        margin: auto;
        border:none;
        border-collapse: collapse;
        border-style: hidden;
        width:95%;
    }
    table.table2 tr{
        text-align: center;
        padding: 0;
    }

    a:link {
        text-decoration: none;
        color: #000000;
        width: 100%;
    }
    a:visited {
        text-decoration: none;
        color: #000000;
    }
    a:hover {
        text-decoration: none;
        background-color: #ccffff;
        display: block;
    }

    a:active {
        text-decoration: none;
    }
    a{
        cursor: pointer;
    }
    .wrapper{
        position:relative;
        width: 100%;
    }
    #iFr{
        display: none;
    }
</style>


<div class="container">
<div class="table-responsive">
<table align="center" class="table1" id="t1">

    <tr>
        <th rowspan="2">Theory</th><th>Start</th><th>08:00</th><th>09:00</th><th>10:00</th><th>11:00</th><th>12:00</th><th></th><th rowspan="9">LUNCH</th><th>14:00</th><th>15:00</th><th>16:00</th><th>17:00</th><th>18:00</th><th></th>
    </tr>
    <tr bgcolor="#e0e0d1">
        <th>End</th><th>08:50</th><th>09:50</th><th>10:50</th><th>11:50</th><th>12:50</th><th></th><th>14:50</th><th>15:50</th><th>16:50</th><th>17:50</th><th>18:50</th><th></th>
    </tr>
    <tr>
        <th rowspan="2">Lab</th><th>Start</th><th>08:00</th><th>-</th><th>10:00</th><th>-</th><th>11:50</th><th>-</th><th>14:00</th><th>-</th><th>16:00</th><th>-</th><th>17:50</th><th>-</th>
    </tr>
    <tr bgcolor="#e0e0d1">
        <th>End</th><th>-</th><th>09:40</th><th>-</th><th>11:40</th><th>-</th><th>13:30</th><th>-</th><th>15:40</th><th>-</th><th>17:40</th><th>-</th><th>19:30</th>
    </tr>
    <tr>

        <td colspan="2"><b>MONDAY</b></td>
        <td colspan="2"><a href="1.php?ls=l1" target="if1">
                <table class="table2">
                    <tr>
                        <td>A1</td><td>F1</td>
                    </tr>
                    <tr>
                        <td>L1</td><td>L2</td>
                    </tr>
                </table>
            </a></td>
        <td colspan="2"><a href="1.php?ls=l3" target="if1">
                <table class="table2">
                    <tr>
                        <td>D1</td><td>TB1</td>
                    </tr>
                    <tr>
                        <td>L3</td><td>L4</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l5" target="if1">
                <table class="table2">
                    <tr>
                        <td>TG1</td><td></td>
                    </tr>
                    <tr>
                        <td>L5</td><td>L6</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l31" target="if1">
                <table class="table2">
                    <tr>
                        <td>A2</td><td>F2</td>
                    </tr>
                    <tr>
                        <td>L31</td><td>L32</td>
                    </tr>
                </table>
            </a></td>
        <td colspan="2"><a href="1.php?ls=l33" target="if1">
                <table class="table2">
                    <tr>
                        <td>D2</td><td>TB2</td>
                    </tr>
                    <tr>
                        <td>L33</td><td>L34</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l35" target="if1">
                <table class="table2">
                    <tr>
                        <td>TG2</td><td></td>
                    </tr>
                    <tr>
                        <td>L35</td><td>L36</td>
                    </tr>
                </table>
            </a></td>

    </tr>

    <tr bgcolor="#e0e0d1">
        <td rowspan="1" colspan="2"><b>TUESDAY</b></td>
        <td colspan="2"><a href="1.php?ls=l7" target="if1">
                <table class="table2">
                    <tr>
                        <td>B1</td><td>G1</td>
                    </tr>
                    <tr>
                        <td>L7</td><td>L8</td>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l9" target="if1">
                <table class="table2">
                    <tr>
                        <td>E1</td><td>TC1</td>
                    </tr>
                    <tr>
                        <td>L9</td><td>L10</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l11" target="if1">
                <table class="table2">
                    <tr>
                        <td>TAA1</td><td></td>
                    </tr>
                    <tr>
                        <td>L11</td><td>L12</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l37" target="if1">
                <table class="table2">
                    <tr>
                        <td>B2</td><td>G2</td>
                    </tr>
                    <tr>
                        <td>L37</td><td>L38</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l39" target="if1">
                <table class="table2">
                    <tr>
                        <td>E2</td><td>TC2</td>
                    </tr>
                    <tr>
                        <td>L39</td><td>L40</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l41" target="if1">
                <table class="table2">
                    <tr>
                        <td>TAA2</td><td></td>
                    </tr>
                    <tr>
                        <td>L41</td><td>L42</td>
                    </tr>
                </table>
            </a></td>
    </tr>

    <tr>
        <td rowspan="1" colspan="2"><b>WEDNESDAY</b></td>
        <td colspan="2"><a href="1.php?ls=l13" target="if1">
                <table class="table2">
                    <tr>
                        <td>C1</td><td>A1</td>
                    </tr>
                    <tr>
                        <td>L13</td><td>L14</td>
                    </tr>
                </table>
            </a></td>

        <td><a href="1.php?ls=F1" target="if1">
                <table class="table2">
                    <tr>
                        <td>F1</td>
                    </tr>
                    <tr>
                        <td>-</td>
                    </tr>
                </table>
            </a></td>
        <td colspan="3">
        	<table class="table2">
        		<tr colspan="3">
            		<td rowspan="2"><b>Extramural</b></td>
            	</tr>
            </table>
        </td>
        <td colspan="2"><a href="1.php?ls=l43" target="if1">
                <table class="table2">
                    <tr>
                        <td>C2</td><td>A2</td>
                    </tr>
                    <tr>
                        <td>L43</td><td>L44</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l45" target="if1">
                <table class="table2">
                    <tr>
                        <td>F2</td><td>TD2</td>
                    </tr>
                    <tr>
                        <td>L45</td><td>L46</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l47" target="if1">
                <table class="table2">
                    <tr>
                        <td>TBB2</td><td></td>
                    </tr>
                    <tr>
                        <td>L47</td><td>L48</td>
                    </tr>
                </table>
            </a></td>
    </tr>

    <tr bgcolor="#e0e0d1">
        <td rowspan="1" colspan="2"><b>THURDAY</b></td>
        <td colspan="2"><a href="1.php?ls=l19" target="if1">
                <table class="table2">
                    <tr>
                        <td>D1</td><td>B1</td>
                    </tr>
                    <tr>
                        <td>L19</td><td>L20</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l21" target="if1">
                <table class="table2">
                    <tr>
                        <td>G1</td><td>TE1</td>
                    </tr>
                    <tr>
                        <td>L21</td><td>L22</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l23" target="if1">
                <table class="table2">
                    <tr>
                        <td>TCC1</td><td></td>
                    </tr>
                    <tr>
                        <td>L23</td><td>L24</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l49" target="if1">
                <table class="table2">
                    <tr>
                        <td>D2</td><td>B2</td>
                    </tr>
                    <tr>
                        <td>L49</td><td>L50</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l51" target="if1">
                <table class="table2">
                    <tr>
                        <td>G2</td><td>TE2</td>
                    </tr>
                    <tr>
                        <td>L51</td><td>L52</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l53" target="if1">
                <table class="table2">
                    <tr>
                        <td>TCC2</td><td></td>
                    </tr>
                    <tr>
                        <td>L53</td><td>L54</td>
                    </tr>
                </table>
            </a></td>
    </tr>

    <tr>
        <td rowspan="1" colspan="2"><b>FRIDAY</b></td>
        <td colspan="2"><a href="1.php?ls=l25" target="if1">
                <table class="table2">
                    <tr>
                        <td>E1</td><td>C1</td>
                    </tr>
                    <tr>
                        <td>L25</td><td>L26</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l27" target="if1">
                <table class="table2">
                    <tr>
                        <td>TA1</td><td>TF1</td>
                    </tr>
                    <tr>
                        <td>L27</td><td>L28</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l29" target="if1">
                <table class="table2">
                    <tr>
                        <td>TD1</td><td></td>
                    </tr>
                    <tr>
                        <td>L29</td><td>L30</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l55" target="if1">
                <table class="table2">
                    <tr>
                        <td>E2</td><td>C2</td>
                    </tr>
                    <tr>
                        <td>L55</td><td>L56</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l57" target="if1">
                <table class="table2">
                    <tr>
                        <td>TA2</td><td>TF2</td>
                    </tr>
                    <tr>
                        <td>L57</td><td>L58</td>
                    </tr>
                </table>
            </a></td>

        <td colspan="2"><a href="1.php?ls=l59" target="if1">
                <table class="table2">
                    <tr>
                        <td>TDD2</td><td></td>
                    </tr>
                    <tr>
                        <td>L59</td><td>L60</td>
                    </tr>
                </table>
            </a></td>

    </tr>
</table>
</div></div>

<div class="wrapper">
    <iframe name="if1" id="iFr" width="100%" height="360" frameborder="0" scrolling="no"></iframe>
</div>
</body>
</html>