<!-- 1 question -->
<!-- <?php
setcookie("hello","my value");
echo $_COOKIE["hello"];
?> -->


<!-- 2nd question -->
<!-- <?php
$e = new DateTime("now");
echo "new time : " . $e->format("h-i-s") . "<br>";

setcookie("NowDate",$e->format("h-i-s"),time() + 20000);

// setcookie("CurrentDate",$e->format("h-i-s"));

echo "old time : " .  $_COOKIE["NowDate"];
?>
-->


<?php

$_SESSION['my'] = 0;
session_start();

if (isset($_SESSION['my']))
	$_SESSION['my']++;
else
	echo $_SESSION['my'];


echo $_SESSION['my'];

// session_destroy();
?>


