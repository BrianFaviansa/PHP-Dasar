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


    // di balik layar ini adalah pengecekan true or false
    if($uang_programmer > $keyboard) {
        echo "berhasil dibeli";
    } else if ($uang_designer < $keyboard) {
        echo "berhasil beli dengan uang designer";
        if ( $uang_designer >= $keyboard *2) {
            echo "designer beli 2 kali";
        }
    } else {
        echo "uang tidak cukup";
    }

    ?>
</body>
</html>