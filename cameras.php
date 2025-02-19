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
                    <a href="drivers.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-user-circle fa-fw"></i>
                        <span>السائقين</span>
                    </a>
                </li>
                <li>
                    <a href="vehicles.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-car fa-fw"></i>
                        <span>المركبات</span>
                    </a>
                </li>
                <li>
                    <a href="cameras.php" class="active d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-camera fa-fw"></i>
                        <span>الكاميرات</span>
                    </a>
                </li>
                <li>
                    <a href="tours.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-suitcase-rolling fa-fw"></i>
                        <span>الرحلات</span>
                    </a>
                </li>
                <li>
                    <a href="events.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-regular fa-hourglass-half fa-fw"></i>
                        <span>الأحداث</span>
                    </a>
                </li>
                <li>
                    <a href="actions.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-bell fa-fw"></i>
                        <span>الإجراءات</span>
                    </a>
                </li>
                <li>
                    <a href="photos.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
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
            
            <h1 class="p-relative">الكاميرات</h1>

            <div class="page-cameras m-20 d-grid gap-20">

                <!-- ------------------- Start Edit/Delet Camera ------------------------- -->

                <div id="cameraEdit" class="interface-edit-camera wi-500 p-relative card-interface">
                    <i id="closeCamera" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                    <h2 class="text-center mb-40 c-white">تعديل معلومات الكاميرا</h2>
                    <form id="cameraEditForm">
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل رقم المركبة</label>
                            <input class="mb-20 w-100 rad-6" required type="text" value="1">
                        </div>
                        <div class="center-flex">
                            <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل IP الكاميرا</label>
                            <input class="mb-20 w-100 rad-6" required type="text" value="لا يوجد حاليا">
                        </div>
                        <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">تـــعــــديل</button>
                    </form>
                </div>
            
                <div id="cameraDelet" class="interface-delet-camera wi-500 p-relative card-interface">
                    <h3 class="text-center mb-20 c-white">هل أنت متأكد من حذف الكاميرا</h3>
                    <div class="arround-flex">
                        <button id="" class="mt-20 b-none fs-20 pt-10 pb-10 wi-150 c-white rad-6">تأكيد</button>
                        <button id="cancelCamera" class="mt-20 b-none fs-20 pt-10 pb-10 wi-150 c-white rad-6">إلغاء</button>
                    </div>
                </div>
            
                <!-- ------------------- End Edit/Delet Camera --------------------------- -->

                <?php
// $cameras is an array containing the camera data retrieved from the database
include_once 'php/data_base_connect.php';
//------------------------

//------------------------

$sql = "SELECT * FROM camera";
$cameras = mysqli_query($conn, $sql);
foreach ($cameras as $camera) {
    $vehicleNumber = $camera['Vehicle_ID'];
    $ipAddress = $camera['CAM_IP'];
?>

<div class="camera p-relative rad-6">
    <div class="img-camera">
        <img class="wi-100 d-block ms-auto me-auto" src="<?php echo $ipAddress; ?>" alt="">
    </div>
    <div class="type-camera text-center mt-20 mb-20">
        <h4 class="c-white me-auto ms-auto mb-20">رقم المركبة</h4>
        <p class="c-white wi-200 rad-6 me-auto ms-auto"><?php echo $vehicleNumber; ?></p>
    </div>
    <div class="ip-camera text-center mt-20 mb-20">
        <h4 class="c-white me-auto ms-auto mb-20">IP الكاميرا</h4>
        <p class="c-white wi-200 rad-6 me-auto ms-auto"><?php echo $ipAddress; ?></p>
    </div>
   <div class="Edit-info-camera between-flex">
    <form method="POST" action="php/camera_edit.php">
		<input type="hidden" name="CAM_IP" value="<?php echo $ipAddress ; ?>">
        <button class="editCameraButton c-white b-none w-100 text-center pa-7 fw-bold wi-150" type="submit">تـعديل مـعلومـات الكـاميرا</button>
    </form>
    <form method="POST" action="php/camera_del.php">
        <input type="hidden" name="CAM_IP" value="<?php echo $ipAddress; ?>">
        <button class="deletCameraButton c-white b-none w-100 text-center pa-7 fw-bold wi-100" type="submit">حــــذف الكــامـيـرا</button>
    </form>
</div>
</div>

<?php
}
?>

               


            </div>
        </div>

  
    <script>

        /* ------------- Start Register ---------------- */

        
    /* ------------- End Register ---------------- */

    /* ------------- Start Edit Camera---------------- */


    /* ------------- End Edit Camera---------------- */

    /* ------------- Start Delet Camera ------------ */

  

    /* ------------- End Delet Camera ------------ */

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>       
    </body>
</html>
















