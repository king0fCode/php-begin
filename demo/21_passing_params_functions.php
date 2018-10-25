<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passing parameter on function</title>
</head>
<body>

<?php
function greeting($m)
{
    echo $m;

}

greeting("parameters<br>");

?>
<?php
function calculate($num1, $num2)
{
    $cal = $num1 + $num2;
    echo $cal;

}

calculate(33, 33);

?>












</body>
</html>