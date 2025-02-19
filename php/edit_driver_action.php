<?php
include_once 'data_base_connect.php';
//------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$driver_id = $_POST['driver_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
}
$sql = "UPDATE drivers SET Driver_Name = '$name', Driver_Address = '$address', Driver_Phone = '$phoneNumber' WHERE Driver_ID = '$driver_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Row updated successfully
    echo "Row updated successfully.";
} else {
    // Handle the case when the query fails
    echo "Query failed: " . mysqli_error($conn);
}
?>