<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $driver_id = $_POST['driver_del'];
    $sql = "DELETE FROM drivers WHERE Driver_ID='$driver_id';";

    if (mysqli_query($conn, $sql)) {
        echo "Driver del successfully.";
    } else {
        echo "Error del driver: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>