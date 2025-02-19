<?php
include_once 'data_base_connect.php';
//------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$type= $_POST['type'];
$model = $_POST['model'];
$vehicle_id = $_POST['vehicle_id'];
//$phoneNumber = $_POST['phoneNumber'];
}
$sql = "UPDATE vehicles_ SET Vehicle_Type = '$type', Model = '$model' WHERE Vehicle_ID = '$vehicle_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Row updated successfully
    echo "Row updated successfully.";
} else {
    // Handle the case when the query fails
    echo "Query failed: " . mysqli_error($conn);
}
?>