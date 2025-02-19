/* Add Driver */ 

const addDriverButton = document.getElementById('addDriverButton');
const driverAdd = document.getElementById('driverAdd');

addDriverButton.addEventListener('click', function () {
    driverAdd.style.display = 'block';
});

const closeButton1 = document.getElementById('closeButton1');
closeButton1.addEventListener('click', function(event) {
    driverAdd.style.display = 'none';
    event.stopPropagation(); 
});

/* End Add Driver */

/* Del Driver */

const delDriverButton = document.getElementById('delDriverButton');
const driverDel = document.getElementById('driverDel');

delDriverButton.addEventListener('click', function () {
    driverDel.style.display = 'block';
});

const closeButton2 = document.getElementById('closeButton2');
closeButton2.addEventListener('click', function(event) {
    driverDel.style.display = 'none';
    event.stopPropagation(); 
});


/* End Del Driver */



/* Start Add Vehicle */ 

const addVehicleButton = document.getElementById('addVehicleButton');
const vehicleAdd = document.getElementById('vehicleAdd');

addVehicleButton.addEventListener('click', function () {
    vehicleAdd.style.display = 'block';
    addVehicleButton.addEventListener('click', (event) => {
        event.preventDefault();
    })
});

const close1 = document.getElementById('close1');
close1.addEventListener('click', function(event) {
    vehicleAdd.style.display = 'none';
    event.stopPropagation(); 
});


/* End Add Vehicle */ 

/* Start Del Vehicle */ 

const delVehicleButton = document.getElementById('delVehicleButton');
const vehicleDel = document.getElementById('vehicleDel');

delVehicleButton.addEventListener('click', function () {
    vehicleDel.style.display = 'block';
    delVehicleButton.addEventListener('click', (event) => {
        event.preventDefault();
    })
});

const close2 = document.getElementById('close2');
close2.addEventListener('click', function(event) {
    vehicleDel.style.display = 'none';
    event.stopPropagation(); 
});

/* End Del Vehicle */ 


/* Start Add Tour */ 

const addTourBtton = document.getElementById('addTourBtton');
const tourAdd = document.getElementById('tourAdd');

addTourBtton.addEventListener('click', function () {
    tourAdd.style.display = 'block';
    addTourBtton.addEventListener('click', (event) => {
        event.preventDefault();
    })
});

const closeTour1 = document.getElementById('closeTour1');
closeTour1.addEventListener('click', function(event) {
    tourAdd.style.display = 'none';
    event.stopPropagation(); 
});

/* End Add Tour */ 


/* Start Del Tour */ 

const delTourBtton = document.getElementById('delTourBtton');
const tourDel = document.getElementById('tourDel');

delTourBtton.addEventListener('click', function () {
    tourDel.style.display = 'block';
    delTourBtton.addEventListener('click', (event) => {
        event.preventDefault();
    })
});

const closeTour2 = document.getElementById('closeTour2');
closeTour2.addEventListener('click', function(event) {
    tourDel.style.display = 'none';
    event.stopPropagation(); 
});


/* End Del Tour */ 





/* Start Add Camera */ 

const addCameraButton = document.getElementById("addCameraButton");
const cameraAdd = document.getElementById("cameraAdd");

addCameraButton.addEventListener('click', function () {
    cameraAdd.style.display = 'block';
    addCameraButton.addEventListener('click', (event) => {
        event.preventDefault();
    })
});

const closeCAM1 = document.getElementById('closeCAM1');
closeCAM1.addEventListener('click', function(event) {
    cameraAdd.style.display = 'none';
    event.stopPropagation(); 
});

/* End Add Camera */ 

/* Start Del Camera */ 

const delCameraButton = document.getElementById('delCameraButton');
const cameraDel = document.getElementById('cameraDel');

delCameraButton.addEventListener('click', function () {
    cameraDel.style.display = 'block';
    delCameraButton.addEventListener('click', (event) => {
        event.preventDefault();
    })
});

const closeCAM2 = document.getElementById('closeCAM2');
closeCAM2.addEventListener('click', function(event) {
    cameraDel.style.display = 'none';
    event.stopPropagation(); 
});


/* End Del Camera */ 

