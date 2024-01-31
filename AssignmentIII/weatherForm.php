<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment III 2</title>
</head>
<style type="text/css">
table{
	border-collapse: collapse;
}
</style>
<body>
	<h1>How's your weather?</h1>
	<form action="weatherOutput.php" method="POST" >
		<b>Please enter your information:</b>
		<table>
			<tr bgcolor="pink">
				<td><b>City</b></td>
				<td><input type="text" name="city" value="Thaton"></td>
			</tr>
			<tr bgcolor="pink">
				<td><b>Month</b>
				</td>
				<td><input type="text" name="month" value="January"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="checkbox" name="weather[]" value="sunshine" checked>Sunshine
					<input type="checkbox" name="weather[]" value="clouds">Clouds
					<input type="checkbox" name="weather[]" value="rain">Rain
					<input type="checkbox" name="weather[]" value="hail">Hail
					<input type="checkbox" name="weather[]" value="sleet">Sleet
					<input type="checkbox" name="weather[]" value="snow">Snow
					<input type="checkbox" name="weather[]" value="wind">Wind
					<input type="checkbox" name="weather[]" value="cold">Cold
					<input type="checkbox" name="weather[]" value="heat">Heat
				</td>
			</tr>
			<tr bgcolor="pink">
				<td rowspan="2"><b>Today Date</b></td>
				<?php 
				echo "<td><input type='text' name='date' value='".date("d/m/Y")."'></td>";
				?>
				
			</tr>
			<tr bgcolor="pink">
				<td><input type="submit" name="submit" value="Submit Query"></td>
			</tr>
		</table>
	</form>
</body>
</html>