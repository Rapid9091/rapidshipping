<?php

include_once "../../init.php";

if (isset($_GET['review_id'])) {
    $slug = $_GET['review_id'];
   
    $data = fetch_data("SELECT * FROM company_reviews WHERE `slug` = '$slug'");

    if (!$data) {
        header("Location: " . home_path() . "404");
    }
} else {
    header("Location: " . home_path() . "auto-transport-carriers");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $data['seo'] ?>

    <?php include head; ?>
    <link rel="stylesheet" href="<?= get_css() ?>side-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>company-reviews-child.css">
    <link rel="stylesheet" href="<?= get_css() ?>small-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>VIEW-small-form-2.css">
    <link rel="stylesheet" href="<?= get_css() ?>small_form_new.css">

    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_state-to-state-transport.css">

    <style>
        .third-section-form>div {
            margin-bottom: 14px;
        }
        /* .bb-img{display: none;} */
    </style>
</head>

<body>
    <!-- this is header -->
    <?php include_once header ?>


    <!-- new section under the first section of single line -->
    <div class="company-name-add">
        <h1><?= $data['company_name'] ?></h1>
        <p><?= $data['addr1'] ?></p>
    </div>



    <!-- before connecting this section link two css small form css or VIEW-small-form-2.css  -->
    <div class="small-form-2">
        <div class="small-form-2-left-side-section">



            <h3>Connect With Us </h3>


            <!-- <p>On TransportReviews, TrustPilot, Facebook, the Better Business Bureau, and Google, Rapid Auto Shipping consistently obtains five-star ratings. Some reviewers are given a little deposit reimbursement that is unrelated to their rating score or pricing as an incentive to share their experience. We've delivered over 20,000 new and used cars, and while we're not perfect, we've built a solid reputation in the process.</p> -->

            <div class="trustbadge-small-form">
                <div class="trustbadeg-01">
                    <img src="<?= get_img() ?>bbb-logo-horizontal.png" alt="review rapid auto shipping" />
                </div>
                <div class="trustbadeg-01">
                    <img src="<?= get_img() ?>Trustpilot-logo.png" alt="review rapid auto shipping" />
                </div>
                <div class="trustbadeg-01">
                    <img src="<?= get_img() ?>google-mini-logo.png" alt="review rapid auto shipping" />
                </div>
            </div>
        </div>

       <div style="margin bottom:15px;"> <?php include_once small_form_new ?>
    </div>




    </div>
    <div class="company-details">
        <div class="company-details-content">
            <div>
                <?= $data['company_text'] ?>
            </div>
        </div>
        <div class="company-details-add">
            <div class="company-details-add-box">

                <div class="company-details-add-box-cat">
                    <p>Category:</p>
                    <p><a href="<?= home_path(); ?>auto-transport-carriers">Auto Transport Carriers</a></p>
                </div>


                <?php if ($data['phone'] != "") : ?>
                    <div class="company-details-add-box-cat">
                        <p>Phone:</p>
                        <p><a href="tel:<?= $data['phone'] ?>"><?= $data['phone'] ?></a></p>
                    </div>
                <?php endif ?>

                <?php if ($data['mc'] != "") : ?>
                    <div class="company-details-add-box-cat">
                        <p>MC#:</p>
                        <p><a href="#"><?= $data['mc'] ?></a></p>
                    </div>
                <?php endif ?>

                <?php if ($data['us_dot'] != "") : ?>
                    <div class="company-details-add-box-cat">
                        <p>US DOT#:</p>
                        <p><a href="#"><?= $data['us_dot'] ?></a></p>
                    </div>
                <?php endif ?>

                <?php if ($data['addr2'] != "") : ?>
                    <div class="company-details-add-box-cat">
                        <p>Address:</p>
                        <p><a href="#"><?= $data['addr2'] ?></a></p>
                    </div>
                <?php endif ?>

            </div>
        </div>


    </div>
    <div class="company-reviews-0">
        <h2><?= $data['company_name'] ?> Reviews</h2>
        <div class="company-reviews-grid">


            <?php

            $user_reviews = fetch_all_data("SELECT * FROM `user_reviews` WHERE `company_slug` = '$slug'");

            if ($user_reviews) :

                foreach ($user_reviews as $review) :
            ?>
                    <div class="company-reviews-box">
                        <div class="company-reviews-box-img">
                            <img src="<?= get_img('icons8-administrator-male-52.png') ?>" alt="rapid auto shipping reviews">
                            <div class="company-reviews-box-name">
                                <p><?= $review["name"] ?></p>
                                <div class="company-reviews-box-star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                        </div>
                        <div class="company-reviews-box-content">
                            <p>“ <?= $review["review"] ?>”</p>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;

            ?>

        </div>


    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2DHnFl4aGaFN90TWapQEXJ7e2v6L8lo&v=3.exp&callback=Function.prototype&libraries=places"></script>

    <?php
    include_once call_to_action;
    include_once page_bottom ?>
    <script async src="<?= get_js() ?>small_form_new.js"></script>
</body>

</html>