// ----------------------- -------------------side form
// ----------------------------------------------------
// -----------------------------------------------------
// -----------------------------------------------------
// ----------------------------------------------------


// input city or zipcode 
var from = document.getElementById("from");
var autocomplete3 = new google.maps.places.Autocomplete(from);
var to = document.getElementById("to");
var autocomplete4 = new google.maps.places.Autocomplete(to);

var step_btn_parent_side = document.querySelectorAll(".form-section-group_side");


var make_side_input = document.getElementById("make_side_input");
var make_side_list = document.getElementById("make_side_list");
var make_options =  make_side_list.getElementsByTagName("div");

var models_side = document.getElementById("models");

var year_side_input = document.getElementById("year_side_input");
var yearList = document.getElementById("yearList");
var year_options = yearList.getElementsByTagName("div");

var pathInMiles_side = document.getElementById("path_distance_side");

make_side_input.addEventListener("click", function () {
  make_side_list.style.display = "block";
});

year_side_input.addEventListener("click", function () {
  yearList.style.display = "block";
});

make_side_input.addEventListener("input", function () {
var filter = make_side_input.value.toUpperCase();
for (var i = 0; i < make_options.length; i++) {
var option = make_options[i];
var value = option.getAttribute("data-value").toUpperCase();
if (value.indexOf(filter) > -1) {
option.style.display = "";
} else {
option.style.display = "none";
}
}
// list.style.display = "block";
});

year_side_input.addEventListener("input", function () {
var filter = year_side_input.value;
for (var i = 0; i < year_options.length; i++) {
var option = year_options[i];
var value = option.getAttribute("data-value");
if (value.indexOf(filter) > -1) {
option.style.display = "";
} else {
option.style.display = "none";
}
}
// list3.style.display = "block";
});

document.addEventListener("click", function (e) {
if (e.target != make_side_input && e.target.parentNode != make_side_list) {
  make_side_list.style.display = "none";
}
});

document.addEventListener("click", function (e) {
if (e.target != year_side_input && e.target.parentNode != yearList) {
  yearList.style.display = "none";
}
});

for (var i = 0; i < make_options.length; i++) {
var option = make_options[i];
option.addEventListener("click", function () {
  make_side_input.value = this.getAttribute("data-value");
// input3.disabled = false;
make_side_list.style.display = "none";
});
}

for (var i = 0; i < year_options.length; i++) {
var option = year_options[i];
option.addEventListener("click", function () {
  year_side_input.value = this.getAttribute("data-value");
  yearList.style.display = "none";
});
}

// // map direction service object
var directionsService_side = new google.maps.DirectionsService();

/////////define calcRoute function
function calcRoute_side() {
 var route_status_side;
 var path_distance_side;
//create request

var request_side = {
origin: document.getElementById("from").value,
destination: document.getElementById("to").value,
travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
unitSystem: google.maps.UnitSystem.IMPERIAL,
};

//pass the request to the route method
directionsService_side.route(request_side, function (result, status) {
if (status == google.maps.DirectionsStatus.OK) {
  path_distance_side = result.routes[0].legs[0].distance.text;
  console.log(path_distance_side);
  pathInMiles_side.value = path_distance_side;
  route_status_side = true;
} else {
  console.log('not ok');
  route_status = false;
 }
});
console.log(route_status);
}

function form_validation_side(step) {
var status = false;
if (step == 1) {  
if(from.value.length != 0 && to.value.length != 0){
status = true;
}
else{
status = false;
}
}

if(step == 2){
if(year_side_input.value.length !=0 && models_side.value.length != 0 && make_side_input.value.length !=0){
status = true;
}
else{
status = false;
}
}
return status;
}

function remove_active_side() {
for (var i = 0; i < step_btn_parent_side.length; i++) {
step_btn_parent_side[i].classList.remove("active_form_side");
}
}

function steps_side(step) {
if(step == 1){
if (form_validation_side(step) != true) {
  toast.error("Please Fill Destination");
   }
   else{
     remove_active_side();
     step_btn_parent_side[step].classList.add("active_form_side");         
     calcRoute_side();
  }

}

if(step == 2){
if(form_validation_side(step)){
  remove_active_side();
  step_btn_parent_side[step].classList.add("active_form_side");
}else{
  toast.error("Please fill All Details");
}        
}

}

function format_phone_value_side(value){
if(!value){
return value;
}
let phone_number_side =  value.replace(/[^\d]/g, '');
let phoneNumberLength_side = phone_number_side.length;
if(phoneNumberLength_side < 4){
return phone_number_side;
} 
if(phoneNumberLength_side <7){
return `(${phone_number_side.slice(0, 3)}) ${phone_number_side.slice(3)}`;
} 
return `(${phone_number_side.slice(0, 3)}) ${phone_number_side.slice(3, 6)}-${phone_number_side.slice(6,9)}`;
}

function phoneNumberformatterSide(){
var input_phone_number_side = document.getElementById("phone_side");
var formatted_input_value_side = format_phone_value_side(input_phone_number_side.value);
return input_phone_number_side.value = formatted_input_value_side;
}
