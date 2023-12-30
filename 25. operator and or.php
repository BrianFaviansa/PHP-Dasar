<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if dan else pada php</title>
</head>
<body>
    <?php

    $uang_programmer = 1000;
    $keyboard = 2000;
    $uang_designer = 4000;

    // && atau ||
    if ($uang_programmer > $keyboard || $uang_designer > $keyboard) {
        echo "bisa beli keyboard";
    } else {
        echo "ngga bisa beli keyboard";
    }
    
    echo "<br>";

    if ($uang_programmer > $keyboard && $uang_designer > $keyboard) {
        echo "bisa beli keyboard";
    } else {
        echo "ngga bisa beli keyboard";
    }

    ?>
</body>
</html>