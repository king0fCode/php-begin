<?php
if ((isset($_POST['submit']) && !empty($_POST['username'])) && (isset($_POST['submit']) && !empty($_POST['password']))) {
    # code...
    echo "test";
    $uName = mysqli_real_escape_string($con, $_POST['username']);
    $pWord = mysqli_real_escape_string($con, $_POST['password']);

    $result = createUser($uName, $pWord);

    echo ($result ? "Database Updated, User Added" : "User add Failed");

}
