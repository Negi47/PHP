<!DOCTYPE html>
<html>
<head>
	<title>GCD</title>
</head>
<body>
<form action="" method="POST">
	M: <input type="text" name="number">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
	# code...
	//echo "working";
	$m = $_POST["number"];

	for ($i=0; $i <$m ; $i++) { 
		# code...
		echo " " .fibo($i)."";
	}
	
	//echo "fibo($m)";
	
}
function fibo($m)
	{
		# code...

		if($m == 0)
			return 0;
		else if($m == 1)
			return 1;
		else
			return fibo($m-1) + fibo($m-2);
		
	}
	// for ($i=0; $i <$m ; $i++) { 
	// 	# code...
	// 	echo " " .fibo($i)."";
?>