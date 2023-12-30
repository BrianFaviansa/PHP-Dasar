<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while dan do while</title>
</head>
<body>
    <?php
    // while dan do while 
    // while(syarat)

    $hewan = ["anjing", "babi", "cicak", "domba", "buaya"];


    $i = 0;
    while($i < count($hewan)) {
        $hewan[$i] . "<br>";
        $i++;
    };
    
    // do while akan menjalankan kode nya minimal 1 kali tanpa peduli syarat nya
    do{
        $hewan[$i] . "<br>";
        $i++;
    } while ($i < count($hewan));
    

    ?>
</body>
</html>