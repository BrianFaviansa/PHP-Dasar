<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php anonymous function</title>
</head>
<body>
    <?php
    // anonymous function

    $ngetik = function($text){
        echo " selamat datang ". $text;
    };

    $ngetik();

    $greeting = $ngetik;

    $greeting('ucup');
    ?>
</body>
</html>