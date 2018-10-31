<?php
include "_db.php";
include "_functions.php";

if (isset($_POST['delete']) && !empty($_POST['id'])) {
    $result = deleteRows(mysqli_real_escape_string($con, $_POST['id']));
    echo ($result ? "User Deleted" : "Delete Data Failed");

}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "_includes/header.php"?>
<body>




<div class="container">

    <div class="col-sm-6">
        <h2 class="text-center">Delete</h2>
     <form action="login_delete.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

             <div class="form-group">
                <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>

             <div class="form-group">

             <select name="id" id="">
                <?php
$result = Showdata();
foreach ($result as $key => $val) {
# code...
    echo "<option value='$val[id]'>$val[id]</option>";
}
?>
             </select>

             </div>

            <input class="btn btn-primary" type="submit" name="delete" value="DELETE">

        </form>


    </div>


<?php include "_includes/footer.php"?>


</body>
</html>