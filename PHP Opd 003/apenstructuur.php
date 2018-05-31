<?php
/**
 * Created by PhpStorm.
 * User: dkopp
 * Date: 30-5-2018
 * Time: 15:03
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
        body {
            text-align:center;
        }

        .rood {
            border:red solid 5px;
        }

        .groen {
            border:green solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i<=9 ;$i++){
    if ($i % 2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo "<img ".$class."src='IMG/apen/aap".$i.".jpg'>";
}

?>
</body>
</html>