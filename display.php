
<form action="" method="post">
	
	<input type="text" name="height">

	<input type="submit" name="getheight">

</form>


<?php



$host = "localhost";
$username = "root";
$password = "";
$db = "mydb";


$con = new mysqli($host, $username, $password, $db);


if (isset($_POST['getheight'])) {
	$h = $_POST['height'];

	$s = "select * from man where height='$h'";

	$d = $con->query($s);

	if ($d->num_rows > 0) {
		while ($r = $d->fetch_assoc()) {
			$data[] = $r;
		}
	}


}



// $str = "select * from man";

// $d = $con->query($str);

// if ($d->num_rows > 0) {
// 	while ($r = $d->fetch_assoc()) {
// 		echo "height : " . $r['height'] . " name : " . $r['name'] . "<br>" ;
// 	}
// }

?>


<table border="1">
	
	<tr>
		<td>Height</td>
		<td>Name</td>
	</tr>


	<?php

		foreach ($data as $d) {
			echo "<tr>";

				echo "<td>" . $d['height'] . "</td>";
				echo "<td>" . $d['name'] . "</td>";
			echo "</tr>";
		}


	?>

</table>