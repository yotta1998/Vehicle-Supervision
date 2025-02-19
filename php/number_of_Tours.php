<?php
include_once 'data_base_connect.php';

$sql = "SELECT COUNT(*) FROM tours" ;
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_row($result);
$count = $row[0]; // Assuming COUNT(*) is the first column in the result

echo strval($count);