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
                    <a href="drivers.php" class="active d-flex al-center fs-14 c-black rad-6 p-10">
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
            
            <h1 class="p-relative">السائقين</h1>

            <div class="page-drivers m-20 d-grid gap-20">
            
           
<?php
include_once 'php/data_base_connect.php';
//------------------------

//------------------------

$sql = "SELECT * FROM drivers";
$drivers = mysqli_query($conn, $sql);
$vary=1;
foreach ($drivers as $driver) {
    $id = $driver['Driver_ID'];
    $name = $driver['Driver_Name'];
    $address = $driver['Driver_Address'];
    $phoneNumber = $driver['Driver_Phone'];


    echo '<div class="driver p-relative bg-black2 rad-6 p-10">';
    echo '<span class="id-driver c-white p-absolute end-0 top-0 pa-5 fw-bold wi-50 text-center">' . $id . '</span>';
    echo '<div class="image-driver">';
    echo '<img class="wi-150 hi-150 ms-auto me-auto d-block" src="Imgs/driver' . $vary  . '.jpg" alt="">';
    echo '</div>';
    echo '<div class="info-driver mt-20 mb-20 mr-20">';
    echo '<div class="name-driver d-flex">';
    echo '<h4 class="rad-6 pa-5 wi-4 text-center">إسم السائق:</h4>';
    echo '<p class="c-white center-flex wi-5 ms-auto me-auto rad-6 bg-blue">' . $name . '</p>';
    echo '</div>';
    echo '<div class="address-driver d-flex">';
    echo '<h4 class="rad-6 pa-5 wi-4 text-center">عنوان السائق:</h4>';
    echo '<p class="c-white center-flex wi-5 ms-auto me-auto rad-6 bg-blue">' . $address . '</p>';
    echo '</div>';
    echo '<div class="phone-driver d-flex">';
    echo '<h4 class="rad-6 pa-5 wi-4 text-center">رقم الجوال:</h4>';
    echo '<p class="c-white center-flex wi-5 ms-auto me-auto rad-6 bg-blue">' . $phoneNumber . '</p>';
    echo '</div>';
    echo '<div class="Edit-info-driver between-flex">';
    echo '<form method="POST" action="php/Driver_Edit.php">';
    echo '<input type="hidden" name="driver_id" value="' . $id . '">';
    echo ' <button class="editDreiverButton c-white pa-7 p-absolute fw-bold text-center wi-150 bottom-0 end-0">تعديل معلومات السائق</button>';
    echo '</form>';
    echo '<form method="POST" action="">';
    echo '<input type="hidden" name="driver_id" value="' . $id . '">';
    echo '<button class="deleteDriverButton c-white pa-7 p-absolute fw-bold text-center wi-100 bottom-0 start-0" type="submit" name="delete_driver">حذف السائق</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
	$vary++ ; 
}

//if (isset($_POST['edit_driver'])) {
    // Handle edit driver functionality here
  //  $driverId = $_POST['driver_id'];
    // Rest of the code to handle the edit driver functionality
           
//}

if (isset($_POST['delete_driver'])) {
    // Handle delete driver functionality here
    $driverId = $_POST['driver_id'];
    $sql = "DELETE FROM drivers WHERE Driver_ID = '$driverId';";

    if (mysqli_query($conn, $sql)) {
        echo "Driver deleted successfully.";
    } else {
        echo "Error deleting driver: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
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


    /* ------------- Start Edit Driver---------------- */

   

    /* ------------- End Edit Driver---------------- */

    /* ------------- Start Delet Driver ------------ */

    const deletDreiverButton = document.querySelectorAll('.deletDreiverButton');
    const driverDelet = document.getElementById('driverDelet');

    deletDreiverButton.forEach(button => {
        button.addEventListener('click', function () {
            driverDelet.style.display = 'block';
        })
        button.addEventListener('click', (event) => {
        event.preventDefault();
        })
    });

    const cancelDriver = document.getElementById('cancelDriver');
    cancelDriver.addEventListener('click', function(event) {
    driverDelet.style.display = 'none';
    event.stopPropagation(); 
});

    /* ------------- End Delet Driver ------------ */
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>    
</body>

</html>