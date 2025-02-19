<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Vehicle_ID = $_POST['Vehicle_id'];
    $CAM_IP = $_POST['CAM_IP'];
    
    $sql = "INSERT INTO camera (CAM_IP,Vehicle_ID) VALUES ('$CAM_IP','$Vehicle_ID')";

    if (mysqli_query($conn, $sql)) {
        echo "Camera added successfully.";
    } else {
        echo "Error adding Camera: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>