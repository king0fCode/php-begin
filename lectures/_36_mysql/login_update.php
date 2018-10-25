<?php
include "_db.php";
include "_functions.php";

if ((isset($_POST['update']) && !empty($_POST['username'])) || (isset($_POST['update']) && !empty($_POST['password']))) {

    $uName = mysqli_real_escape_string($con, $_POST['username']);
    $pWord = mysqli_real_escape_string($con, $_POST['password']);
    $id = $_POST['id'];

    $result = updateData($uName, $pWord, $id);
    echo ($result ? "Database Updated" : "Database Update Failed");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "_includes/header.php" ?>
<div class="container">
<div class="col-sm-6">
<h2 class="text-center">USER UPDATE</h2>
<form action="" method="post">
 <div class="form-group">

 <?php
$result = Showdata();
print_r($result);
echo "<br>";

?>


 <label for="username">Username: </label>
 <input type="text" name="username" class="form-control">
 </div>


 <div class="form-group">
 <label for="password">Password: </label>
 <input type="password" name="password" class="form-control">
 </div>


<div class="form-group">
<select name="id" id="id">
<?php
foreach ($result as $key => $val) {
# code...
    echo "<option value='$val[id]'>$val[id]</option>";
}
?>
<!-- // <option value="">1</option> -->
</select>

</div>

<input type="submit" class="btn btn-primary" name="update" value="Update">
</form>



</div>
</div>
</body>
</html>
