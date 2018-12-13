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

class rectangle
{
	// public $l = 10;
	// public $w = 10.5;

	public function area($l, $m)
	{
		$a = (int)$l * $m;
		echo "Area of rectangle: $a <br>";
	}
	public function perimeter($l, $m)
	{
		# code...
		$b = 2 * ((int)$l + $m);
		echo "Area of rectangle: $b";
	}
}

if (isset($_POST["submit"])) {

	$l = $_POST['number'];
	$m = $_POST['number2'];
	
	$c = new rectangle;
	
	$c->area($l, $m);
	$c->perimeter($l,$m);
}


// $c->area();
// $c->perimeter(); 
?>