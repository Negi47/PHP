<?php
if(isset($_POST['value1']) && isset($_POST['value2'])){
    $ab = $_POST['value1'];
    $ba = $_POST['value2'];
   

   
   
    // $ca =0;
    // $ca = $ab*$ba;
    echo getnum($ab, $ba);
    
}

function getnum($a, $b) {
    
    function prod($a,$b) {
        return $a*$b;
    }

    return prod($a,$b);
}

?>