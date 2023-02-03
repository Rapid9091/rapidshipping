<?php

include_once '../config.php';

$con =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$response = [];
// $time_stamp = date("Y-m-d");

if (isset($_POST['name']) && $_POST['name'] != ""  && isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['mobile']) && $_POST['mobile'] != "" && isset($_POST['page'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['mobile'];
    $page = $_POST['page'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['result'] = false;
        $response['message'] = "Invalid email address";
        throwResponse($response);
    }

    if (!validate_mobile($number)) {
        $response['result'] = false;
        $response['message'] = "Invalid mobile number";
        throwResponse($response);
    }

    $query_data = "INSERT INTO `form_query` ( `name`, `email`, `number`, `added_on`) VALUES ('$name', '$email', $number, current_timestamp());";
    $res = mysqli_query($con, $query_data);

    // $to = "info@rapidautoshipping.com , amankeshari5937@gmail.com";
    $to = "vaibhav.growupnext@gmail.com";
    $subject = "Query From Website";
    $txt = "Name : " . $name . " " . "\r\n";
    $txt .= "Email : " . $email  . "\r\n";
    $txt .= "Number : " . $number . "\r\n";
    $txt .= "Page : " . $page . "\r\n";

    $headers = "From: noreply.rapidautoshipping.com";


    if ($res) {
        if (mail($to, $subject, $txt, $headers)) {
            $response['result'] = true;
            $response['message'] = "Form submit successfully";
            throwResponse($response);
        } else {
            $response['result'] = false;
            $response['message'] = "Something went worng";
            throwResponse($response);
        }
    } else {
        $response['result'] = false;
        $response['message'] = "Data table is full";
        throwResponse($response);
    }
} else {
    $response['result'] = false;
    $response['message'] = "Insufficient data";
    throwResponse($response);
}





function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}

function throwResponse($response)
{
    echo json_encode($response);
    exit;
}
