<!DOCTYPE html>
<html>
<head>
    <title>Automobile Database</title>
</head>
<style>
table, td{
    border : 1px solid black;
    border-collapse : collapse;        
}
td{
    padding: 5px;
}
</style>

<body>
<form action="" method="post"> 
Enter the Model No:       
<br><input type="text" name="Modelno"><br>
<br>Enter the Model Name:<br>
<input type="text" name="Modelname"><br>
<br>Enter the Category: <br>
<input type="text" name="category"><br>
<br>Enter the Price:<br>
<input type="text" name="price"><br>
<br>Enter the Mileage:<br>
<input type="text" name="mileage"><br>
<br>&nbsp;<input type="submit" name="submit" value= "Submit">
</form>
</body>
</html>

<?php

$localhost = "localhost";
$username = "root";
$password = "";
$db = "automobile";

// $con = new mysqli($localhost,$username,$password);
$con_insert = new mysqli($localhost,$username,$password,$db);

$con_display = new mysqli($localhost,$username,$password,$db);

if ($con_insert->connect_error && $con_display->connect_error) {
    die("Connection failed for Insert: " . $con_insert->connect_error ."Connection failed for Display" .$con_display->connect_error);
} 

if(isset($_POST['submit']))
{
    $modelname = $_POST['Modelname'];
    $modelno = $_POST['Modelno'];
    $catogery = $_POST['category'];
    $price = $_POST['price'];
    $mileage = $_POST['mileage'];

    // $db = "create database automobile";

    // $tb = "create table cars(Modelno varchar(10), Modelname varchar(10), catogery varchar(10), 
    // price int,mileage varchar(10))"; // create table

    $insert = "insert into cars values('$modelno','$modelname','$catogery',$price,'$mileage')";
    if($con_insert->query($insert)==true)
    {
        echo "One Data Inserted";
    }
    else
    {
        die("Connection failed: " . $con_insert->error);
    }

}	

    $display = "select *from cars";
    $rslt = $con_display->query($display);
    if($rslt->num_rows > 0)
    {
		while ($ob=$rslt->fetch_assoc()) {
            // printf("%s \n",$ob['modelno']);
            $cardata[] = $ob;
		
		}
    }
    
?>

<table>
    <br>
	<tr>
		<td>
			Model No.
        </td>
		<td>
            Modelname
        </td>
        <td>
			Category
		</td>
		<td>
            Price
        </td>
        <td>
			Mileage
		</td>
    </tr>
    <?php 
    foreach ($cardata as $data):
        echo "<tr>";
            echo "<td>" . $data['Modelno'] . "</td>";
            echo "<td>" . $data['Modelname'] . "</td>";
            echo "<td>" . $data['catogery'] . "</td>";
            echo "<td>" . $data['price'] . "</td>";
            echo "<td>" . $data['mileage'] . "</td>";
        echo "</tr>";
    endforeach;
    ?>
</table>
