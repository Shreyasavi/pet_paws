<?php
$connect = mysqli_connect("localhost", "root", "", "pet_store_db");
if (isset($_POST["pr_name"], $_POST["description"], $_POST["cost"])) {
    $time = mysqli_real_escape_string($connect, $_POST["time"]);
    $prid = mysqli_real_escape_string($connect, $_POST["pr_id"]);
    $action = mysqli_real_escape_string($connect, $_POST["action"]);
    $query = "INSERT INTO time(time, pr_id, action) VALUES('$time', '$prid', '$action')";
    if (mysqli_query($connect, $query)) {
        echo 'Data Inserted';
    }
}
?>