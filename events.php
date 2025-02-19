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
                    <a href="tours.php" class="d-flex al-center fs-14 c-black rad-6 p-10">
                        <i class="fa-solid fa-suitcase-rolling fa-fw"></i>
                        <span>الرحلات</span>
                    </a>
                </li>
                <li>
                    <a href="events.php" class="active d-flex al-center fs-14 c-black rad-6 p-10">
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

            <h1 class="p-relative">الأحداث</h1>
            
            <?php
// $events is an array containing the event data retrieved from the database
include_once 'php/data_base_connect.php';
//------------------------

//------------------------

$sql = "SELECT * FROM _event";
$events = mysqli_query($conn, $sql);
foreach ($events as $event) {
    $eventNumber = $event['EVENT_ID'];
    $eventDescription = $event['EVENT_DESCRYPTION'];
    $driverNumber = $event['Driver_ID'];
?>

<div class="event p-relative rad-6 p-20">
    <div class="all-numbers arround-flex package">
        <div class="c-black text-center">
            <div class="d-flex fs-20">
                <i class="fa fa-check-square mrt-5 ml-6"></i>
                <p>رقم الـحـدث</p>
            </div>
            <span class="fs-20 mr-10"><?php echo $eventNumber; ?></span>
        </div>
        <div class="c-black text-center">
            <div class="d-flex fs-20">
                <i class="fa fa-check-square mrt-5 ml-6"></i>
                <p>وصـف الـحـدث</p>
            </div>
            <span class="fs-20 mr-10"><?php echo $eventDescription; ?></span>
        </div>
        <div class="c-black text-center">
            <div class="d-flex fs-20">
                <i class="fa fa-check-square mrt-5 ml-6"></i>
                <p>رقم الـسـائق</p>  
            </div>
            <span class="fs-20 mr-10"><?php echo $driverNumber; ?></span>
        </div>
    </div>
</div>

<?php
}
?>
            </div>
        </div> 
    </div>
<script>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>