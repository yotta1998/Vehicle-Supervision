<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehicle_id = $_POST['vehicle_id'];
    $sql = "DELETE FROM vehicles_ WHERE Vehicle_ID='$vehicle_id';";

    if (mysqli_query($conn, $sql)) {
        echo "vehicles_ del successfully.";
    } else {
        echo "Error del : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>