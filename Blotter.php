<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
			body {
    background-image:url("background.jpg");
    background-repeat: no-repeat;
    background-size: 100% auto;
     background-attachment: fixed;
}
	nav{
		position: absolute;
		top: 9%;
		width: 50%;
		left: 25%;
		position: fixed;
	}
	nav a{
		text-decoration-line: none;
		font-size: 20px;
		padding-right: 4%;
		margin-left: 4%;
		color: #fff;


	}
	nav a:hover {
		background-color: blue;
		padding: 1.5%;
		background-color: #fff;
		color:#003370;
	}
	.Table1{
			position: absolute;
			top: 40%;
		}
		.Name{
			width: 100px;
			font-size: 20px;

		}
		.Column{
			width: 180px;
			background-color: #fff;
			text-align: center;
		}
	
</style>
<body>
	<img src="Darkblue.png" style="width: 100%; height: 170px;margin-top: -2%;opacity: 0;">
			
			<h1 style="font-size: 40px;margin-left: 35%">BLOTTER RECORDS</h1>
		<table class="Table1">
		
	<tr>

		<td class="Column">
			<label class="Name">Date</label>
		</td>
		<td class="Column" >
			<label class="Name">Complainant</label>
		</td>
		
		<td class="Column" style="width: 50px;">
			<label class="Name" >Age</label>
		</td>
		
		<td class="Column" style="width: 50px;">
			<label class="Name">Zone</label>
		</td>
		<td class="Column">
			<label class="Name">Respondent</label>
		</td>
		<td class="Column" style="width: 50px;">
			<label class="Name">Age</label>
		</td>
		
		<td class="Column" style="width: 50px;">
			<label class="Name">Zone</label>
		</td>
		<td class="Column">
			<label class="Name">Nature Of Case</label>
		</td>
		<td class="Column">
			<label class="Name">Purpose</label>
		</td>

	</tr>

</table>

	<a href="AddBlotter.php" style="position: absolute;text-decoration-line: none;font-size: 20px;color: #fff;top: 27%;left: 80%;background-color: #0c3c60;padding: 13px;">Add Blotter Record</a>
		<img src="Darkblue.png" style="width: 100%; height: 145px;position: absolute;top: 0px;position: fixed;left: 0px;">
			<nav>
				<a href="Home.php">Home</a>
				<a href="Dashboard.php">Dashboard</a>
				<a href="ResidentInfo.php">Resident Info</a>
				<a href="Certificate.php">Certificate</a>
				<a href="Blotter.php">Blotter</a>
			</nav>
			<img src="Logo.png" style="width:8%;position: absolute;top: 2%;position: fixed;left: 3%;">
				<img src="Darkblue.png" style="width: 100%; height: 145px;position: absolute;top: 0px;position: fixed;left: 0px;">
			<nav>
				<a href="Home.php">Home</a>
				<a href="Dashboard.php">Dashboard</a>
				<a href="ResidentInfo.php">Resident Info</a>
				<a href="Certificate.php">Certificate</a>
				<a href="Blotter.php">Blotter</a>
			</nav>
			<img src="Logo.png" style="width:8%;position: absolute;top: 2%;position: fixed;left: 3%;">
</body>
</html>