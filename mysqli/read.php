<?php
include 'includes/db.php';
$db = Database::getConnection();

?>

<?php function GetData($db)
{

    $query = "SELECT * FROM `categories`";
    $dataR = mysqli_query($db, $query);
    echo "<br>";
    if ($dataR) {
        while ($row = mysqli_fetch_assoc($dataR)) {
            $arr[] = $row;
            echo "<li><a href='#' >{$row[cat_title]}</a></li>";

        }
        return $arr;
    } else {
        echo "Result Not Found: " . mysqli_error($db);
    }

}?>