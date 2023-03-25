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
    <title><?= $data['title'] ?></title>

    <?= $data['meta'] ?>
    <link rel="canonical" href="<?= home_path() . "state-to-state/" . $data['slug'] ?>" />


    <?php include_once head; ?>
    
    <link rel="stylesheet" href="<?= get_css(); ?>VIEW_header.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_colorado-to-arizona.css">
    <link rel="stylesheet" href="<?= get_css();?>review2.css">
    <link rel="stylesheet" href="<?= get_css(); ?>side-form.css">
    <link rel="stylesheet" href="<?= get_css();?>how_it_works.css">
    <link rel="stylesheet" href="<?= get_css(); ?>VIEW_new-footer.css">
    <link rel="stylesheet" href="<?= get_css(); ?>global.css">
    <link rel="stylesheet" href="<?= get_css(); ?>utility.css">
    <link rel="stylesheet" href="<?= get_css(); ?>car-key-section.css">
    <link rel="stylesheet" href="<?= get_css();?>new_state-to-state.css">
    <link rel="stylesheet" href="<?= get_css();?>new-side-form.css">
    <link rel="stylesheet" href="https://unpkg.com/toastmejs@latest/dist/css/toastme.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        .key-holding {
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
}
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

                    <h1 class="third-section-content-heading">

                        <?php echo $NAME; ?></h1>


                    <p class="third-section-content-text"><?php echo $PARAGRAPH;?></p>


                </div>
                <div style="display:grid;
                place-items:center;">
                    <?php include small_form_new ;?>
                </div>



            </div>
        </section>

<!---------------reviews --------------------->
        <?php include_once review2 ;?>

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

<!---------------how it works ------------------>
    <section class="how_it_works_section">
      <div class="how_heading">
        <div class="text-center" >
          <h3 class="how_head">How It Works</h3>
          <p class="how_subtitle">We make car shipping cheap and easy by helping customers directly connect with auto transport carriers. We load, haul &amp; deliver anything on wheels.</p>
        </div>
      </div>
            <div class="howItWorkHome width">
                <div class="container homeContainer">
                    <div class="width stepsHow">
                        <div class="item">
                            <span class="stepsCount">1</span>
                            <div class="img">
                                <img src="<?= get_img()?>state-to-state/car.png" alt="">
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
                                <img src="<?= get_img()?>state-to-state/calculation.png" alt="">
                            </div>
                            <div class="text">
                                <span class="titleItem">Get Instant Prices From Top Carriers</span>
                                <p>
                                    Our system will automatically show you nearest carriers and instantly show you price quotes.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="stepsCount">3</span>
                            <div class="img">
                                <img src="<?= get_img()?>state-to-state/shipping.png" alt="">
                            </div>
                            <div class="text">
                                <span class="titleItem">Book Online</span>
                                <p>
                                    Book your shipment online. Driver will get in touch with you right away to schedule pickup and delivery timeframes.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="stepsCount">4</span>
                            <div class="img">
                                <img src="<?= get_img()?>state-to-state/delivery.png" alt="">
                            </div>
                            <div class="text">
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
            <h2 class="heading-1"><?= $data['page_h2'] ?></h2>
                <p class="para-2"><?= $data['page_about_2'] ?> </p>
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

                    <li><a href="#step">How to ship Vehicle <span><?= $data['state_form'] . " to " . $data['state_to'] ?></span>?</a></li>


                </ul>

            </div>
            <!-- section from which shipping started here -->
            <section class="first-state-to-state">
                <div class="shipping-form-state-image">
                  <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/<?= $data['state_form_img'] ?>" alt="<?= $data['state_form_img_alt'] ?>" />

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
                            <h3 class="heading-1">How to ship Vehicle <span><?= $data['state_form'] . " to " . $data['state_to'] ?></span>?</h3>
                            <p class="para-2">It's as simple as 1-2-3 to ship a car from <?= $data['state_form'] . " to " . $data['state_to'] ?> with Rapid Auto Shipping.
                                <br><br>
                                <b>Step 1:</b> Get a quick auto shipment quote for <?= $data['state_form'] . " to " . $data['state_to'] ?> Auto Shipping and schedule a pickup time that works for you.
                                With our online quote form, you can easily get a quote, enter your origin and destination, choose your shipping dates, and book your reservation online or over the phone for your <?= $data['state_form'] . " to " . $data['state_to'] ?> car shipping!
                                <br><br>
                                <b>Step 2:</b> Your vehicle will be picked up from a certain place in <?= $data['state_form'] ?>.
                                Your vehicle will be thoroughly inspected and put onto the carrier on the day of pickup. Our direct service allows us to pick up from any home or company in <?= $data['state_form'] ?>.
                                <br><br>
                                <b>Step 3:</b> Your vehicle is delivered to the address you provide in <?= $data['state_to'] ?>.
                                Your vehicle will be offloaded safely, and a final examination will be performed to ensure that it was delivered in the same condition as when it was picked up.
                            </p>
                        </div>

                    </li>

                    
                </ul>

                <div class="shipping-form-state-image">
                <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/<?= $data['state_to_img'] ?>" alt="<?= $data['state_to_img_alt'] ?>" />
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
    <section class="rapid-advantages-section" style="margin-top:5%">
        <div class="rapid-advantages-grid-container">
            <h2 class="heading-1">Advantages using <span>Rapid Auto Shipping</span></h2>
            <div class="rapid-advantages-grid utility_grid utility_grid-3">
                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/rating.png" alt="best car shipping in USA">
                    <h3>Top Rated Auto Shipping Company</h3>
                    <p>We have thousands of 5-star reviews for exceptional vehicle shipping services.</p>
                </div>
                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/route-2.png" alt="best car shipping in USA">
                    <h3>Nationwide Door to Door Shipping</h3>
                    <p>We provide direct service to and from any residential or business location in the US.</p>
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
                    <img src="<?= get_img() ?>icons/support.png" alt="Albama to alaska shipping">
                    <h3>Extended Office Hours</h3>
                    <p>We're available past normal business hours in every timezone in the country.</p>
                </div>
                <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/online-tracking.png" alt="Albama to alaska shipping">
                    <h3>24/7 Online Shipment Tracking</h3>
                    <p>You can track the status of your shipment online anytime at your convenience.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- review section-->
    <section class="state-to-state-review ">
        <div class="state-to-state-review-grid">
            <div class="state-to-state-review-grid-1">
                <img src="<?= get_img() ?>happy-customer-icon.png" alt="state to state auto transport" />
                <h3><?= $data['route_star'] ?>/10 <span>stars</span></h3>
                <p>Based on recent dispatch reports, the carrier availability rating from Alabama to Alaska is 9/10. </p>
                <div class="orange-strip">
                    <h2>
                        Road Transportation
                    </h2>

                </div>
            </div>
            <div class="state-to-state-review-grid-1">
                <img src="<?= get_img() ?>starting-destination.png" alt="state to state auto transport" />
                <h3><?= $data['route_distance'] ?><span>miles</span></h3>
                <p>The center of each state is used to approximate mileage between locations.</p>
                <div class="orange-strip">
                    <h2>
                        Total Distance
                    </h2>

                </div>
            </div>
            <div class="state-to-state-review-grid-1">
                <img src="<?= get_img() ?>timer-clock.png" alt="state to state auto transport" />
                <h3><?= $data['route_timing'] ?> <span>days</span></h3>
                <p>Estimated transit times are based on carriers traveling up to 500 miles per day.

                </p>
                <div class="orange-strip">
                    <h2>
                        Customer Review
                    </h2>

                </div>
            </div>
        </div>
    </section>


<!---------------- steps-state-to-state ----------->
    <section class="fifth-state-to-state">
        <div class="fifth-state-to-state-grid">
            <div class="fifth-state-to-state-grid-1">
                <div class="fifth-state-to-state-grid-content">
                    <h2 class="heading-2">
                        <span>Rapid Auto Shipping</span> Makes Shipping a Car From your desired location as Easy as 1-2-3!
                    </h2>
                    <div class="steps-buttons">
                        <button onclick="active_tab(0,this)" class="special-red-btn-1" id="btn">1</button>
                        <button onclick="active_tab(1,this)" class="special-red-btn-2">2</button>
                        <button onclick="active_tab(2,this)" class="special-red-btn-3">3</button>
                    </div>
                    <div class="text-div-parent">
                        <div class="text_div_1">
                            <h3 class="heading-2">
                                Calculate your instant car shipping quote.
                            </h3>
                            <p class="para-2">
                                Getting a quote is easy with our online quote form, enter your name , email and number, our executive will assist you and book your reservation online or by phone!
                            </p>
                        </div>
                        <div class="text_div_1">
                            <h3 class="heading-2">
                                Your instant car shipping quote.
                            </h3>
                            <p class="para-2">
                                Getting a quote is easy with our online quote form, enter your name , email and number, our executive will assist you and book your reservation online or by phone!
                            </p>
                        </div>
                        <div class="text_div_1">
                            <h3 class="heading-2">
                                Instant car shipping quote.
                            </h3>
                            <p class="para-2">
                                Getting a quote is easy with our online quote form, enter your name , email and number, our executive will assist you and book your reservation online or by phone!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="divdiv">


                    <div class="fifth-state-to-state-grid-image-parent">
                        <div class="fifth-state-to-state-grid-image">
                            <img src="<?= get_img() ?>/home-delivering-vehicle-1.png" alt="state to state auto transport" />
                        </div>
                        <div class="fifth-state-to-state-grid-image">
                            <img src="<?= get_img() ?>/home-picking-vehicle.png" alt="state to state auto transport" />
                        </div>
                        <div class="fifth-state-to-state-grid-image">
                            <img src="<?= get_img() ?>/home-shipping-vehicle.png" alt="state to state auto transport" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="fifth-state-to-state-grid-1"></div>
        </div>

    </section>


<!---------------- state names for all the states ---------->
    <section class="all-state-name-page-mains" style="margin:4%;">
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
                    <a href="<?= get_state() ?>/florida" rel="dofollow">Florida</a><br>
                    <a href="<?= get_state() ?>/georgia" rel="dofollow">Georgia</a><br>
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
                    <a href="<?= get_state() ?>/maine" rel="dofollow">Maine</a><br>
                    <a href="<?= get_state() ?>/maryland" rel="dofollow">Maryland</a><br>

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
                    <a href="<?= get_state() ?>/new-hampshire" rel="dofollow">New Hampshire</a><br>
                    <a href="<?= get_state() ?>/new-jersey" rel="dofollow">New Jersey</a><br>

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
                    <a href="<?= get_state() ?>/rhode-island" rel="dofollow">Rhode Island</a><br>
                    <a href="<?= get_state() ?>/south-carolina" rel="dofollow">South Carolina</a><br>

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
                    <a href="<?= get_state() ?>/wyoming-wy" rel="dofollow">Wyoming</a><br>
                </div>
            </section>
        </section>
    </section>

<!----------------page bottom ------------------>
        <?php include_once page_bottom ?>

        
    <script>
        const txt = document.querySelectorAll(".text_div_1");
        const img = document.querySelectorAll(".fifth-state-to-state-grid-image");


        function active_tab(index) {
            remevo_active_ele()
            txt[index].style.display = "block"
            img[index].style.display = "grid"
        }

        function remevo_active_ele() {
            for (let index = 0; index < txt.length; index++) {
                txt[index].style.display = "none"
                img[index].style.display = "none"
            }
        }

        active_tab(0);

        window.onscroll = function () {

            scrollTop()
        };
        var mybutton = document.getElementById("top-btn");

        function scrollTop() {
            if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
                mybutton.style.display = "block";
                // console.log("hey");
            } else {
                mybutton.style.display = "none";
            }
        }
    </script>

    <script src="https://unpkg.com/toastmejs@latest/dist/js/toastme.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcYXlUHyWIuVsqM4an4oCYgd8FzNAEFpY&v=3.exp&sensor=false&libraries=places"></script>

    
    
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
    <!-- <script>
        //Customize your Notification  
        const config = {
            timeout: 5000,
            positionY: "top", // top or bottom
            positionX: "right", // right left, center
            distanceY: 30, // Integer value
            distanceX: 30, // Integer value
            zIndex: 100, // Integer value
            theme: "ligh", // default, ligh or  dark (leave empty for "default" theme)
            duplicates: true // true or false - by default it's false
        };
        //Create a new Toastmejs class instance
        window = toast = new Toastme(config);

        // AOS.init({
        //     duration: 1000,
        // });

        const domain = "https://rapidautoshipping.com/";
    </script> -->
   <script src="<?= get_js("side_form_new.js") ?>"></script>




</body>

</html>