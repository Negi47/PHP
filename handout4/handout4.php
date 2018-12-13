<?php
$username = 'root';
$password = '';
$host = 'localhost';

//$con = new mysqli($host,$username,$password);
//$a = "create database exam";

//$con->query($a);

$c = new mysqli($host,$username,$password,"exam");
// $b ="create table exam3(rollno int(10), name varchar(10))";
// $c->query($b);

// $e = "insert into exam3 values(12,'negi')";
// $c->query($e);


$stm = $c->prepare("insert into exam3 values(?,?)");
$stm->bind_param("is", $roll, $nm);


$roll = 44;
$nm = "nm name";
$stm->execute();


$roll = 99;
$nm = "nm another name";
$stm->execute();

?>
