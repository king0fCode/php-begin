<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return parameters in functions</title>
</head>
<body>

<?php
function addnumbers($num, $num2)
{
    $val = $num + $num2;

    return $val;
}

$result = addnumbers(44, 33);
$result = addnumbers(44, $result);

echo $result;

?>


</body>
</html>