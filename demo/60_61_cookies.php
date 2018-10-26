<?php
// $_COOKIE; // super global variable

$name = "somename";
$value = 100;
$expire = time() + (60*60*24*30);


setcookie($name,$value,$expire);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
<!-- get cookie data -->
<?php
if(isset($_COOKIE['somename'])){
    $name = $_COOKIE['somename'];
    echo "Cookie was set and Value is: " . $name;
}
?>

</body>
</html>