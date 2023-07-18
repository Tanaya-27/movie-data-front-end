<html>
<head>
	<title>Tanaya Patel</title>
	<LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Add Actor Result</h1>

<?php
//parameterised querying
$titleinput = $_GET['title'];
$priceinput = $_GET['price'];
$yearinput = $_GET['year'];
$genreinput = $_GET['genre'];
$actorinput = $_GET['actor'];
$mvidinput = $_GET['mvID'];

//establishing the database connection (insert correct details)
$db_host = ;//database host
$db_name = ;//database name
$db_user = ;//mysql username
$db_pass = ;//database password

//connecting to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect->errno) die("Failed to connect to db\n</body>\n</html>");

//SQL
$sql="INSERT INTO Movie (mvID, actID, mvTitle, mvPrice, mvYear, mvGenre) VALUES ('$mvID', '$actorinput', '$titleinput', '$priceinput', '$yearinput', '$genreinput')";
$stmt=$conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($mvidinput, $actorinput, $titleinput, $priceinput, $yearinput, $genreinput);

$sql1="SELECT mvTitle FROM Movie WHERE mvTitle = '$titleinput'";

if($conn->query($sql1) == TRUE)
{
	echo "Movie '". $titleinput. "' has been added.";
}
else
{
	echo "Error adding movie: ". $conn->error;
}

?>

	<form action="add_movie.php" onSubmit="return true">
		<br>
		<input type="submit" value="Go Back">
	</form>
	<form action="dbicw.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go To Homepage">
	</form>

</body>
</html>