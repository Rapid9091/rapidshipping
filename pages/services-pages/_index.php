<?php
include_once "../../init.php";

if (isset($_GET['page_id'])) {
    $slug = $_GET['page_id'];

    $data = fetch_data("SELECT * FROM services WHERE `slug` = '$slug'");

    if (!$data) {
        header("Location: " . home_path() . "404");
    }
} else {
    header("Location: " . home_path() . "services");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data['title'];?>
    </title>
    <?= $data['meta']; ?>
    <?php include_once new_head; ?>
    <link rel="stylesheet" href="<?= get_css(); ?>Page_new.min.css" defer>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400&display=swap"
        rel="stylesheet" defer />

    


    <style>
        .contact-us-header-page {
            width: 100%;
            background-repeat: no-repeat, repeat;
            background-image: url('<?= get_img() ?>car-shipping-header-image1.webp');
            background-blend-mode: lighten;
            position: relative;
            background-position: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .third-section-content{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <!------------------ header --------------------->
    <?php include header; ?>

    <!------------- banner --------------------->

    <section class="contact-us-header-page" id="banner_form">

        <div class="third-section-state">


            <div class="third-section-content">
                <div class="state-banner-content">
                    <h1 class="third-section-content-heading">

                        <?php echo $data['h1']; ?>
                    </h1>

                    <p class="third-section-content-text" style=" overflow: hidden;
                text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 5;
           line-clamp: 5; 
   -webkit-box-orient: vertical;
   padding:1% 0">
                        <?php echo $data['h1_about']; ?>

                    </p>
                    </div>
                    <div class="state-banner-images">
                        <div class="banner-review-images">
                            <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-faiz.webp" alt="trustpilot logo"
                                loading="lazy" width="150px" height="71px" class="truspilot_logo">
                            <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-google.webp" alt=" google logo"
                                loading="lazy" width="150px" height="66px" class="google_logo">
                            <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-crunchbase2.webp"
                                alt="cruchbase logo" loading="lazy" width="150px" height="44px" class="crunchbase_logo">
                        </div>
                    </div>


                </div>
                <div id="banner_form_small" style="display:grid;
                place-items:center;">
                    <?php include small_form_new ;?>
                </div>



            </div>
    </section>
    <hr>
    <!-------------feature strip ----------------->
   

    <!---------------reviews --------------------->

   

    <!---------- parent grid section start---------->

    <div class="main-state-to-state">
        <div class="left-state-to-state">
            <div class="first-section-state-to-state">
                <h2 class="heading-1"><strong>
                        <?=$data['h2'];?>
                    </strong></h2>
                <p class="para-2">
                    <?= $data['h2_about'];?>
                </p>
            </div>


            <!-- section from which shipping started here -->
            <section class="first-state-to-state">
                <div class="main_content_div">
                    <?php echo $data['content'];?>
                </div>

            </section>


        </div>

        <div class="right-state-to-state-child" id="right-state-to-state-child">
            <div class="form_div">
                <?php
                include side_form_new ;
                // include side_form;
             ?>
            </div>

        </div>
    </div>

    <!-- top scroll button start -->
    <div class="top-scroll-btn-relative " id="top-btn">
        <a href="#top-section">
            <div class="top-scroll-btn-fixed">
                <i class="fa-solid fa-arrow-down"></i>
            </div>
        </a>

    </div>

    <!-- ------------call to action  ----------------->

    <?php include car_key_section; ?>



    <!---------------- Advantages section--------- -->
    <!-- ------------------------ -->
  



    <!---------------- state names for all the states ---------->
    






    <!---------------- state names for all the states ---------->
  


    <!--  faq section -->
   

    <!-- back to top button -->
    <div class="b-top-button">
        <div class="b_top">
            <i class='bx bxs-phone' style="font-size: 20px;"></i>
            <a href="tel:+1-833-233-4447">+1-833-233-4447</a>

        </div>
    </div>

    <!----------------page bottom ------------------>
    <?php include_once new_footer; ?>
    <?php include_once new_script; ?>

    
    
</body>

</html>