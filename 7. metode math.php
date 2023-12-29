<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    
    <?php 
        // belajar php
        
        $angka = 1000;
        $angka2 = 3;
        $angka3 = 2.44;
        $angka4 = 2.51;

        // math method
        // round rand(min, max) max min

        // round -> membulatkan terdekat : < 5 turun, > 5 naik
        echo round($angka3);
        echo "<br>";
        echo round($angka4);
        echo "<br>";
        
        // rand -> angka yg di tulis sebagai min dan max termasuk dalam rangenya
        echo "angka hari ini adalah ". rand(5,10);
        echo "<br>";
        
        // max dan min
        echo max(1,3,5,7,9,10,22);
        echo "<br>";
        echo min(1,3,5,7,9,10,22);
        echo "<br>";
    ?>
</body>
</html>