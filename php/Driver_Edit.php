<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Driver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/framework.Css">
    <link rel="stylesheet" href="CSS/master.Css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>
<body dir="rtl">
<?php
include_once 'data_base_connect.php';
//------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$driver_id = $_POST['driver_id']; }

$sql = "SELECT * FROM drivers WHERE Driver_ID = '$driver_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $driver = mysqli_fetch_assoc($result);
    $name = $driver['Driver_Name'];
    $address = $driver['Driver_Address'];
    $phoneNumber = $driver['Driver_Phone'];

    // Rest of your code to process the retrieved data
} else {
    // Handle the case when the query fails
    echo "Query failed: " . mysqli_error($conn);
}
	echo		'<div id="driverEdit" class="interface-edit-driver wi-500 p-relative card-interface">' ;
    echo                '<i id="closeDriver" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>' ;
    echo                 '<h2 class="text-center mb-40 c-white">تعديل معلومات السائق</h2>
                        <form id="driverEditForm" method="POST" action="edit_driver_action.php">
                            <div class="center-flex">
                                <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل الإســـــــم</label>';
    echo                 '<input class="mb-20 w-100 rad-6" name="name" required type="text" value="' . $name . '">

                            </div>
                            <div class="center-flex">
                                <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل العــــنوان</label>';
    echo                  '<input class="mb-20 w-100 rad-6" name="address" required type="text" value="' . $address . '">
                            </div>
                            <div class="center-flex">
                                <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل رقم الجــوال</label>';
    echo                    '<input class="mb-20 w-100 rad-6" name="phoneNumber" required type="text" value="' . $phoneNumber . '">';
	echo                     '<input type="hidden" name="driver_id" value="' . $driver_id . '">
                            </div>
                            <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" name="edit" type="submit">تـــعــــديل</button>
                        </form>



                </div>';
				?>
</body>
</html>