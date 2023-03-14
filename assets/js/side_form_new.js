const originInput = document.getElementById("form_des");
const destinationInput = document.getElementById("to_des");

const step_btn_parent = document.querySelectorAll(".form-section-group");
var input = document.getElementById("myInput1");
var list = document.getElementById("myList1");
var options = list.getElementsByTagName("div");

var input3 = document.getElementById("myInput3");
var list3 = document.getElementById("myList3");
var options3 = list3.getElementsByTagName("div");

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
  list.style.display = "block";
});

input3.addEventListener("input", function () {
  var filter = input3.value.toUpperCase();
  for (var i = 0; i < options.length; i++) {
    var option = options[i];
    var value = option.getAttribute("data-value").toUpperCase();
    if (value.indexOf(filter) > -1) {
      option.style.display = "";
    } else {
      option.style.display = "none";
    }
  }
  list3.style.display = "block";
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
    console.log("abcd");
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

function steps(step) {
  if (form_validation(step)) {
    remove_active();
    step_btn_parent[step].classList.add("active-form");
  } else {
    return false;
  }
}

function remove_active() {
  for (var i = 0; i < step_btn_parent.length; i++) {
    step_btn_parent[i].classList.remove("active-form");
  }
}

function form_validation(step) {
  if (step == 1) {
    console.log("estimated_value");
    if (calculateDistance()) {
      var estimated_value = calculateDistance();
      console.log(estimated_value);
      return true;
    } else {
      console.log("estimated_value_false");
      return false;
    }
  }
  return true;
}

// Define the origin and destination input fields
const result = document.querySelector("#result");
var options = {
  // types: ["(cities)"],
  types: ["address"],
  componentRestrictions: { country: "us" },
};
// Create a new Autocomplete objects for the origin and destination input fields
var originAutocomplete = new google.maps.places.Autocomplete(
  originInput,
  options
);
var destinationAutocomplete = new google.maps.places.Autocomplete(
  destinationInput,
  options
);
function calculateDistance() {
  try {
    if (!originAutocomplete && !destinationAutocomplete) {
      console.log("hello");
      return false;
    }
    // Get the origin and destination locations from the Autocomplete objects
    var originLocation = originAutocomplete.getPlace().formatted_address;
    var destinationLocation =
      destinationAutocomplete.getPlace().formatted_address;

    // Create a new DirectionsService object
    var directionsService = new google.maps.DirectionsService();

    var selectedType = document.querySelector(
      'input[name="transporttype"]:checked'
    );

    // Define the request options
    var request = {
      origin: originLocation,
      destination: destinationLocation,
      travelMode: google.maps.TravelMode.DRIVING,
    };

    // Call the route method on the DirectionsService object
    directionsService.route(request, function (response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        // Extract the distance in miles from the response object
        var distanceInMiles = response.routes[0].legs[0].distance.text;
        var distance = distanceInMiles.split(" ");
        console.log(distance);
        var distancenum = distance[0].replace(/,/g, "");
        // Log the distance in miles to the console
        console.log(
          "Distance between " +
            originLocation +
            " and " +
            destinationLocation +
            " is " +
            distanceInMiles +
            "."
        );

        if (selectedType) {
          console.log("Selected Type:", selectedType.value);
          if (selectedType.value == "open") {
            console.log("Your Estimated Shipping Cost is " + distancenum);
          } else {
            console.log("Your Estimated Shipping Cost is " + distancenum * 1.5);
          }
        } else {
          console.log("No Type selected");
        }
      } else {
        // Log any errors to the console
        console.log("Error: " + status);
      }
    });
  } catch (error) {
    console.log("Error: " + error);
    toast.error("Please enter a valid Value");
    return false;
  }
  return true;
}

// Define the calculateDistance function