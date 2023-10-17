<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

    // Mảng chỉ số cần sắp xếp
    $indexedArray = [5, 3, 1, 4, 2];
    echo "Mảng chỉ số gốc: ";
    print_r($indexedArray);
    echo "<br>";

    // Sắp xếp mảng chỉ số tăng dần
    sort($indexedArray);
    echo "Mảng chỉ số tăng dần: ";
    print_r($indexedArray);

        echo "<br>";
    // Sắp xếp mảng chỉ số giảm dần
    rsort($indexedArray);
    echo "Mảng chỉ số giảm dần: ";
    print_r($indexedArray);

        echo "<br>";
    // Mảng kết hợp cần sắp xếp
    $assocArray = ['b' => 2, 'a' => 1, 'd' => 4, 'c' => 3];
    echo "Mảng kết hợp gốc: ";
    print_r($assocArray);

        echo "<br>";
    // Sắp xếp mảng kết hợp theo giá trị tăng dần
    asort($assocArray);
    echo "Mảng kết hợp theo giá trị tăng dần: ";
    print_r($assocArray);

        echo "<br>";
    // Sắp xếp mảng kết hợp theo giá trị giảm dần
    arsort($assocArray);
    echo "Mảng kết hợp theo giá trị giảm dần: ";
    print_r($assocArray);

        echo "<br>";
    // Sắp xếp mảng kết hợp theo khóa tăng dần
    ksort($assocArray);
    echo "Mảng kết hợp theo khóa tăng dần: ";
    print_r($assocArray);

    echo "<br>";
    // Sắp xếp mảng kết hợp theo khóa giảm dần
    krsort($assocArray);
    echo "Mảng kết hợp theo khóa giảm dần: ";
    print_r($assocArray);

    ?>
</body>
</html>