<?php
include_once "../../init.php";
if (isset($_GET['PAGE'])) {
    $pageId = _get('PAGE');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ratings and Reviews of Auto Transport Carriers <?= isset($pageId) ? "PAGE-" . $pageId : "" ?> </title>
    <meta name="title" content="Ratings and Reviews of Auto Transport Carriers <?= isset($pageId) ? "PAGE-" . $pageId : "" ?> " />
    <meta name="description" content=" Click now to Latest Ratings and Reviews of top Auto Transport Carriers  <?= isset($pageId) ? "PAGE-" . $pageId : "" ?> in United States." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Ratings and Reviews of Auto Transport Carriers <?= isset($pageId) ? "PAGE-" . $pageId : "" ?> " />
    <meta property="og:description" content=" Click now to Latest Ratings and Reviews of top Auto Transport Carriers <?= isset($pageId) ? "PAGE-" . $pageId : "" ?> in United States." />
    <meta property="og:url" content="https://rapidautoshipping.com/auto-transport-carriers" />
    <meta property="og:site_name" content="Reviews of Auto Transport Carriers <?= isset($pageId) ? "PAGE-" . $pageId : "" ?> - Rapid Auto Shipping" />
    <meta name='robots' content='index , follow' />
    <meta name="yandex-verification" content="088dfdd0832860ec" />
    <meta name="keywords" content="best car shipping company, best car shipping companies, best companies to ship a car, best companies for shipping cars, best company to ship car, best company to ship a car, best international car shipping company, what is the best car shipping company, best shipping car companies, best shipping car company, best car shipping companies in usa, best companies to ship car across country, best company for shipping a car, best company to ship a car across country, which car shipping company is the best, best car shipping company near me" />
    <meta property="article:tag" content="best car shipping company" />
    <meta property="article:tag" content="best car shipping companies" />
    <meta property="article:tag" content="best companies to ship a car" />
    <meta property="article:tag" content="best companies for shipping cars" />
    <meta property="article:tag" content="best company to ship car" />
    <meta property="article:tag" content="best company to ship a car" />
    <meta property="article:tag" content="best international car shipping company" />
    <meta property="article:tag" content="what is the best car shipping company" />
    <meta property="article:tag" content="best shipping car companies" />
    <meta property="article:tag" content="best shipping car company" />
    <meta property="article:tag" content="best car shipping companies in usa" />
    <meta property="article:tag" content="best companies to ship car across country" />
    <meta property="article:tag" content="best company for shipping a car" />
    <meta property="article:tag" content="best company to ship a car across country" />
    <meta property="article:tag" content="which car shipping company is the best" />
    <meta property="article:tag" content="best car shipping company near me" />
    <!--     Google Analytics Code Start -->


    <!--     Google Analytics Code Ends -->
    <?php include head; ?>


    <link rel="stylesheet" href="<?= get_css() ?>side-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>company-review.css">

</head>

<body>
    <!-- this is header -->
    <?php include_once header ?>
    <!-- new section under the first section of single line -->
    <div class="company-review-first-section">
        <h1 style="text-align: center;" >Auto Transport Carriers</h1>
    </div>
    <div class="company-review-grid-section">



        <div class="company-reviews-section">

            <?php
            if (isset($_GET['PAGE'])) {
                $pageId = $_GET['PAGE'];

                $offset = 50 * ($pageId + 1) - 50;
            } else {
                $offset = 0;
            }

            $sql = "SELECT company_reviews.*, Count(user_reviews.id) AS review_count FROM company_reviews LEFT JOIN user_reviews ON company_reviews.slug = user_reviews.company_slug GROUP BY company_reviews.id  LIMIT 50 offset $offset";

            $data = fetch_all_data($sql);

            foreach ($data as $row) :
            ?>
                <div class='company-reviews-box'>
                    <h6>
                        <a href="<?= home_path() . 'auto-transport-carriers/' . $row['slug'] ?>">
                            <?= $row['company_name'] ?>
                        </a>
                    </h6>

                    <div class='company-reviews-star-box'>
                        <p> <?= $row['stars'] ?> Stars</p>

                        <div class='company-reviews-box-star'>
                            <?= get_ratting_stars($row['stars']) ?>
                        </div>

                        <p><span> <?= $row['stars'] . " Stars from " . $row['review_count'] . " Review(s)" ?></span></p>
                    </div>
                    <div class='company-reviews-box-review'>
                        <a href="<?= home_path() . 'auto-transport-carriers/' . $row['slug'] ?>">View Contact & Reviews</a>
                    </div>

                </div>

            <?php endforeach; ?>



        </div>

        <div class="button-div-more">
            <?php

            $button_count = 10;
            $item_count = 50;
            $button_loop_index = 0;
            $show_next = true;


            $reviews_list = fetch_all_data("SELECT company_reviews.*, Count(user_reviews.id) AS review_count FROM company_reviews LEFT JOIN user_reviews ON company_reviews.slug = user_reviews.company_slug GROUP BY company_reviews.id ");

            $max_page = 0;


            if ($reviews_list) {
                $max_page = (count($reviews_list) / $item_count) - 1;
            }
            $current_page = 0;

            if (isset($_GET['PAGE'])) {
                $current_page = $_GET['PAGE'];
            }

            if ($current_page > 2) {
                $button_loop_index = $current_page - 2;
                $button_count = $button_loop_index + 5;

                if ($max_page < $button_count) {
                    $button_count = $max_page;
                }

                if ($current_page > $max_page) {
                    $show_next = false;
                }


                if (($button_count - $button_loop_index) < 5) {
                    $button_loop_index = $button_count - 5;
                }
            } else {
                $button_count = 5;
            }

            // echo $max_page;

            if ($current_page > 0) {
                echo "<button><a href=" . home_path() . "auto-transport-carriers/?PAGE=" . ($current_page - 1) . "> Previous</a></button>";
            }


            for ($i = $button_loop_index; $i < $button_count; $i++) {
                echo "<button><a href=" . home_path() . "auto-transport-carriers/?PAGE=" . ceil($i + 1) . ">" . ceil($i + 1) . "</a></button>";
            }


            if ($show_next) {
                echo "<button><a href=" . home_path() . "auto-transport-carriers/?PAGE=" . ($current_page + 1) . "> Next </a></button>";
            }



            ?>


        </div>


    </div>
    <?php include_once page_bottom;

    // review links page

    // $sql = "SELECT company_reviews.*, Count(user_reviews.id) AS review_count FROM company_reviews LEFT JOIN user_reviews ON company_reviews.slug = user_reviews.company_slug GROUP BY company_reviews.id ";

    // $data = fetch_all_data($sql);

    // foreach ($data as $row) {
    //     echo home_path() . 'auto-transport-carriers/' . $row['slug'] . "<br>";
    // }

    // review links page

    // echo "<button><a href=" . home_path() . "auto-transport-carriers/?PAGE=" . $button_index . ">Previous</a></button>";


    // $reviews_list = fetch_all_data("SELECT company_reviews.*, Count(user_reviews.id) AS review_count FROM company_reviews LEFT JOIN user_reviews ON company_reviews.slug = user_reviews.company_slug GROUP BY company_reviews.id ");
    ?>
</body>

</html>


<?php
function get_ratting_stars($ratting)
{
    $cNumber = floor($ratting);
    $view = "";

    for ($i = 0; $i < $cNumber; $i++) {
        $view = $view . '<i class="fas fa-star"></i>';
    }
    if ($ratting > $cNumber) {
        $view = $view . '<i class="fas fa-star-half-alt"></i>';
    }

    $eCount = ($ratting > $cNumber) ? 4 - $cNumber : 5 - $cNumber;

    for ($i = 0; $i < $eCount; $i++) {
        $view = $view . ' <i class="far fa-star"></i>';
    }

    return $view;
}
