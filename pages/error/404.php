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
    <?php include head; ?>

    <link rel="stylesheet" href="<?= get_css(); ?>side-form.css" />
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_home.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_inside-blog-page.css">
    <link rel="stylesheet" href="<?= get_css(); ?>small-form.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_state-to-state-transport.css">
    <link rel="stylesheet" href="<?= get_css() ?>404-page.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <?php include_once header ?>

    <div class="container">
        <p>THE PAGE YOU WERE LOOKING FOR DOESN'T EXIST</p>
        <img loading="lazy" src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1667909993/Recent%20Uploads/404_xbd4uk.png" alt="Rapid Auto shipping">
        <a href="<?= home_path() ?>">Home</a>

    </div>
    <!-- call to action section (all services,, reviews section,, and call to action button section)-->
    <?php include_once call_to_action ?>
    <!-- section from the home page starts here -->
    <?php include_once page_bottom ?>
</body>

</html>