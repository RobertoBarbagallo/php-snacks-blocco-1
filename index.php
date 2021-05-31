<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$partiteBasket = [

[
    "squadra_casa" => "Olimpia Milano" , 
    "squadra_fuoricasa" => "Venezia",
    "punti_casa" => "81",
    "punti_fuoricasa" => "79",
],
[
    "squadra_casa" => "Brindisi" , 
    "squadra_fuoricasa" => "Virtus Bologna",
    "punti_casa" => "66",
    "punti_fuoricasa" => "73",
],
[
    "squadra_casa" => "Brescia" , 
    "squadra_fuoricasa" => "Varese",
    "punti_casa" => "98",
    "punti_fuoricasa" => "83",
],
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite Basket</title>
</head>
<body>
    <?php 
    for($i = 0; $i < count($partiteBasket); $i++){
        $partita = $partiteBasket[$i];
        $result = $partita["squadra_casa"] . " - " . $partita["squadra_fuoricasa"] . " | " . $partita["punti_casa"] . " - " . $partita["punti_fuoricasa"]
    ?>
            <h3><?php echo $result ?></h3>
    <?php 
        }
    ?>
</body>
</html>
