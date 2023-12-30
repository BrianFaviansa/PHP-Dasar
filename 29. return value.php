<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function pada php</title>
</head>
<body>
    <?php
    // return value

    function tambah($a, $b){
        $hasil = $a + $b;
        return $hasil;
    }

    function jarak(){
        echo "<br>";
    }

    echo(tambah(2,4));
    jarak();
    echo "hasil dari penjumlahan ". tambah(2, 4);

    $hasilKaliSepuluh = tambah(2, 5) * 10;
    echo "hasil di kali sepuluh adalah ". $hasilKaliSepuluh;
    

    ?>
</body>
</html>