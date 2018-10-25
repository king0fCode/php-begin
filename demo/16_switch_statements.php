<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Statements</title>
</head>
<body>

<?php

// $number = 4;

// if ($number < 10) {
//     echo "this";

// }


$number = 55;

switch ($number) {
    case 30:
        # code...
        echo "condition 1 true";
        break;
    case 40:
        # code...
        echo "condition 2 true";
        break;
    case 50:
        echo "condition 3 true";
        # code...
        break;
    default:
        # code...
        echo "none of the conditions met";
        break;
}
?>

</body>
</html>