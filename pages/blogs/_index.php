<?php
// Specify the expiration time for static resources
$expirationTime = 60 * 60 * 24 * 365; // Set to 1 week (adjust as needed)

// Get the file extension from the requested URL
$fileExtension = strtolower(pathinfo($_SERVER['REQUEST_URI'], PATHINFO_EXTENSION));

// Specify the file types for which to set the Expires header
$validFileTypes = array(
    'css' => 'text/css',
    'js' => 'application/javascript',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif'
);

// Check if the file extension is valid and set the appropriate Content-Type and Expires header
if (array_key_exists($fileExtension, $validFileTypes)) {
    $contentType = $validFileTypes[$fileExtension];
    header("Content-Type: $contentType");
    header("Expires: " . gmdate("D, d M Y H:i:s", time() + $expirationTime) . " GMT");
}
?>
<?php
include_once "../../init.php";

if (isset($_GET['page_id'])) {
    $slug = $_GET['page_id'];

    $data = fetch_data("SELECT * FROM blogs WHERE `slug` = '$slug'");

    if (!$data) {
        header("Location: " . home_path() . "404");
    }
} else {
    header("Location: " . home_path() . "blogs");
}

?>
<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
else ob_start();
// include '../../init.php' 
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
    <link rel="stylesheet" href="<?= get_css() ?>copy.css">
    <link rel="stylesheet" href="<?= get_css() ?>small_form_new.css">
    <link anync rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async />
    <title> <?= $data['title']; ?></title>
    <script type="application/ld+json">
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
    </script>
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
        h2 a{word-wrap: break-word;}
    </style>
</head>

<body>

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
                            <li class="statesd"><a href="<?= get_state() ?>">States</a></li>
                            <li class="blog"><a href="<?= home_path() ?>blogs">Blog</a></li>
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
            <img class="banner-section-img" width="100%" height="100%" src="<?= get_img() ?>car-shipping-header-image1.webp" alt="Rapid Auto Shipping">
            <div class="row banner-section-row p-5">
                <div class="col-md-12 col-lg-8 p-4 banner-section-row-col-1">
                    <div class="row p-2">
                        <div class="col-12 banner-heading-col">
                            <h1><?php echo $data['h1']; ?></h1>
                        </div>
                        <div class="col-12 banner-paragraph-col text-container-xyz">
                            <p class="text-content-xyz"><?php echo $data['h1_about']; ?></p>

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


        <div class="content-body ">
            <div class="row content-body-row px-3">
                <div class="col-12 col-md-12 col-lg-8 p-1 content-body-text" id="contentContainer">
                    <div class="first-section-state-to-state">
                        <h2 class="heading-1"><strong>
                                <?= $data['h2']; ?>
                            </strong></h2>
                        <p class="para-2">
                            <?= $data['h2_about']; ?>
                        </p>
                    </div>
                    <?php echo $data['content']; ?>
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
                    <a href="tel:+"><button style="color:black;">+1 (833) 233-4447</button></a>
                    <button style="color:black;">Get a Quote</button>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2DHnFl4aGaFN90TWapQEXJ7e2v6L8lo&v=3.exp&callback=Function.prototype&libraries=places"></script>
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
            $(window).on('resize scroll', function() {
                if ($('#myDiv2').isInViewport()) {
                    $('#sideFrom').html('');
                    $('#sideFrombody').hide();
                    var $divElement = $('#topForm');
                    var isDivEmpty = $divElement.is(':empty');
                    if (isDivEmpty) {
                        $('#topForm').html('<?php include small_form_new; ?>');
                    }
                } else {
                    $('#topForm').html('');
                    $('#sideFrombody').show();
                    var $divElement = $('#sideFrom');
                    var isDivEmpty = $divElement.is(':empty');
                    if (isDivEmpty) {
                        $('#sideFrom').html('<?php include small_form_new; ?>');
                    }
                }
            });
            $('#desk_image').removeAttr('loading');
        })
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
            var titleContent2 = titleContent+' | Rapid Auto Shipping'
        }
    </script>
    <script async src="<?= get_js() ?>small_form_new.js"></script>
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
    </script>
</body>

</html>