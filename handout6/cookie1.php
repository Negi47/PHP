<?php
$e = new DateTime("now");
echo "new time : " . $e->format("h-i-s") . "<br>";

setcookie("NowDate",$e->format("h-i-s"));

echo "old time : " .  $_COOKIE["NowDate"];
?>