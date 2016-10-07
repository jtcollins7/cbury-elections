<?php
require("Connection.php");

$sql = "SELECT Vote.candidate_id, Candidate.name as c_name, User.user_h, User.gender, User.grade, User.age, User.house 
FROM Vote
join User on Vote.user_h = User.user_h
join Candidate on Vote.candidate_id = Candidate.id
where grade = 17 and Candidate.id between 1 and 11
order by Candidate.id, gender";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
   echo $row["c_name"] . ', ' . $row["user_h"] . ', ' . $row["gender"] . ', ' . $row["grade"] . ', ' . $row["age"] . ', ' . $row["house"] . "<br />";
}

?>