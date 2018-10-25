<?php

include '_db.php';
include '_functions.php';

ShowAllData()
?>


<!DOCTYPE html>
<html lang="en">
<?php include "_includes/header.php" ?>

<div class="container">
<div class="col-sm-6">


<?php

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?><pre>

       <?php
print_r($row);
        echo "<br>";?>
         </pre> <?php
}

}
?>

</div>
</div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</body>
</html>
