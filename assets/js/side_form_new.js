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
var make_side_options =  make_side_list.getElementsByTagName("div");

var models_input_side = document.getElementById("models");
var models_list_side = document.getElementById("models_list_side");
var models_options_side = models_list_small.getElementsByTagName("div");

var year_side_input = document.getElementById("year_side_input");
var yearList = document.getElementById("yearList");
var year_options = yearList.getElementsByTagName("div");

var vehicle_side_size_input = document.getElementById('vehicle_side_size_input');
var vehicle_side_size_list = document.getElementById('vehicle_side_size_list');
var vehicle_side_list_div = document.getElementById('vehicle_side_list_div');
var vehicle_side_size_options = vehicle_side_list_div.getElementsByTagName("div");

var pathInMiles_side = document.getElementById("path_distance_side");

make_side_input.addEventListener("click", function () {
  make_side_list.style.display = "block";
});

models_input_side.addEventListener("click", function(){
  models_list_side.style.display = "block";
})
year_side_input.addEventListener("click", function () {
  yearList.style.display = "block";
});

vehicle_side_size_input.addEventListener("click", function () {
  vehicle_side_size_list.style.display = "block";
});

make_side_input.addEventListener("input", function () {
var filter = make_side_input.value.toUpperCase();
for (var i = 0; i < make_side_options.length; i++) {
var option = make_side_options[i];
var value = option.getAttribute("data-value").toUpperCase();
if (value.indexOf(filter) > -1) {
option.style.display = "";
} else {
option.style.display = "none";
}
}

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

});

models_input_side.addEventListener("input", function () {
  var filter = models_list_side.value;
  for (var i = 0; i < models_options_side.length; i++) {
  var option = models_options_side[i];
  var value = option.getAttribute("data-value");
  if (value.indexOf(filter) > -1) {
  option.style.display = "";
  } else {
  option.style.display = "none";
  }
  }
  
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

document.addEventListener("click", function (e) {
  if (e.target != vehicle_side_size_input && e.target.parentNode != vehicle_side_size_list) {
    vehicle_side_size_list.style.display = "none";
  }
  });


document.addEventListener("click", function (e) {
  if (e.target != models_input_side && e.target.parentNode != models_list_side) {
    models_list_side.style.display = "none";
  }
  });

// for (var i = 0; i < make_options.length; i++) {
// var option = make_options[i];
// option.addEventListener("click", function () {
//   make_side_input.value = this.getAttribute("data-value");
// // input3.disabled = false;
// make_side_list.style.display = "none";
// });
// }

$('#make_side_list div').on('click', function(){
  make_side_input.value = this.getAttribute("data-value");
  make_side_list.style.display = "none";
  var specialCategories = ['MotorCycle', 'ATV'];
  if($.inArray(make_side_input.value, specialCategories) > -1){
    vehicle_side_size_input.value = make_side_input.value;
    $('#vehicle_side_div').css('display', 'none');
  }else{
    $('#vehicle_side_div').css('display', 'block');
  }
    

  let make_side_id = $(this).attr('value');
  $.ajax({
    url: "../services/models.php",
    method:"GET",
    data: {make_id:make_side_id},
    success:function(res){
      console.log(res);
      $('#models_list_side').html(res);
    }

  })
})

$('#models_list_side').on('click', 'div.models_options', function(){
  models_input_side.value = this.getAttribute("data-value");
  models_list_side.style.display = "none";
})

for (var i = 0; i < year_options.length; i++) {
var option = year_options[i];
option.addEventListener("click", function () {
  year_side_input.value = this.getAttribute("data-value");
  yearList.style.display = "none";
});
}


for (var i = 0; i < vehicle_side_size_options.length; i++) {
  var option = vehicle_side_size_options[i];
  option.addEventListener("click", function () {
  vehicle_side_size_input.value = this.getAttribute("data-value");
  vehicle_side_size_list.style.display = "none";
  });
  }

// // map direction service object
var directionsService_side = new google.maps.DirectionsService();

/////////define calcRoute function
// function calcRoute_side() {
//  var route_status_side;
//  var path_distance_side;
// //create request

// var request_side = {
// origin: document.getElementById("from").value,
// destination: document.getElementById("to").value,
// travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
// unitSystem: google.maps.UnitSystem.IMPERIAL,
// };

// //pass the request to the route method
// directionsService_side.route(request_side, function (result, status) {
// if (status == google.maps.DirectionsStatus.OK) {
//   path_distance_side = result.routes[0].legs[0].distance.text;
//   console.log(path_distance_side);
//   pathInMiles_side.value = path_distance_side;
//   route_status_side = true;
// } else {
//   console.log('not ok');
//   route_status = false;
//  }
// });
// console.log(route_status);
// }

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
if(year_side_input.value.length !=0 && models_input_side.value.length != 0 && make_side_input.value.length !=0 && vehicle_side_size_input.value.length !=0){
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
    step_one_btn_side.value = "Wait..";
    var request = {
      origin: document.getElementById("from").value,
      destination: document.getElementById("to").value,
      travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
      unitSystem: google.maps.UnitSystem.IMPERIAL,
      };
      directionsService_side.route(request, function (result, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        pathInMiles_side.value = result.routes[0].legs[0].distance.text;
        step_one_btn_side.value = "Get A Quote";
        remove_active_side();
        step_btn_parent_side[step].classList.add("active_form_side");
      } else {
        toast.error("Destination not found");
        step_one_btn_side.value = "Get A Quote";
       }
      });
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

function final_validation_side(){
  if(username_side.value.length !=0 && usermail_side.value.length !=0 && pick_up_date_side.value.length !=0 && phone_side.value.length !=0){
    return true;
  }
  else{
    toast.error("Please fill All Details");
    return false;
  }
}