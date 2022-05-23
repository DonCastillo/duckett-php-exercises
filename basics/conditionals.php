<?php
    $name = 'Don';
    $greeting = 'Hello';

    if($name !== '') {
        $greeting = 'Welcome back, '.$name;  
    }


    $stock = 5;

    if($stock > 0) {
        $message = 'In stock';
    } else {
        $message = 'Sold out';
    }

    $ternary = $stock > 0 ? 'In stock' : 'Sold out';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <h1>Conditional Statements</h1>
    <h2><?= $greeting ?></h2>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
    <p><?= $ternary ?></p>
</body>
</html>