function submit_from() {
  let name = get_value("name", "Name can't be empty"),
    email = get_value("email", "Email can't be empty"),
    number = get_value("number", "Number can't be empty");
  page = get_value("page", "Page can't be empty");

  if (!name || name == "" || !validate_name(name)) {
    toast.error("Please enter a valid name");
    return;
  }

  if (!email || email == "" || !validate_email(email)) {
    toast.error("Please enter a valid email address");
    return;
  }

  if (!number || number == "" || !validate_mobile(number)) {
    toast.error("Please enter a valid 10 digit number");
    return;
  }

  if (name && email && number) {
    $.post(
      domain + "services/small_form_submit.php",
      {
        name: name,
        email: email,
        mobile: number,
        page: page,
      },

      function (data, status) {
        console.log(data);
        if (status == "success") {
          if (isJsonString(data)) {
            data = JSON.parse(data);
            if (data.result) {
              show_pop_up();
              reset_input();
            } else {
              toast.error(data.message);
            }
          } else {
            toast.error("Sorry! Something went wrong");
          }
        }
      }
    );
  }
}

function reset_input() {
  let inputs = document.querySelectorAll("input");
  if (inputs.length > 0) {
    inputs.forEach(function (input) {
      input.value = "";
    });
  }
}
