

             <?php
function GetData()
{
    global $db;
    $query = "SELECT * FROM user";

    $dataR = mysqli_query($db, $query);
    echo "<br>";

    if ($dataR) {

        while ($row = mysqli_fetch_assoc($dataR)) {

            $arr[] = $row;

        }
        return $arr;
    } else {
        echo "Result Not Found: " . mysqli_error($db);
    }
}
?>