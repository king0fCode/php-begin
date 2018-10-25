<?php
include "_db.php";
include "_functions.php";

if ((isset($_POST['submit']) && !empty($_POST['username'])) && (isset($_POST['submit']) && !empty($_POST['password']))) {
    # code...
    echo "test";
    $uName = mysqli_real_escape_string($con, $_POST['username']);
    $pWord = mysqli_real_escape_string($con, $_POST['password']);

    $result = createUser($uName, $pWord);

    echo ($result ? "Database Updated, User Added" : "User add Failed");

}

?>


<!DOCTYPE html>
<html lang="en">
<?php include '_includes/header.php'; ?>

<div class="container">
<div class="col-sm-6">
<h2 class="text-center">CREATE USER</h2>
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


<?php include '_includes/footer.php'; ?>