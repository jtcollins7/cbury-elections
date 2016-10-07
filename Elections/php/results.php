<?php
	require("Connection.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
	<title>Voting Results</title>
	<link rel="stylesheet" type="text/css" href="../css/webdesign.css" />
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    	</head>
  <body>
<div class="header">
		<img id="seal" src="../img/canterbury.png" alt="Canterbury Seal" title="Canterbury Seal" />
		<h1>CANTERBURY MOCK PRIMARY ELECTION</h1>
	</div>
	
	<div class="result_info" style="padding:15px">
		<h3> <a href="results_hs.php"> High School Student Results </a> </h3>
		<h3> <a href="results_ms.php"> Middle School Student Results </a> </h3>
		<h3> <a href="results_fac.php"> Faculty and Staff Results </a> </h3>
	</div>
  </body>
</html>