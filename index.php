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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body dir="rtl">
    <div class="page d-flex">

        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="mt-0 txt-c">إدارة نعاس السائق</h3>
            <ul>
                <li>
                    <a href="index.php" class="active d-flex al-center fs-14 c-black rad-6 p-10">
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
                    <a href="cameras.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
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
            
            <h1 class="p-relative">الصفحة الرئيسية</h1>

            <!-- Start Wrapper-->

            <div class="wrapper d-grid gap-20">
                <div class="drivers welcome bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="intro text-center">
                        <h2 class="pt-2 pb-2 mb-0">السائقين</h2>
                    </div>
                    <div class="photo">
                        <img src="Imgs/driver.png" alt="">
                    </div>
                    <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                        <div> 
                            <p class="fs-25 c-grey">عدد السائقين </p>
                            <span class="d-block fw-bold mt-10">
							<?php
							include_once 'php/number_of_drivers.php'
							?>
							</span>
                        </div>
                        <!-- Start Add Driver -->
                        <div>
                            <p class="fs-25 c-grey">إضافة سائق </p> 
                            <i id="addDriverButton" class="fas fa-plus-circle cursor-pointer tr-3"></i>
                        </div>
                        <div id="driverAdd" class="interface-add-driver p-relative card-interface">
                            <i id="closeButton1" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-8"></i>
                            <h2 class="c-blue mb-20">إضافة سائق جديد</h2>
                            <form id="driverAddForm" action="php/add_driver.php" method="POST">
                                <input class="mb-20 w-100 rad-6" required type="text" name="vehicle_id" placeholder="رقم المركبة">
                                <input class="mb-20 w-100 rad-6" required type="text" name="driver_name" placeholder="اسم السائق">
                                <input class="mb-20 w-100 rad-6" required type="text" name="phone_number" placeholder="رقم الهاتف">
                                <input class=" w-100 rad-6" required type="text" name="address" placeholder="مكان السكن">
                                <button class="d-block me-auto ms-auto mt-20 b-none w-100 c-white rad-6" type="submit">إضـــــافة</button>
                            </form>
                        </div>
                        
                        <!-- End Add Driver -->

                        <!-- Start Del Driver -->

                        <div> 
                            <p class="fs-25 c-grey">حذف سائق </p>
                            <i id="delDriverButton" class="fas fa-trash-alt cursor-pointer tr-3"></i> 
                        </div>  

                        <div id="driverDel" class="interface-del-driver p-relative card-interface">
                            <i id="closeButton2" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-8"></i>
                            <h2 class="c-blue mb-20">حذف سائق</h2>
                            <form id="driverDelForm" action='php/driver_del.php' method="POST">
                                <input class="mb-20 w-100 rad-6" required type="text" name="driver_del" placeholder="ضع رقم السائق هنا">
                                <button class="d-block me-auto ms-auto mt-20 b-none w-100 c-white rad-6" type="submit">حــــذف</button>
                            </form>
                        </div>

                        <!-- End Del Driver -->

                    </div>

                    <a href="drivers.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>
                </div>

                <div class="vehicles bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="c-white text-center">
                        <h2 class="pt-2 pb-2 mb-0">المركبات</h2>
                    </div>
                    <div class="text evenly-flex">
                        <div class="text-center">
                            <p class="c-white fs-25">عدد المركبات</p>
                            <span class="c-white fw-bold fs-30">
							<?php
							include_once 'php/number_of_vehicles.php';
							?>
							</span>
                        </div>
                        <i class="bi bi-truck c-white fs-50"></i>
                    </div>
                    <div class="body add-del evenly-flex p-20 mt-30 mb-30 block-mobile">

                        <!-- Start Add Vehicle -->
                        <a href="#" id="addVehicleButton" class="c-white p-3 rad-10 wi-150 text-center fs-18 tr-3">إضافة مركبة</a>

                        <div id="vehicleAdd" class="interface-add-vehicle p-relative card-interface">
                            <i id="close1" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                            <h2 class="text-center mb-20 c-white">إضافة مركبة جديدة</h2>
                            <form id="vehicleAddForm" action="php/add_vehicle.php" method="POST">
                               <input class="mb-20 w-100 rad-6" required type="text" name="vehicle_id" placeholder="رقم المركبة">
                                <input class="mb-20 w-100 rad-6" required type="text" name="vehicle_type" placeholder="نوع المركبة">
                                <input class="mb-20 w-100 rad-6" required type="text" name="vehicle_model" placeholder="موديل المركبة">
                                <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">إضـــــافة</button>
                            </form>
                        </div>
                        <!-- End Add Vehicle -->

                        <!-- Start Del Vehicle -->
                        <a href="#" id="delVehicleButton" class="c-white p-3 rad-10 wi-150 text-center fs-18 tr-3">حذف مركبة</a>

                        <div id="vehicleDel" class="interface-del-vehicle p-relative card-interface">
                            <i id="close2" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                            <h2 class="text-center mb-20 c-white">حذف مركبة</h2>
                            <form id="vehicleDelForm" action="php/vehicle_del.php" method="POST">
                                <input class="mb-20 w-100 rad-6" required type="text" name="vehicle_id" placeholder="ضع رقم المركبة">
                                <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">حـــــــذف</button>
                            </form>
                        </div>
                        <!-- End Del Vehicle -->
                    </div>
                    <a href="vehicles.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>

                </div>

                <div class="cameras bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="text-center">
                        <h2 class="private pt-2 pb-2 mb-0 c-white">الكاميرات</h2>
                    </div>
                    <div class="text-center fs-50">
                        <i class="bi bi-camera2"></i>
                    </div>
                    <div class="all-cam">
                        <div class="cam1 d-flex hi-75 b-top b-down">
                            <div class="center-flex fw-bold fs-25 wi-8 bg-orange">
                                <i class="bi bi-camera-video ml-5 mr-20"></i>
                                <p class="mt-15">عدد الكاميرات المتوفرة</p>
                            </div>
                            <div class="num wi-2 center-flex c-white fw-bold fs-25">
							<?php 
							include_once 'php/number_of_cameras.php' ;
							?>
							</div>
                        </div>
                        <div class="cam2 d-flex hi-75 b-top b-down">
                            <div class="center-flex fw-bold fs-25 wi-8 bg-orange">
                                <i class="bi bi-camera-video-off ml-5 mr-20"></i>
                                <p class="mt-15">عدد الكاميرات المستخدمة</p>
                            </div>
                            <div class="wi-2 num center-flex c-white fw-bold fs-25">0</div>
                        </div>
                    </div>
                    <div class="add-camera arround-flex">
                        <a href="#" id="addCameraButton" class="c-white mt-15 mb-15 p-3 rad-10 wi-150 text-center fs-18 tr-3">إضافة كاميرا</a>
                        <div id="cameraAdd" class="interface-add-camera p-relative card-interface">
                            <i id="closeCAM1" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                            <h2 class="text-center mb-20 c-white">إضافة كاميرا جديدة</h2>
                            <form id="cameraAddForm" action="php/camera_add.php" method="POST">
                                <input class="mb-20 w-100 rad-6" required type="text" name="Vehicle_id" placeholder="رقم المركبة التي تحوي الكاميرا">
                                <input class="mb-20 w-100 rad-6" required type="text" name="CAM_IP" placeholder="IP الخاص بالكاميرا">
                                <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">إضـــــافة</button>
                            </form>
                        </div>

                        <a href="#" id="delCameraButton" class="c-white mt-15 mb-15 p-3 rad-10 wi-150 text-center fs-18 tr-3">حذف كاميرا</a>
                        <div id="cameraDel" class="interface-del-camera p-relative card-interface">
                            <i id="closeCAM2" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                            <h2 class="text-center mb-20 c-white">حذف مركبة</h2>
                            <form id="cameraDelForm" action="php/camera_del.php" method="POST">
                                <input class="mb-20 w-100 rad-6" required type="text" name="CAM_IP" placeholder="عنوان الكاميرا">
                                <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">حـــــــذف</button>
                            </form>
                        </div>
                    </div>
                    <a href="cameras.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>
                </div>

                <div class="tours bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="text-center">
                        <h2 class="pt-2 pb-2 mb-0 c-white">الرحلات</h2>
                    </div>
                    <div>
                        <div class="evenly-flex">
                            <div class="text-center pt-3 pb-3">
                                <table>
                                    <tr>
                                        <td class="fw-bold">الرحلات الحالية</td>
                                    </tr>
                                    <tr>
                                        <td>
										<?php
										include_once 'php/number_of_tours.php' ; 
										?>
										</td>
                                    </tr>
                                </table>
                            </div>
                            <i class="fas fa-car-side fs-50"></i>
                        </div>
                        <div class="add-tour mt-20 mb-20 pt-20 pb-20">

                            <!-- Start Add Tour -->
                            <a id="addTourBtton" class="top" href="#">
                                <button class="me-auto ms-auto mb-2 rad-6 fs-20 c-white b-none d-block cursor-pointer">
                                    <i class="bi bi-plus-square tr-3"></i> إضافة رحلة
                                </button>
                            </a>

                            <div id="tourAdd" class="interface-add-tour p-relative card-interface">
                                <i id="closeTour1" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                                <h2 class="text-center mb-20 c-white">إضافة رحلة جديدة</h2>
                                <form id="tourAddForm" action="php/add_tour.php" method="POST">
                                    
                                    <input class="mb-20 w-100 rad-6" required type="date" name="date" placeholder="موعد إنطلاق الرحلة">
                                    <input class="mb-20 w-100 rad-6" required type="text" name="driver_id" placeholder="رقم السائق">
									<input class="mb-20 w-100 rad-6" required type="text" name="vehicle_id" placeholder="رقم المركبة">
                                    <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">إضـــــافة</button>
                                
                                    
									</form>
                            </div>
                            <!-- End Add Tour -->

                            <!-- Start Del Tour -->

                            <a id="delTourBtton" class="down" href="#">
                                <button class="me-auto ms-auto rad-6 fs-20 c-white b-none d-block cursor-pointer">
                                    <i class="bi bi-trash tr-3"></i> حذف رحلة
                                </button>
                            </a>

                            <div id="tourDel" class="interface-del-tour p-relative card-interface">
                                <i id="closeTour2" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>
                                <h2 class="text-center mb-20 c-white">حذف رحلة</h2>
                                <form id="tourDelForm" action="php/tour_del.php" method="POST">
                                    <input class="mb-20 w-100 rad-6" required type="text" name="tour_id" placeholder="ضع رقم الرحلة هنا">
                                    <button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" type="submit">حــــــذف</button>
                                </form>
                            </div>
                            <!-- Evd Del Tour -->

                        </div>
                    </div>
                
                    <a href="tours.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>
                </div>
				<?php
				include_once 'php/data_base_connect.php';
//------------------------

//------------------------

$sql = "SELECT * from _event where EVENT_ID=(select MAX(EVENT_ID) from _event)";
$events = mysqli_fetch_assoc(mysqli_query($conn, $sql)) ;
?>

                <div class="events bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="text-center">
                        <h2 class="pt-2 pb-2 mb-0 c-white">الأحداث</h2>
                    </div>
                    <table class="small-table b-table mt-30 mb-30 wi-9 text-center me-auto ms-auto">
                        <thead>
                            <tr>
                                <th class="fs-17 c-white b-table pa-5">رقم الحــدث</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="b-table pa-5"><?php echo $events["EVENT_ID"] ; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="small-table b-table mt-30 mb-30 wi-9 text-center me-auto ms-auto">
                        <thead>
                        <tr>
                            <th class="fs-17 c-white b-table pa-5">وصف الحــدث</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="b-table pa-5"><?php echo $events["EVENT_DESCRYPTION"] ; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="small-table b-table mt-30 mb-30 wi-9 text-center me-auto ms-auto">
                        <thead>
                            <tr>
                                <th class="fs-17 c-white b-table pa-5">رقم الـسـائق</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="b-table pa-5"><?php echo $events["Driver_ID"] ; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    

                    <a href="events.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>
                </div>

                <div class="actions bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="text-center">
                        <h2 class="pt-2 pb-2 mb-0 c-white">الإجراءات</h2>
                    </div>
                    <div class="sleep">
                        <div class="title center-flex mt-18 mb-10 pa-5">
                            <i class="fas fa-dizzy ml-10"></i>
                            <h3>السائق في حالة نعاس:</h3>
                        </div>
                        <div class="procedure justify-content-center d-flex">
                            <p class="fw-bold">إجراء أولي:</p>
                            <span class="mr-10 fs-18">الإتصال بالسائق</span>
                        </div>
                        <div class="procedure justify-content-center d-flex">
                            <p class="fw-bold">إجراء ثانوي:</p>
                            <span class="mr-10 fs-18">ملاحقة السائق</span>
                        </div>
                    </div>
                    <div class="tired">
                        <div class="title center-flex mt-10 mb-10 pa-5">
                            <i class="bi bi-emoji-expressionless-fill ml-10"></i>
                            <h3>السائق في حالة إرهاق:</h3>
                        </div>
                        <div class="procedure justify-content-center d-flex">
                            <p class="fw-bold">إجراء أولي:</p> 
                            <span class="mr-10 fs-18">تنبيه السائق</span>
                        </div>
                        <div class="procedure justify-content-center d-flex">
                            <p class="fw-bold">إجراء ثانوي:</p> 
                            <span class="mr-10 fs-18">استبدال السائق</span>
                        </div>
                    </div>
                    <div class="actived">
                        <div class="title center-flex mt-10 mb-10 pa-5">
                            <i class="bi bi-emoji-smile-fill ml-10"></i>
                            <h3>السائق في حالة نشاط:</h3>
                        </div>
                        <div class="procedures justify-content-center d-flex">
                            <p class="fw-bold">لا يوجد إجراء</p>
                        </div>
                    </div>

                    <a href="actions.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>
                </div>

                <div class="photos bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="text-center">
                        <h2 class="pt-2 pb-2 mb-0 c-white">الصور</h2>
                    </div>
                    <?php
					$sql = "Select PHOTO_PATH as PHOTO_PATH from image where EVENT_ID='{$events["EVENT_ID"]}'";
					$photo = mysqli_fetch_assoc(mysqli_query($conn, $sql)) ;
					?>
                    <div class="text-center">
                        <div class="evenly-flex mt-10 mb-10">
                            <p class="mt-10 fs-25">صورة السائق أثناء القيادة</p>
                            <i class="fas fa-bus-alt fs-50"></i>
                        </div>
                        <div class="img-driver mb-20 p-10">
                            <img class="hi-200 wi-200" src="<?php echo "py/" . $photo['PHOTO_PATH'] ; ?> ">
                        </div>
                    </div>
                    <div class="description">
                        <div class="text-center">
                            <h3>وصف الحدث</h3>
                            <p class="fs-20"><?php echo $events["EVENT_DESCRYPTION"] ; ?></p>
                        </div>
                    </div>

                    <a href="photos.php" class="more d-block tr-3 text-center pt-2 pb-2 fs-4 bg-blue c-white">
                        <i class="fas fa-arrow-left fs-5"></i>
                        المزيد من التــفــــاصيل </a>
                </div>
                
            </div>

            <!-- End Wrapper-->
            
        </div>

    </div>


    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>