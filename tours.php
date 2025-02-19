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
                    <a href="cameras.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-camera fa-fw"></i>
                        <span>الكاميرات</span>
                    </a>
                </li>
                <li>
                    <a href="tours.php" class="active d-flex al-center fs-14 c-black rad-6 p-10">
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
            
            <h1 class="p-relative">الرحلات</h1>

            <div class="page-tours d-grid rad-6 gap-20 m-20">

                <!-- ------------------- Start Edit/Delet Tour ------------------------- -->


                <div id="tourDelet" class="interface-delet-tour wi-500 p-relative card-interface">
                    <h3 class="text-center mb-20">هل أنت متأكد من حذف الرحلة</h3>
                    <div class="arround-flex">
                        <button id="" class="mt-20 b-none fs-20 pt-10 pb-10 wi-150 c-white rad-6">تأكيد</button>
                        <button id="cancelTour" class="mt-20 b-none fs-20 pt-10 pb-10 wi-150 c-white rad-6">إلغاء</button>
                    </div>
                </div>

                <!-- ------------------- Start Edit/Delet Tour ------------------------- -->


<?php
// $tours is an array containing the tour data retrieved from the database 
include_once 'php/data_base_connect.php';
$sql = "SELECT * FROM tours"; 
$tours= mysqli_query($conn, $sql);
foreach ($tours as $tour) {
    $id = $tour['Tour_ID'];
    $startTime = $tour['Datey'];
    //$image = $tour['tour_image'];
?>

<div class="tour p-relative rad-6">
    <span class="id-tour p-absolute text-center c-white fw-bold fs-25"><?php echo $id; ?></span>
    <div class="date-tour arround-flex">
        <h4>موعد إنطلاق الرحلة:</h4>
        <input class="b-none c-white pa-5 rad-6" type="date" value="<?php echo $startTime; ?>">
    </div>
    <div class="img-tour">
        <img class="wi-200 mr-30" src="Imgs/tour.png" alt="">
    </div>
    <div class="state-tour">
        <h3 class="m-20">حالة الرحلة</h3>
        <div class="mr-40 mb-10">
            <input class="cursor-pointer ml-5 fs-18 c-black" checked type="radio" name="state<?php echo $id; ?>" id="<?php echo $id; ?>1">
            <label for="<?php echo $id; ?>1" class="cursor-pointer fs-18 c-black ml-5">متوقفة حاليا</label>
        </div>
        <div class="mr-40 mb-10">
            <input class="cursor-pointer ml-5 fs-18 c-black" type="radio" name="state<?php echo $id; ?>" id="<?php echo $id; ?>2">
            <label for="<?php echo $id; ?>2" class="cursor-pointer fs-18 c-black ml-5">منطلقة باتجاه الهدف</label>
        </div>
        <div class="mr-40 mb-25">
            <input class="cursor-pointer ml-5 fs-18 c-black" type="radio" name="state<?php echo $id; ?>" id="<?php echo $id; ?>3">
            <label for="<?php echo $id; ?>3" class="cursor-pointer fs-18 c-black ml-5">تم الوصول إلى الهدف</label>
        </div>
    </div>
    <div class="Edit-info-tour">
		<form method="POST" action="php/tour_del.php">
			<input type="hidden" name="tour_id" value="<?php echo $id ; ?>" >
			<button class="deletTourButton c-white b-none w-100 bottom-0 text-center pa-7 p-absolute fw-bold text-center">حــــذف الرحـــــلة</button>
		</form>
    </div>
</div>

<?php
}
?>
               

                

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


    /* ------------- Start Delet Tour ------------ */

    const deletTourButton = document.querySelectorAll('.deletTourButton');
    const tourDelet = document.getElementById('tourDelet');

    deletTourButton.forEach(button => {
        button.addEventListener('click', function () {
            tourDelet.style.display = 'block';
        })
        button.addEventListener('click', (event) => {
        event.preventDefault();
        })
    });

    const cancelTour = document.getElementById('cancelTour');
    cancelTour.addEventListener('click', function(event) {
    tourDelet.style.display = 'none';
    event.stopPropagation(); 
});

    /* ------------- End Delet Tour ------------ */

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>      
    </body>
</html>
















