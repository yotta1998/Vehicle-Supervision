<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/framework.Css">
    <link rel="stylesheet" href="CSS/master.Css">
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
$vehicle_id = $_POST['vehicle_id']; }

$sql = "SELECT * FROM vehicles_ WHERE Vehicle_ID = '$vehicle_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $vehicle = mysqli_fetch_assoc($result);
    //$name = $vehicle['Driver_Name'];
    $type = $vehicle['Vehicle_Type'];
    $model = $vehicle['Model'];
?>
 <div id="vehicleEdit" class="interface-edit-vehicle wi-500 p-relative card-interface">
                    <i id="closeVehicle" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                    <h2 class="text-center mb-40 c-white">تعديل معلومات المركبة</h2>
                    <form id="vehicleEditForm" method="POST" action="edit_vehicle_action.php">
                
						<input class="mb-20 w-100 rad-6" type="hidden" name="vehicle_id" value="<?php echo $vehicle_id ; ?>">
                        
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل نوع المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" name="type" value="<?php echo $type ; ?>">
                        </div>
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل موديل المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" name="model" value="<?php echo $model ; ?>">
                        </div>
                        <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">تـــعــــديل</button>
                    </form>
                </div>
<?php } ?>
</body>
</html>






