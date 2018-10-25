<?php

function Showdata()
{

    global $con;
    $query = "SELECT * FROM user";

    $dataR = mysqli_query($con, $query);
    echo "<br>";

    if ($dataR) {

        while ($row = mysqli_fetch_assoc($dataR)) {

            $arr[] = $row;

        }
        return $arr;
    } else {
        echo "Result Not Found: " . mysqli_error($con);
    }

}

function deleteRows($id)
{

    global $con;
    $query = "DELETE FROM user ";
    $query .= "WHERE id = $id ";

    $dataR = mysqli_query($con, $query);
    echo "<br>";

    if ($dataR) {
        return true;
    } else {
        return false;
    }

}

function createUser($uName, $pWord)
{
    global $con;

    if ($uName && $pWord) {
        echo "<br>Username: " . $uName . " & password " . $pWord . "<br>";

        $query = "INSERT INTO user(username,password)";
        $query .= " VALUES('$uName','$pWord')";

        $result = mysqli_query($con, $query);
        return $result;

    } else {
        return false;
    }

}

function updateData($uName, $pWord, $id)
{
    echo "user: " . $uName . "<br>";
    echo "password: " . $pWord . "<br>";
    echo "id: " . $id . "<br>";

    global $con;
    $query = "UPDATE user SET ";

    (!empty($uName) && !empty($pWord) ? $query .= "username = '$uName',password = '$pWord'" : '');
    (!empty($uName) && empty($pWord) ? $query .= "username = '$uName'" : '');
    (!empty($pWord) && empty($uName) ? $query .= "password = '$pWord'" : '');

    $query .= "WHERE id = $id ";

    $dataR = mysqli_query($con, $query);

    if ($dataR) {
        return true;
    } else {
        return false;
    }

}
