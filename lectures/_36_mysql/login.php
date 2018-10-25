<?php
if (isset($_POST['submit'])) {
    # code...

    $uName = $_POST['username'];
    $pWord = $_POST['password'];

    $con = mysqli_connect('localhost', 'root', '', 'cat-4');

    if ($con) {
        echo "we are connected";
    } else {
        die("database con error");
    }

// if($uName && $pWord){
    //         echo "Username: " . $uName . " & password " . $pWord;

// } else {
    //     echo "fields Empty";
    // }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYSQL LOGIN</title>
</head>
<body>

<div class="container">
<div class="col-sm-6">

<form action="" method="post">
 <div class="form-group">
 <label for="username"></label>
 <input type="text" name="username" class="form-control">
 </div>


 <div class="form-group">
 <label for="password"></label>
 <input type="password" name="password" class="form-control">
 </div>
<input type="submit" class="btn btn-primary" name="submit" value="Submit">

</form>
</div>
</div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</body>
</html>
