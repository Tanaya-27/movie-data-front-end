<html>
	<head>
		<title>Tanaya Patel</title>
		<LINK REL='stylesheet' TYPE='text/css' HREF='dbicw.css'>
		<script type="text/javascript" src="dbicw.js"></script>
	</head>
	<body>
	<nav id="navbar" style="display: block;">
			<input type="checkbox" id="check" class="toggle" name="chktoggle">
			<label for="check" class="checkbtn">
				<div class="burger">
					<svg class="hamburger" width="50px" height="50px">
						<g stroke-width="4px" stroke-linecap="round" stroke="azure">
							<path d="M10 10 L60 10"/>
							<path d="M10 20 L60 20"/>
							<path d="M10 30 L60 30"/>
						</g>
					</svg>

					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
			</label>
			<label class="only">Only</label>
			<label class="tans">Tans</label>
			<ul>
				<li><a class="active" href="dbicw.html">HOME</a></li>
				<li><a class="active" href="search_movie.html">Search Movie</a></li>
				<li><a class="active" href="search_actor.html">Search Actor</a></li>
				<li><a class="active" href="add_movie.php">Add Movie</a></li>
				<li><a class="active" href="add_actor.html">Add Actor</a></li>
				<li><a class="active" href="delete_movie.php">Delete Movie</a></li>
				<li><a class="active" href="delete_actor.php">Delete Actor</a></li>
			</ul>
		</nav>
		<button onclick="hideBar()">X</button>
		<h1>Select the movie to delete</h1>

		<?php
			//SQL
			//establishing the database connection (insert correct details)
			$db_host = ;//database host
			$db_name = ;//database name
			$db_user = ;//mysql username
			$db_pass = ;//database password
            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
            if ($conn->connect->errno) die("Failed to connect to db\n</body>\n</html>");                
            $sql="SELECT mvID, mvTitle FROM Movie";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $stmt->bind_result($ID, $Name);
		?>

		<form action="delete_movie_result.php" onSubmit="return validate(this)">
		<label for="movie">Select a movie</label>
			<select name="movie" id="movie">
				<?php
                    while($stmt->fetch())
                    {
                        echo "<option value='".htmlentities($ID)."'>".htmlentities($Name)."</option>";
                    }
				?>
			</select>
			<br><br>
			<input type="submit" value="Delete">
		</form>

		<form action="dbicw.html" onSubmit="return true">
			<br>
			<input type="submit" value="Go Back">
		</form>
		
	</body>
</html>