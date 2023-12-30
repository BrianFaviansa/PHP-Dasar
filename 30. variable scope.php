<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scope pada php</title>
</head>
<body>
    <?php
    
    $a = 1000;
    $b = 10;

    function tambah(){
        global $a, $b;
        
        // $c = $GLOBALS['a'] + $GLOBALS['b'];
        $c = $a +$b;
        return $c;
    }

    echo tambah();

    

    ?>
</body>
</html>