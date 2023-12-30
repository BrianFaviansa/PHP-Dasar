<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
    <h1>Array PHP</h1>

    <?php 
    // associative array
    // key => value
    $data = [ "nama" => "ucup",
            "umur" => 21, 
            "pekerjaan" => "programmer"
    ];
    // print_r($data);
    // echo "<br>";
    // echo "namanya adalah " . $data['nama'] ." dan umurnya adalah " . $data['umur'] . " tahun";
    // $data['nama'] = "ucup surucup";
    // echo "<br>";
    // echo "namanya adalah " . $data['nama'] ." dan umurnya adalah " . $data['umur'] . " tahun";

    // metode associative array
    // array_values array_keys array_merge
    print_r(array_values($data));
    echo "<br>";
    print_r(array_keys($data));
    echo "<br>";

    $data2 = [
        "istri" => "belum ada",
        "laptop" => "macbook pro"
    ];

    print_r(array_merge($data, $data2))

    ?>
</body>
</html>