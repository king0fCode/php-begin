<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays Example</title>
</head>
<body>
<?php
// define arrray types
$numberList = array();
$numberList = [];

$numberList = array(23, 45, 233, 55, 23, 'string', '<h1>Hello charith</h1>');
// cannot echo arrays
// echo $numberList;

// can use echo for one single value withiin array
echo $numberList[6];

print_r($numberList);
$numberList = [2, 3, 555, 32, 23];

?>

</body>
</html>