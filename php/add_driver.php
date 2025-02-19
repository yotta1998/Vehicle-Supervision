<?php
include_once 'data_base_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $driverName = $_POST['driver_name'];
    $phoneNumber = $_POST['phone_number'];
    $address = $_POST['address'];
	$vehicle_id=$_POST['vehicle_id'] ;
    $sql = "INSERT INTO drivers (Driver_Name, Driver_Phone,Driver_Address,Vehicle_ID) VALUES ( '$driverName', '$phoneNumber', '$address','$vehicle_id')";

    if (mysqli_query($conn, $sql)) {
        echo "Driver added successfully.";
    } else {
        echo "Error adding driver: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>