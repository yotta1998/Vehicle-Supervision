<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
	$driver_id=$_POST['driver_id'];
	$vehicle_id=$_POST['vehicle_id'];

    $sql = "INSERT INTO tours(Datey, Driver_ID,Vehicle_ID) VALUES ( '$date', '$driver_id','$vehicle_id')";

    if (mysqli_query($conn, $sql)) {
        echo "tour added successfully.";
    } else {
        echo "Error adding : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>