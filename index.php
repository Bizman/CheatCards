<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Mental Poker !</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body>
		<h1>Mental Poker !</h1>
		<p>
			<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
				<input type="radio" name="type_jeux" id="honnete" value="honnete"><label for="honnete">Jouer Honnetement</label><br>
				<input type="radio" name="type_jeux" id="tricheur" value="tricheur"><label for="tricheur">Jouer en trichant</label><br>
				<button type="submit" >Jouer !</button>
			</form>
		</p>
	</body>
</html>