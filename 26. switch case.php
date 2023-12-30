<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case pada php</title>
</head>
<body>
    <?php
    // switch case
    
    /*
    switch (variabel) {
        case "value":
            code
            break;
        default: 
            code
            break;
    }
    */

    $nama = "ucup";

    switch ($nama){
        case "endy":
            echo "namanya endy";
            break;
        case "ucup":
            echo "namanya ucup";
            break;
        case "asep":
            echo "namanya asep";
            break;
        default:
            echo "lu siape bro";
            break;
    }

    ?>
</body>
</html>