<?php
// $expirationTime = 60 * 60 * 24 * 365;
// $fileExtension = strtolower(pathinfo($_SERVER['REQUEST_URI'], PATHINFO_EXTENSION));
// $validFileTypes = array(
//     'css' => 'text/css',
//     'js' => 'application/javascript',
//     'jpg' => 'image/jpeg',
//     'jpeg' => 'image/jpeg',
//     'png' => 'image/png',
//     'gif' => 'image/gif'
// );
// if (array_key_exists($fileExtension, $validFileTypes)) {
//     $contentType = $validFileTypes[$fileExtension];
//     header("Content-Type: $contentType");
//     header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
// }
?>
<?php
include_once "../../init.php";

if (isset($_GET['page_id'])) {
    $slug = $_GET['page_id'];

    $data = fetch_data("SELECT * FROM state_to_state WHERE `slug` = '$slug'");

    if (!$data) {
        header("Location: " . home_path() . "404");
    }
} else {
    header("Location: " . home_path() . "services");
}
?>
<?php //if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
//else ob_start(); 
?>
<?php include '../copy_logo.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_img('favicon_rapid.ico') ?>" />
    <?= $data['meta']; ?>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
    <link rel="stylesheet" href="<?= get_css() ?>copy_new.css">
    <link rel="stylesheet" href="<?= get_css() ?>faq.css">
    <link rel="stylesheet" href="<?= get_css() ?>how_it_works.css">
    <link rel="stylesheet" href="<?= get_css() ?>small_form_new.css">
    <link anync rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async />
    <meta name="yandex-verification" content="088dfdd0832860ec" />
    <style>
        .heading-1 {
            font-weight: 600;
        }

        .points-div-ul {
            list-style: auto;
        }

        .points-div-ul li {
            margin: 10px 0;
        }

        .first-state-to-state ul li {
            list-style: auto;
        }

        .first-state-to-state ul li::marker {
            font-weight: 600;
        }

        .stepsCount {
            background-color: #16161d !important;
        }
    </style>
    <title> <?= $data['title']; ?></title>
    <!-- <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Rapid Auto Shipping",
            "url": "https://www.rapidautoshipping.com/",
            "@id": "https://rapidautoshipping.com/#website",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.rapidautoshipping.com/search?keywords={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script> -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Services",
                "item": "https://www.rapidautoshipping.com/services/"
            }]
        }
    </script>
    <style>
        #sideFrombody {
            display: none;
        }

        h2 a {
            word-wrap: break-word;
        }

        #vehicle_list_div div {
            color: #ff5722
        }

        #myList1,
        #myList3,
        #models_list_small {
            color: black;
        }
    </style>
</head>

<body onload="loadScript()">

    <div class="">
        <div>
            <header>
                <nav class="navbar-a" style="background-color: #ff5722;">
                    <div class="logo_div ">
                        <a href="<?= home_path() ?>"><span style="opacity:0;">.</span><img src=" <?= get_img() ?>Untitled-1-Recovered.png" alt="" width="100px;" height="100%;"></a>
                    </div>
                    <div class="main-link" id="main-link">
                        <ul class="nav-ul">
                            <li><a href="<?= home_path() ?>">Home</a></li>
                            <li><a href="<?= home_path() ?>services">Services</a></li>
                            <li class="we-ship"><a href="<?= home_path() ?>cars">We Ship</a></li>
                            <li class="statesd"><a href="<?= get_state() ?>">States</a> </li>
                            <li class="blog"><a href="<?= home_path() ?>blogs">Blog</a> </li>
                        </ul>
                        <div class="close-menu-bar" id="close-menu-bar"><i class="ri-close-line"></i></div>
                        <button onclick="window.location.href=' tel:+1 833-233-4447'"><i class="ri-phone-fill"></i> +1 (833) 233-4447</button>
                    </div>
                    <div class="hamburgur-btn" id="hamburgur-btn"><i class="ri-menu-3-line"></i></div>
                </nav>
            </header>
        </div>
        <!-- End Header -->
        <div class="banner-section" id="myDiv2">
            <img class="banner-section-img " id="desk_image" width="100%" height="100%" src="<?= get_img() ?>copy_desktop.webp" alt="Rapid Auto Shipping">

            <div class="row banner-section-row p-5">
                <div class="col-md-12 col-lg-8 p-4 banner-section-row-col-1">
                    <div class="row p-2">
                        <div class="col-12 banner-heading-col">
                            <h1><?php echo $data['page_h1'] ?></h1>
                        </div>
                        <div class="col-12 banner-paragraph-col text-container-xyz">
                            <p class="text-content-xyz mt-2"><?php echo $data['page_about_1']; ?></p>

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
                <div class="col-md-12 col-lg-4 p-4 d-grid justify-content-center">
                    <div id="topForm"><?php include small_form_new; ?></div>
                </div>
            </div>
        </div>
        <div class="main-banner-bellow-banner" style="color:#16161d">
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
                            <p>Your choice of pick-up</p>
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
                            <div class="mx-auto" style="width:150px; height:61px;">
                                <img src="<?= get_img() ?>satisfaction.webp" alt="custormer satisfaction" loading="lazy">
                            </div>
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
                                <div class="swiper-zoom-container"></div>
                                <div class="flex" style="justify-content: space-between;">
                                    <div class="user_info flex">
                                        <div class="user_img">
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/benjamin.jpg" alt="user" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Peter Mills</p>
                                            <span>5 Dec 2022</span>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top:10px;">
                                        <div class="mx-auto" style="width:80px; height:30px;">
                                            <img src="<?= get_img(); ?>TransportReviewsLogo.webp" alt="transposrt review logo" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/lucas.jpg" alt="user" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Kiley Eckert</p>
                                            <span>28 Feb 2022</span>
                                        </div>
                                    </div>
                                    <div class="g-logo">
                                        <div class="mx-auto" style="width:20px; height:20px;">
                                            <img src="<?= get_img() ?>reviews/g.webp" alt="google logo" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/james.jpg" alt="user" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>James Johnson</p>
                                            <span>1 Jan 2022</span>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top:10px;">
                                        <div class="mx-auto" style="width:70px; height:9px;">
                                            <img src="<?= get_img() ?>rapid-auto-shipping-crunchbase.webp" alt="crunchbase logo" width="70px" height="9px" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/noah.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Tim Cripps</p>
                                            <span>15 feb 2023</span>
                                        </div>
                                    </div>
                                    <div class="g-logo">
                                        <div class="mx-auto" style="width:20px; height:20px;">
                                            <img src="<?= get_img() ?>reviews/g.webp" alt="google logo" width="20px" height="20px" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/emma.jpg" alt="user" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Shirley Steele</p>
                                            <span>5 Oct 2022</span>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top:10px;">
                                        <div class="mx-auto" style="width:80px; height:18px;">
                                            <img src="<?= get_img() ?>Trustpilot-logo.webp" alt="trustpilot" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/henry.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Gerald Werber</p>
                                            <span>19 Jan 2022</span>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top:10px;">
                                        <div class="mx-auto" style="width:80px; height:30px;">
                                            <img src="<?= get_img() ?>TransportReviewsLogo.webp" alt="transport review" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/amelia.jpg" alt="user" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Margery Dimsha</p>
                                            <span>4 March 2022</span>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top:10px;">
                                        <div class="mx-auto" style="width:70px; height:9px;">
                                            <img src="<?= get_img() ?>rapid-auto-shipping-crunchbase.webp" alt="crunchbase logo" loading="lazy">
                                        </div>
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
                                            <div class="mx-auto" style="width:50px; height:50px;">
                                                <img src="<?= get_img() ?>reviews/olivia.jpg" alt="user" width="50px" height="50px" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="user_name">
                                            <p>Jennifer Bayne</p>
                                            <span>10 Nov 2022</span>
                                        </div>
                                    </div>
                                    <div class="" style="margin-top:10px;">
                                        <div class="mx-auto" style="width:80px; height:18px;">
                                            <img src="<?= get_img(); ?>Trustpilot-logo.webp" alt="trustpilot" loading="lazy">
                                        </div>
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
                        <div class="swiper-pagination" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- how it works -->
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
                                <img src="<?= get_img() ?>state-to-state/car.webp" alt="car" class="how_car">
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
                                <img src="<?= get_img() ?>state-to-state/calculation.webp" alt="calculation" class="how_calculation">
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
                                <img src="<?= get_img() ?>state-to-state/shipping.webp" alt="shipping" class="how_shippping">
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
                                <img src="<?= get_img() ?>state-to-state/delivery.webp" alt="delivery" class="how_delivery">
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
        <!-- how it works ends -->
        <div class="content-body ">
            <div class="row content-body-row px-5">

                <div class="col-12 col-md-12 col-lg-8 p-5 content-body-text" id="contentContainer">
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
                                <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/<?= $data['state_form_img'] ?>" alt="<?= $data['state_form_img_alt'] ?>" style="margin:20px 0;" />

                            </div>
                            <ul>
                                <?php
                                if (isset($json_decoded)) {
                                    foreach ($json_decoded as $result) {
                                        if ($result->index == 4) {
                                            echo '<li id="' . $result->index . '">
                        <div class="shipping-form-state-content">
                            <h4 class="heading-1">' . $result->heading . '</h4>
                            <p class="para-2">
                                ' . $result->about . '
                            </p>
                        </div>
                    </li>';
                                        } elseif ($result->index == 10) {
                                            echo '<li id="' . $result->index . '">
                        <div class="shipping-form-state-content">
                            <h4 class="heading-1">' . $result->heading . '</h4>
                            <p class="para-2">
                                ' . $result->about . '
                            </p>
                        </div>
                    </li>';
                                        } else {
                                            echo '<li id="' . $result->index . '">
                        <div class="shipping-form-state-content">
                            <h4 class="heading-1">' . $result->heading . '</h4>
                            <p class="para-2">
                                ' . $result->about . '
                            </p>
                        </div>
                    </li>';
                                        }
                                    }
                                }
                                ?>


                                <div class="shipping-form-state-image">
                                    <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/<?= $data['state_to_img'] ?>" alt="<?= $data['state_to_img_alt'] ?>" style="margin:20px 0;" />
                                </div>
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


                        </section>


                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 __side-form">
                    <div class="_side-form d-grid justify-content-center">
                        <div id="sideFrombody">
                            <div class="sideFrom" id="sideFrom"></div>
                            <div class="sideformbuttonx" style="text-align: center;margin-top: 10px;"><a href="tel:+1 (833) 233-4447"><button style="width: 200px;height:50px;border-radius:100px;background-color: #ff5722;color:white;cursor: pointer;border: 0;">+1 (833) 233-4447</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="key-section" id="key-section">
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
                    <a href="tel:+"><button style="color:black;">+1 (833) 233-4447</button></a>
                    <button style="color:black;">Get a Quote</button>
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
                                <div class="mx-auto" style="width:80px; height:80px;">
                                    <img src="<?= get_img() ?>icons/rating.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                                </div>
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
                                <div class="mx-auto" style="width:80px; height:80px;">
                                    <img src="<?= get_img() ?>icons/auto-insurance-icon.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                                </div>
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
                                <div class="mx-auto" style="width:80px; height:80px;">
                                    <img src="<?= get_img() ?>icons/savings-icon.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                                </div>
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
                                <div class="mx-auto" style="width:80px; height:80px;">
                                    <img src="<?= get_img() ?>icons/online-tracking.webp" alt="best car shipping in USA" loading="lazy" width="80px" height="80px">
                                </div>
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
        <div class="all-state-section advantage_section" id="all-state-section">
        </div>
        <!-- FAQ -->
        <div class="body">


<div class="faq">FACTS & QUESTIONS</div>

<div class="container"  style="text-align: start!important;">
    
    <div class="box">
        <span>What Kind of Paperwork Will I Need to ship my car from <?= $data['state_form'] . " to " . $data['state_to'] ?>?</span>
        <i class="ri-add-line"></i>
    </div>
    <p class="para-faq">When transporting automobiles from one state to another, a bill of lading - or, as previously stated, a vehicle health report - is required. Every car transporter carries one with them, either online or on paper, for each vehicle they move. You will also receive a duplicate.
    <br>Provide no ownership or certificate of sale. The deal with the car transport provider will say that you are authorizing them to send the car whether or not the owner is in your name. When purchasing from a sale or a vendor, keep the title and car transport services distinct. You don't want papers to get lost or overlooked, so have the title shipped straight to you!</p>
    <div class="box">
        <span>Can I put personal items in the car from <?= $data['state_form'] . " to " . $data['state_to'] ?>?</span>
        <i class="ri-add-line"></i>
    </div>
    <p class="para-faq">Yes, but only up to 100 pounds at a time and at your peril. Visit our help subject for shipping a vehicle with belongings to learn more.</p>
    <div class="box">
        <span>What Kind of Tracking Services Do You Offer from <?= $data['state_form'] . " to " . $data['state_to'] ?>?</span>
        <i class="ri-add-line"></i>        
    </div>
    <p class="para-faq">We offer a standard monitoring device to keep track of your car while it is in transit. You can monitor your shipment using the online tracking function 24/7. It's all part of our dedication to our clients. To monitor your vehicle shipment, please provide us with your tracking information, name, email address, and/or phone number.</p>
    <div class="box">
        <span>Is My Pick-Up or Delivery Date Guaranteed while shipping my vehicle from <?= $data['state_form'] . " to " . $data['state_to'] ?>?</span>
        <i class="ri-add-line"></i>
    </div>
    <p class="para-faq">Guaranteed pick-up is the best choice for those who want to prepare ahead of time and ensure that their vehicle arrives on time. The service is not inexpensive because it is tailored to your specific requirements.<br> You can choose the precise day your vehicle will be picked up with this service, which can save you time and money. Furthermore, you will have a piece of mind knowing that everything will go easily with your relocation.</p>
    <div class="box">
        <span>How Much Should I Expect to Spend on Shipping My Car from <?= $data['state_form'] . " to " . $data['state_to'] ?>?</span>
        <i class="ri-add-line"></i>
    </div>
    <p class="para-faq">The expense of car transport to or from Alabama is highly influenced by the sort of vehicle, the distance traveled, and the technique used. <br>Transporting a car from a greater distance costs more. Longer distances, on the other hand, may result in fewer average kilometres per dollar than shorter ones. <br>For a precise vehicle shipment price for Alabama, use our free instant car shipping estimate calculator above.</p>
    <div class="box">
        <span>Should I Expect Any Extra Charges Once My Car is Delivered from <?= $data['state_form'] . " to " . $data['state_to'] ?>?</span>
        <i class="ri-add-line"></i>
    </div>
    <p class="para-faq">The price is significantly influenced by the distance your vehicle is shipped. If you are shipping your vehicle from or to a remote place, you may be charged additional costs. Auto carriers, for example, may charge an extra fee to drive your vehicle to a less crowded area because it requires more time and is usually much farther away from the carrier's next location.</p>


    

</div>
</div>
        <!-- FAQ ENDS -->
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
        <div class="follow-up mb-2">
            <div class="row w-75 mt-2 mx-auto justify-content-center">
                <div class="col-2 col-md-2 col-lg-1 text-center">
                    <a href="https://www.facebook.com/Rapid-Auto-Shipping-105964451981199" target="_blank"><span style="opacity:0;">.</span><?= $facebook
                                                                                                                                            ?></a>
                </div>
                <div class="col-2 col-md-2 col-lg-1 text-center">
                    <a href="https://www.instagram.com/rapidautoshipping/" target="_blank"><span style="opacity:0;">.</span><?= $instagram ?></a>
                </div>
                <div class="col-2 col-md-2 col-lg-1 text-center">
                    <a href="https://twitter.com/ShippingRapid" target="_blank"><span style="opacity:0;">.</span><?= $twitter ?></a>
                </div>
                <div class="col-2 col-md-2 col-lg-1 text-center">
                    <a href="https://www.linkedin.com/in/rapid-auto-shipping-909217261/" target="_blank"><span style="opacity:0;">.</span><?= $linkdin ?></a>
                </div>
                <div class="col-2 col-md-2 col-lg-1 text-center">
                    <a href="https://www.youtube.com/@rapidautoshipping7218" target="_blank"><span style="opacity:0;">.</span><?= $youtube ?></a>
                </div>
            </div>
        </div>
        <div class="footer mt-4" id="footer">
        </div>
        <div class="last-strip" style="color:#fff; font-size:13px;text-align:center;padding:5px;">
            <p>
                Copyright © 2018- <?php echo date("Y"); ?>, <a href='<?= home_path() ?>' style="color:black;">Rapid Auto Shipping</a> - All Rights Reserved.

            </p>
        </div>
    </div>
    <div class="key-button mobile-key-call">
        <a href="tel:+1 (833) 233-4447"><button style="color:black;">+1 (833) 233-4447</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            zoom: true,
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
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // spaceBetween: 30,
            freeMode: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

        const images = document.getElementsByTagName('img');
        for (let i = 0; i < images.length; i++) {
            images[i].setAttribute('loading', 'lazy');
        }

        function addWidthHeightAttributesToImage() {
            var imageElements = document.getElementsByTagName('img');
            for (var i = 0; i < imageElements.length; i++) {
                var img = imageElements[i];
                img.setAttribute('width', '100%');
                img.setAttribute('height', '100%');
            }
        }
        addWidthHeightAttributesToImage()

        function addWidthHeightAttributesToImage1() {
            var imageElements = document.getElementById('customer-face');
            imageElements.setAttribute('width', '76px');
            imageElements.setAttribute('height', '40px');
        }
        addWidthHeightAttributesToImage1()
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

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

        document.getElementById('hamburgur-btn').addEventListener('click', function() {
            document.getElementById('main-link').style.display = 'grid';
        })
        document.getElementById('close-menu-bar').addEventListener('click', function() {
            document.getElementById('main-link').style.display = 'none';
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/is-in-viewport@3.0.4/lib/isInViewport.min.js"></script>
    <script>
        $(document).ready(function() {
            $.fn.isInViewport = function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                return elementBottom > viewportTop && elementTop < viewportBottom;
            };
            $.fn.isOutOfViewport = function() {
                var elementTop = $(this).offset().top;
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                return elementTop >= viewportTop && elementTop < viewportBottom;
            };
            $(window).on('resize scroll', function() {
                if ($('#myDiv2').isInViewport()) {
                    $('#sideFrom').html('');
                    $('#sideFrombody').hide();
                    var $divElement = $('#topForm');
                    var isDivEmpty = $divElement.is(':empty');
                    if (isDivEmpty) {
                        $('#topForm').html('<?php include small_form_new; ?>');
                        analyzeAndManipulateScriptTag('<?= get_js() ?>small_form_new.js')
                        setTimeout(function() {
                            loadScript2()
                        }, 1000)
                    }
                } else {
                    $('#topForm').html('');
                    $('#sideFrombody').show();
                    var $divElement = $('#sideFrom');
                    var isDivEmpty = $divElement.is(':empty');
                    if (isDivEmpty) {
                        $('#sideFrom').html('<?php include small_form_new; ?>');
                        analyzeAndManipulateScriptTag('<?= get_js() ?>small_form_new.js')
                        setTimeout(function() {
                            loadScript2()
                        }, 1000)
                    }

                }
                // different function 
                if ($('#key-section').isOutOfViewport()) {
                    $('#all-state-section').html('<?php include copy_state_list; ?>')
                } else {
                    $('#footer').html('<?php include copy_footer; ?>')
                }
            });

            $('#desk_image').removeAttr('loading');

        })

        var image = document.getElementById('desk_image');
        var originalSrc = '<?= get_img() ?>copy_desktop.webp';
        var alternateSrc = '<?= get_img() ?>copy_mobile2.webp';

        function handleResize() {
            var windowWidth = window.innerWidth || document.documentElement.clientWidth;
            if (windowWidth >= 500) {
                image.src = originalSrc;
            } else {
                image.src = alternateSrc;
            }
        }
        window.addEventListener('resize', handleResize);
        handleResize();
        var metaDescription = document.querySelector('meta[name="description"]');
        var descriptionContent = "";
        if (metaDescription) {
            descriptionContent = metaDescription.getAttribute('content');
        }
        var metatitle = document.querySelector('meta[name="title"]');
        var titleContent = "";
        var titleContent2 = "";
        if (metatitle) {
            titleContent = metatitle.getAttribute('content');
            var titleContent = titleContent.split("|");
            var titleContent = titleContent[0].trim();
            var titleContent2 = titleContent + ' | Rapid Auto Shipping'
        }
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2DHnFl4aGaFN90TWapQEXJ7e2v6L8lo&v=3.exp&callback=Function.prototype&libraries=places"></script> -->
    <script async src="<?= get_js() ?>faq.js"></script>
    <script>
        const mySchema1 = {
            "@context": "https://schema.org",
            "@type": "Organization",
            "@id": "https://www.rapidautoshipping.com/#organization",
            "name": "Rapid Auto Shipping",
            "legalName": "Rapid Auto Shipping",
            "alternateName": "Rapid Auto Shipping",
            "url": "https://www.rapidautoshipping.com/",
            "founder": "Johny Taylor",
            "foundingDate": "2016",
            "sameAs": [
                "https://www.rapidautoshipping.com",
                "https://twitter.com/ShippingRapid",
                "https://www.facebook.com/Rapidautoshipping",
                "https://www.youtube.com/@rapidautoshipping7218",
                "https://www.instagram.com/rapidautoshipping/",
                "https://www.linkedin.com/company/rapid-auto-shipping",
                "https://www.trustpilot.com/review/rapidautoshipping.com",
                "https://www.transportreviews.com/Company/Rapid-Auto-Shipping",
                "https://www.provenexpert.com/en-us/rapid-auto-shipping"
            ],
            "description": `${descriptionContent}`, //page description
            "logo": {
                "@type": "ImageObject",
                "url": "https://rapidautoshipping.com/assets/images/Untitled-1-Recovered.png"
            }
        }
        const script1 = document.createElement('script');
        script1.type = "application/ld+json";
        script1.text = JSON.stringify(mySchema1);
        document.head.appendChild(script1);
    </script>
    <script>
        const mySchema2 = {
            "@context": "https://schema.org",
            "@type": "Product",
            "@id": "https://www.rapidautoshipping.com/#product",
            "name": `${titleContent2}`,
            "alternateName": `${titleContent}`,
            "description": `${descriptionContent}.`,
            "brand": {
                "@type": "Organization",
                "@id": "https://www.rapidautoshipping.com/#organization"
            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.rapidautoshipping.com/#webpage"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "@id": "https://rapidautoshipping.com/#aggregateRating",
                "ratingValue": 4.8,
                "ratingCount": 545,
                "worstRating": 1,
                "bestRating": 5
            }
        }
        const script2 = document.createElement('script');
        script2.type = "application/ld+json";
        script2.text = JSON.stringify(mySchema2);
        document.head.appendChild(script2);
    </script>
    <script>
        const mySchema3 = {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": `${titleContent2}`,
            "alternateName": `${titleContent}`
        }
        const script3 = document.createElement('script');
        script3.type = "application/ld+json";
        script3.text = JSON.stringify(mySchema3);
        document.head.appendChild(script3);


        function loadScript() {
            setTimeout(function(){
                var script = document.createElement('script');
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2DHnFl4aGaFN90TWapQEXJ7e2v6L8lo&v=3.exp&callback=Function.prototype&libraries=places';
            document.body.appendChild(script);
            setTimeout(function() {
                loadScript2()
            }, 1000)
            },2000)
        }

        function loadScript2() {
            var script = document.createElement('script');
            script.src = '<?= get_js() ?>small_form_new.js';
            document.body.appendChild(script);
        }

        function analyzeAndManipulateScriptTag(scriptSrc) {
            var scriptElements = document.getElementsByTagName('script');
            var scriptFound = false;
            for (var i = 0; i < scriptElements.length; i++) {
                var script = scriptElements[i];
                if (script.src === scriptSrc) {
                    scriptFound = true; 
                    break;
                }
            }
            if (scriptFound) {
                var existingScript = document.querySelector('script[src="' + scriptSrc + '"]');
                existingScript.parentNode.removeChild(existingScript);
            }
        }

        
    </script>

</body>

</html>