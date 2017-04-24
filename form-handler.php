<html> 
<body>

Welcome <?php 
	if (isset(($_POST["name"])){
		echo $_POST["name"];
	}
	else { 
		echo "(you didn't provide a name)";
	}

?><br>
Your email address is: <?php
	echo $_GET["email"];
	echo filter_input(INPUT_GET, 'email');
	?>

</body>
</html>
