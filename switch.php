<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $method="csa";
    switch($method){
        case"square":
            echo"square value is : ".(sqrt(25));
            break;
        case"abs":
                echo"abs value is : ".(abs(55.8));
            break;
        case"power":
                    echo"power value is : ".(pow(5,2));
            break;
            default:
                    echo"It is not a method";
    }
    ?>
</body>
</html>