<?php
if (isset($_POST['submit'])) {
    # code...

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $names = ['jose', 'jackaline', 'maria', 'yanci', 'stefanny', 'marlon'];

    if (in_array($uname, $names)) {

        echo "username allready exists";

    }
    $min = 5;
    $max = 10;
    if (strlen($uname) < $min || strlen($uname) > $max) {
        echo "Username has to be longer that 5 characters and cannot longer than 10 chars ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
</head>
<body>

<form action="" method="post">
<input type="text" name="username" id="username" placeholder="Enter Username"><br>
<input type="password" name="password" id="password" placeholder="Enter Password"><br>
<input type="submit" value="Submit" name="submit">
</form>

</body>
</html>
