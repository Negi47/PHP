<!DOCTYPE html>
<html>
<head>
	<title>GCD</title>
</head>
<body>
<form action="" method="POST">
	M: <input type="name" name="number">
	N: <input type="name" name="number2">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
	# code...
	//echo "working";
	$m = $_POST["number"];
	$n = $_POST["number2"];

	gcd($m,$n);
	
}
function gcd($m,$n)
	{
		# code...
		while($n > 0)
		{
			$r =(int)$m % $n;

			$m = $n;
			$n = $r;
		}

		echo $m;
	}
?>