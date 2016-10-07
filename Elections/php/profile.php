<?php
	require("Connection.php");
	session_start();
	
	if(!isset($_SESSION["username"])){
		header("Location: ../index.html");
	}
	

	if(isset($_GET['action'])=='update'){
		$user_id = $_SESSION["user_id"];
		$age = "";
		$sex = "";
		$house = "";
		$zip = "";
		if(isset($_POST["age"])){
			$age = $_POST["age"];
		}
		if(isset($_POST["gender"])){
			$sex = $_POST["gender"];
		}
		if(isset($_POST["house"])){
			$house = $_POST["house"];
		}
		if(isset($_POST["zip"])){
			$zip = $_POST["zip"];
		}
		
		$sql = "update User set age = '$age', gender = '$sex', house = '$house', zip = '$zip' where student_id = '$user_id'";
		mysqli_query($conn, $sql);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/webdesign.css" />
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
	<script>
/* $(document).ready(function(){
    $("form").submit(function(){
        var post_headers = $('#post_headers').val();
	var post_list = post_headers.split('@');
	clearErrs(post_list);
	for(var i = 0; i < post_list.length; i++){
		var header_count = post_list[i].split('|');
		var elem = $("input:"+header_count[2]+"[name="+header_count[0]+"]:checked");
		if(elem.length > header_count[1]){
			$('#err_' + header_count[0]).html("Must choose no more than " + header_count[1]);
			return false;
		}
	}
    });
	function clearErrs(ph){
		for(var i = 0; i < ph.length; i++){
			var header_count = ph[i].split('|');
			$('#err_' + header_count[0]).html("");
		}
	}
});*/
	</script>
</head>
<body>
	<div class="header">
		<img id="seal" src="../img/canterbury.png" alt="Canterbury Seal" title="Canterbury Seal" />
		<h1>CANTERBURY MOCK PRIMARY ELECTION</h1>
	</div>
	
	<div class="profile">
	<form action="?action=update" method="post" class="candidate">
	<table id="user_tbl">
		
	</table>
				<?php 
					$user_id = $_SESSION["user_id"];
					
					if (strpos($user_id, 'FS') != true) {
					echo strpos($user_id);
					$sql_header = "select username, age, grade, gender, house, zip from User where student_id = '$user_id';";
					$result = mysqli_query($conn, $sql_header);

					$col_count = 0;
					while($row = mysqli_fetch_assoc($result)) {
						echo "<table id=\"user_tbl\">";
						echo "<tr>";
						echo "	<td> Age: </td>";
						echo "	<td> <input type=\"text\" name='age' value='". $row["age"] ."' /> </td>";
						echo "	<td rowspan=\"6\">".$row["username"]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td> Gender: </td>";
						echo "	<td> <input type=\"text\" name='gender' value='".$row["gender"]."' /></td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td> House: </td>";
						echo "	<td> <input type=\"text\" name='house' value='".$row["house"]."' /></td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td> Zip: </td>";
						echo "	<td> <input type=\"text\" name='zip' value='".$row["zip"]."' /></td>";
						echo "</tr>";
						echo "<tr>";
						echo "	<td></td>";
						echo "	<td><input type=\"submit\" value=\"Update\" class=\"btn\" />";
						echo "</tr>";

						echo "</table>";

						
												
						echo "<br />";
						echo "<br />";
					}
					}
					else{
						echo "Faculty Only";
					}
					?>
		</form>
	</div>
</body>
</html>
