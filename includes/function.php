<?php

function getRequestData()
{
    // geting data from request
    $req_data =  stripslashes(file_get_contents("php://input"));

    // convert json to php array
    $req_data_array = json_decode($req_data, true);

    // return 
    return $req_data_array;
}


function current_path()
{
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function getTitle($url)
{
    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
}

function is_json($string, $return_data = false)
{
    $data = json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE) ? ($return_data ? $data : TRUE) : FALSE;
}

// get $_POST and secure incoming data 
function send_booking_conformation($to, $bookingid, $subject)
{
    $to .= ",info@helloindiatour.com";

    $message = file_get_contents('https://helloindiatour.com/pages/booking-mail.php?_bi=' . $bookingid);

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <info@helloindiatour.com>' . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        true;
    } else {
        false;
    }
}


$DB_ERROR = false;
global $DB_ERROR;
function handle_db_error($message)
{

    global $DB_ERROR;
    $DB_ERROR = $message;
}


function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 25; $i++) {
        $randstring .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randstring;
}


function uploadFile($file_name, $uploadpath, $fun = null)
{


    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // dir name where uploaded
    $target_dir = APPPATH . $uploadpath;

    // file type
    $imageFileType = strtolower(pathinfo($file_name["name"], PATHINFO_EXTENSION));

    //  new file name
    $target_file_name =  RandomString() . '.' . $imageFileType;


    // complete path with new file name
    $target_file = $target_dir . $target_file_name;

    $check = getimagesize($file_name["tmp_name"]);
    if ($check == false) {
        if ($fun != null) {
            $fun("Failed to get file size");
        }
        return false;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        if ($fun != null) {
            $fun("File already exists");
        }
        return false;
    }

    // Check file size
    if ($file_name["size"] > 5000000) {
        if ($fun != null) {
            $fun("File is to large");
        }
        return false;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        if ($fun != null) {
            $fun("please upload only jpg, png, jpeg or gif");
        }
        return false;
    }

    if (move_uploaded_file($file_name["tmp_name"], $target_file)) {
        return $target_file_name;
    } else {
        if ($fun != null) {
            $fun("Fail to move file from you to remote.");
        }
        return false;
    }
}




// get $_POST and secure incoming data 
function senitize_array($array)
{
    $return_array = [];
    global $con;
    if ($con) {
        if (count($array) > 0) {
            $keys = array_keys($array);
            for ($i = 0; $i < count($keys); $i++) {
                $key_val = $array[$keys[$i]];
                if (gettype($key_val) != 'array') {
                    $value = mysqli_escape_string($con, $key_val);
                    $return_array[$keys[$i]] = $value;
                } else {
                    $return_array[$keys[$i]] = senitize_array($key_val);
                }
            }
        }
    } else {
        trigger_error('Error: while connecting to database', E_USER_WARNING);
    }
    return $return_array;
}

function senitize_string($string)
{
    global $con;
    return mysqli_escape_string($con, $string);
}



function _post($key, $required = false, $error = null)
{
    if (isset($_POST[$key])) {
        global $con;
        return mysqli_escape_string($con, $_POST[$key]);
    } else {
        if ($required) {
            throwResponse(false, $error);
        } else {
            return '';
        }
    }
}

function _get($key, $required = false, $error = null)
{
    if (isset($_GET[$key])) {
        global $con;
        return mysqli_escape_string($con, $_GET[$key]);
    } else {
        if ($required) {
            throwResponse(false, $error);
        } else {
            return '';
        }
    }
}

function throwResponse($result = false, $message = '', $data = null)
{
    $response = [];
    $response['status'] = $result;
    $response['message'] = $message;

    if ($data != null) {
        $response['data'] = $data;
    }
    echo json_encode($response);
    exit;
}

function get_status_widget($status, $function = "")
{


    switch ($status) {

        case 3:
            $class = "stock_warning";
            $message = "Low Stock";
            break;

        case 2:
            $class = "error";
            $message = "Out of Stock";
            break;

        case 1:
            $class = "success";
            $message = "Active";
            break;

        default:
            # code...
            $class = "error";
            $message = "Inactive";
            break;
    }


    echo '<p class="info-widget ' . $class . '" ' . $function . '> ' . $message . '   </p>';
}


function throw_exception($message)
{
    global $MODE;
    if ($MODE == "DEV") {
        throw new Exception($message);
    }
}


function redirect($url)
{
    header('Location: ' . $url);
}
