<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<!-- <input type="text" name="text1">
	<input type="text" name="text2"> -->
	
	<input type="text" name="text3">
	<input type="submit" name="search">
</form>
</body>
</html>
<?php


	$username = "root";
	$localhost = "localhost";
	$password = "";

	$db = "internal";

	$con = new mysqli($localhost,$username,$password,$db) ;
	
	//$a = "create database internal";

	//$ta = "create table handout5(roll int(10),name varchar(10))";

	//$con->query($a);

	//$con->query($ta);

	// $ia = "insert into handout5 values(10,"heloo")";

	//$con->query($ia);


	// if (isset($_POST["submit"])) {
	
	// 	$a = $_POST['text1'];
	// 	$b = $_POST['text2'];
	
	// 	# code...
	// 	$ia = "insert into handout5 values('$a','$b')";

	// 	$con->query($ia);
	// }


	// if (isset($_POST['search'])) {
	// 	$c = $_POST['text3'];

	// 	$d = "select *from handout5 where roll=10 ";

	// 	$sea = $con->query($d);

	// 	if($sea->num_rows > 0) {
	// 		while ($ob= $sea->fetch_assoc()) {

	// 			echo $ob['name'];
	// 			# code...
	// 		}
	// 	}
	// }

	// $pa = $con->prepare("insert into handout5 values(?,?)");

	// $pa->bind_param("is",$first,$second);

	// $first = 10;
	// $second = "myname";
	// $pa->execute();

	// $first = 20;
	// $second = "mname";
	// $pa->execute();

	echo "Table is created";

	$se = "select * from handout5";

	// $sa = "delete from handout5 where roll=33";
	
	// $con->query($sa);

	// $out = $con->query($se);

	if ($out = $con->query($se)) {
		# code...
		while ($ob=$out->fetch_field()) {
		# code...
			// $data[] = $ou;
			// printf("%d",$ob->roll);
			printf("%s \n",$ob->name);
			printf("%s \n",$ob->length);
		}
	}


	
?>

<table>
	<tr>
		<td>
			Roll No.
		</td>
		<td>
			Name
		</td>
	</tr>
	<?php
	
			// foreach ($data as $d) {
			// 	echo "<tr>";
			// 	echo "<td>" . $d['roll'] . "</td>";
			// 	echo "<td>" . $d['name'] . "</td>";
			// 	echo "</tr>";
			// }
		
	?>
</table>