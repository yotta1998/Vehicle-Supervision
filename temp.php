            
<?php
include_once 'php/data_base_connect.php';
//------------------------

//------------------------

$sql = "SELECT * FROM drivers";
$drivers = mysqli_query($conn, $sql);

foreach ($drivers as $driver) {
    $id = $driver['Driver_ID'];
    $name = $driver['Driver_Name'];
    $address = $driver['Driver_Address'];
    $phoneNumber = $driver['Driver_Phone'];
	//-------------------------------------------
	 echo    '<div id="driverEdit" class="interface-edit-driver wi-500 p-relative card-interface">';
            echo          '  <i id="closeDriver" class="fa fa-remove hide p-absolute top-0 end-0 cursor-pointer c-white p-10"></i>';
            echo           ' <h2 class="text-center mb-40 c-white">تعديل معلومات السائق</h2>';
            echo           ' <form id="driverEditForm">';
            echo               ' <div class="center-flex">';
            echo                  '<label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل رقم السـائق</label>';
            echo               '     <input class="mb-20 w-100 rad-6" required type="text" value="1">';
            echo              '  </div>';
            echo               ' <div class="center-flex">';
            echo               '     <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل الإســـــــم</label>';
            echo                   ' <input class="mb-20 w-100 rad-6" required type="text" value="' . $name . '">';
            echo              '  </div>';
            echo               ' <div class="center-flex">';
            echo                 '   <label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل العــــنوان</label>';
            echo              '  <input class="mb-20 w-100 rad-6" required type="text" value="حماه - حي تشرين">';
            echo           ' </div>';
            echo           ' <div class="center-flex">';
            echo                '<label for="" class="wi-150 c-white fw-bold pl-10 mb-20">تعديل رقم الجــوال</label>';
            echo                '<input class="mb-20 w-100 rad-6" required type="text" value="0967357969">';
            echo           ' </div>';
			echo            '<input type="hidden" name="driver_id" value="' . $id . '">';
            echo                '<button class="d-block me-auto ms-auto mt-20 b-none fs-20 pt-10 pb-10 w-100 c-white rad-6" name="edit_driver" type="submit">تـــعــــديل</button>';
            echo            '</form>';
            echo    '</div>' ;
	//-------------------------------------------

    echo '<div class="driver p-relative bg-black2 rad-6 p-10">';
    echo '<span class="id-driver c-white p-absolute end-0 top-0 pa-5 fw-bold wi-50 text-center">' . $id . '</span>';
    echo '<div class="image-driver">';
    echo '<img class="wi-150 hi-150 ms-auto me-auto d-block" src="Imgs/team-01.png" alt="">';
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
    echo '<form method="POST" action="">';
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
}

if (isset($_POST['edit_driver'])) {
    // Handle edit driver functionality here
    $driverId = $_POST['driver_id'];
    // Rest of the code to handle the edit driver functionality
           
}

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
              
			  
			  
			  const editDreiverButton = document.querySelectorAll('.editDreiverButton');
    const driverEdit = document.getElementById('driverEdit');

    editDreiverButton.forEach(button => {
        button.addEventListener('click', function () {
            driverEdit.style.display = 'block';
        })
        button.addEventListener('click', (event) => {
        event.preventDefault();
        })
    });

    const closeDriver = document.getElementById('closeDriver');
    closeDriver.addEventListener('click', function(event) {
        driverEdit.style.display = 'none';
        event.stopPropagation(); 
    });
	

	
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
	<div class="camera p-relative rad-6">
                    <div class="img-camera">
                        <img class="wi-100 d-block ms-auto me-auto" src="" alt="">
                    </div>
                    <div class="type-camera text-center mt-20 mb-20">
                        <h4 class="c-white me-auto ms-auto mb-20">رقم المركبة</h4>
                        <p class="c-white wi-200 rad-6 me-auto ms-auto"></p>
                    </div>
                    <div class="ip-camera text-center mt-20 mb-20">
                        <h4 class="c-white me-auto ms-auto mb-20">IP الكاميرا</h4>
                        <p class="c-white wi-200 rad-6 me-auto ms-auto"></p>
                    </div>
                    <div class="Edit-info-camera between-flex">
                        <button class="editCameraButton c-white b-none w-100 text-center pa-7 p-absolute fw-bold text-center wi-150">تـعديل مـعلومـات الكـاميرا</button>
                        <button class="deletCameraButton c-white b-none w-100 bottom-0 text-center pa-7 p-absolute fw-bold text-center wi-100">حــــذف الكــامـيـرا</button>
                    </div>
                </div>
				
				________________________________________________________________________________________----
				
				
				/* Start Register 

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

/* End Register */

___________________________________________________________________________________________________________
	
    <script>
        var displayImg = document.getElementById('displayImg');
        displayImg.addEventListener('click', function() {
            var image_Path = document.getElementById('path-photo');

            var imageContainer = document.getElementById('imageContainer');
            imageContainer.src = image_Path.innerText;
            imageContainer.style.display = 'block';
        });
    </script>
--------------------------------------------------------------------------------------------------------------
	
	
	
	
	
	