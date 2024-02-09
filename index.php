<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
    $title = "Student";

    //Creating associative array
    $names = ["first_name"=>"Paul", "last_name"=>"Silas"];

    $numszi = 20;
?>

<body>
    <!-- Use "." for concatenation in PHP-->
    <h1><?php echo "Welcome " . $title; ?></h1>
    <h2><?php echo "Welcome $title"; ?></h2>
    
    <!--Accessing associative array values in PHP by using their keys instead of index -->
    <h1><?php echo $names["first_name"] . " " . $names["last_name"]?></h1>
    <p>
        <?php
            //Implementing switch statements as a replacement for if else statements 
            switch ($numszi) {
                case 10:
                    echo "10 is not equal to " . $numszi;
                    break;
                case 40:
                    echo "20 is equal to ". $numszi;
                    break;
                default:
                    echo "Condition was not met";
                    break;
            }
        ?>
    </p>
</body>
</html>