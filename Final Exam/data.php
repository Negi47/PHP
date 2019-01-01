<?php 

// if (isset($_POST['user']) && isset($_POST['passs'])) {
//     $user = $_POST['user'];
//     $passs = $_POST['passs'];
// }

if (isset($_GET['user']) && isset($_GET['passs'])) {
    $user = $_GET['user'];
    $passs = $_GET['passs'];
}

echo "<input type=\"text\" value=\"$user\">" . $passs;

?>
