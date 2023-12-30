<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mengeluarkan hasil array</title>
</head>
<body>
    <?php
    

    $hewan = ["anjing", "babi", "cicak", "domba", "buaya"];

    // for ($i = 0; $i < count($hewan); $i++) {
    //     echo $hewan[$i];
    //     echo "<br>";
    // }

    foreach($hewan as $h) {
        echo $h;
        echo "<br>";
    }

    

    ?>
</body>
</html>