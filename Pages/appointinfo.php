<?php

$db = mysqli_connect("localhost", "root", "", "pet_store_db");



if (isset($_POST['selectdoctor']) && isset($_POST['selectpet'])) {
    $doctor_id = $_POST['selectdoctor'];
    $pet_id = $_POST['selectpet'];
    $owner_id = $_POST['selectowner'];
    $query = "UPDATE pet SET d_id = $doctor_id WHERE p_id = $pet_id";
    $add = "UPDATE pet SET o_id = $owner_id WHERE p_id = $pet_id";
    mysqli_query($db, $query);
    mysqli_query($db,$add);
    echo '<script language="javascript">';
    echo 'alert("Your appointment is booked!");';
    echo 'window.location.href="appoint.php";';
    echo '</script>';
}
?>

