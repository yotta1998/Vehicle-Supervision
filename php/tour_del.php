<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tour_id = $_POST['tour_id'];
    $sql = "DELETE FROM tours WHERE Tour_ID='$tour_id';";

    if (mysqli_query($conn, $sql)) {
        echo "Tour del successfully.";
    } else {
        echo "Error del : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>