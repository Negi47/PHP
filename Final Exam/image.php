<?php
if(isset($_POST['count']))
{
    $v = $_POST['count'];
    $noimg = array("apple.jpg","apple2.jpg");
    echo "<img src='" . $noimg[$v%2] . "'>" . "<img src='" . $noimg[($v+1)%2] . "'>";
}
?>
