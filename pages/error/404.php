<?php

include_once "../../init.php";
header('HTTP/1.0 404 Not Found', true, 404);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 Bad Request - Page Not Found</title>
    <meta name="robots" content="noindex,nofollow" />
    <link rel="stylesheet" href="<?= get_css() ?>404-page.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <p>404</p>
        <p>THE PAGE YOU WERE LOOKING FOR DOESN'T EXIST</p>
        <a href="<?= home_path() ?>">Home</a>

    </div>
</body>

</html>