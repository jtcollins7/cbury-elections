<?php
	session_start();

	//check if user is logged in to session
	if(!isset($_SESSION["username"])){
		header("Location: /index.html");
	}
	if(isset($_GET['action'])=='submit'){
		if(!isset($_POST["party"])){
			echo"No party has been selected";
		}
		else
		{
			if($_POST["party"] == 'Republican'){
				$_SESSION['party_id'] = 1; 
				$_SESSION['party'] ='Republican';
				header("Location: vote.php");
			}
			elseif($_POST["party"] == 'Democrat'){
				$_SESSION['party_id'] = 2;
				$_SESSION['party'] = 'Democrat';
				header("Location: vote.php");
			}
		}
	}

?>
<DOCTYPE! html>
<html>
<head>
	<title> Party Selection </title>
	<link href="../css/webdesign.css" type="text/css" rel = "stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="header">
		<img id="seal" src="../img/canterbury.png" alt="Canterbury Seal" title="Canterbury Seal" />
		<h1>CANTERBURY MOCK PRIMARY ELECTION</h1>
	</div>
	<div class="info">
		<form action="?action=submit" method="post">
			<table id="mock_table">
				<tr>
					<td colspan="2"><h2>Please select your party</h2></td>
				</tr>
				<tr>
					<td><label for="left"><img id="rep" class="party" src="/img/rep-party.png" alt="Republican Party Image" title="Republican Party Image" /></label></td>
					<td><label for="right"><img id="dem" class="party" src="/img/dem-party.png" alt="Democratic Party Image" title="Democratic Party Image" /></label></td>
				</tr>
				<tr>
					<td>Republican</td>
					<td>Democrat</td>
				</tr>
				<tr>
					<td><input class="inline" id="left" type="radio" name="party" value="Republican"/></td>
					<td><input class="inline" id="right" type="radio" name="party" value="Democrat"/></td>
				</tr>
				<tr>
					<td colspan="2"><input class="btn" id="submit" type="submit" value="Submit" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

