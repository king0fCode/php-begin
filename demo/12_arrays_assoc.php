<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
// regular arrays type
$number = array(1, 2, 4, 'string', 5);
$number = [1, 2, 4, 'string', 5];
print_r($number);

echo "<br>";

// regular array echo
// echo $number[1];

// Associate array
$name = array("first_name" => "charith");
print_r($name);
//echoing first value
echo $name['first_name'];

// Associate array multiple values
$name = array("first_name" => "charith", "last_name" => "Lasantha");
print_r($name);
echo "<h1>" . $name['first_name'] . " " . $name['last_name'] . "</h1>";

?>

</body>
</html>