<html>
<head>
	<title>Tanaya Patel</title>
	<LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Actor Delete Result</h1>

<?php
//parameterised querying
$actorselect = $_GET['actor'];

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

//SQL
$sql1="DELETE FROM Movie WHERE actID = $actorselect";
$stmt=$conn->prepare($sql1);
$stmt->execute();

$sql="DELETE FROM Actor WHERE actID = $actorselect";
$stmt=$conn->prepare($sql);
//$stmt->execute();

if($conn->query($sql) == TRUE && ($conn->affected_rows)>0)
{
	echo "Actor has been deleted.";
}
else
{
	echo "Error deleting actor ". $conn->error;
}
?>

	<form action="delete_actor.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go Back">
	</form>
	<form action="dbicw.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go To Homepage">
	</form>

</body>
</html>