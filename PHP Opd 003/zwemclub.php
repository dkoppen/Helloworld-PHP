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

    </style>
</head>
<body>
<?php
$zwemclubs["De spartelkuikens"] = 25;
$zwemclubs["De waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

//foreach ($zwemclubs as $key => $value) {
//    echo $key." ".$value. "<img src='IMG/zwem.jpg'>". "<br>";
//}
//echo $value / 5 * print de image;
foreach ($zwemclubs as $key => $value) {
    echo $key." ".$value. str_repeat("<img height='30' width='30' src='IMG/zwem.jpg'>", $value/5). "<br>";

}

if ($zwemclubs % 5 == 0) {
    echo "IMG/zwem.jpg";
}

?>
</body>
</html>

