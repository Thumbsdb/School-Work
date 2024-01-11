<!DOCTYPE html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device">
	<meta name="description" content="Affordable Web Design For Small and Medium-sixed Companies">
	<meta name="author" content="Chris Hadden">
	<title>NASA space exploration</title>
	<link rel="stylesheet" href="./css/UAM.css">
</head>
<body>
<header>
<nav>
	<ul>
		<li><a href="index.php">Homepage</a></li>
		<li><a href="journey.php">Book Your Journey</a></li>
		<li><a href="pictures.php">Pictures of our Journey</a><li>
		<li><a href="about.php">About us</a></li>
		<li><a href="login.php">login</a></li>
		<li><a href="UAM.php">UAM</a></li>
	</ul>
</nav>	
</header>
<body>
<main>
	<div class="box-container">

		<div class="sidebar">
			<ul>
				<li><a href="index.html">PUT BACK ARROW IN</a></li>
				<li><p>Account Details</p></li>
				<li><p>Payment methods</p></li>
				<li><p>Sequitryt7ytyu</p></li>
			</ul>
		</div>

		<div class="box3">
				
					<ul>
						<li><img src="./images/Plane.jpg" width="100" height="00"></li>
						<li><p>Full Name: Chriss Hadden</p></li>
						<li><p>Payment methods</p></li>
						<li><p>Sequitryt7ytyu</p></li>
						<?php
						// We need to use sessions, so you should always start sessions using the below code.
						session_start();
						// If the user is not logged in redirect to the login page...
						if (!isset($_SESSION['loggedin'])) {
							header('Location: index.html');
							exit;
						}
						$DATABASE_HOST = 'localhost';
						$DATABASE_USER = 'root';
						$DATABASE_PASS = '';
						$DATABASE_NAME = 'phplogin';
						$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
						if (mysqli_connect_errno()) {
							exit('Failed to connect to MySQL: ' . mysqli_connect_error());
						}
						// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
						$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
						// In this case we can use the account ID to get the account info.
						$stmt->bind_param('i', $_SESSION['id']);
						$stmt->execute();
						$stmt->bind_result($password, $email);
						$stmt->fetch();
						$stmt->close();
						?>
					</ul>
				
			
				<div class="container" style="padding:50px;" >
					<ul>
						<li><p>Journey 1</p></li>
						<li><p>Journey 2</p></li>
						<li><p>Journey 3</p></li>
						<li><p>Journey 4</p></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</main>
</body>
</html>
