<!DOCTYPE html>
<html lang="en">
<head>
    <title>program</title>
</head>
<body>
    <?php
    $x=8;
    if($x<10){
        echo("You are not eligible");
    }
    else{
        if($x>=18 and $x<=60){
            echo("You are eligible");
        }
        else{
            echo("You are too old");
        }
    }
    ?>
</body>
</html