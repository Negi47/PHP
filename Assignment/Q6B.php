<!DOCTYPE html>
<html>
<head>
    <title>Tribonnaci Series</title>
</head>
<body>
    <form action="" method="POST">
        <p>Tribonnaci Series</p>
        Enter the Value1: <br><input type="text" name="value1"><br><br>
        Enter the Value2: <br><input type="text" name="value2"><br><br>
        Enter the Value3: <br><input type="text" name="value3"><br><br>
        Enter the Limit:  <br><input type="text" name="limit"><br>
        <br><input type="submit" name="submit" value="Submit" style="padding:4px; margin-left: 10px;">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $a = $_POST['value1'];
        $b = $_POST['value2'];
        $c = $_POST['value3'];
        $e = $_POST['limit'];
        $d = array($a,$b,$c);
        $i=3;
        if($a=="" && $b=="" && $c=="")
        {
            echo "Please enter all the Values";
        }
        else
        {
            while($i<$e)
            {   $d[$i]=$d[$i-1]+$d[$i-2]+$d[$i-3];
                $i++;
            } 
            
            echo "<br>Tribonnaci Series are: ";
            foreach($d as $x => $value) {
                echo " " .$value; 
            }   
        }
    }
?>