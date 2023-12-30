<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mengeluarkan hasil array</title>
</head>
<body>
    <?php
    

    // $hewan = ["anjing", "babi", "cicak", "domba", "buaya"];

    // foreach($hewan as $h) {
    //     echo $h;
    //     echo "<br>";
    // }


    $data = ["nama" => "ucup", "umur" => 21, "sifat" => "malas"];

    foreach($data as $key => $value) {
        echo $key ;
        echo " ";
        echo $value . "<br>";
    }

    

    ?>
</body>
</html>