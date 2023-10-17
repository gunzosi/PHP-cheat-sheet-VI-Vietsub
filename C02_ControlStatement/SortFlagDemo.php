<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort Flag Demo</title>
</head>
<body>
<?php
// SORT_REGULAR
echo "SORT_REGULAR: ";
$array = [10, '2', 3, '4', 5];
sort($array, SORT_REGULAR);
print_r($array);
echo "<br>" . "<br>";

// SORT_NUMERIC
echo "SORT_NUMERIC: ";
$array = [10, '2', 3, '4', 5];
sort($array, SORT_NUMERIC);
print_r($array);
echo "<br>" . "<br>";

// SORT_STRING
echo "SORT_STRING: ";
$array = [10, '2', 3, '4', 5];
sort($array, SORT_STRING);
print_r($array);
echo "<br>" . "<br>";

// SORT_LOCALE_STRING
echo "SORT_LOCALE_STRING: ";
$array = ['apple', 'Banana', 'cherry', 'Date'];
sort($array, SORT_LOCALE_STRING);
print_r($array);
echo "<br>" . "<br>";

// SORT_NATURAL
echo "SORT_NATURAL: ";
$array = ['apple10', 'apple2', 'apple1', 'apple20'];
sort($array, SORT_NATURAL);
print_r($array);
echo "<br>" . "<br>";

// SORT_FLAG_CASE (cho SORT_STRING hoặc SORT_NATURAL)
echo "SORT_FLAG_CASE (cho SORT_STRING or SORT_NATURAL): ";
$array = ['apple', 'Banana', 'cherry', 'Date'];
sort($array, SORT_STRING | SORT_FLAG_CASE);
print_r($array);

?>
</body>
</html>