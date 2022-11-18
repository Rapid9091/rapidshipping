<?php


$domain = "https://rapidautoshipping.com";


if (isset($_GET['redirectto'])) {
    $domain = $_GET['redirectto'];
}



if (isset($_GET['fname']) && $_GET['fname'] != ""  && isset($_GET['email']) && $_GET['email'] != "" && isset($_GET['number']) && $_GET['number'] != "") {
    $name = $_GET['fname'];
    if (isset($_GET['lname'])) {
        $lname = $_GET['lname'];
    } else {
        $lname = "";
    }
    $email = $_GET['email'];
    $number = $_GET['number'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: " . $domain . "?error=Invalid email");
    }
    if (!validate_mobile($number)) {
        header("Location: " . $domain . "?error=Invalid number");
    }
    $to = "info@rapidautoshipping.com , amankeshari5937@gmail.com";

    $subject = "Query From Website";
    $txt = "Name : " . $name . " " . $lname . "\r\n";
    $txt .= "Email : " . $email  . "\r\n";
    $txt .= "Number : " . $number . "\r\n";

    $headers = "From: noreply.rapidautoshipping.com";

    if (mail($to, $subject, $txt, $headers)) {

        // Sending the mail after all checks
        header("Location: " . $domain);
    } else {
        // Sending the fail message
        header("Location: " . $domain . "?error=Failed to submit the request. Try again");
    }
} else {
    header("Location: " . $domain . "?error=Please fill all fields");
}
function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}
