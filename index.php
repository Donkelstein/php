<!doctype html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Portalen till den hemligaste sidan</title>
	<link href="https://fonts.googleapis.com/css?family=Alegreya%7CAlegreya+Sans" rel="stylesheet">
	<style>
	main {
		width: 80%;
		margin: 0px auto;
	}
	body {
		font-family: 'Alegreya', serif;
	}
	h1 {
		font-family: 'Alegreya Sans', sans-serif;
	}
	</style>
</head>
<body>
<main>
	<h1>Välkommen</h1>
	<form action="login.php" method="POST">
		<fieldset>
			<legend>Logga in</legend>
			<p>
				<label for="username">Användarnamn: </label>
				<input type="text" name="username" id="username">
			</p>
			<p>
				<label for="password">Lösenord: </label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<input type="submit" name="submit" id="submit" value="Logga in">
			</p>
		</fieldset>
	</form>
</main>
</body>
</html>