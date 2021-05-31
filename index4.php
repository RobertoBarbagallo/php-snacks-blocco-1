<?php 

$newArray = [];
$numbers = 15;
$min = 1;
$max = 100;


while(count($newArray) < $numbers){

    $number = rand($min, $max);
    if(!in_array($number, $newArray)){
    $newArray[] = $number;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNDNUM</title>
</head>
<body>
    <h1><?php echo $numbers ?> numeri generati casualmente non uguali tra loro</h1>
    <strong><?php echo implode("<br>", $newArray)?></strong>
  
</body>
</html>

