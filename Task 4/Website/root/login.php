<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device">
	<meta name="description" content="Affordable Web Design For Small and Medium-sixed Companies">
	<meta name="author" content="Chris Hadden">
	<title>NASA space exploration</title>
	<link rel="stylesheet" href="./css/login.css">
	<link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
<div class="box"> 
<header>
<nav>
	<ul>
		<li><a href="index.php">homepage</a></li>
		<li><a href="about.php">about us</a></li>
		<li><a href="journey.php">Book Your Journey</a></li>
		<li><a href="pictures.php">Pictures of our Journey</a><li>
		<li><a href="login.php">login</a></li>
		<li><a href="UAM.php">UAM</a></li>
	</ul>
</nav>	
</header>
<body>
<main>
	<div class="container">
	<form action="/php/authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
	</div>
</main>
</body>
</html>
