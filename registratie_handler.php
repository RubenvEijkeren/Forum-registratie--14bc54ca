<!DOCTYPE html>
<html>
<head>
	<title>Handler</title>
</head>
<body>
	<h1>Forum registratie</h1>
	<?php
	echo "<h4>Jouw username is " . $_POST["user"] . "</h4>";
	echo "<h4>Jouw email is " . $_POST["email"] . "</h4>";
	echo "<h4>Jouw leeftijd is " . $_POST["age"] . "</h4>";
	?>
</body>
</html>