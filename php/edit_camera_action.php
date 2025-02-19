<?php
include_once 'data_base_connect.php';
//------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$CAM_IP= $_POST['CAM_IP'];
$CAM_IP_NEW=$_POST['CAM_IP_NEW'] ;
//$model = $_POST['model'];
$Vehicle_ID = $_POST['Vehicle_ID'];
//$phoneNumber = $_POST['phoneNumber'];
}
//echo $CAM_IP ; 
$sql = "UPDATE camera SET Vehicle_ID = '$Vehicle_ID', CAM_IP = '$CAM_IP_NEW' WHERE CAM_IP = '$CAM_IP'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Row updated successfully
    echo "Row updated successfully.";
	//echo $CAM_IP ; 
} else {
    // Handle the case when the query fails
    echo "Query failed: " . mysqli_error($conn);
}
?>