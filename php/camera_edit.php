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
$CAM_IP = $_POST['CAM_IP']; }

$sql = "SELECT * FROM camera WHERE CAM_IP = '$CAM_IP'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $camera = mysqli_fetch_assoc($result);
    //$name = $vehicle['Driver_Name'];
    $Vehicle_ID = $camera['Vehicle_ID'];
    //$model = $vehicle['Model'];
?>
 <div id="vehicleEdit" class="interface-edit-vehicle wi-500 p-relative card-interface">
                    <i id="closeVehicle" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                    <h2 class="text-center mb-40 c-white">تعديل معلومات الكاميرا</h2>
                    <form id="cameraEditForm" method="POST" action="edit_camera_action.php">
                        
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">رقم المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" name="Vehicle_ID" value="<?php echo $Vehicle_ID ; ?>">
                        </div>
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">العنوان</label>
							<input type="hidden" name="CAM_IP" value="<?php echo $CAM_IP ; ?>">
                            <input class="mb-20 w-100 rad-6" required type="text" name="CAM_IP_NEW" value="<?php echo $CAM_IP ; ?>">
                        </div>
                        <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">تـــعــــديل</button>
                    </form>
                </div>
<?php } ?>
</body>
</html>






