<!doctype html>
<html>
<style>
table{
	border-collapse: collapse;
	padding: 0;
}

th{
	border:1px solid black;
	height:25px;
}
td{
	height:20px;
	text-align: center;
}

a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 0;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
table.table2 td{
	width=0;
}

a:hover, a:active {
    background-color: red;
}
span {
	style="cursor:default";
}
</style>
<table>
<tr>
	
	<td><span style="cursor:default">default</span><br><b>MONDAY</b></td>
	<td><a href="1.php">
		<table class="table2">
			<tr>
				<td>A1</td><td>F1</td>
			</tr>
			<tr>
				<td>L1</td><td>L2</td>
			</tr>
		</table>
	</a></td>
	<td><a href="=#">
		<table class="table2">
			<tr>
				<td>D1</td><td>TB1</td>
			</tr>
			<tr>
				<td>L3</td><td>L4</td>
			</tr>
		</table>
	</td>


</tr>
</table>


</html>
