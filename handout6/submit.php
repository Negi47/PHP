
<form action="" method="post">
	
	<input type="text" name="height">
	<input type="text" name="name">

	<input type="submit" name="submitdata">

</form>



<?php 


$host = "localhost";
$username = "root";
$password = "";
$db = "mydb";


$con = new mysqli($host, $username, $password, $db);



if (isset($_POST['submitdata'])) {
	$h = $_POST['height'];
	$n = $_POST['name'];

	$str = "insert into man values ('$h', '$n')";

	$con->query($str);
}

?>