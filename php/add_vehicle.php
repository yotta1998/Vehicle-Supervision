<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehicle_id= $_POST['vehicle_id'];
    $vehicle_type = $_POST['vehicle_type'];
    $vehicle_model = $_POST['vehicle_model'];

    $sql = "INSERT INTO vehicles_ (Vehicle_ID,Vehicle_Type,Model) VALUES ( '$vehicle_id', '$vehicle_type', '$vehicle_model')";

    if (mysqli_query($conn, $sql)) {
        echo "Vehicle added successfully.";
    } else {
        echo "Error adding: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>