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
        echo "belajar metode string <br>";
        
        // strlen && str_word_count
        // str_replace(find, replace, string)
        // str_repeat(text, times)
        // str_shuffle(text)

        $text = "Hai semuanya ayo belajar ";
        echo strlen($text);
        echo "<br>";
        echo str_word_count($text);
        echo "<br>";
        echo str_repeat("halo ", 10);
        echo "<br>";
        echo str_repeat(str_replace("ayo", "mari", $text), 3);
        
        ?>
</body>
</html>