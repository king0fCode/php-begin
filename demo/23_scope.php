<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$x = "outside";

function Scope()
{
    global $x;
    $x = "inside";
}

echo $x;

echo "<br/>";

Scope();

echo $x;
?>

</body>
</html>