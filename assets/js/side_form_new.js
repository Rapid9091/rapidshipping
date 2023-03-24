// input city or zipcode 
var input1 = document.getElementById("form_des");
var autocomplete1 = new google.maps.places.Autocomplete(input1);
var input2 = document.getElementById("to_des");
var autocomplete2 = new google.maps.places.Autocomplete(input2);

var step_btn_parent = document.querySelectorAll(".form-section-group");


var input = document.getElementById("myInput1");
var list = document.getElementById("myList1");
var options = list.getElementsByTagName("div");

var models = document.getElementById("myInput2");

var input3 = document.getElementById("myInput3");
var list3 = document.getElementById("myList3");
var options3 = list3.getElementsByTagName("div");

var pathInMiles = document.getElementById("path_distance");

input.addEventListener("click", function () {
list.style.display = "block";
});

input3.addEventListener("click", function () {
list3.style.display = "block";
});

input.addEventListener("input", function () {
var filter = input.value.toUpperCase();
for (var i = 0; i < options.length; i++) {
var option = options[i];
var value = option.getAttribute("data-value").toUpperCase();
if (value.indexOf(filter) > -1) {
option.style.display = "";
} else {
option.style.display = "none";
}
}
// list.style.display = "block";
});

input3.addEventListener("input", function () {
var filter = input3.value;
for (var i = 0; i < options3.length; i++) {
var option = options3[i];
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
if (e.target != input && e.target.parentNode != list) {
list.style.display = "none";
}
});

document.addEventListener("click", function (e) {
if (e.target != input3 && e.target.parentNode != list3) {
list3.style.display = "none";
}
});

for (var i = 0; i < options.length; i++) {
var option = options[i];
option.addEventListener("click", function () {
input.value = this.getAttribute("data-value");
input3.disabled = false;
list.style.display = "none";
});
}

for (var i = 0; i < options3.length; i++) {
var option = options3[i];
option.addEventListener("click", function () {
input3.value = this.getAttribute("data-value");
list3.style.display = "none";
});
}

// map direction service object
var directionsService = new google.maps.DirectionsService();

/////////define calcRoute function
function calcRoute() {
 var route_status;
 var path_distance;
//create request

var request = {
origin: document.getElementById("form_des").value,
destination: document.getElementById("to_des").value,
travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
unitSystem: google.maps.UnitSystem.IMPERIAL,
};

//pass the request to the route method
directionsService.route(request, function (result, status) {
if (status == google.maps.DirectionsStatus.OK) {
  path_distance = result.routes[0].legs[0].distance.text;
  console.log(path_distance);
  pathInMiles.value = path_distance;
  route_status = true;
} else {
  console.log('not ok');
  route_status = false;
 }
});
console.log(route_status);
}

function form_validation(step) {
var status = false;
if (step == 1) {  
if(input1.value.length != 0 && input2.value.length != 0){
status = true;
}
else{
status = false;
}
}

if(step == 2){
if(input.value.length !=0 && models.value.length != 0 && input3.value.length !=0){
status = true;
}
else{
status = false;
}
}
return status;
}

function remove_active() {
for (var i = 0; i < step_btn_parent.length; i++) {
step_btn_parent[i].classList.remove("active-form");
}
}

function steps(step) {
if(step == 1){
if (form_validation(step) != true) {
  toast.error("Please Fill Destination");
   }
   else{
     remove_active();
     step_btn_parent[step].classList.add("active-form");         
     calcRoute();
  }

}

if(step == 2){
if(form_validation(step)){
  remove_active();
  step_btn_parent[step].classList.add("active-form");
}else{
  toast.error("Please fill All Details");
}        
}

}

function format_phone_value(value){
if(!value){
return value;
}
let phone_number =  value.replace(/[^\d]/g, '');
let phoneNumberLength = phone_number.length;
if(phoneNumberLength < 4){
return phone_number;
} 
if(phoneNumberLength <7){
return `(${phone_number.slice(0, 3)}) ${phone_number.slice(3)}`;
} 
return `(${phone_number.slice(0, 3)}) ${phone_number.slice(3, 6)}-${phone_number.slice(6,9)}`;
}

function phoneNumberformatter(){
var input_phone_number = document.getElementById("phone");
var formatted_input_value = format_phone_value(input_phone_number.value);
return input_phone_number.value = formatted_input_value;
}

