<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Demo</title>
</head>
<body>
<?php
echo "Array List: ";
echo "<br>";
$data = array('apple', 'banana', 'cherry', 'pineapples', 'watermelon');
$data2 = ['apple', 'banana', 'cherry', 'pineapples', 'watermelon'];
echo "<br>";
echo "Use var_dump(): " ."<br>";
var_dump($data);
echo "<br>";
echo "<br>";
echo "Use print_r(): ". "<br>";
print_r($data);
echo "<br> \n";
echo "<br> \n";
echo "\n Use \"<\pre>\" tag";

echo "<pre>";
print_r($data);
var_dump($data);
echo "</pre>";

?>
</body>
</html>