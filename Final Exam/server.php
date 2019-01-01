<?php
if(isset($_POST['user']))
{
    $user = $_POST['user'];

    switch($user)
    {
        case "hi":
            echo "hello";
            break;

        case "love":
            echo "shivupavithra";
            break;
        
        default :
        echo "nothing";
        break;
            
        
    }
}
?>