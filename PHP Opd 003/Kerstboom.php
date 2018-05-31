<?php
/**
 * Created by PhpStorm.
 * User: dkopp
 * Date: 31-5-2018
 * Time: 12:22
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
    </style>
</head>
<body>
<?php
for ($i = 0; $i <=9; $i++) {
    for ($j = 0; $j<$i; $j++){
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</html>

