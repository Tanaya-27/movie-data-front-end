<html>
<head>
	<title>Tanaya Patel</title>
	<LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Movie Delete Result</h1>

<?php
//parameterised querying
$movieselect = $_GET['movie'];
//$Title = $_GET['mvTitle'];

//establishing the database connection (insert correct details)
$db_host = ;//database host
$db_name = ;//database name
$db_user = ;//mysql username
$db_pass = ;//database password

//connecting to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect->errno) die("Failed to connect to db\n</body>\n</html>");

//$sql="SELECT mvTitle FROM Movie WHERE mvID = '%$idsearch'";
//$stmt=$conn->prepare($sql);
//$stmt->execute();
//$stmt->bind_result($Title);
//$stmt->close();

//add validation

//SQL
$sql="DELETE FROM Movie WHERE mvID = $movieselect;";
$stmt=$conn->prepare($sql1);
//$stmt->execute();
//$stmt->close();

//$sql2="SELECT * FROM Movie WHERE mvID = $idsearch";

if(($conn->query($sql)) === TRUE && ($conn->affected_rows)>0)
{
	echo "Movie has been deleted.";
}
else
{
	echo "Error deleting movie ". $conn->error;
}

?>

	<form action="delete_movie.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go Back">
	</form>
	<form action="dbicw.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go To Homepage">
	</form>

</body>
</html>