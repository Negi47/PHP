<?php
$a = 0;
$b = 1;
$c = 2;
$e = 14;
$d = array($a,$b,$c);
$i=3;
echo "Values are: " .$a. " " .$b. " " .$c;
echo "<br>Limit: " .$e;
while($i<$e)
{ 
    $d[$i]=$d[$i-1]+$d[$i-2]+$d[$i-3];
    $i++;
} 
echo "<br><br>Tribonnaci Series are: ";
foreach($d as $x => $value) {
    echo " " .$value. "," ; 
}   
?>