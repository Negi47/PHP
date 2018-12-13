<?php
// $a = fopen("abc1", "a") or die ("unable to open");
// fwrite($a, "Hello is Good Morning\n");
// fwrite($a, "My class is 3 sem");
// fclose($a);

// Reading Mode
$b = fopen("abc1", "r");

$c = filesize("abc1");

echo $c;

echo fread($b, $c);

// while (!feof($b)) {

// 	echo fgets($b) ."<br>";
// 	//echo fgetc($b);
// }
echo "Executed";
?>