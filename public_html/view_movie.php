<html>
<head>
	<title>Tanaya Patel</title>
	<LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
</head>
<body>
<h1>Movie Search Result</h1>

<?php

//establishing the database connection (insert correct details)
$db_host = ;//database host
$db_name = ;//database name
$db_user = ;//mysql username
$db_pass = ;//database password

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect->errno) die("Failed to connect to db\n</body>\n</html>");

$sql="SELECT * FROM Movie ORDER BY mvID";
$stmt=$conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($ID, $Actor, $Title, $Price, $Year, $Genre);
?>

<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>ID</th> <th>Actor ID</th> <th>Title</th> <th>Price</th> <th>Year</th> <th>Genre</th> </tr>

<?php
while($stmt->fetch())
{
	echo "<tr>";
	echo "<td>" . htmlentities($ID) ."</td>";
    echo "<td>" . htmlentities($Actor) ."</td>";
	echo "<td>" . htmlentities($Title) ."</td>";
	echo "<td>" . htmlentities($Price) ."</td>";
	echo "<td>" . htmlentities($Year) ."</td>";
	echo "<td>" . htmlentities($Genre) ."</td>";
	echo "</tr>";
}
?>
</table>

	<form action="dbicw.html" onSubmit="return true">
		<br>
		<input type="submit" value="Go To Homepage">
	</form>

</body>
</html>