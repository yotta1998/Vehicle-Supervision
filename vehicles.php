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

    <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="mt-0 txt-c">إدارة نعاس السائق</h3>
            <ul>
                <li>
                    <a href="index.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-home fa-fw"></i>
                        <span>الصفحة الرئيسية</span>
                    </a>
                </li>
                <li>
                    <a href="drivers.php"	class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-user-circle fa-fw"></i>
                        <span>السائقين</span>
                    </a>
                </li>
                <li>
                    <a href="vehicles.php" class="active d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-car fa-fw"></i>
                        <span>المركبات</span>
                    </a>
                </li>
                <li>
                    <a href="cameras.php"	class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-camera fa-fw"></i>
                        <span>الكاميرات</span>
                    </a>
                </li>
                <li>
                    <a href="tours.php"	class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-suitcase-rolling fa-fw"></i>
                        <span>الرحلات</span>
                    </a>
                </li>
                <li>
                    <a href="events.php"	class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-regular fa-hourglass-half fa-fw"></i>
                        <span>الأحداث</span>
                    </a>
                </li>
                <li>
                    <a href="actions.php"	class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-bell fa-fw"></i>
                        <span>الإجراءات</span>
                    </a>
                </li>
                <li>
                    <a href="photos.php"	class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-regular fa-image fa-fw"></i>
                        <span>الصور</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content w-full">
            <!-- Start Head -->
            <div class="head bg-white p-15"> 
                <div class="icons d-flex al-center between-flex">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-lg"></i>
                        <p class="alarm p-absolute wi-100 text-center rad-6 pa-5">التنبيهات</p>
                    </span>
                </div>
            </div>
            <!-- End Head -->
            
            <h1 class="p-relative">المركبات</h1>

            <div class="page-vehicles m-20 d-grid gap-20">

                <!-- ------------------- Start Edit/Delet Vehicle ------------------------- -->

                <div id="vehicleEdit" class="interface-edit-vehicle wi-500 p-relative card-interface">
                    <i id="closeVehicle" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                    <h2 class="text-center mb-40 c-white">تعديل معلومات المركبة</h2>
                    <form id="vehicleEditForm">
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل رقم المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" value="1">
                        </div>
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل نوع المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" value="نيسان سياحية - سوداء">
                        </div>
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل موديل المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" value="سنة - 2020">
                        </div>
                        <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">تـــعــــديل</button>
                    </form>
                </div>
            
                <div id="vehicleDelet" class="interface-delet-vehicle wi-500 p-relative card-interface">
                    <h3 class="text-center mb-20 c-white">هل أنت متأكد من حذف المركبة</h3>
                    <div class="arround-flex">
                        <button id="" class="mt-20 b-none fs-20 pt-10 pb-10 wi-150 c-white rad-6">تأكيد</button>
                        <button id="cancelVehicle" class="mt-20 b-none fs-20 pt-10 pb-10 wi-150 c-white rad-6">إلغاء</button>
                    </div>
                </div>
            
                <!-- ------------------- End Edit/Delet Vehicle --------------------------- -->

                
               <?php
			   include_once 'php/data_base_connect.php';
			   $sql = "SELECT * FROM vehicles_"; 
$vehicles= mysqli_query($conn, $sql);
// $vehicles is an array containing the vehicle data retrieved from the database
foreach ($vehicles as $vehicle) {
    $type = $vehicle['Vehicle_Type'];
  // $color = $vehicle['vehicle_color'];
    $model = $vehicle['Model'];
    
   //image = $vehicle['vehicle_image'];
    $id = $vehicle['Vehicle_ID'];
?>

<div class="vehicle p-relative rad-6 p-10">
    <div class="info-vehicle">
        <div class="type-vehicle">
            <h4 class="text-center rad-6 me-auto ms-auto mt-20 mb-20">نوع المركبة</h4>
            <p class="w-fit pa-5 fs-18 p-relative mr-20"><?php echo $type	 ; ?></p>
        </div>
        <div class="type-vehicle">
            <h4 class="text-center rad-6 me-auto ms-auto mt-20 mb-20">موديل المركبة</h4>
            <p class="w-fit pa-5 fs-18 p-relative mr-20"><?php echo	$model	;?></p>
        </div>
    </div>
    <div class="image-vehicle">
        <img class="wi-200 d-block ms-auto me-auto" src="" alt="">
    </div>
    <div class="Edit-info-vehicle between-flex">
		<form method="POST" action="php/vehicle_Edit.php">
		<input type="hidden" name="vehicle_id" value="<?php echo $id ?>">
		<button class="editVehicleButton c-white b-none wi-150 text-center end-0 pa-7 p-absolute fw-bold text-center wi-150">تعديل معلومات المركبة</button>
		</form>
		<form method="POST" action="">
		<input type="hidden" name="vehicle_id" value="<?php echo $id ?>">
        <button class="deletVehicleButton c-white b-none wi-150 text-center bottom-0 end-0 pa-7 p-absolute fw-bold text-center wi-100" name="vehicle_del">حــــذف المركــبة</button>
		</form>
        
		
    </div>
    <span class="id-vehicle p-absolute start-0 bottom-0 pa-5 fw-bold wi-70 text-center fs-25"><?php echo $id; ?></span>
</div>

<?php
}
?>
<?php
if (isset($_POST['vehicle_del'])) {
    // Handle delete driver functionality here
    $ide = $_POST['vehicle_id'];
    $sql = "DELETE FROM vehicles_ WHERE Vehicle_ID = '$ide';";

    if (mysqli_query($conn, $sql)) {
        echo "Vehicle deleted successfully.";
    } else {
        echo "Error deleting" . mysqli_error($conn);
    }
}


?>







                

            </div>



        </div>
        
    <script>

    /* ------------- Start Register ---------------- */

        const registerButton = document.getElementById("registerButton");
        const pageRegister = document.getElementById("pageRegister");

        registerButton.addEventListener('click', function () {
            pageRegister.style.display = 'block';
            });

        const closeReg = document.getElementById('closeReg');
        closeReg.addEventListener('click', function(event) {
            pageRegister.style.display = 'none';
            event.stopPropagation(); 
        });

    /* ------------- End Register ---------------- */

    /* ------------- Start Edit Vehicle---------------- */


    /* ------------- End Edit Vehicle---------------- */

    /* ------------- Start Delet Vehicle ------------ */


    /* ------------- End Delet Vehicle ------------ */

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>       
    </body>
</html>
















