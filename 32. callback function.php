<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php anonymous function</title>
</head>
<body>
    <?php
    // callback function

    function berteriak($callback){
        echo "Haloooo <br>";
        // $callback(&text);

        // menguji apakah dia fungsi atau bukan
        if(is_callable($callback)){
            call_user_func($callback, "selamat datang");
        } else {
            echo "dia bukan fungsi";
        }

    }

    $anon = function($text){
        echo $text;
    };

    berteriak( $anon );
    berteriak( 123 );




    ?>
</body>
</html>