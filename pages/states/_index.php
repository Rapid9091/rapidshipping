<?php
include_once "../../init.php";

if (isset($_GET['page_id'])) {
    $slug = $_GET['page_id'];

    $data = fetch_data("SELECT * FROM states WHERE `slug` = '$slug'");

    if (!$data) {
        header("Location: " . home_path() . "404");
    }
} else {
    header("Location: " . home_path() . "states");
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

    <link rel="stylesheet" href="<?= get_css(); ?>VIEW_header.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_colorado-to-arizona.css">
    <link rel="stylesheet" href="<?= get_css();?>review2.css">
    <link rel="stylesheet" href="<?= get_css(); ?>VIEW_new-footer.css">
    <link rel="stylesheet" href="<?= get_css(); ?>global.css">
    <link rel="stylesheet" href="<?= get_css(); ?>utility.css">
    <link rel="stylesheet" href="<?= get_css(); ?>car-key-section.css">
    <link rel="stylesheet" href="<?= get_css();?>new_state-to-state.css">
    <link rel="stylesheet" href="<?= get_css();?>new-side-form.css">
    <link rel="stylesheet" href="<?= get_css(); ?>faq.css">
    <link rel="stylesheet" href="<?= get_css(); ?>new-state.css">

    <link rel="stylesheet" href="https://unpkg.com/toastmejs@latest/dist/css/toastme.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- owl courosel -->
    <!-- ------------------------------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer />

    <style>
        .contact-us-header-page {
            width: 100%;
            background-repeat: no-repeat, repeat;
            background-image: url('<?= get_img() ?>car-shipping-header-image1.png');
            background-blend-mode: lighten;
            position: relative;
            background-position: 100%;
            background-repeat: no-repeat;
            background-size: cover;
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

                <div class="banner-review-images">
                <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-faiz.png" alt="">
                <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-google.png" alt="">
                <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-crunchbase2.png" alt="">
                    </div>


            </div>
            <div style="display:grid;
                place-items:center;">
                <?php include small_form_new ;?>
            </div>



        </div>
    </section>
    <hr>
    <!-------------feature strip ----------------->
    <section class="secure">
        <div class="main flex">
            <div class="first flex">
                <div class="first-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/dollar-symbol.png" alt="">
                </div>
                <div class="first-2">
                    <div class="heading">
                        <h5>PRICE MATCH</h5>
                    </div>
                    <div class="strip_para">
                        <P>Best price guaranteed</P>

                    </div>
                </div>
            </div>
            <div class="second flex">
                <div class=" second-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/calendar.png" alt="">
                </div>
                <div class="second-2">
                    <div class="heading">
                        <h5>GUARANTEED PICK-UP</h5>
                    </div>
                    <div class="strip_para">
                        <p>Your chice of pick-up</p>

                    </div>
                </div>
            </div>
            <div class="third flex">
                <div class="third-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/distance.png" alt="">
                </div>
                <div class="third-2">
                    <div class="heading">
                        <h5>EXPRESS SHIPPING</h5>
                    </div>
                    <div class="strip_para">
                        <P>Reduced trasit time</P>


                    </div>
                </div>
            </div>
            <div class="forth flex">
                <div class="fourt-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/shield.png" alt="">
                </div>
                <div class="forth-2">
                    <div class="heading">
                        <h5>SAFE TARNSPORT</h5>
                    </div>
                    <div class="strip_para">
                        <P>Full insurance coverage</P>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------reviews --------------------->

    <?php include_once review2 ;?>

    <!---------- parent grid section start---------->

    <div class="main-state-to-state">
        <div class="left-state-to-state">
            <div class="first-section-state-to-state">
                <h2 class="heading-1">
                    <?=$data['h2'];?>
                </h2>
                <p class="para-2">
                    <?= $data['h2_about'];?>
                </p>
            </div>


            <!-- section from which shipping started here -->
            <section class="first-state-to-state">
                <div class="main_content_div">
                    <?php echo $data['content'];
                  ?>

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
    <section class="rapid-advantages-section" style="margin-top:3%">
        <div class="rapid-advantages-grid-container">
            <h2 class="heading-1">Advantages using <span>Rapid Auto Shipping</span></h2>
            <div class="rapid-advantages-grid utility_grid utility_grid-4">
                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/rating.png" alt="best car shipping in USA">
                    <h3>Top Rated Auto Shipping Company</h3>
                    <p>We have thousands of 5-star reviews for exceptional vehicle shipping services.</p>
                </div>

                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/auto-insurance-icon.png" alt="best car shipping in USA">
                    <h3>Complete Vehicle Coverage</h3>
                    <p>We offer the most comprehensive coverage options for complete peace of mind.</p>
                </div>
                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/savings-icon.png" alt="best car shipping in USA">
                    <h3>No Up-Front Deposit Required</h3>
                    <p>You don't pay a penny until the day your shipment is scheduled for pickup.</p>
                </div>

                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/online-tracking.png" alt="Albama to alaska shipping">
                    <h3>24/7 Online Shipment Tracking</h3>
                    <p>You can track the status of your shipment online anytime at your convenience.</p>
                </div>
            </div>
        </div>

    </section>


    <div class="more-califrnian-cities-code">
        <h2 class="alabama-city-code-heading">
            Popular Auto Transportation <span>Cities</span> In Alabama
        </h2>
        <?php
          $json = $data['city_zipcode'];
          $json_decoded = json_decode($json);
                    if (isset($json_decoded)) {
                        foreach ($json_decoded as $result) {
                            echo '<div class="major-city-code">
                            <p class="major-city-code-para">'.$result->city.'</p>
                            <span>-</span>
                            <p>'.$result->zip_code.'</p>
                        </div>';
                        }
                    }
                    ?>

    </div>








    <!---------------- state names for all the states ---------->
    <section class="all-state-name-page-mains" style="margin:3%;">
        <section class="all-state-name-pages">
            <h2 class="heading-1">
                Auto shipping <span>States</span> in USA </h2>
            <section class="all-state-name-grids-section">
                <div class="all-state-name-grids">
                    <a href="<?= get_state() ?>/alabama" rel="dofollow">Alabama</a><br>
                    <a href="<?= get_state() ?>/alaska" rel="dofollow">Alaska</a><br>
                    <a href="<?= get_state() ?>/arizona" rel="dofollow">Arizona</a><br>
                    <a href="<?= get_state() ?>/arkansas" rel="dofollow">Arkansas</a><br>
                    <a href="<?= get_state() ?>/california" rel="dofollow">California</a><br>
                    <a href="<?= get_state() ?>/alabama" rel="dofollow">Alabama</a><br>
                    <a href="<?= get_state() ?>/connecticut" rel="dofollow">Connecticut</a><br>
                    <a href="<?= get_state() ?>/delaware" rel="dofollow">Delaware</a><br>
                </div>
                <div class="all-state-name-grids">
                    <a href="<?= get_state() ?>/hawaii" rel="dofollow">Hawaii</a><br>
                    <a href="<?= get_state() ?>/idaho" rel="dofollow">Idaho</a><br>
                    <a href="<?= get_state() ?>/illinois" rel="dofollow">Illinois</a><br>
                    <a href="<?= get_state() ?>/indiana" rel="dofollow">Indiana</a><br>
                    <a href="<?= get_state() ?>/iowa" rel="dofollow">Iowa</a><br>
                    <a href="<?= get_state() ?>/kansas" rel="dofollow">Kansas</a><br>
                    <a href="<?= get_state() ?>/kentucky" rel="dofollow">Kentucky</a><br>
                    <a href="<?= get_state() ?>/louisiana" rel="dofollow">Louisiana</a><br>


                </div>
                <div class="all-state-name-grids">
                    <a href="<?= get_state() ?>/massachusetts" rel="dofollow">Massachusetts</a><br>
                    <a href="<?= get_state() ?>/michigan" rel="dofollow">Michigan</a><br>
                    <a href="<?= get_state() ?>/minnesota" rel="dofollow">Minnesota</a><br>
                    <a href="<?= get_state() ?>/mississippi" rel="dofollow">Mississippi</a><br>
                    <a href="<?= get_state() ?>/missouri" rel="dofollow">Missouri</a><br>
                    <a href="<?= get_state() ?>/montana" rel="dofollow">Montana</a><br>
                    <a href="<?= get_state() ?>/nebraska" rel="dofollow">Nebraska</a><br>
                    <a href="<?= get_state() ?>/nevada" rel="dofollow">Nevada</a><br>


                </div>
                <div class="all-state-name-grids">
                    <a href="<?= get_state() ?>/new-mexico" rel="dofollow">New Mexico</a><br>
                    <a href="<?= get_state() ?>/new-york" rel="dofollow">New York</a><br>
                    <a href="<?= get_state() ?>/north-carolina" rel="dofollow">North Carolina</a><br>
                    <a href="<?= get_state() ?>/north-dakota" rel="dofollow">North Dakota</a><br>
                    <a href="<?= get_state() ?>/ohio" rel="dofollow">Ohio</a><br>
                    <a href="<?= get_state() ?>/oklahoma" rel="dofollow">Oklahoma</a><br>
                    <a href="<?= get_state() ?>/oregon" rel="dofollow">Oregon</a><br>
                    <a href="<?= get_state() ?>/pennsylvania" rel="dofollow">Pennsylvania</a><br>


                </div>
                <div class="all-state-name-grids">
                    <a href="<?= get_state() ?>/south-dakota" rel="dofollow">South Dakota</a><br>
                    <a href="<?= get_state() ?>/tennessee-tn" rel="dofollow">Tennessee</a><br>
                    <a href="<?= get_state() ?>/texas-tx" rel="dofollow">Texas</a><br>
                    <a href="<?= get_state() ?>/utah-ut" rel="dofollow">Utah</a><br>
                    <a href="<?= get_state() ?>/vermont-vt" rel="dofollow">Vermont</a><br>
                    <a href="<?= get_state() ?>/virginia-va" rel="dofollow">Virginia</a><br>
                    <a href="<?= get_state() ?>/washington-wa" rel="dofollow">Washington</a><br>
                    <a href="<?= get_state() ?>/west-virginia-wv" rel="dofollow">West Virginia</a><br>
                    <a href="<?= get_state() ?>/wisconsin-wi" rel="dofollow">Wisconsin</a><br>

                </div>
                <div class="all-state-name-grids">
                    <a href="<?= get_state() ?>/florida" rel="dofollow">Florida</a><br>
                    <a href="<?= get_state() ?>/georgia" rel="dofollow">Georgia</a><br>
                    <a href="<?= get_state() ?>/maine" rel="dofollow">Maine</a><br>
                    <a href="<?= get_state() ?>/maryland" rel="dofollow">Maryland</a><br>
                    <a href="<?= get_state() ?>/new-hampshire" rel="dofollow">New Hampshire</a><br>
                    <a href="<?= get_state() ?>/new-jersey" rel="dofollow">New Jersey</a><br>
                    <a href="<?= get_state() ?>/wyoming-wy" rel="dofollow">Wyoming</a><br>
                    <a href="<?= get_state() ?>/rhode-island" rel="dofollow">Rhode Island</a><br>
                    <a href="<?= get_state() ?>/south-carolina" rel="dofollow">South Carolina</a><br>


                </div>
            </section>
        </section>
    </section>


    <!--  faq section -->
    <div class="body">


        <div class="faq">FACTS & QUESTIONS</div>

        <div class="container">
            <div class="box">
                <span>Is Your Auto Transport Team Licensed And Insured?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">Our complete network of auto transport workers is fully insured and certified, with most
                of them having decades of experience.
            </p>
            <div class="box">
                <span>What If My Vehicle Is Harmed During Transport?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">All of our chauffeurs undergo a comprehensive pre-transport examination to look for any
                previous damage, which must be signed by the individual releasing the vehicle and the transporter before
                moving the car. The transport insurance will cover any harm to the vehicle while it is in transit.
            </p>
            <div class="box">
                <span>What Types of Car Delivery Do You Provide, And What Are The Distinctions?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">We have an extensive network of car haulers who can manage open, enclosed, or
                specialized transport. Enclosed transit is typically reserved for more costly or specialized vehicles,
                such as show cars, exotics, and expensive luxury vehicles.
                <br><br>
                On the other hand, open transport is the most prevalent type of car transport used for any vehicle that
                does not need to be protected from the elements.
            </p>
            <div class="box">
                <span>Do You Offer Car Delivery In My State or City?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">Our extensive provider network transports vehicles to every state and location
                nationwide. Jrop is a network that operates on a national scale.
                <br><br>
                <b>Receive Estimates for car shipping:</b>
                <br>
                Get FREE, no-obligation estimates from licensed and protected expert vehicle movers in our network who
                can service your relocation.
                <br><br>
                <b>Read Rapid Auto Shipping Guides:</b>
                <br>
                Use our FREE online vehicle transportation tools (guides, tips, and videos) for Rapid Auto Shipping
                suggestions.
            </p>



        </div>
    </div>

    <!-- back to top button -->
    <div class="b_top">
    <span class="material-symbols-outlined">
                    phone_in_talk
                </span>
            <a href="tel:+1-833-233-4447">+1-833-233-4447</a>
        
    </div>

    <!----------------page bottom ------------------>
    <?php include_once page_bottom ?>


    

    <script src="https://unpkg.com/toastmejs@latest/dist/js/toastme.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcYXlUHyWIuVsqM4an4oCYgd8FzNAEFpY&v=3.exp&sensor=false&libraries=places"></script> -->



    <!-- owl curosel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //google_review----
        $('#google_reviews').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },

                800: {
                    items: 2
                },
                1000: {
                    item: 3
                }
            }
        })

    </script>
    <script src="<?=get_js()?>/faq.js"></script>
</body>

</html>