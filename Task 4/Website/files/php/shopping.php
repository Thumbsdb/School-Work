<html>
<head>
	<title>php shit</title>
</head>
<body>

<?php
$colour = "purple";
$number = "5";
$x = 5;
$y = 10;

echo "<p>" . $colour . " " . $number . "</p>";

	function test() {
		global $x, $y	;
		$y = $x + $y;
	}
	
	test();
	echo "<p>" . $y . "</p>";

$a = "War";
echo "World " . $a;

?>








</body>
</html>
