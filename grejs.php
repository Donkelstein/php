<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widht=device-width, initial.scale=1.0">
	<title></title>
</head>
<body>
						
<form method="POST" action="">
	<input type="text" name="guess" id="guess">
	<input type="submit" name="submit" value="gissa">



<?php

if(!$_SESSION['random']) {
	$_SESSION['random'] = random_int(1, 20);
	$_SESSION['guesses'] = 0;
}

	$_SESSION['guesses'] ++;


	if(isset($_POST['guess'])) {
		$guess = filter_input(INPUT_POST,'guess', FILTER_VALIDATE_INT);
		echo "<h1>" . $_POST['guess']. "</h1>";
	


	if ($guess == $_SESSION['random']) {

		echo "<h1>Va bra...</h1>";
		$_SESSION['random'] = random_int(1, 20);


	} elseif ($guess < $_SESSION['random']) {
		echo "<h1>lite för lågt</h1>";

	} elseif ($guess > $_SESSION['random']) {
		echo "<h1>Lite för högt</h1>";
	}
}


echo $_SESSION['random'];


?>


</body>


</html>