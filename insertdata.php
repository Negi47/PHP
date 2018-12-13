<form action="" method="post">
	
	<input type="text" name="rollnum" placeholder="Rollno">
	<input type="text" name="name" placeholder="name">

	<input type="submit" name="send" value="submit data">

</form>


<form action="" method="post">
	
	<input type="text" name="searchroll" placeholder="rollnumber">

	<input type="submit" name="search" value="search data">

</form>



<?php 


$host = "localhost";
$username = "root";
$password = "";
$db = "exam";


$con = new mysqli($host, $username, $password, $db);


if (isset($_POST['send'])) {
	$roll = $_POST['rollnum'];
	$name = $_POST['name'];

	// echo $roll . " " . $name;


	$stm = "insert into exam3 values ('$roll', '$name')";

	$con->query($stm);
}


if (isset($_POST['search'])) {

	$rolln = $_POST['searchroll'];

	if (isset($rolln)) {
		$stm = "select * from exam3 where rollno='$rolln'";

		$result = $con->query($stm);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
				echo $row["name"];
		}
		else {
			echo "data not found";
		}
	}

	

}



?>
<!-- <!-- 
<table border="1">
	<tr>
		<td>Rollnum</td>
		<td>Name</td>
	</tr>

	<?php
		foreach ($data as $d) {
			echo "<tr>";
				echo "<td>" . $d['rollno'] . "</td>";
				echo "<td>" . $d['name'] . "</td>";
			echo "</tr>";
		}
	?>
</table> --> -->