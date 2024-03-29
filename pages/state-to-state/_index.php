<?php
include_once "../../init.php";

if (isset($_GET['page_id'])) {
    $slug = $_GET['page_id'];

    $data = fetch_data("SELECT * FROM state_to_state WHERE `slug` = '$slug'");

    if (!$data) {
        header("Location: " . home_path() . "404");
    }
} else {
    header("Location: " . home_path() . "state-to-state");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data['title'] ?>
    </title>

    <?= $data['meta'] ?>
    <link rel="canonical" href="<?= home_path() . "state-to-state/" . $data['slug'] ?>" />


    <?php include_once new_head; ?>


    <link rel="stylesheet" href="<?= get_css(); ?>new_state.min.css" defer>
    <link rel="stylesheet" href="<?= get_css(); ?>how_it_works.css" defer>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400&display=swap"
        rel="stylesheet" defer />

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
        @media screen and (max-width: 425px) {
            .logo_div img {
                width: 130%;
            }

            .logo_div a {
                display: flex;
            }
        }
        /* .key-holding {
    margin: 2% 0;
    background-image: url("<?= get_img();?>/car-key-new1.jpeg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
@media screen and (max-width: 600px) {
    .key-holding {
        background-image: url("<?=get_img();?>car-key-new1.jpeg");
    }
}
.shipping-form-state-content p{
    font-size: 18px;
    word-spacing: 1.5px;
    letter-spacing: 0.5px;
    margin: 2% 0;
    line-height: 1.8;
}
.shipping-form-state-content p span{
    font-size: 18px;
    word-spacing: 1.5px;
    letter-spacing: 0.5px;
    margin: 2% 0;
    line-height: 1.8;
} */
    </style>
</head>

<body>

    <!------------------ header --------------------->
    <?php include header; ?>

    <!------------- banner --------------------->
    <?php
        $NAME = $data['page_h1'];
        $PARAGRAPH = $data['page_about_1'];
        ?>
    <section class="contact-us-header-page" id="banner_form">

        <div class="third-section-state">


            <div class="third-section-content">
            <div class="state-banner-content">
                <h1 class="third-section-content-heading">

                    <?php echo $NAME; ?>
                </h1>


                <p class="third-section-content-text" style=" overflow: hidden;
                text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 5;
           line-clamp: 5; 
   -webkit-box-orient: vertical;
   padding:1% 0">
                    <?php echo $PARAGRAPH;?>
                </p>
                </div>
                <div class="state-banner-images">
                <div class="banner-review-images">
                    <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-faiz.webp" alt="trustpilot logo"
                        loading="lazy" width="150px" height="71px" class="truspilot_logo">
                    <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-google.webp" alt=" google logo"
                        loading="lazy" width="150px" height="66px" class="google_logo" style="margin: 0 5%;">
                    <img src="<?=get_img()?>rapid-auto-shipping-trustpilot-crunchbase2.webp" alt="cruchbase logo"
                        loading="lazy" width="150px" height="44px" class="crunchbase_logo">
                </div>
                </div>


            </div>
            <div style="display:grid;
                place-items:center;">
                <?php include small_form_new ;?>
            </div>



        </div>
    </section>

    <!-------------feature strip ----------------->
    <section class="secure">
        <div class="main flex">
            <div class="first flex">
                <div class="first-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/dollar-symbol.webp" alt=" dollar" loading="lazy" width="50px"
                        height="50px">
                </div>
                <div class="first-2">
                    <div class="heading">
                        <p>PRICE MATCH</p>
                    </div>
                    <div class="strip_para">
                        <P>Best price guaranteed</P>

                    </div>
                </div>
            </div>
            <div class="second flex">
                <div class=" second-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/calendar.png" alt="calendar" loading="lazy" width="50px"
                        height="50px">
                </div>
                <div class="second-2">
                    <div class="heading">
                        <p>GUARANTEED PICK-UP</p>
                    </div>
                    <div class="strip_para">
                        <p>Your chice of pick-up</p>

                    </div>
                </div>
            </div>
            <div class="third flex">
                <div class="third-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/distance.webp" alt="distance" loading="lazy" width="50px"
                        height="50px">
                </div>
                <div class="third-2">
                    <div class="heading">
                        <p>EXPRESS SHIPPING</p>
                    </div>
                    <div class="strip_para">
                        <P>Reduced trasit time</P>


                    </div>
                </div>
            </div>
            <div class="forth flex">
                <div class="fourt-1 strip_logo">
                    <img src="<?=get_img()?>state-to-state/shield.webp" alt="sheild" loading="lazy" width="50px"
                        height="50px">
                </div>
                <div class="forth-2">
                    <div class="heading">
                        <p>SAFE TARNSPORT</p>
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

    <!---------------how it works ------------------>
    <section class="how_it_works_section">
        <div class="how_heading">
            <div class="text-center">
                <h3 class="how_head">How It Works</h3>
                <p class="how_subtitle">We make car shipping cheap and easy by helping customers directly connect with
                    auto transport carriers. We load, haul &amp; deliver anything on wheels.</p>
            </div>
        </div>
        <div class="howItWorkHome width">
            <div class="container homeContainer">
                <div class="width stepsHow">
                    <div class="item">
                        <span class="stepsCount">1</span>
                        <div class="img">
                            <img src="<?= get_img()?>state-to-state/car.webp" alt="car" class="how_car">
                        </div>
                        <div class="text">
                            <span class="titleItem">Request Quotes</span>
                            <p>
                                Set your pickup and destination locations and indicate what vehicle you need to ship.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <span class="stepsCount">2</span>
                        <div class="img">
                            <img src="<?= get_img()?>state-to-state/calculation.webp" alt="calculation"
                                class="how_calculation">
                        </div>
                        <div class="text">
                            <span class="titleItem">Get Instant Prices From Top Carriers</span>
                            <p>
                                Our system will automatically show you nearest carriers and instantly show you price
                                quotes.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <span class="stepsCount">3</span>
                        <div class="img">
                            <img src="<?= get_img()?>state-to-state/shipping.webp" alt="shipping" class="how_shippping">
                        </div>
                        <div class="text">
                            <span class="titleItem">Book Online</span>
                            <p>
                                Book your shipment online. Driver will get in touch with you right away to schedule
                                pickup and delivery timeframes.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <span class="stepsCount">4</span>
                        <div class="img">
                            <img src="<?= get_img()?>state-to-state/delivery.webp" alt="delivery" class="how_delivery">
                            </div>
                            <div class=" text">
                            <span class="titleItem">Rate Your Carrier After Delivery</span>
                            <p>
                                Tell us about your experience and help other customers make the right decision!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!---------- parent grid section start---------->

    <div class="main-state-to-state">
        <div class="left-state-to-state">
            <div class="first-section-state-to-state">
                <h2 class="heading-1">
                    <?= $data['page_h2'] ?>
                </h2>
                <p class="para-2">
                    <?= $data['page_about_2'] ?>
                </p>
            </div>

            <div class="points-div " id="top-section">
                <h2 class="heading-2">
                    What's in this article?
                </h2>
                <ul class="points-div-ul">
                    <?php

                    $json = $data['content'];
                    $json_decoded = json_decode($json);
                    if (isset($json_decoded)) {
                        foreach ($json_decoded as $result) {
                            echo ' <li><a href="#' . $result->index . ' ">' . $result->heading . '</a></li>';
                        }
                    }



                    ?>

                    <li><a href="#step">How to ship Vehicle <span>
                                <?= $data['state_form'] . " to " . $data['state_to'] ?>
                            </span>?</a></li>


                </ul>

            </div>
            <!-- section from which shipping started here -->
            <section class="first-state-to-state">
                <div class="shipping-form-state-image">
                    <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/<?= $data['state_form_img'] ?>"
                        alt="<?= $data['state_form_img_alt'] ?>" />

                </div>
                <ul>
                    <?php
                    if (isset($json_decoded)) {
                        foreach ($json_decoded as $result) {
                            echo '<li id="' . $result->index . '">
                        <div class="shipping-form-state-content">
                            <h4 class="heading-1">' . $result->heading . '</h4>
                            <p class="para-2">
                                ' .$result->about . '
                            </p>
                        </div>
                    </li>';
                        }
                    }
                    ?>



                    <li id="step">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">How to ship Vehicle <span>
                                    <?= $data['state_form'] . " to " . $data['state_to'] ?>
                                </span>?</h3>
                            <p class="para-2">It's as simple as 1-2-3 to ship a car from
                                <?= $data['state_form'] . " to " . $data['state_to'] ?> with Rapid Auto Shipping.
                                <br><br>
                                <b>Step 1:</b> Get a quick auto shipment quote for
                                <?= $data['state_form'] . " to " . $data['state_to'] ?> Auto Shipping and schedule a
                                pickup time that works for you.
                                With our online quote form, you can easily get a quote, enter your origin and
                                destination, choose your shipping dates, and book your reservation online or over the
                                phone for your
                                <?= $data['state_form'] . " to " . $data['state_to'] ?> car shipping!
                                <br><br>
                                <b>Step 2:</b> Your vehicle will be picked up from a certain place in
                                <?= $data['state_form'] ?>.
                                Your vehicle will be thoroughly inspected and put onto the carrier on the day of pickup.
                                Our direct service allows us to pick up from any home or company in
                                <?= $data['state_form'] ?>.
                                <br><br>
                                <b>Step 3:</b> Your vehicle is delivered to the address you provide in
                                <?= $data['state_to'] ?>.
                                Your vehicle will be offloaded safely, and a final examination will be performed to
                                ensure that it was delivered in the same condition as when it was picked up.
                            </p>
                        </div>

                    </li>


                </ul>

                <div class="shipping-form-state-image">
                    <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/<?= $data['state_to_img'] ?>"
                        alt="<?= $data['state_to_img_alt'] ?>" />
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
                    <img src="<?= get_img() ?>icons/rating.webp" alt="best car shipping in USA" loading="lazy"
                        width="80px" height="80px">
                    <h3>Top Rated Auto Shipping Company</h3>
                    <p>We have thousands of 5-star reviews for exceptional vehicle shipping services.</p>
                </div>

                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/auto-insurance-icon.webp" alt="best car shipping in USA"
                        loading="lazy" width="80px" height="80px">
                    <h3>Complete Vehicle Coverage</h3>
                    <p>We offer the most comprehensive coverage options for complete peace of mind.</p>
                </div>
                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/savings-icon.webp" alt="best car shipping in USA" loading="lazy"
                        width="80px" height="80px">
                    <h3>No Up-Front Deposit Required</h3>
                    <p>You don't pay a penny until the day your shipment is scheduled for pickup.</p>
                </div>

                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/online-tracking.webp" alt="Albama to alaska shipping" loading="lazy"
                        width="80px" height="80px">
                    <h3>24/7 Online Shipment Tracking</h3>
                    <p>You can track the status of your shipment online anytime at your convenience.</p>
                </div>
            </div>
        </div>

    </section>



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
                <span>What Kind of Paperwork Will I Need?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">When transporting automobiles from one state to another, a bill of lading - or, as previously stated, a vehicle health report - is required. Every car transporter carries one with them, either online or on paper, for each vehicle they move. You will also receive a duplicate.
            <br>Provide no ownership or certificate of sale. The deal with the car transport provider will say that you are authorizing them to send the car whether or not the owner is in your name. When purchasing from a sale or a vendor, keep the title and car transport services distinct. You don't want papers to get lost or overlooked, so have the title shipped straight to you!</p>
            <div class="box">
                <span>Can I put personal items in the car?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">Yes, but only up to 100 pounds at a time and at your peril. Visit our help subject for shipping a vehicle with belongings to learn more.</p>
            <div class="box">
                <span>What Kind of Tracking Services Do You Offer?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">We offer a standard monitoring device to keep track of your car while it is in transit. You can monitor your shipment using the online tracking function 24/7. It's all part of our dedication to our clients. To monitor your vehicle shipment, please provide us with your tracking information, name, email address, and/or phone number.</p>
            <div class="box">
                <span>Is My Pick-Up or Delivery Date Guaranteed?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">Guaranteed pick-up is the best choice for those who want to prepare ahead of time and ensure that their vehicle arrives on time. The service is not inexpensive because it is tailored to your specific requirements.<br> You can choose the precise day your vehicle will be picked up with this service, which can save you time and money. Furthermore, you will have a piece of mind knowing that everything will go easily with your relocation.</p>
            <div class="box">
                <span>How Much Should I Expect to Spend on Shipping My Car?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">The expense of car transport to or from Alabama is highly influenced by the sort of vehicle, the distance traveled, and the technique used. <br>Transporting a car from a greater distance costs more. Longer distances, on the other hand, may result in fewer average kilometres per dollar than shorter ones. <br>For a precise vehicle shipment price for Alabama, use our free instant car shipping estimate calculator above.</p>
            <div class="box">
                <span>Should I Expect Any Extra Charges Once My Car is Delivered?</span>
                <i class='bx bx-plus'></i>
            </div>
            <p class="para-faq">The price is significantly influenced by the distance your vehicle is shipped. If you are shipping your vehicle from or to a remote place, you may be charged additional costs. Auto carriers, for example, may charge an extra fee to drive your vehicle to a less crowded area because it requires more time and is usually much farther away from the carrier's next location.</p>



        </div>
    </div>

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
    <script>
        $('button.owl-dot').attr('aria-label', 'owl-dot');
    </script>
</body>

</html>