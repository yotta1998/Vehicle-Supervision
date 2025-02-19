<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $CAM_IP = $_POST['CAM_IP'];
    $sql = "DELETE FROM camera WHERE CAM_IP='$CAM_IP';";

    if (mysqli_query($conn, $sql)) {
        echo "CAM del successfully.";
    } else {
        echo "Error del : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>