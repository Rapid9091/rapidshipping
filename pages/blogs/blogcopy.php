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
<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); include '../../init.php' ?>
<?php include '../copy_logo.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="google-site-verification" content="MD6jbJ4iZfjq-IIzuv20KZWbWZwJC6xsh9X2fMj3Vjo" />
    <link rel="preload"href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"as="style"onload="this.onload=null;this.rel='stylesheet'"async>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"rel="preload"as="style"onload="this.onload=null;this.rel='stylesheet'"async>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="preload"as="style"onload="this.onload=null;this.rel='stylesheet'"async>
    <link rel="stylesheet" href="<?= get_css() ?>copy.css">
    <link rel="stylesheet" href="<?= get_css() ?>small_form_new.css"><meta name="title" content="The Best Ambulance Transport Services| RAPID AUTO SHIPPING" />
    <meta name="description" content="Ambulance transportation is a specialty of Rapid Auto Shipping. We are experts in offering shipping services for ambulances in all states." />
    <link anync rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"rel="preload"as="style"onload="this.onload=null;this.rel='stylesheet'"async />

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
                    <a href="<?= home_path() ?>"><span style="opacity:0;">.</span><img src=" <?= get_img() ?>Untitled-1-Recovered.png" alt="" width="100px;" height="100%;"></a>
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
    
    
    <div class="content-body "> 
        <div class="row content-body-row px-5">
            <div class="col-12 col-md-12 col-lg-8 p-1 content-body-text" id="contentContainer">
            <div class="affordable-ways-page-grid">
            <div class="affordable-ways-page-grid-content-1">
                <div class="new-blog-section-one">
                    <h2><span>Are you an auto transport management company, a carrier, or a broker?</span></h2>
                    <p>
                        Here is a brief explanation of what each of those phrases refers to and why it matters. Brokers give their clients top priority when selecting carriers and setting up shipments. The carriers that transport and deliver the vehicles also own the trucks, making shipment a priority. When it comes to serving customers, a car transport management business like Rapid Auto Shipping acts as a single point of contact from quote to delivery. An auto transport management business will be able to address issues more quickly because they care about more than just automobiles. Customers are also treated with attention by them.
                    </p>
                    <img loading="lazy" style="width:100%" src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1667900696/Recent%20Uploads/verification_qtasyq.jpg" alt="Auto transport carries">
                </div>
                <div class="new-blog-section-one">
                    <h2><span> Do you provide free quotes with no obligations?</span></h2>
                    <p>
                        On their websites, the majority of auto transport businesses provide free car shipping quotes. If they don't, this could be a serious red flag and a hint to search elsewhere.
                        <br><br>
                        <span> Why wouldn't a company want to offer a free quote to a prospective customer? </span>

                        Here at Rapid auto Shipping, we provide free, real-time quotes for shipping cars. Additionally, there is zero personal information required on our online quote form. Therefore, obtaining one of our car shipping quotations is completely obligation-free and only takes a few seconds.
                    </p>
                </div>


                <div class="new-blog-section-one">
                    <h2><span> Is the auto transport business authorized and registered?</span></h2>
                    <p>
                        It's not difficult to determine whether auto transport companies are authorized and registered, but it's wonderful to hear it from someone who works there. The Federal Motor Carrier Safety Administration mandates that auto transport businesses that transport vehicles across state borders possess a USDOT Number. Additionally, international car carriers need to hold a Federal Maritime Commission license. You can check a company's operating status, safety history, and other registration information here after you know its USDOT number.
                    </p>
                    <img loading="lazy" style="width:100%" src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1666090070/insurance-img_kthtmn.jpg" alt="Authorized car shipping company">
                </div>


                <div class="new-blog-section-one">
                    <h2><span> What payment method do you accept?</span></h2>
                    <p>
                        Before delivering your car, a genuine and trustworthy auto shipping firm shouldn't demand full payment. Most will accept full payment in advance, but it should never be required. However, many businesses will want a down payment or partial payment before the car is dispatched.

                    </p>
                </div>


                <div class="new-blog-section-one">
                    <h2><span> Do your quotes include everything?</span></h2>
                    <p>
                        This has major significance. Nothing is worse than unanticipated fees and charges. By asking the auto shipping business for a list of everything the quotation includes, this can be easily avoided. To save yourself the hassle, find out in advance whether there will be any additional expenses.
                        <br><br>
                        Make sure you have thoroughly read and comprehend the contract before you sign it. Make sure the costs match what you committed upon. Make sure to find out about any additional fees or penalties as soon as possible.
                    </p>
                </div>


                <div class="new-blog-section-one">
                    <h2><span> What paperwork is necessary to export my car? </span></h2>
                    <p>
                        Typically, all that is required of you is a photo ID, your registration, and proof of insurance. You might also need to provide your title, according to several car shippers. If you are shipping a car overseas, you must adhere to the conditions established by the destination nation. Your car will not be released from the port at its destination if you don't follow local laws. Knowing the local laws is crucial because the customs clearance process can be time-consuming. Stay away from port delays.
                    </p>
                    <img loading="lazy" style="width:100%" src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1667470700/Recent%20Uploads/Document-Sign-Contract-Signing-Man-Write-Paper-5710164_shjsfq.jpg" alt="Paperwork for car shipping">

                </div>

                <div class="new-blog-section-one">
                    <h2><span> What Kind of Insurance Is Available? </span></h2>
                    <p>
                        The likelihood is that your auto insurance won't provide coverage for shipping your car abroad or across the country. It's crucial that you talk insurance with your shipping business to ensure that they have the appropriate coverage because of this. To learn more about the sorts of coverage your car or cars will have while they are in their care, request to see their insurance records.
                    </p>
                </div>

                <div class="new-blog-section-one">
                    <h2><span> What if the vehicle is damaged? </span></h2>
                    <p>
                        The owner should perform a thorough assessment of the vehicle after it arrives at its final location to make sure there was no damage sustained during transportation. If there is damage, the driver will note it and sign it so you can file a claim with the shipping company's insurance and get paid.
                    </p>
                </div>

                <div class="new-blog-section-one">
                    <h2><span> What will the price of my shipment be? </span></h2>
                    <p>
                        Your price will be more accurate if you chat with a car transport company representative directly because you'll be able to describe any unique requirements or demands you have. When you contact, be careful to have as much information as possible accessible regarding your vehicle and your shipment so the representative can provide you with an accurate price.
                    </p>
                </div>

                <div class="new-blog-section-one">
                    <h2><span> Why Are You The Best company?  </span></h2>
                    <p>
                        Ask each nearby firm why they are the finest for this particular project when choosing the best vehicle shipping service available. There are many different auto transport businesses to pick from, and each one will offer different services and follow different policies.
                        <br><br>
                        Check references and confirm that the business you work with has a history of satisfied clients, including people, dealerships, and others.
                    </p>
                </div>
            </div>
        </div>
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
                <a href="tel:+"><button  style="color:black;">+1 (833) 233-4447</button></a>
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
                <a href="https://www.facebook.com/Rapid-Auto-Shipping-105964451981199" target="_blank"><span style="opacity:0;">Facebook</span><?= $facebook
                                                                                                        ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.instagram.com/rapidautoshipping/" target="_blank"><span style="opacity:0;">Instagram</span><?= $instagram ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://twitter.com/ShippingRapid" target="_blank"><span style="opacity:0;">Twitter</span><?= $twitter ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.linkedin.com/in/rapid-auto-shipping-909217261/" target="_blank"><span style="opacity:0;">linkdin</span><?= $linkdin ?></a>
            </div>
            <div class="col-2 col-md-2 col-lg-1 text-center">
                <a href="https://www.youtube.com/@rapidautoshipping7218" target="_blank"><span style="opacity:0;">youtube</span><?= $youtube ?></a>
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
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2DHnFl4aGaFN90TWapQEXJ7e2v6L8lo&v=3.exp&callback=Function.prototype&libraries=places" ></script>
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
<script async src="<?= get_js() ?>small_form_new.js"></script>

</body>

</html> 