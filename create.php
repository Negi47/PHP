<?php


$host = "localhost";
$username = "root";
$password = "";
$db = "mydb";


$con = new mysqli($host, $username, $password, $db);

// $str = "create database mydb";


// $str = "create table man (height int(10), name varchar(20))";


// $str = "insert into man values(123, 'saueabh')";

$strpre = $con->prepare("insert into man values(?, ?)");

$strpre->bind_param("is", $first, $second);


$first = "888";
$second = "negi";
$strpre->execute();


$first = "897";
$second = "jani";
$strpre->execute();


$first = "678";
$second = "rohn";
$strpre->execute();



// $con->query($str);



?>