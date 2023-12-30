<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
    <h1>Array PHP</h1>
    <?php
    // multidimensional array

    $data = [
        ["programmer", 21, "males"],
        ["designer", 24, "rajin"],
        ["manager", 34, "males banget"]
    ];

    print_r($data);
    echo "<br>";
    $data[2][0] = "project manager";
    echo $data[2][0];


    ?>
</body>
</html>