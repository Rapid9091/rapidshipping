<?php
// header("Content-type: text/xml");
date_default_timezone_set('Asia/Kolkata');
// $dbHost = 'localhost';
// $dbName = 'u841070527_autoshipping';
// $dbUser = 'u841070527_rapid';
// $dbPass = 'Smile@1427';
include './init.php';
// Create a new MySQLi connection
// $mysqli = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check if the connection was successful
if (!$con) {
    echo "Failed to connect to MySQL: ";
    exit();
}
$timestamp2 = date('Y-m-d\TH:i:sP');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <style>
        input{
            width :500px;
            margin:auto;
            padding:.3rem ;
            text-align:center;
            cursor:pointer;}
    </style>
</head>
<body>
    <div  style="margin: auto;">
    <form action="" method="POST" style="margin: auto;">
    <select name="pages" id="pages">
        <option value="#">Select Pages</option>
        <option value="state_to_state">state_to_state</option>
        <option value="services">services</option>
        <option value="cars">cars</option>
        <option value="blogs">blogs</option>
        <option value="states">states</option>
        <option value="company_reviews">company_reviews</option>
        <option value="city">city</option>
    </select><br><br>
    <input type="text" name="query" id="query"><br><br>
    <input type="submit" value="Update" name="update">
    </form>

    </div>
    <script>
        document.getElementById("pages").addEventListener('change',function(){
            var Query = "UPDATE  "+ this.value + "  SET added_on = <?=$timestamp2 ?>"
            document.getElementById('query').value = Query;
        });
    </script>
</body>
</html>
<?php
if(isset($_POST['update'])){
    $e = $_POST['pages'];
    $q = "UPDATE $e SET added_on = '$timestamp2' ";
    echo $q;
    if(mysqli_query($con, $q)){
        echo "<h4>Updated Successfully!</h4>";
    }else{
        echo 'Not Updated'.mysqli_error($con);
    }
}
?>
