<html>
<head>
	<title>Tanaya Patel</title>
	<LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Add Actor Result</h1>

<?php
//parameterised querying
$namesearch = $_GET['name'];

//establishing the database connection (insert correct details)
$db_host = ;//database host
$db_name = ;//database name
$db_user = ;//mysql username
$db_pass = ;//database password

//connecting to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect->errno) die("Failed to connect to db\n</body>\n</html>");

//SQL
$sql="INSERT INTO Actor (actName) VALUES ('$namesearch')";
$stmt=$conn->prepare($sql);
$stmt->execute();

$sql1="SELECT * FROM Actor WHERE actName = '$namesearch'";

if($conn->query($sql1) == TRUE)
{
	echo "Actor ". $namesearch. " has been added.";
}
else
{
	echo "Error adding actor: ". $conn->error;
}

?>

	<form action="add_actor.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go Back">
	</form>
	<form action="dbicw.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go To Homepage">
	</form>

</body>
</html>