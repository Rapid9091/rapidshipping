<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); include '../init.php' ?>
<?php include './copy_logo.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload"href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"as="style"onload="this.onload=null;this.rel='stylesheet'"anync>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"rel="preload"as="style"onload="this.onload=null;this.rel='stylesheet'"anync>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="preload"as="style"onload="this.onload=null;this.rel='stylesheet'"anync>
    <link rel="stylesheet" href="<?= get_css() ?>copy.css">
    <link rel="stylesheet" href="<?= get_css() ?>small_form_new.css">
    <link anync rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"rel="preload"as="style"onload="this.onload=null;this.rel='stylesheet'"anync />

    <!-- <link rel="stylesheet" href="<?= get_css(); ?>Page_new.min.css" defer> -->
    <title>Service Copy Page</title>
    <style>
        #sideFrombody{display: none;}
    </style>

</head>

<body>

    <div class="">
    <div>
        <header>
            <nav class="navbar-a" style="background-color: #ff5722;">
                <div class="logo_div ">
                    <a href="<?= home_path() ?>"><img src=" <?= get_img() ?>Untitled-1-Recovered.png" alt="" width="100px;" height="100%;"></a>
                </div>
                <div class="main-link" id="main-link">
                    <ul class="nav-ul">
                        <li><a href="<?= home_path() ?>">Home</a></li>
                        <li><a href="<?= home_path() ?>services">Services</a></li>
                        <li class="we-ship"><a href="<?= home_path() ?>cars">We Ship</a>
                            <!-- <div class="we_ship">
                                <ul>
                                    <li><a href="<?= home_path() ?>cars"><i class="ri-car-fill"></i>Cars</a></li>
                                    <li><a href="<?= home_path() ?>services/rv-transport"><i class="ri-car-fill"></i>ATV/RV</a></li>
                                    <li><a href="<?= home_path() ?>services/motor-cycle-shipping"><i class="ri-car-fill"></i>Motorcycle</a></li>
                                    <li><a href="<?= home_path() ?>services/boat-shipping"><i class="ri-car-fill"></i>Boat</a></li>
                                    <li><a href="<?= home_path() ?>services/yacht-shipping-services"><i class="ri-car-fill"></i>Yacht</a></li>
                                    <li><a href="<?= home_path() ?>services/truck-shipping-service"><i class="ri-car-fill"></i>Truck</a></li>
                                    <li><a href="<?= home_path() ?>services/tractor-transport"><i class="ri-car-fill"></i>Tractor</a></li>
                                    <li><a href="<?= home_path() ?>services/heavy-equipment-shipping"><i class="ri-car-fill"></i>Heavy Equipments</a></li>
                                </ul>
                            </div> -->
                        </li>
                        <li class="statesd"><a href="<?= get_state() ?>">States</a>
                            <!-- <div class="we_ships">
                                <div class="ul_1">
                                    <ul>
                                        <li><a href="<?= get_state() ?>/alabama"><i class="ri-map-pin-add-fill"></i>Alabama</a></li>
                                        <li><a href="<?= get_state() ?>/alaska"><i class="ri-map-pin-add-fill"></i>Alaska</a></li>
                                        <li><a href="<?= get_state() ?>/arizona"><i class="ri-map-pin-add-fill"></i>Arizona</a></li>
                                        <li><a href="<?= get_state() ?>/arkansas"><i class="ri-map-pin-add-fill"></i>Arkansas</a></li>
                                        <li><a href="<?= get_state() ?>/california"><i class="ri-map-pin-add-fill"></i>California</a></li>
                                        <li><a href="<?= get_state() ?>/colorado"><i class="ri-map-pin-add-fill"></i>Colorado</a></li>
                                        <li><a href="<?= get_state() ?>/connecticut"><i class="ri-map-pin-add-fill"></i>Connecticut</a></li>
                                        <li><a href="<?= get_state() ?>/delaware"><i class="ri-map-pin-add-fill"></i>Delaware</a></li>
                                        <li><a href="<?= get_state() ?>/wisconsin"><i class="ri-map-pin-add-fill"></i>Wisconsin</a></li>
                                        <li><a href="<?= get_state() ?>/south-dakota"><i class="ri-map-pin-add-fill"></i>South Dakota</a></li>

                                    </ul>
                                </div>
                                <div class="ul_1">
                                    <ul>
                                        <li><a href="<?= get_state() ?>/florida"><i class="ri-map-pin-add-fill"></i>Florida</a></li>
                                        <li><a href="<?= get_state() ?>/georgia"><i class="ri-map-pin-add-fill"></i>Georgia</a></li>
                                        <li><a href="<?= get_state() ?>/hawaii"><i class="ri-map-pin-add-fill"></i>Hawaii</a></li>
                                        <li><a href="<?= get_state() ?>/idaho"><i class="ri-map-pin-add-fill"></i>Idaho</a></li>
                                        <li><a href="<?= get_state() ?>/illinois"><i class="ri-map-pin-add-fill"></i>Illinois</a></li>
                                        <li><a href="<?= get_state() ?>/indiana"><i class="ri-map-pin-add-fill"></i>Indiana</a></li>
                                        <li><a href="<?= get_state() ?>/iowa"><i class="ri-map-pin-add-fill"></i>Iowa</a></li>
                                        <li><a href="<?= get_state() ?>/kansas"><i class="ri-map-pin-add-fill"></i>Kansas</a></li>
                                        <li><a href="<?= get_state() ?>/wyoming-wy"><i class="ri-map-pin-add-fill"></i>Wyoming</a></li>
                                        <li><a href="<?= get_state() ?>/tennessee-tn"><i class="ri-map-pin-add-fill"></i>Tennessee</a></li>
                                    </ul>
                                </div>
                                <div class="ul_1">
                                    <ul>
                                        <li><a href="<?= get_state() ?>/kentucky"><i class="ri-map-pin-add-fill"></i>Kentucky</a></li>
                                        <li><a href="<?= get_state() ?>/louisiana"><i class="ri-map-pin-add-fill"></i>Louisiana</a></li>
                                        <li><a href="<?= get_state() ?>/maine"><i class="ri-map-pin-add-fill"></i>Maine</a></li>
                                        <li><a href="<?= get_state() ?>/maryland"><i class="ri-map-pin-add-fill"></i>Maryland</a></li>
                                        <li><a href="<?= get_state() ?>/massachusetts"><i class="ri-map-pin-add-fill"></i>Massachusetts</a></li>
                                        <li><a href="<?= get_state() ?>/michigan"><i class="ri-map-pin-add-fill"></i>Michigan</a></li>
                                        <li><a href="<?= get_state() ?>/minnesota"><i class="ri-map-pin-add-fill"></i>Minnesota</a></li>
                                        <li><a href="<?= get_state() ?>/mississippi"><i class="ri-map-pin-add-fill"></i>Mississippi</a></li>
                                        <li><a href="<?= get_state() ?>/texas-tx"><i class="ri-map-pin-add-fill"></i>Texas</a></li>
                                        <li><a href="<?= get_state() ?>/utah-ut"><i class="ri-map-pin-add-fill"></i>Utah</a></li>
                                    </ul>
                                </div>
                                <div class="ul_1">
                                    <ul>
                                        <li><a href="<?= get_state() ?>/missouri"><i class="ri-map-pin-add-fill"></i>Missouri</a></li>
                                        <li><a href="<?= get_state() ?>/montana"><i class="ri-map-pin-add-fill"></i>Montana</a></li>
                                        <li><a href="<?= get_state() ?>/nebraska"><i class="ri-map-pin-add-fill"></i>Nebraska</a></li>
                                        <li><a href="<?= get_state() ?>/nevada"><i class="ri-map-pin-add-fill"></i>Nevada</a></li>
                                        <li><a href="<?= get_state() ?>/new-hampshire"><i class="ri-map-pin-add-fill"></i>New Hampshire</a></li>
                                        <li><a href="<?= get_state() ?>/new-jersey"><i class="ri-map-pin-add-fill"></i>New Jersey</a></li>
                                        <li><a href="<?= get_state() ?>/new-mexico"><i class="ri-map-pin-add-fill"></i>New Mexico</a></li>
                                        <li><a href="<?= get_state() ?>/new-york"><i class="ri-map-pin-add-fill"></i>New York</a></li>
                                        <li><a href="<?= get_state() ?>/vermont-vt"><i class="ri-map-pin-add-fill"></i>Vermont</a></li>
                                        <li><a href="<?= get_state() ?>/virginia-va"><i class="ri-map-pin-add-fill"></i>Virginia</a></li>
                                    </ul>
                                </div>
                                <div class="ul_1">
                                    <ul>
                                        <li><a href="<?= get_state() ?>/north-carolina"><i class="ri-map-pin-add-fill"></i>North Carolina</a></li>
                                        <li><a href="<?= get_state() ?>/north-dakota"><i class="ri-map-pin-add-fill"></i>North Dakota</a></li>
                                        <li><a href="<?= get_state() ?>/ohio"><i class="ri-map-pin-add-fill"></i>Ohio</a></li>
                                        <li><a href="<?= get_state() ?>/oklahoma"><i class="ri-map-pin-add-fill"></i>Oklahoma</a></li>
                                        <li><a href="<?= get_state() ?>/oregon"><i class="ri-map-pin-add-fill"></i>Oregon</a></li>
                                        <li><a href="<?= get_state() ?>/pennsylvania"><i class="ri-map-pin-add-fill"></i>Pennsylvania</a></li>
                                        <li><a href="<?= get_state() ?>/rhode-island"><i class="ri-map-pin-add-fill"></i>Rhode Island</a></li>
                                        <li><a href="<?= get_state() ?>/south-carolina"><i class="ri-map-pin-add-fill"></i>South Carolina</a></li>
                                        <li><a href="<?= get_state() ?>/washington-wa"><i class="ri-map-pin-add-fill"></i>Washington</a></li>
                                        <li><a href="<?= get_state() ?>/west-virginia-wv"><i class="ri-map-pin-add-fill"></i>West Virginia</a></li>
                                    </ul>
                                </div>
                            </div> -->

                        </li>
                        <li class="blog"><a href="<?= home_path() ?>blogs">Blog</a>
                            <!-- <div class="we_ships">
                                <div class="ul_1">
                                    <ul>
                                        <li><a href="<?= home_path() ?>blogs/cost-from-california-to-texas"><i class="ri-book-fill"></i>Ship Car From California To Texas</a></li>
                                        <li><a href="<?= home_path() ?>blogs/cheapest-way-to-ship-a-car"><i class="ri-book-fill"></i>Cheapest way to ship a car</a></li>
                                        <li><a href="<?= home_path() ?>blogs/enclosed-vs-open-car-transport"><i class="ri-book-fill"></i>Enclosed vs Open Car Transport</a></li>
                                        <li><a href="<?= home_path() ?>blogs/fifth-wheel-transport-services"><i class="ri-book-fill"></i>Fifth Wheel Transport Services</a></li>
                                        <li><a href="<?= home_path() ?>blogs"><i class="ri-book-fill"></i>Let's read more ..</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </li>
                    </ul>
                    <div class="close-menu-bar" id="close-menu-bar"><i class="ri-close-line"></i></div>
                    <button onclick="window.location.href=' tel:+1 833-233-4447'"><i class="ri-phone-fill"></i> +1 (833) 233-4447</button>
                </div>
                <div class="hamburgur-btn" id="hamburgur-btn"><i class="ri-menu-3-line"></i></div>
            </nav>
        </header>
    </div>
    <!-- End Header -->
    <div class="banner-section"  id="myDiv2">
        <img class="banner-section-img" width="100%" height="100%" src="<?= get_img() ?>car-shipping-header-image1.webp" alt="Rapid Auto Shipping">
        <div class="row banner-section-row p-5">
            <div class="col-md-12 col-lg-8 p-4 banner-section-row-col-1">
                <div class="row p-2">
                    <div class="col-12 banner-heading-col">
                        <h1>Open Transport Car Shipping</h1>
                    </div>
                    <div class="col-12 banner-paragraph-col text-container-xyz">
                        <p class="text-content-xyz">Your vehicle will be transported in an open transport car carrier trailer, which typically has two racks that can hold 4-10 autos. The truck, which can be 16 to 24 feet long, has no walls or roof, but it is equipped with special protections and systems to keep your car safe and secure while being stored on the ramps. Commercial vehicle</p>
                    
                    </div>
                    <div class="col-12 mt-5 -align-items-center- text-center">
                        <div class="row align-items-center">
                            <div class="r-r-b col-6  col-md-6 col-lg-3"><img src="<?= get_img() ?>rapid-auto-shipping-trustpilot-faiz.webp" alt="trustpilot logo" loading="lazy" width="150px" height="71px" class="truspilot_logo"></div>
                            <div class="r-r-b col-6 col-md-6 col-lg-3 google_not_display"><img src="<?= get_img() ?>rapid-auto-shipping-trustpilot-google.webp" alt=" google logo" loading="lazy" width="150px" height="66px" class="google_logo" style="margin: 0 5%;"></div>
                            <div class="r-r-b col-6 cool-md-12 col-lg-3"><img src="<?= get_img() ?>rapid-auto-shipping-trustpilot-crunchbase2.webp" alt="cruchbase logo" loading="lazy" width="150px" height="44px" class="crunchbase_logo"></div>
                            <!-- <div class="col-3"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-4 d-grid justify-content-center" >
                <div id="topForm"><?php include small_form_new; ?></div>
            </div>
        </div>
    </div>
    <div class="main-banner-bellow-banner">
        <div class="row  align-items-center h-100 mx-auto" style="width: 90%;">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="row align-items-center">
                    <div class="col-3"><i class="ri-money-dollar-circle-fill"></i></div>
                    <div class="col-9">
                        <p class="fw-semibold">PRICE MATCH</p>
                        <P>Best price guaranteed</P>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="row align-items-center">
                    <div class="col-3"><i class="ri-calendar-event-fill"></i></div>
                    <div class="col-9">
                        <p class="fw-semibold">GUARANTEED PICK-UP</p>
                        <p>Your chice of pick-up</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="row align-items-center ">
                    <div class="col-3"><i class="ri-pin-distance-fill"></i></div>
                    <div class="col-9">
                        <p class="fw-semibold">EXPRESS SHIPPING</p>
                        <P>Reduced trasit time</P>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="row align-items-center justify-content-between">
                    <div class="col-3 "><i class="ri-shield-check-line align-self-start "></i></div>
                    <div class="col-9">
                        <p class="fw-semibold">SAFE TARNSPORT</p>
                        <P>Full insurance coverage</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="review_section_swiper">
        <div class="row mx-auto  border-bottom border-2 align-items-center p-2" style="width:90%;">
            <div class="col-12 col-md-5 col-lg-3">
                <div class="row p-5 review_section_swiper-row">
                    <div class="col-12 text-center stars_review">
                        <img src="<?= get_img() ?>satisfaction.webp" alt="custormer satisfaction" width="150px" height="61px" loading="lazy">
                        <!-- </div>
                    <div class="col-12 stars_review"> -->
                        <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-line"></i></p>
                    </div>
                    <div class="col-12 review_">
                        <p><b>Excellent</b></p>
                        <p>based on <b>2115 reviews</b></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-9 _review_star">
                <div class="swiper reviews_2 ">
                    <div class="swiper-wrapper" id="google_reviews">
                        <div class="swiper-slide review-item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/benjamin.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Peter Mills</p>
                                        <span>5 Dec 2022</span>
                                    </div>
                                </div>
                                <div class="" style="margin-top:10px;">
                                    <img src="<?= get_img(); ?>TransportReviewsLogo.webp" alt="transposrt review logo" width="80px" height="30px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>Ship a vehicle with them and enjoy the best shipping in USA. I have worked with different company but they gave me complete satisfaction. Call the Phone number to speak with the live person and get your shipping quote instantly. Thankyou Rapid Auto Shipping once again.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/lucas.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Kiley Eckert</p>
                                        <span>28 Feb 2022</span>
                                    </div>
                                </div>
                                <div class="g-logo">
                                    <img src="<?= get_img() ?>reviews/g.webp" alt="google logo" width="20px" height="20px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>They are Excellent when it comes to look for one of the best Auto Shipping Companies in USA. Rapid Auto SHIPPING company offers the best Auto Shipping Quotes as i tried comparing with others as well.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/james.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>James Johnson</p>
                                        <span>1 Jan 2022</span>
                                    </div>
                                </div>
                                <div class="" style="margin-top:10px;">
                                    <img src="<?= get_img() ?>rapid-auto-shipping-crunchbase.webp" alt="crunchbase logo" width="70px" height="9px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>I needed to ship a car from Texas to California for my son, so I contacted Rapid Auto Shipping Transport here in Texas, and they were able to make it happen. Excellent service and a smooth, dependable, and professional process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/noah.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Tim Cripps</p>
                                        <span>15 feb 2023</span>
                                    </div>
                                </div>
                                <div class="g-logo">
                                    <img src="<?= get_img() ?>reviews/g.webp" alt="google logo" width="20px" height="20px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>I love the way they shipped my vehicle Volvo XC 60 . It was given back to me in the same way as i have handed it to over them.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/emma.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Shirley Steele</p>
                                        <span>5 Oct 2022</span>
                                    </div>
                                </div>
                                <div class="" style="margin-top:10px;">
                                    <img src="<?= get_img() ?>Trustpilot-logo.webp" alt="trustpilot" width="80px" height="18px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>They were good while delivering my vehicle. it was the first time i have ever used the service of transporting my vehicle and i ended up with good experince all because of Rapid auto Shipping will recommened it to my friends as well.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/henry.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Gerald Werber</p>
                                        <span>19 Jan 2022</span>
                                    </div>
                                </div>
                                <div class="" style="margin-top:10px;">
                                    <img src="<?= get_img() ?>TransportReviewsLogo.webp" alt="transport review" width="80px" height="30px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>Best car shipping i have ever come across with. they did their job in the best way i gave them full rating. Thank you, Rapid auto shipping</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/amelia.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Margery Dimsha</p>
                                        <span>4 March 2022</span>
                                    </div>
                                </div>
                                <div class="" style="margin-top:10px;">
                                    <img src="<?= get_img() ?>rapid-auto-shipping-crunchbase.webp" alt="crunchbase logo" width="70px" height="9px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>No comparison when it comes to vehicle transportation in United states. they are working in the best way i and after working with them i found it out them this is the actual way of doing any professional work. I was relaxed as i was getting proper updates and shipping a car with rapid Auto Shipping was one of my best decision as they were really rapid and just the Perfect!</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide review-item item">
                            <div class="flex" style="justify-content: space-between;">
                                <div class="user_info flex">
                                    <div class="user_img">
                                        <img src="<?= get_img() ?>reviews/olivia.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                    </div>
                                    <div class="user_name">
                                        <p>Jennifer Bayne</p>
                                        <span>10 Nov 2022</span>
                                    </div>
                                </div>
                                <div class="" style="margin-top:10px;">
                                    <img src="<?= get_img(); ?>Trustpilot-logo.webp" alt="trustpilot" width="80px" height="18px" loading="lazy">
                                </div>
                            </div>
                            <div class="review_stars">
                                <p><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></p>
                            </div>
                            <div class="review_content">
                                <div class="reiview_content_box">
                                    <p>I would always love to give them positive rating as i found them the best shipping company to ship my vehicle and i like the way they carried the whole process and in the exact way they told it.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body "> 
        <div class="row content-body-row px-5">
            <div class="col-12 col-md-12 col-lg-8 p-5 content-body-text" id="contentContainer">
                <div class="article_list">
                    <h2>What&#39;s in this article?</h2>

                    <ul>
                        <li><a href="#1">Types of Cheap Transporters</a></li>
                        <li><a href="#2">Cheap Transporter Services</a></li>
                        <li><a href="#3">Cheap Transporters Domestically Or Internationally</a></li>
                        <li><a href="#4">Rapid Auto Shipping And Cheapest Car Shipping Services</a></li>
                        <li><a href="#5">Prepared To Transport Your Vehicle</a></li>
                        <li><a href="#6">Best And Cheap Transporters</a></li>
                        <li><a href="#7">How Much Does Cheap Transporters Cost?</a></li>
                        <li><a href="#8">How Can I Track My Car While It&#39;s in Motion?</a></li>
                        <li><a href="#9">Where Can I Get A Free Shipping Quote ?</a></li>
                        <li><a href="#10">What Is The Payment Procedure?</a></li>
                    </ul>
                </div>

                <h2><a id="1" name="1"><strong>Types of Cheap Transporters</strong></a></h2>

                <p>If you&#39;re searching for cheap transporters, Rapid Auto Shipping is the car shipment &amp; cheap transport service for you. Whether the task involves company relocation, Military PCS vehicle shipping, dealer trades, car dealership delivery, cross country moves, and so on, we do our best to ensure that all vehicles are brought on time and in the precise state specified.</p>

                <h3><strong>What&rsquo;s the Cheapest Car Shipping</strong></h3>

                <p>Whether you&#39;re relocating across town or across the country, there are numerous expenses associated that make moving expensive. If you also need to cheap transportation vehicle to your new home, you&#39;re looking for a cheap transporters while still knowing you&#39;re receiving excellent service.</p>

                <p><strong>Open Air Car Shipping</strong></p>

                <p>In general, open air car shipping is the least expensive method to cheapest car shipping. In addition, almost every cheap transporter uses open transport trailers, making it the industry standard for a cheap transportation vehicle.</p>

                <p>Open air trucks can cheap transport between eight and ten vehicles at a time depending on the vehicle size, weight, and clearances. This means that cheap transporters can make multiple trips along a given transportation path to deliver cars and transfer new goods.</p>

                <p>When scheduling your cheapest car hipping, open vehicle delivery gives you more options. It also helps to share gasoline costs because the carrier&#39;s price is divided across customers.</p>

                <p><strong>Enclosed Auto Transport</strong></p>

                <p>&quot;<a href="https://rapidautoshipping.com/services/enclosed-shipping" target="_blank">Enclosed car transport&nbsp;</a>&quot; is a form of auto transport that provides vehicle security. This is an excellent car transportation choice if you need to move a vintage or expensive vehicle. Enclosed transporters can usually only transport a few vehicles at a time, usually up to seven cars.</p>

                <p>Prices for enclosed car transport are calculated like open car transport, but you&#39;ll spend about 30-40% more per journey for additional protection. Short routes (1-500 miles) average $709, middle routes (500-1500 miles) average $929, and longer routes (1500+ miles) average $1179 for standard-sized cars.</p>

                <p><strong>Terminal to Terminal Cheap Transporters</strong></p>

                <p>If you&#39;re on a limited budget, the cheap transportation vehicle option is terminal to terminal delivery. It is an excellent way to save money. In addition, you will not be charged for vehicle pickup or drop off because you will be accountable for these things.</p>

                <p><strong>Door to Door Car Shipping</strong></p>

                <p>This one is slightly more expensive because your vehicle will be picked up from your entrance and dropped off at its ultimate location. However, if you are transporting a normal car in an open container, you can significantly reduce the cost. Furthermore, all Transporters must be insured for a minimum of $750,000, ensuring that your vehicle is safe from point A to point B.</p>

                <div class="shipping-form-state-image">
                    <p><img alt="cheap transporters" width="100%" height="100%" loading="lazy" src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/1335234151.webp" /></p>
                </div>

                <h2><a id="2" name="2"><strong>Cheap Transporter Services</strong></a></h2>

                <p>The vehicle symbolizes independence and expression that genuinely resonates with the typical American. Whether you own a tiny two-door coupe, a sports car, a sedan, or anything else, it&#39;s essential to you because it&#39;s your car. When searching for the cheap transporters, we understand that you want your vehicle to be well-cared for at an affordable price.</p>

                <p>This helpful piece will describe some of the more essential aspects of transporting regular cars and how they affect auto transport rates and experience.</p>

                <h2><a id="3" name="3"><strong>Cheap Transporters Domestically Or Internationally</strong></a></h2>

                <p>Cars have eternally altered the face of transportation, from horse and buggy to the contemporary face that transports us everywhere, from family reunions to the grocery store.</p>

                <p>In addition to vehicles used for daily transportation, there is a unique class of vehicles known as collectors cars, and you presumably wouldn&#39;t want to drive a rare car for thousands of miles if you were moving across the nation, would you? Cheapest car shipping is a service that we will all require at some time, and selecting the cheap transporters to transport your treasured asset will require some study.</p>

                <p>The cheap transporter is not a one-size-fits-all glove, and there should be a lot of planning involved. There is more to transporting your vehicle than simply loading it onto the back of a lift truck, particularly if the vehicle is transported long distances.</p>

                <p>Let&#39;s look at some of the factors that go into shipping a vehicle correctly and what you&#39;ll need to prepare for to get the work done correctly. Rapid Auto Shipping has been doing this for a long time, and you should not have to worry about shipping your vehicle.</p>

                <div class="shipping-form-state-image">
                    <p><img alt="cheap transport" width="100%" height="100%" loading="lazy" src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/1231047103.webp" /></p>
                </div>

                <h2><a id="4" name="4"><strong>Rapid Auto Shipping And Cheapest Car Shipping Services</strong></a></h2>

                <p>The first step is to gather information to estimate the &quot;<a href="https://rapidautoshipping.com/services/car-transport-quotes" target="_blank">cost of shipping your car.</a>&quot; Several variables are considered when calculating the percentage. The distance traveled, the year, make, and model of the vehicle, whether it functions and drives, and closeness to major towns are just a few factors that influence car shipping costs.</p>

                <p>Our car shipping estimate calculator will consider these variables when calculating the shipping rate to reach the cheapest car shipping cost possible. Use the Quote Request tool on the right side of each screen.</p>

                <p>This is the fundamental information we will use to give you the best price for moving your car. The amount you are quoted is the price you will pay! Nothing else!</p>

                <h2><a id="5" name="5"><strong>Prepared To Transport Your Vehicle</strong></a></h2>

                <p>You can be confident that your car will arrive at its location on schedule and in good condition now that you understand the intricacies of the cheapest car shipping process. However, when it comes to a suitable procedure, research is essential.</p>

                <p>As a result, take the time to collect information about your destination and the characteristics of your car. This will aid in giving an exact quote. The cheap transporter procedure does not have to be intimidating.</p>

                <p>Similarly, the procedure can be quite easy once you have everything in order. Take the time to do your homework and evaluate different cheap transport quotes. This will help you make an informed decision. You&#39;ll also have your car safely delivered to your new location in no time.</p>

                <div class="shipping-form-state-image">
                    <p><img alt="cheap transporter" width="100%" height="100%" loading="lazy" src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/1364392358.webp" /></p>
                </div>

                <h2><a id="6" name="6"><strong>Best And Cheap Transporters</strong></a></h2>

                <p>Rapid Auto Shipping is the finest cheap transporter. We provide the greatest value to our clients while also providing exceptional service. We&#39;ll carefully examine the cheapest car shipping services and describe why we deserve your consideration.</p>

                <p>Rapid Auto Shipping provides customers with a complete range of the cheapest car shipping services at well-below-average prices. As a result, the cheap transporters are generally regarded as having some of the best rates in the industry, a claim supported by Rapid Auto Shipping&#39;s promise not to add secret fees once an agreement has been made.</p>

                <h2><a id="7" name="7"><strong>How Much Does Cheap Transporters Cost?</strong></a></h2>

                <p>Averages come into play when determining how much it costs to cheapest car shipping. Each cheap transporters price routes differently, so costs will change depending on which company you talk with. The average low-cost transit car costs between $500 and $1,100 for a four-door sedan and $750 to $1,400 for small SUVs, trucks, and vans. (based on a California to New York move).</p>

                <p>Larger cars will cost more to transport, with rates varying based on the path. Remember that cheap transport services during the off-season months frequently reduce costs, resulting in more cheapest car shipping services.</p>

                <p>Please remember that the above rates are only for the cheapest car shipping services within the contiguous United States. For example, an automobile shipped from another country to Hawaii typically costs between $800 and $1,350, while car delivery between Alaska (Juneau), Washington, and Seattle costs around $1,300.</p>

                <p>You will also have to pay more for vehicle shipping services if you do not reside near a vehicle transit terminal or if the vehicle needs to be in working order.</p>

                <div class="shipping-form-state-image">
                    <p><img alt="cheap transportation vehicle" width="100%" height="100%" loading="lazy" src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/20503539.webp" /></p>
                </div>

                <h2><a id="8" name="8"><strong>How Can I Track My Car While It&#39;s in Motion?</strong></a></h2>

                <p>Yes, you can view internet tracking at any time, from any location, seven days a week, and it is always current. When you plan your shipment, it will be given a unique registration number allowing you to monitor its progress online.</p>

                <p>Furthermore, you can use the monitoring link to live chat with a shipping representative to get answers to any concerns about your arrival status.</p>

                <h2><a id="9" name="9"><strong>Where Can I Get A Free Shipping Quote ?</strong></a></h2>

                <p>The more you understand the car shipping process and how we operate, the fewer shocks you will face. Right here on our website, you can complete our free online auto shipping quote calculator to estimate the cost of transporting your automobile.</p>

                <p>You can reach us toll-free at +1 (833) 233-4447 for help. One of our friendly and seasoned staff members calculates the free car delivery estimate. We work diligently to ensure that your transit experience is the best it can be, bar none. Online, you can request a quote.</p>

                <div class="shipping-form-state-image">
                    <p><img alt="cheapest car shipping" width="100%" height="100%" loading="lazy" src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/1916080843.webp" /></p>
                </div>

                <h2><a id="10" name="10"><strong>What is the payment procedure?</strong></a></h2>

                <p>Rapid vehicle Shipping accepts all major credit cards and any verified payment. If you want to pay when the object is brought, you must provide a down payment and the remainder currency or certified money to the driver.</p>

            </div>
            <div class="col-12 col-md-12 col-lg-4 __side-form">
                <div class="_side-form d-grid justify-content-center" >
                    <div id="sideFrombody">
                        <div class="sideFrom" id="sideFrom"></div>
                        <div class="sideformbuttonx" style="text-align: center;margin-top: 10px;"><a href="tel:+1 (833) 233-4447"><button style="width: 200px;height:50px;border-radius:100px;background-color: #ff5722;color:white;cursor: pointer;border: 0;">+1 (833) 233-4447</button></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="key-section">
        <img src="<?= get_img() ?>car-key-new1.jpeg" width="100%" height="100%" loading="lazy" alt="Rapid Auto Shipping">
        <div class="row p-5 key-section-row">
            <div class="col-12">
                <h2 class="fw-bolt key-h">Want to Start Shipping With The Best?</h2>
            </div>
            <div class="col-12">
                <p class="key-p">If you would prefer to speak to one of our experienced Transport
                    Specialists, feel free to give us a call at</p>
            </div>
            <div class="col-12 key-button">
                <a href="tel:+"><button>+1 (833) 233-4447</button></a>
                <button>Get a Quote</button>
            </div>
        </div>
    </div>
    <div class="advantage_section">
        <div class="border border-2 rounded text-center shadow ">
            <div class="row p-3">
                <div class="col-12">
                    <h2 class="heading-1">Advantages using <span style="color:#ff5722">Rapid Auto Shipping</span></h2>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="row ">
                        <div class="col-12  mb-3">
                            <img src="<?= get_img() ?>icons/rating.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                        </div>
                        <div class="col-12">
                            <h3>Top Rated Auto Shipping Company</h3>
                        </div>
                        <div class="col-12">
                            <p>We have thousands of 5-star reviews for exceptional vehicle shipping services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img src="<?= get_img() ?>icons/auto-insurance-icon.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                        </div>
                        <div class="col-12">
                            <h3>Complete Vehicle Coverage</h3>
                        </div>
                        <div class="col-12">
                            <p>We offer the most comprehensive coverage options for complete peace of mind.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img src="<?= get_img() ?>icons/savings-icon.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                        </div>
                        <div class="col-12">
                            <h3>No Up-Front Deposit Required</h3>
                        </div>
                        <div class="col-12">
                            <p>You don't pay a penny until the day your shipment is scheduled for pickup.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <img src="<?= get_img() ?>icons/online-tracking.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                        </div>
                        <div class="col-12">
                            <h3>24/7 Online Shipment Tracking</h3>
                        </div>
                        <div class="col-12">
                            <p>You can track the status of your shipment online anytime at your convenience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-state-section advantage_section">
        <div class="border border-danger  rounded-4">
            <div class="row p-4  text-center">
                <div class="col-12">
                    <h2 style="font-size: 1.9rem;font-family:arial"><strong>Auto shipping <span style="color: #ff5722;">States</span> in USA </strong></h2>
                    </h2>
                </div>
            </div>
            <div class="row px-5 py-3  advantage_section-row-col-2">
                <div class="col-6 col-sm-4 col-lg-2 _states_">
                    <ul>
                        <li><a href="<?= get_state() ?>/alabama" rel="dofollow">Alabama</a><br></li>
                        <li><a href="<?= get_state() ?>/Alaska" rel="dofollow">Alaska</a><br></li>
                        <li><a href="<?= get_state() ?>/Arizona" rel="dofollow">Arizona</a><br></li>
                        <li><a href="<?= get_state() ?>/Arkansas" rel="dofollow">Arkansas</a><br></li>
                        <li><a href="<?= get_state() ?>/California" rel="dofollow">California</a><br></li>
                        <li><a href="<?= get_state() ?>/Connecticut" rel="dofollow">Connecticut</a><br></li>
                        <li><a href="<?= get_state() ?>/Delaware" rel="dofollow">Delaware</a><br></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 _states_">
                    <ul>
                        <li><a href="<?= get_state() ?>/hawaii" rel="dofollow">Hawaii</a><br></li>
                        <li><a href="<?= get_state() ?>/idaho" rel="dofollow">Idaho</a><br></li>
                        <li><a href="<?= get_state() ?>/illinois" rel="dofollow">Illinois</a><br></li>
                        <li><a href="<?= get_state() ?>/indiana" rel="dofollow">Indiana</a><br></li>
                        <li><a href="<?= get_state() ?>/iowa" rel="dofollow">Iowa</a><br></li>
                        <li><a href="<?= get_state() ?>/kansas" rel="dofollow">Kansas</a><br></li>
                        <li><a href="<?= get_state() ?>/kentucky" rel="dofollow">Kentucky</a><br></li>
                        <li><a href="<?= get_state() ?>/louisiana" rel="dofollow">Louisiana</a><br></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 _states_">
                    <ul>
                        <li><a href="<?= get_state() ?>/massachusetts" rel="dofollow">Massachusetts</a><br></li>
                        <li><a href="<?= get_state() ?>/michigan" rel="dofollow">Michigan</a><br></li>
                        <li><a href="<?= get_state() ?>/minnesota" rel="dofollow">Minnesota</a><br></li>
                        <li><a href="<?= get_state() ?>/mississippi" rel="dofollow">Mississippi</a><br></li>
                        <li><a href="<?= get_state() ?>/missouri" rel="dofollow">Missouri</a><br></li>
                        <li><a href="<?= get_state() ?>/montana" rel="dofollow">Montana</a><br></li>
                        <li><a href="<?= get_state() ?>/nebraska" rel="dofollow">Nebraska</a><br></li>
                        <li><a href="<?= get_state() ?>/nevada" rel="dofollow">Nevada</a><br></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 _states_">
                    <ul>
                        <li><a href="<?= get_state() ?>/new-mexico" rel="dofollow">New Mexico</a><br></li>
                        <li><a href="<?= get_state() ?>/new-york" rel="dofollow">New York</a><br></li>
                        <li><a href="<?= get_state() ?>/north-carolina" rel="dofollow">North Carolina</a><br></li>
                        <li><a href="<?= get_state() ?>/north-dakota" rel="dofollow">North Dakota</a><br></li>
                        <li><a href="<?= get_state() ?>/ohio" rel="dofollow">Ohio</a><br></li>
                        <li><a href="<?= get_state() ?>/oklahoma" rel="dofollow">Oklahoma</a><br></li>
                        <li><a href="<?= get_state() ?>/oregon" rel="dofollow">Oregon</a><br></li>
                        <li><a href="<?= get_state() ?>/pennsylvania" rel="dofollow">Pennsylvania</a><br></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 _states_">
                    <ul>
                        <li><a href="<?= get_state() ?>/south-dakota" rel="dofollow">South Dakota</a><br></li>
                        <li><a href="<?= get_state() ?>/tennessee-tn" rel="dofollow">Tennessee</a><br></li>
                        <li><a href="<?= get_state() ?>/texas-tx" rel="dofollow">Texas</a><br></li>
                        <li><a href="<?= get_state() ?>/utah-ut" rel="dofollow">Utah</a><br></li>
                        <li><a href="<?= get_state() ?>/vermont-vt" rel="dofollow">Vermont</a><br></li>
                        <li><a href="<?= get_state() ?>/virginia-va" rel="dofollow">Virginia</a><br></li>
                        <li><a href="<?= get_state() ?>/washington-wa" rel="dofollow">Washington</a><br></li>
                        <li><a href="<?= get_state() ?>/west-virginia-wv" rel="dofollow">West Virginia</a><br></li>
                        <li><a href="<?= get_state() ?>/wisconsin-wi" rel="dofollow">Wisconsin</a><br></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 _states_">
                    <ul>
                        <li><a href="<?= get_state() ?>/florida" rel="dofollow">Florida</a><br></li>
                        <li><a href="<?= get_state() ?>/georgia" rel="dofollow">Georgia</a><br></li>
                        <li><a href="<?= get_state() ?>/maine" rel="dofollow">Maine</a><br></li>
                        <li><a href="<?= get_state() ?>/maryland" rel="dofollow">Maryland</a><br></li>
                        <li><a href="<?= get_state() ?>/new-hampshire" rel="dofollow">New Hampshire</a><br></li>
                        <li><a href="<?= get_state() ?>/new-jersey" rel="dofollow">New Jersey</a><br></li>
                        <li><a href="<?= get_state() ?>/wyoming-wy" rel="dofollow">Wyoming</a><br></li>
                        <li><a href="<?= get_state() ?>/rhode-island" rel="dofollow">Rhode Island</a><br></li>
                        <li><a href="<?= get_state() ?>/south-carolina" rel="dofollow">South Carolina</a><br></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_info">
        <div class="row align-items-center p-3 border-bottom">
            <div class="col-12 col-lg-4 d-grid justify-content-center">
                <img src="<?= get_img() ?>coloured-logo.jpg" loading="lazy" width="100%" height="100%" alt="rapidautoshipping logo">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 justify-content-center d-flex align-items-center">
                <i class="ri-road-map-fill"></i><a href="https://www.google.com/maps?ll=34.468384,-101.304284&z=5&t=m&hl=en&gl=US&mapclient=embed&cid=11474043018341862120">Texas , United States Of America</a>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="row">
                    <div class="col-12 d-flex align-items-center contact_info-det  mb-1"><i class="ri-mail-fill"></i><a href="mailto: info@rapidautoshipping.com">
                            info@rapidautoshipping.com
                        </a></div>
                    <div class="col-12 d-flex align-items-center contact_info-det mt-1"><i class="ri-phone-fill"></i><a href="tel:+1-833-233-4447">
                            +1 (833) 233-4447
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <hr> -->
    <div class="follow-up mb-2">
        <div class="row w-75 mt-2 mx-auto justify-content-center">
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.facebook.com/Rapid-Auto-Shipping-105964451981199" target="_blank"><?= $facebook
                                                                                                        ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.instagram.com/rapidautoshipping/" target="_blank"><?= $instagram ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://twitter.com/ShippingRapid" target="_blank"><?= $twitter ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.linkedin.com/in/rapid-auto-shipping-909217261/" target="_blank"><?= $linkdin ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.youtube.com/@rapidautoshipping7218" target="_blank"><?= $youtube ?></a>
            </div>
        </div>
        <div class="d-none gap-3 flex-wrap mt-4 text-center mx-auto justify-content-center lik">
            <div class="col-1 border-end border-2 border-secondary-subtle py-3 important-urls-grid-1"><a href="<?= home_path(); ?>">Home</a></div>
            <div class="col-1 border-end  border-secondary-subtle border-2 py-3 important-urls-grid-1"><a href="<?= home_path(); ?>services">Services</a></div>
            <div class="col-1 border-end border-2 py-3 important-urls-grid-1"><a href="<?= home_path(); ?>blogs">Blogs</a></div>
            <div class="col-1 border-end border-2 py-3 border-end important-urls-grid-1"><a href="<?= home_path(); ?>states">States</a></div>
            <div class="col-1 py-3 important-urls-grid-1"><a href="<?= home_path(); ?>contact-us">Contact-Us</a></div>
            <div class="col-1 border-start border-2 py-3 important-urls-grid-1"><a href="<?= home_path(); ?>about-us">About Us</a></div>
            <div class="col-1 border-start border-2 py-3 important-urls-grid-1"><a href="<?= home_path(); ?>cars">Cars</a></div>
            <div class="col-2 border-start border-2 py-3 important-urls-grid-1 important-urls-grid-1-special"><a href="<?= home_path(); ?>state-to-state">State To State</a></div>

        </div>
    </div>
    <div class="footer mt-4">
        <div class="row  align-items-start">
            <div class="col-6 col-md-4 col-lg-3">
                <p>Quick Links</p>
                <ul>
                    <li><a href="<?= home_path(); ?>">Home</a></li>
                    <li><a href="<?= home_path(); ?>about-us">About Us</a></li>
                    <li><a href="<?= home_path(); ?>contact-us">Contact Us</a></li>
                    <li><a href="<?= home_path(); ?>services">Services</a></li>
                    <li><a href="<?= home_path(); ?>blogs">Blogs</a></li>
                    <li><a href="<?= home_path(); ?>states">States</a></li>
                    <li><a href="<?= home_path(); ?>cars">Cars</a></li>
                    <li><a href="<?= home_path(); ?>auto-transport-carriers">Reviews</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state">State to state</a></li>
                    <li><a href="<?= home_path(); ?>blogs/auto-shipping-calculator">Calculator</a></li>

                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">State to state</p>
                <ul>
                    <li><a href="<?= home_path(); ?>state-to-state">State to state</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/texas-to-arizona">texas to arizona</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/texas-to-arkansas">texas to arkansas</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/alabama-to-alaska">alabama to alaska</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/texas-to-california">texas to california</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/alabama-to-arizona">Alabama to Arizona</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/california-to-texas">california to texas</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/california-to-arizona">California to Arizona</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/new-mexico-to-arizona">New mexico to arizona</a></li>
                    <li><a href="<?= home_path(); ?>state-to-state/texas-to-colorado">texas to colorado</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">States</p>
                <ul>
                    <li><a href="<?= home_path(); ?>states">States</a></li>
                    <li><a href="<?= home_path(); ?>states/alaska">Alaska</a></li>
                    <li><a href="<?= home_path(); ?>states/california">California</a></li>
                    <li><a href="<?= home_path(); ?>states/florida">Florida</a></li>
                    <li><a href="<?= home_path(); ?>states/hawaii">Hawaii</a></li>
                    <li><a href="<?= home_path(); ?>states/indiana">Indiana</a></li>
                    <li><a href="<?= home_path(); ?>states/new-york">New York</a></li>
                    <li><a href="<?= home_path(); ?>states/new-mexico">New Mexico</a></li>
                    <li><a href="<?= home_path(); ?>states/texas-tx">Texas</a></li>
                    <li><a href="<?= home_path(); ?>states/washington-wa">Washington</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">Our Latest Blogs</p>
                <ul>
                    <li><a href="<?= home_path(); ?>blogs/boat-shipping-how-much-does-it-cost-to-transport-a-boat">What You Should Know About Boat Shipping?</a></li>
                    <li><a href="<?= home_path(); ?>blogs/enclosed-vs-open-car-transport">enclosed vs open car transport</a></li>
                    <li><a href="<?= home_path(); ?>blogs/cheapest-way-to-ship-a-car-to-hawaii">Searching For The Cheapest Way To Ship A Car To Hawaii?</a></li>
                    <li><a href="<?= home_path(); ?>blogs/what-is-it-snowbird-auto-transport">Looking For The Best Snowbird Auto Transport</a></li>
                    <li><a href="<?= home_path(); ?>blogs/transporting-my-car-to-another-state">The Best Way For Transporting My Car To Another State</a></li>
                    <li><a href="<?= home_path(); ?>blogs/cost-from-california-to-texas">Ship Car From California To Texas</a></li>
                    <li><a href="<?= home_path(); ?>blogs/bus-transportation-services">Benefits Of Using Bus Transport Services</a></li>
                    <li><a href="<?= home_path(); ?>blogs/fifth-wheel-transport-services">Fifth Wheel Transport Services</a></li>
                </ul>
            </div>
        <!-- </div>
        <div class="row mt-3"> -->
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">Policies</p>
                <ul>
                    <li><a href="<?= home_path(); ?>privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?= home_path(); ?>terms-and-conditions">Terms and Conditions</a></li>
                    <li><a href="<?= home_path(); ?>">Testimonials</a></li>
                    <li><a href="<?= home_path(); ?>faqs">FAQ</a></li>

                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">Cars</p>
                <ul>
                    <li><a href="<?= home_path(); ?>cars">Cars</a></li>
                    <li><a href="<?= home_path(); ?>cars/nissan-car-transport-service">Nissan</a></li>
                    <li><a href="<?= home_path(); ?>cars/chrysler-car-transport-service">Chrysler</a></li>
                    <li><a href="<?= home_path(); ?>cars/dodge-car-transport-service">Dodge</a></li>
                    <li><a href="<?= home_path(); ?>cars/toyota-car-transport-service">Toyota</a></li>
                    <li><a href="<?= home_path(); ?>cars/chevrolet">Chevrolet</a></li>
                    <li><a href="<?= home_path(); ?>cars/ford-car-transport-service">ford</a></li>
                    <li><a href="<?= home_path(); ?>cars/mazda-car-transport-service">Mazda</a></li>
                    <li><a href="<?= home_path(); ?>cars/honda-car-transport-service">Honda</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">Contact us</p>
                <ul>
                    <li><a href="https://www.facebook.com/people/Rapid-Auto-Shipping/100077073625103/" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/rapidautoshipping/" target="_blank">Instagram</a></li>
                    <li><a href="https://twitter.com/ShippingRapid" target="_blank">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/in/rapid-auto-shipping-909217261/" target="_blank">Linkedin</a></li>
                    <li><a href="https://www.youtube.com/@rapidautoshipping7218" target="_blank">Youtube</a></li>
                    <li><a href="https://www.google.com/maps/place/RAPID+AUTO+SHIPPING/@34.468384,-101.304284,5z/data=!4m6!3m5!1s0x87004d8702dc4ac7:0x9f3bfd5545d14ae8!8m2!3d34.4676528!4d-101.3042849!16s%2Fg%2F11rn45vn7h?hl=en" target="_blank">Address</a></li>

                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <p class="footer-grid-headings">Services</p>
                <ul>
                    <li><a href="<?= home_path(); ?>services/yacht-shipping-services">yacht shipping services</a></li>
                    <li><a href="<?= home_path(); ?>services/international-boat-transport">international boat transport</a></li>
                    <li><a href="<?= home_path(); ?>services/ambulance-shipping">ambulance shipping</a></li>
                    <li><a href="<?= home_path(); ?>services/international-heavy-equipment-shipping">international heavy equipment shipping</a></li>
                    <li><a href="<?= home_path(); ?>services/hauling-isuzu-npr-truck">hauling isuzu npr truck</a></li>
                    <li><a href="<?= home_path(); ?>services/komatsu-equipment-shipping">komatsu equipment shipping</a></li>
                    <li><a href="<?= home_path(); ?>services/transporting-case-trucks">transporting case trucks</a></li>
                    <li><a href="<?= home_path(); ?>services/new-holland-tractor">new holland tractor</a></li>
                    <li><a href="<?= home_path(); ?>services/forklift-transportation-company">forklift transportation company</a></li>
                    <li><a href="<?= home_path(); ?>services/international-car-shipping">international car shipping</a></li>
                    <li><a href="<?= home_path(); ?>services/international-motorcycle-shipping">international motorcycle shipping</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="last-strip" style="color:#fff; font-size:13px;text-align:center;padding:5px;">
        <p>
            Copyright © 2018- <?php echo date("Y"); ?>, <a href='<?= home_path() ?>' >Rapid Auto Shipping</a> - All Rights Reserved.

        </p>
    </div>
    </div>
    <div class="key-button mobile-key-call">
                <a href="tel:+1 (833) 233-4447"><button>+1 (833) 233-4447</button></a>
     </div>

    <script  src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" ></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            lazyLoading: true,
            breakpoints: {
            780: {
                slidesPerView: 3,
            },
            600: {
                slidesPerView: 1,
            }
            },

            // spaceBetween: 30,
            freeMode: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
    <script async src="<?= get_js() ?>small_form_new.js"></script>
    <!-- <script asyns src="<?= get_js() ?>side_form_new.js"></script> -->
    
<script>
  var textContainer = document.querySelector('.text-container-xyz');
  var textContent = textContainer.querySelector('.text-content-xyz');

  var maxCharacters = 300; // Maximum number of characters before adding "Read More"
  var readMoreText = 'Read More';

  if (textContent.textContent.length > maxCharacters) {
    var trimmedText = textContent.textContent.slice(0, maxCharacters);
    var remainingText = textContent.textContent.slice(maxCharacters);

    textContent.textContent = trimmedText;
    textContent.insertAdjacentHTML('afterend', ' <a href="#" class="read-more">' + readMoreText + '</a>');

    var readMoreLink = textContainer.querySelector('.read-more');
    readMoreLink.addEventListener('click', function(e) {
      e.preventDefault();
      textContent.textContent += remainingText;
      readMoreLink.style.display = 'none';
    });
  }

  document.getElementById('hamburgur-btn').addEventListener('click',function(){
        document.getElementById('main-link').style.display = 'grid';
  })
  document.getElementById('close-menu-bar').addEventListener('click',function(){
        document.getElementById('main-link').style.display = 'none';
  })
</script>
<script src="https://cdn.jsdelivr.net/npm/is-in-viewport@3.0.4/lib/isInViewport.min.js"></script>
<script>
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
    if ($('#myDiv2').isInViewport()) {
        $('#topForm').html('<?php include small_form_new; ?>');
        $('#sideFrom').html('');
        $('#sideFrombody').hide();
    } else {
        $('#topForm').html('');
        $('#sideFrombody').show();
        $('#sideFrom').html('<?php include small_form_new; ?>');
    }
});
</script>
  
</body>

</html> 