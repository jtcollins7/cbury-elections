<?php
	require("Connection.php");
	session_start();
	
	if(!isset($_SESSION["username"])){
		header("Location: ../index.html");
	}
	if(!isset($_SESSION["party_id"])){
		header("Location: party.php");
	}
	
	if(isset($_GET['action'])=='vote'){
		
		$global = [];
		$g = 0;
		
		$party_id = $_SESSION["party_id"];
		$s = "select post_header as name from Race where party_id is null or party_id = $party_id;";
		$r = mysqli_query($conn, $s);
		while($rw = mysqli_fetch_assoc($r)) {
			$global[$g++] = $rw["name"];
		}
		for($l = 0; $l < count($global); $l++){
			if(isset($_POST[$global[$l]])){
				$cand = $_POST[$global[$l]];
				$user = $_SESSION["UserHash"];
				
				
				if(is_array($cand)){
					for($i = 0; $i < count($cand); $i++){
						$insert_sql = "INSERT INTO Vote (candidate_id, party_id, user_h, edate) VALUES ($cand[$i], '$party_id', '$user', NOW());";

						if (mysqli_query($conn, $insert_sql)) {
    							echo "New record created successfully";
						} else {
   					 		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					}
				}
				else{
					$insert_sql = "INSERT INTO Vote (candidate_id, party_id, user_h, edate) VALUES ($cand, '$party_id', '$user', NOW());";
					
					if (mysqli_query($conn, $insert_sql)) {
    						echo "New record created successfully";
					} else {
   					 	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				}

			}
		}
		session_destroy();
		header('Location: /thankyou.html');

	}

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<title><?php echo $_SESSION["party"] . " Voting"?></title>
	<link rel="stylesheet" type="text/css" href="../css/webdesign.css" />
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
	<script>
$(document).ready(function(){
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
});
	</script>
</head>
<body>
	<div class="header">
		<img id="seal" src="../img/canterbury.png" alt="Canterbury Seal" title="Canterbury Seal" />
		<h1>CANTERBURY MOCK PRIMARY ELECTION</h1>
	</div>
	
	<div class="info">
	<form action="?action=vote" method="post" class="candidate">
				<?php 
					$party_id = $_SESSION["party_id"];
					
					$sql_header = "select id, name, post_header, votes from Race where party_id is null or party_id = $party_id;";
					$result = mysqli_query($conn, $sql_header);
					$post_headers = "";

					$col_count = 0;
					while($row = mysqli_fetch_assoc($result)) {
						$race_id = $row['id'];
						$rowname = $row["name"];
						$post = $row["post_header"];
						$votes_required = $row["votes"];
						$post_headers .= $post . '|' . $votes_required;
					
						echo "<table id=\"mock_table\">";
						echo "<tr><th colspan='3'>" .$row["name"]."<br /> <span style='font-weight:normal; font-size:13pt'>Choose $votes_required Candidate(s)</span></th></tr>";
						
						

						echo "<tr><td colspan='3'><div id='err_$post' class='err'></div></td></tr>";
						$vt = "";
						$sql_cand = "select Candidate.id as cand_id, Candidate.name as cand_name, image from Candidate join Party on Candidate.party_id = Party.id join Race on Candidate.race_id = Race.id where Party.id = $party_id and Race.id = $race_id";
						$cand_result = mysqli_query($conn, $sql_cand);
						while($row = mysqli_fetch_assoc($cand_result)) {
							if($col_count <= 0){
								echo "<tr>";
							}
							echo "<td>";
							echo "<label>";
							if($row['image']){
								echo "<br /><img src=\"../img/".$row["image"]."\" alt=\"".$row["cand_name"]."\" class=\"cand\">";
							}
							$vt = "radio";
							$vtb = "";
							if($votes_required > 1){
								$vt = "checkbox";
								$vtb = '[]';
							}
							

							echo "<br /><input type=".$vt." name=\"$post$vtb\" value=\"".$row["cand_id"]."\" class=\"text\"/> ".$row["cand_name"]."</td>";
							echo "</label>";
							if($col_count >= 2) {
								echo "</tr>";
								$col_count = 0;
							}
							else 
								$col_count++;
						}
						$post_headers .= '|' . $vt . '@';
						$col_count = 0;
						echo "</table>";
						echo "<br />";
						echo "<br />";
					}
					echo "<table id='mock_table'><tr><td><input type='Submit' class='btn' value='Vote' /></td></tr></table><br />";
					echo "<input type='hidden' id='post_headers' value='$post_headers' />";
					?>
		</form>
	</div>
</body>
</html>
