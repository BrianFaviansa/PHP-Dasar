<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function pada php</title>
</head>
<body>
    <?php
    // function

    // parameter
    function print_text($text, $angka){
        echo "---------";
        echo " halo ". $text. " " . $angka ;
        echo "---------";
    }

    function jarak(){
        echo "<br>";
    }

    print_text("ucup", 12);
    jarak();
    print_text("asep", 65);
    jarak();
    ?>
</body>
</html>