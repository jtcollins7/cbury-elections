<?php
	session_start(); 
	require("authenticate.php");
	require("Connection.php");

	$username = $_POST["username"];  
	$password = $_POST["password"];  

	if(authenticate($username, $password)){
		$_SESSION["username"] = $username;

		$sql = "select student_id from User where username = '$username';";
		$result = mysqli_query($conn, $sql);
					
		$row = mysqli_fetch_assoc($result);
		
		$_SESSION["user_id"] = $row["student_id"];


		if(!isset($_SESSION["UserHash"])){
			u_hash($username, $_SESSION["user_id"]);
		}
		$user_hash = $_SESSION["UserHash"];

		$sql = "select * from Vote where user_h = '$user_hash'";
		$result = mysqli_query($conn, $sql) or die("Something went wrong");
		
		if(mysqli_num_rows($result) > 0){
			session_destroy();
			header("location: /already_voted.html");
		}else{
			header('Location: party.php');
		}
	}
	else{
		$attempt = 1;
		echo $_GET["attempt"];
		if(isset($_GET["attempt"])){
			$attempt = $_GET["attempt"];
		}
		header('Location: ../index.html?attempt='.$attempt);
	}

	function u_hash($user, $id){
		$h = $id . '@' . $user;
		$user_hash = sha1($h);
		$_SESSION["UserHash"] = $user_hash;
	}
	function checkUser($user, $id){
	
		
	}
?>