<?php include_once "../../init.php";


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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $data['title'] ?></title>

    <?= $data['meta'] ?>
    <link rel="canonical" href="rapidautoshipping.com/state-to-state/<?= $data['slug'] ?>" />

    <!--     Google Analytics Code Start -->


    <!--     Google Analytics Code Ends -->

    <?php include head; ?>
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_home.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_contactus.css">
    <!-- animation css link   -->
    <link rel="stylesheet" href="<?= get_css(); ?>small-form.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_colorado-to-arizona.css">
    <link rel="stylesheet" href="<?= get_css(); ?>side-form.css">
    <style>
        .contact-us-header-page {
            width: 100%;
            background-repeat: no-repeat, repeat;
            background-image: url('<?= get_img() ?>car-shipping-header-image1.png');
            background-blend-mode: lighten;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .text-small {
            font-size: 18px !important;
            word-spacing: 1.5px !important;
            letter-spacing: 0.5px !important;
        }
    </style>
</head>

<body>
    <!-- this is header -->
    <?php include header; ?>
    <!-- this is the fiorst section with background image -->
    <div class="contact-us-header-page">
        <?php
        $NAME = $data['page_h1'];
        $PARAGRAPH = $data['page_about_1'];
        include_once small_form;
        ?>
    </div>

    <!-- parent grid section start-->
    <div class="main-state-to-state">
        <div class="left-state-to-state">
            <div class="first-section-state-to-state">
                <p class="heading-1"><?= $data['page_h2'] ?></p>
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
                    <img src="https://dashboard.growupnext.in/rapidautoshipping/assets/images/blog/<?= $data['state_form_img'] ?>" alt="<?= $data['state_form_img_alt'] ?>" />

                </div>
                <ul>
                    <?php
                    if (isset($json_decoded)) {
                        foreach ($json_decoded as $result) {
                            echo '<li id="' . $result->index . '">
                        <div class="shipping-form-state-content">
                            <h2 class="heading-1">' . $result->heading . '</h2>
                            <p class="para-2">
                                ' . $result->about . '
                            </p>
                        </div>
                    </li>';
                        }
                    }

                    ?>

                    <li id="step">
                        <div class="shipping-form-state-content">
                            <h2 class="heading-1">How to ship Vehicle <span><?= $data['state_form'] . " to " . $data['state_to'] ?></span>?</h2>
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
                    <img src="https://dashboard.growupnext.in/rapidautoshipping/assets/images/blog/<?= $data['state_to_img'] ?>" alt="<?= $data['state_to_img_alt'] ?>" />
                </div>
            </section>


        </div>

        <div class="right-state-to-state-child" id="right-state-to-state-child">
            <?php
            include side_form;
            ?>
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

    <!-- top scroll button end -->

    <!-- parent grid section end  -->
    <!-- review section-->
    <section class="state-to-state-review ">
        <div class="state-to-state-review-grid">
            <div class="state-to-state-review-grid-1">
                <img src="<?= get_img() ?>happy-customer-icon.png" alt="state to state auto transport" />
                <h3><?= $data['route_star'] ?>/10 <span>stars</span></h3>
                <p>Based on recent dispatch reports, the carrier availability rating from <?= $data['state_form'] . " to " . $data['state_to'] . " is " . $data['route_star'] ?>/10 </p>
                <div class="orange-strip">
                    <h2>
                        Road Transportation
                    </h2>

                </div>
            </div>
            <div class="state-to-state-review-grid-1">
                <img src="<?= get_img() ?>starting-destination.png" alt="state to state auto transport" />
                <h3><?= $data['route_distance'] ?> <span>miles</span></h3>
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

    </section>
    <!-- steps-state-to-state -->
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


    <section class="all-state-name-page-mains" style="margin:4%;">
        <section class="all-state-name-pages">
            <h2 class="heading-1">
                Autoshipping <span>States</span> in USA </h2>
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
    <!-- popular shipping routes -->
    <!-- <section class="seventh-state-to-state">
        <h2 class="heading-1">More Information About Cities in <span>Alabama </span></h2>

        <div class="seventh-city-name">
            <div class="city-name-grid-1">
                <h4 class="heading-2">Birmingham Metropolitan Area</h4>
                <p class="para-2">
                    Birmingham, Hoover, Talladega, Alabaster, Bessemer, Calera, Center Point, Cullman, Fairfield, Fairhope, Gainesville, Gardendale, Homewood, Helena, Hueytown, Irondale, Jasper, Leeds, Mountain Brook, Pelham, Pell City, Pleasant Grove, Sylacauga, Trussville, Vestavia Hills
                </p>
            </div>
            <div class="city-name-grid-1">
                <h4 class="heading-2">Huntsville Metropolitan Area</h4>
                <p class="para-2">
                    Huntsville, Ardmore, Athens, Brownsboro, Decatur, Elkmont, Gurley, Harvest, Hazel Green, Madison, Meridianville, Monrovia, Moores Hill, New Hope, New Market, Owens Cross Roads, Redstone Arsenal, Toney, Triana
                </p>
            </div>
            <div class="city-name-grid-1">
                <h4 class="heading-2">Mobile Metropolitan Area</h4>
                <p class="para-2">
                    Mobile, Prichard, Saraland, Tillmans Corner, Daphne, Fairhope, Bay Minette, Bayou La Batre, Chickasaw, Citronelle, Creola, Dauphin Island, Foley, Grand Bay, Gulf Shores, Orange Beach, Robertsdale, Satsuma, Semmes, Spanish Fort, Theodore
                </p>
            </div>
            <div class="city-name-grid-1">
                <h4 class="heading-2">Montgomery Metropolitan Area</h4>
                <p class="para-2">
                    Montgomery, Alexander City, Dothan, Enterprise, Millbrook, Prattville, Coosada, Eclectic, Fort Deposit, Hayneville, Mosses, Ozark, Tallassee, Wetumpka, White Hall, Pike Road
                </p>

            </div>

            <div class="city-name-grid-1">
                <h4 class="heading-2">Tuscaloosa Metropolitan Area</h4>
                <p class="para-2">
                    Tuscaloosa, Northport, Brookwood, Coaling, Eutaw, Greensboro, Lake View, Moundville
                </p>
            </div>



        </div>
    </section> -->
    <!--  -->
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

        window.onscroll = function() {

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
</body>

</html>