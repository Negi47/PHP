<?php

// $arr = array(1,2,3);
// $ar =array('a','b','c');

// for($i=0, $j=0; $i < sizeof($arr), $j < sizeof($ar); $i++, $j++) {
//     $newarr[$arr[$i]] = $ar[$j];
// }

// print_r($newarr);

// $str = "saurabh helo";
// $length = explode(" ", $str);
// print_r($length);
// echo " lenth is " . sizeof($length);



class alpha {

    function __construct() {
        echo "alpha constructor";
    }

    function myfun() {
        echo "my memeber func";
    }

}

$al = new alpha;

$al->myfun();




?>