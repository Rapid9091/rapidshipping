<?php
include_once "../../init.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>

    <link rel="canonical" href="<?= home_path() . " state-to-state/" . $data['slug'] ?>" />




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
    <link rel="stylesheet" href="<?= get_css(); ?>faq.css">
    <link rel="stylesheet" href="city-zipcode.css">
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

        .shipping-form-state-content p {
            font-size: 18px;
            word-spacing: 1.5px;
            letter-spacing: 0.5px;
            margin: 2% 0;
            line-height: 1.8;
        }

        .shipping-form-state-content p span {
            font-size: 18px;
            word-spacing: 1.5px;
            letter-spacing: 0.5px;
            margin: 2% 0;
            line-height: 1.8;
        }

        .all-state-name-grids-section {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            padding: 2% 5%;
        }

        .rapid-advantages-grid-container {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            padding: 2% 2%;
        }

        .rapid-advantages-section {
            padding: 0 5%;
        }

        .all-state-name-page-mains {
            padding: 0 2% 0% 2%;
        }

        .all-state-name-pages {
            background-color: var(--section-background);
            padding: 1% 0;
            border-radius: 14px;
            border: 1px solid var(--nav-color);
            box-shadow: 0 0.3rem 0.8rem rgba(0, 0, 0, 0.15) !important;
        }
        .more-califrnian-cities-code {
            background-color: #fff4f4;
            border: 1px solid #ff5722;
            border-radius: 14px;
            margin: 3% 5%;
            padding: 0% 2%;
        }
        .major-city-code {
            display: grid;
            grid-template-columns: 14fr 2fr 70fr;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .alabama-city-code-heading {
            text-align: center;
            font-size: 30px;
            font-weight: 600;
            margin-top: 5px;
            padding: 1% 0;
        }
        @media screen and (max-width: 1000px) {
            .rapid-advantages-grid-1 {
                height: 330px;
            }
        }

        @media screen and (max-width: 800px) {
            .all-state-name-grids-section {
                grid-template-columns: repeat(3, 1fr);
            }

            .all-state-name-grids {
                margin: 4% 0;
            }

            .rapid-advantages-grid-1 {
                height: 320px;
            }
        }

            @media screen and (max-width:768px) {
                .utility_grid-4 {
                    grid-template-columns: repeat(2, 1fr);
                }

                .major-city-code {
                    text-align: center;
                    grid-template-columns: 1fr;
                    font-size: 15px;
                    margin-bottom: 20px;
                }

                .major-city-code-para {
                    font-weight: 700;
                }

                .major-city-code span {
                    display: none;
                }

                .alabama-city-code-heading {
                    font-size: 25px;
                    margin-bottom: 15px;
                }
                .major-city-code-para{
                    margin-bottom: 8px;
                }
            }

            @media screen and (max-width: 600px) {
                .key-holding {
                    background-image: url("<?=get_img();?>car-key-new1.jpeg");
                }
                .utility_grid-4 {
                    gap: 0;
                }
            }

            @media screen and (max-width: 500px) {
                .all-state-name-grids-section {
                    grid-template-columns: repeat(2, 1fr);
                    text-align: center;
                }
                .utility_grid-4 {
                    grid-template-columns: repeat(1, 1fr);
                    gap: 0;
                }
                .rapid-advantages-grid-1 {
                height: 230px;
            }
            }
    </style>
</head>

<body>

    <!------------------ header --------------------->
    <?php include header; ?>

    <!------------- banner --------------------->
    <?php
        $NAME = "Best Car Transport Company In Alabama";
        $PARAGRAPH = "Shipping your car to Alabama is an excellent choice whether you are moving to Alabama for the season, for education, or for good. Rapid Auto Shipping has years of expertise and specializes in Alabama car transport services.";
        ?>
    <section class="contact-us-header-page" id="banner_form">

        <div class="third-section-state">


            <div class="third-section-content">

                <h1 class="third-section-content-heading">

                    <?php echo $NAME; ?>
                </h1>


                <p class="third-section-content-text">
                    <?php echo $PARAGRAPH;?>
                </p>


            </div>
            <div style="display:grid;
                place-items:center;">
                <?php 
                    // include small_form_new ;
                    ?>
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
                        <p>Your choice of pick-up</p>

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
    <section class="reviews_section" style="padding:2% 5% 0 5%; border-bottom:1px solid #ccc;">
        <div class="flex review_row" style="align-items:start;">
            <div class="google" style="justify-content:unset; margin-top:10px;">
                <div class="google_logo" style="">
                    <img src="<?=get_img()?>satisfaction.png" alt="custormer satisfaction">
                </div>
                <div class="rating">
                    <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                            class='bx bxs-star'></i><i class='bx bxs-star-half'></i></p>
                </div>
                <div class="text-center">
                    <p><b>Excellent</b></p>
                    <p>based on <b>2115 reviews</b></p>
                </div>
            </div>
            <div class="reviews_2">
                <div class=" owl-carousel owl-theme" id="google_reviews">
                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/benjamin.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Peter Mills</p>
                                    <span>5 Dec 2022</span>
                                </div>
                            </div>
                            <div class="" style="margin-top:10px;">
                                <img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.png"
                                    alt="google logo" style="width:80px;">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>Ship a vehicle with them and enjoy the best shipping in USA. I have worked with
                                    different company but they gave me complete satisfaction. Call the Phone number to
                                    speak with the live person and get your shipping quote instantly. Thankyou Rapid
                                    Auto Shipping once again.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/lucas.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Kiley Eckert</p>
                                    <span>28 Feb 2022</span>
                                </div>
                            </div>
                            <div class="g-logo">
                                <img src="<?= get_img()?>reviews/g.png" alt="google logo">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>They are Excellent when it comes to look for one of the best Auto Shipping Companies
                                    in USA. Rapid Auto SHIPPING company offers the best Auto Shipping Quotes as i tried
                                    comparing with others as well.</p>
                            </div>
                        </div>
                    </div>

                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/james.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>James Johnson</p>
                                    <span>1 Jan 2022</span>
                                </div>
                            </div>
                            <div class="" style="margin-top:10px;">
                                <img src="https://rapidautoshipping.com/assets/images/bbb-logo-horizontal.png"
                                    alt="google logo" style="width:70px;">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>I needed to ship a car from Texas to California for my son, so I contacted Rapid Auto
                                    Shipping Transport here in Texas, and they were able to make it happen. Excellent
                                    service and a smooth, dependable, and professional process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/noah.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Tim Cripps</p>
                                    <span>15 feb 2023</span>
                                </div>
                            </div>
                            <div class="g-logo">
                                <img src="<?= get_img()?>reviews/g.png" alt="google logo">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>I love the way they shipped my vehicle Volvo XC 60 . It was given back to me in the
                                    same way as i have handed it to over them.</p>
                            </div>
                        </div>
                    </div>

                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/emma.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Shirley Steele</p>
                                    <span>5 Oct 2022</span>
                                </div>
                            </div>
                            <div class="" style="margin-top:10px;">
                                <img src="https://rapidautoshipping.com/assets/images/Trustpilot-logo.png"
                                    alt="trustpilot" style="width:80px">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>They were good while delivering my vehicle. it was the first time i have ever used
                                    the service of transporting my vehicle and i ended up with good experince all
                                    because of Rapid auto Shipping will recommened it to my friends as well.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/henry.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Gerald Werber</p>
                                    <span>19 Jan 2022</span>
                                </div>
                            </div>
                            <div class="" style="margin-top:10px;">
                                <img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.png"
                                    alt="transport review" style="width:80px;">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>Best car shipping i have ever come across with. they did their job in the best way i
                                    gave them full rating. Thank you, Rapid auto shipping</p>
                            </div>
                        </div>
                    </div>



                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/amelia.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Margery Dimsha</p>
                                    <span>4 March 2022</span>
                                </div>
                            </div>
                            <div class="" style="margin-top:10px;">
                                <img src="https://rapidautoshipping.com/assets/images/bbb-logo-horizontal.png"
                                    alt="google logo" style="width:70px;">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>No comparison when it comes to vehicle transportation in United states. they are
                                    working in the best way i and after working with them i found it out them this is
                                    the actual way of doing any professional work. I was relaxed as i was getting proper
                                    updates and shipping a car with rapid Auto Shipping was one of my best decision as
                                    they were really rapid and just the Perfect!</p>
                            </div>
                        </div>
                    </div>

                    <div class="review-item item">
                        <div class="flex" style="justify-content: space-between;">
                            <div class="user_info flex">
                                <div class="user_img">
                                    <img src="<?=get_img()?>reviews/olivia.jpg" alt="user">
                                </div>
                                <div class="user_name">
                                    <p>Jennifer Bayne</p>
                                    <span>10 Nov 2022</span>
                                </div>
                            </div>
                            <div class="" style="margin-top:10px;">
                                <img src="https://rapidautoshipping.com/assets/images/Trustpilot-logo.png"
                                    alt="trustpilot" style="width:80px">
                            </div>
                        </div>
                        <div class="review_stars">
                            <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                        </div>
                        <div class="review_content">
                            <div class="reiview_content_box">
                                <p>I would always love to give them positive rating as i found them the best shipping
                                    company to ship my vehicle and i like the way they carried the whole process and in
                                    the exact way they told it.</p>
                            </div>
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
                <h2 class="heading-1">OVERVIEW ABOUT ALABAMA</h2>
                <p class="para-2">Alabama, also known as the "Heart of Dixie," is a state in the United States southeast
                    area. There's plenty to see and do. It is an excellent location to learn about history, for example.
                    There is the Birmingham Civil Rights Institute, the USS Alabama Battleship Memorial Park, and other
                    significant landmarks.</p>
                <p class="para-2">Rapid Auto Shipping can assist you with car transport service for whatever purpose you
                    need to journey. Car Transport is never an issue with car shipping companies in Alabama! We
                    transport cars all over the country. We can do it for you!</p>
            </div>

            <div class="points-div " id="top-section">
                <h2 class="heading-2">
                    What's in this article?
                </h2>
                <ul class="points-div-ul">


                    <li><a href="#1">Why Rapid Auto Shipping is best auto transport company in Alabama?</a></li>
                    <li><a href="#2">What's The Cost For Alabama Auto Transportation?</a></li>
                    <li><a href="#3">How do we handle the shipping</a></li>
                    <li><a href="#4">Types of Shipping Services</a></li>
                    <li><a href="#5">Vehicle Transportation Services When Moving</a></li>
                    <li><a href="#6">Get the Car Ready for Take Off</a></li>
                    <li><a href="#7">Car Transport Safety Measures in Alabama</a></li>
                    <li><a href="#8">Tracking Auto Transportation</a></li>
                    <li><a href="#9">Positive Characteristics of a Reliable Shipping Company</a></li>
                    <li><a href="#10">Competitive rates</a></li>

                </ul>

            </div>
            <!-- section from which shipping started here -->
            <section class="first-state-to-state">
                <div class="shipping-form-state-image">
                    <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/vOSCGkIPMR3NKPRkUdNDIa03j.jpg"
                        alt="" />

                </div>
                <ul>
                    <li id="1">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">Why Rapid Auto Shipping Is Best Auto Transport Company In Alabama?
                            </h3>
                            <p class="para-2">For over a decade, Rapid Auto Shipping has been moving cars both within
                                Alabama and across the United States. Since 2006, we have moved over 100,000 cars across
                                the country for private people, fleet management businesses, and auto dealerships.</p>
                            <p class="para-2">Perhaps you require enclosed transport for a new car, truck, or SUV
                                purchased online from an out-of-state shop, or you require enclosed transport for a
                                power car you intend to work on. You might need to move building or farm equipment.
                                We'll transport anything with wheels!</p>
                            <p class="para-2">Regardless of how big or small your car transport task is, we welcome you
                                to entrust us with all of your auto transport requirements. Call +1 (833) 233-4447 to
                                speak with one of our helpful representatives about obtaining a free vehicle estimate.
                                Alternatively, fill out the form for a free auto shipment estimate and we'll handle the
                                rest.</p>
                        </div>

                    </li>
                    <li id="2">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">What's The Cost For Alabama Auto Transportation?</h3>
                            <p class="para-2">For small routes up to 500 miles, vehicle shipping in Alabama costs around
                                $1.96 per mile on average. From 500 to 1,500 miles, medium routes will cost you about
                                $0.93 per mile.</p>
                            <p class="para-2">Long lengths of more than 1,500 miles are approximately $0.58 per mile.
                            </p>
                            <p class="para-2">It is essential to remember that the cost of shipping a vehicle is
                                affected by a variety of variables. Some of the transportation variables that go into a
                                vehicle shipping estimate are as follows: </p>
                            <ul>
                                <li class="para-2">Trip distance</li>
                                <li class="para-2">Car size</li>
                                <li class="para-2">Vehicle condition</li>
                                <li class="para-2">Location</li>
                                <li class="para-2">Transport type</li>
                                <li class="para-2">Time of year</li>
                            </ul>
                            <p class="para-2">Request a vehicle shipping & auto transit quote to get a notion of the
                                overall cost.</p>
                        </div>

                    </li>

                    <li id="3">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">How Do We Handle The Shipping?</h3>
                            <p class="para-2">Getting a vehicle transported to Alabama can be simple if you use the
                                correct firm. Coordination of a vehicle cargo necessitates a thorough strategy in
                                logistics planning, access to available car transporters with free room on their van,
                                and traveling in the direction you require at the time you require the transport to be
                                completed.</p>
                            <p class="para-2">Rapid Auto Shipping strives to make the procedure as simple as feasible.
                            </p>
                            <p class="para-2">Simply follow the three stages and we will take care of the rest.</p>
                            <ul>
                                <li class="para-2">STOP RIGHT NOW and Request a Quote. It's simple. Fill out the easy
                                    form and one of our professional auto transport managers will call you to book your
                                    car carrier transport.</li>
                                <li class="para-2">Our auto transport carrier places your vehicle onto the car
                                    transporter after finishing a complete vehicle inspection report that includes any
                                    damages to your vehicle.</li>
                                <li class="para-2">We transport your car to its location along with a comprehensive
                                    automotive inspection report for insurance reasons, which you will receive as a
                                    receipt once the money is received.</li>

                            </ul>
                        </div>

                    </li>



                    <li id="4">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">Types of Shipping Services</h3>
                            <p class="para-2">When you order with Rapid Auto Shipping, you will be able to choose from a
                                variety of car transport services. You can be confident that it is up to date and in
                                ideal operating order. We only deal with carriers who use the most private, safe, and
                                dependable modes of transportation.</p>
                            <p clas="para-2">This article covers several types of car shipping services:</p>
                            <ul>
                                <li class="para-2"><b>Open Car Transport :</b> Open air car transport is a low cost way
                                    of transit in which your automobile is transported on an open truck trailer. You
                                    have the option of shipping your car full or empty. You'll save money if you choose
                                    an empty cargo because you won't have to pay for packaging materials. This mode of
                                    transit is perfect for cars that do not require special handling while being
                                    transported.</li>
                                <li class="para-2"><b>Enclosed Car Transport :</b> Enclosed car transport, like open
                                    transportation, comes in a variety of forms. Enclosed trailers offer better security
                                    against the elements, flying debris, and other potential hazards that may harm your
                                    car during transit. There are numerous confined carrier transit choices.</li>
                                <li class="para-2"><b>RoRo Car Transport Services :</b> The RoRo car transport
                                    technique, also known as "Roll-on/Roll-off," includes moving wheeled or vehicle
                                    freight that is moved on and off a shipping vessel rather than being hoisted aboard
                                    using cranes. Cars, lorries, containers, and other self-propelled vehicles are
                                    examples. To guarantee safe transport, the cars are secured to the platform with
                                    leading while shipping.</li>
                                <li class="para-2"><b>>Door to Door Car Transport :</b> Door to door car transport
                                    removes the need for vehicles to be loaded and unloaded numerous times during
                                    transit. This implies that your automobile will remain on the same car carrier for
                                    the duration of the trip.Door to door car transport allows you to move your car
                                    without having to journey to a pickup location or retrieve it, making it far more
                                    practical. <br>Your car will be collected from a handy location and brought to you
                                    as close to your home as possible. You are not required to drive to a pickup spot or
                                    retrieve your car.</li>
                                <li class="para-2"><b>Terminal to Terminal Car Transport :</b>A terminal is a location
                                    where cars await transit. Although only one shipper may use it, the port is
                                    typically used by multiple companies at the same time. In many major towns across
                                    the United States, these facilities are often located close to an airport facility.
                                    Alternatively, the site could be near the main highways that pass through a
                                    city.After making a reservation, you take your vehicle to a designated drop-off
                                    location. Your automobile will remain in the airport until your preferred carrier
                                    arrives. The carrier will transfer it to another terminal point once it has been
                                    gathered up. You must then travel to the ultimate terminal spot to collect your
                                    vehicle.</li>
                                <li class="para-2"><b>Coast to Coast Car Transport Service :</b>When it comes to coast
                                    to coast car shipping, you should be extra wary when selecting a transportation
                                    firm. Coast to Coast car transport entails moving a vehicle from one end of the
                                    nation to the other.We can move your vehicle regardless of whether you are
                                    relocating due to military relocation. Throughout your coast to coast vehicle
                                    transfer service, our courteous employees will ensure your satisfaction.</li>
                                <li class="para-2"><b>Expedited Shipping :</b>Do you need your vehicle delivered right
                                    away? Get a quicker arrival by ordering an expedited package and reducing the wait
                                    time.</li>
                            </ul>
                        </div>

                    </li>

                    <li id="5">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">Vehicle Transportation Services When Moving</h3>
                            <p class="para-2">Make yourself accessible for frequent updates. At Rapid Auto Shipping, we
                                make every effort to keep our clients informed of any significant changes or disruptions
                                in the process.</p>
                            <p class="para-2">We're also delighted to take your contact and check in on your car while
                                it's in transit - you have the right to frequent updates on the status of your auto
                                transport services.</p>
                            <p class="para-2">Otherwise, simply relax and await the coming! We understand that having
                                their vehicle out on the road without them in it can make people nervous, but believe
                                us, we're the experts.</p>

                        </div>

                    </li>

                    <li id="6">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">Get the Car Ready for Take Off</h3>
                            <p class="para-2">You've planned everything; now it's time to prepare your vehicle for
                                interstate car transport! To ready your vehicle for shipping, do the following five
                                things:</p>
                            <ul>
                                <li class="para-2">Clean the vehicle. It may be taking an open air, cross-country
                                    journey, but there is a valid purpose for this. A spotless vehicle enables you and
                                    the driver to properly identify any chips, dents, nicks, or other cosmetic damage.
                                    This will aid in determining old damage at pick-up, making it simpler to identify
                                    any new damage when you receive your car at its final destination.</li>
                                <li class="para-2">Clear out your home's interior. Remove anything dangerous or possibly
                                    illegal to transfer from your vehicle, and don't pack more than you need.</li>
                                <li class="para-2">Turn off your warning devices. Drivers do not want unexpected alarms
                                    to sound during their car transport service! Disable or switch off your vehicle
                                    alarm. When you recover your car, you can reactivate it.</li>
                                <li class="para-2">Give the courier the automobile and keys. Keep a spare set of keys
                                    for yourself in case they are required.</li>
                                <li class="para-2">Examine the driver at pick-up. Check that your assessments are
                                    consistent and that they are recorded on the bill of lading.</li>

                            </ul>
                            <p class="para-2">Your vehicle is now ready for transport; just relax while the carrier
                                loads it and drives off!</p>
                        </div>

                    </li>
                    <li id="7">
                        <div class="shipping-form-state-content">
                            <h3 class="heading-1">Car Transport Safety Measures in Alabama</h3>
                            <p class="para-2">Car transport is generally a secure procedure, with few possibilities of
                                something going awry. Nonetheless, while car transport is usually safe, there are some
                                essential auto transport safety tips to be mindful of, particularly if you've never done
                                it before. Examine them:</p>
                            <ol>
                                <li>
                                    <p class="para-2"><b>Collect the Important Paperwork</b></p>
                                    <ul>
                                        <li class="para-2">Proof of automobile insurance</li>
                                        <li class="para-2">Registration details</li>
                                        <li class="para-2">The initial title to your car</li>
                                        <li class="para-2">Your driver's license and/or visa</li>
                                        <li class="para-2">The car's certificate of sale or other proof that it pertains
                                            to you</li>
                                        <li class="para-2">Any additional details you will require when picking up the
                                            vehicle in your new nation</li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="para-2"><b>Clean and Remove Belongings</b></p>
                                    <p class="para-2">Before the car transport carrier places your vehicle onto the
                                        transport container, you must remove any assets that may still be inside. Some
                                        important locations to investigate are:</p>
                                    <ul>
                                        <li class="para-2">The Trunk.</li>
                                        <li class="para-2">The glove compartment</li>
                                        <li class="para-2">Below and on the edges of the chairs.</li>
                                        <li class="para-2">Seat pockets.</li>
                                        <li class="para-2">The center console.</li>

                                    </ul>
                                    <p class="para-2">Clearing out your car's valuables is a situation of "better safe
                                        than sorry." Otherwise, proving to the auto transfer carrier that something was
                                        inside your vehicle when it was collected will be difficult.</p>
                                </li>

                                <li>
                                    <p class="para-2"><b>Keep These Essentials in Your Car</b></p>

                                    <p class="para-2">Despite the prior tip, there are a few things you should store in
                                        your car. Items such as your spare tire, a vehicle jack, license plate, and
                                        emergency pack will come in useful if something goes wrong along the way. Keep
                                        them in your vehicle to guarantee that the shipping experts can manage any
                                        problems that occur during transit.</p>
                                </li>
                                <li>
                                    <p class="para-2"><b>Make a note of any existing damage.</b></p>
                                    <div class="shipping-form-state-image">
                                        <img src="https://dashboard.rapidautoshipping.com/assets/images/blog/Bcbp4bNty3ZTyN4H89RHGMO3d.jpeg"
                                            alt="" />
                                    </div>
                                    <p class="para-2">If there are any problems with your car, you must be open about
                                        them. It's best to notify the car transport provider ahead of time, which Rapid
                                        Auto Shipping will gladly do. Some of the vehicle problems that can endanger
                                        both your vehicle and the motorist are:</p>
                                    <ul>
                                        <li class="para-2">Brake issues</li>
                                        <li class="para-2">Electrical issues</li>
                                        <li class="para-2">Leakage issues.</li>
                                        <li class="para-2">Mechanical issues.</li>
                                    </ul>

                                </li>

                            </ol>
                        </div>

                    </li>
                </ul>



            </section>


        </div>

        <div class="right-state-to-state-child" id="right-state-to-state-child">
            <div class="form_div">
                <?php
                // include side_form_new ;
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
                <!-- <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/route-2.png" alt="best car shipping in USA">
                    <h3>Nationwide Door to Door Shipping</h3>
                    <p>We provide direct service to and from any residential or business location in the US.</p>
                </div> -->
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
                <!-- <div class="rapid-advantages-grid-1 ">
                    <img src="<?= get_img() ?>icons/support.png" alt="Albama to alaska shipping">
                    <h3>Extended Office Hours</h3>
                    <p>We're available past normal business hours in every timezone in the country.</p>
                </div> -->
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
        <div class="major-city-code">
            <p class="major-city-code-para">Huntsville Car Shipping</p>
            <span>-</span>
            <p>35613, 35649, 35671, 35741, 35748, 35749, 35756, 35757, 35758, 35759, 35763, 35773, 35801, 35802, 35803,
                35805, 35806, 35808, 35810, 35811, 35816, 35824, 35896.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Birmingham Vehicle Transport</p>
            <span>-</span>
            <p>35061, 35064, 35068, 35094, 35117, 35126, 35127, 35203, 35204, 35205, 35206, 35207, 35208, 35209, 35210,
                35212, 35213, 35215, 35217, 35218, 35221, 35222, 35223, 35228, 35233, 35234, 35235, 35242, 35243, 35254.
            </p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Montgomery Car Shipping</p>
            <span>-</span>
            <p>36043, 36064, 36104, 36105, 36106, 36107, 36108, 36109, 36110, 36111, 36112, 36113, 36115, 36116, 36117.
            </p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Mobile Auto Transport</p>
            <span>-</span>
            <p>36575, 36602, 36603, 36604, 36605, 36606, 36607, 36608, 36609, 36613, 36615, 36617, 36618, 36619, 36688,
                36693, 36695.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Tuscaloosa</p>
            <span>-</span>
            <p>35405, 35446, 35456.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Hoover</p>
            <span>-</span>
            <p>35405, 35446, 35456.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Auburn</p>
            <span>-</span>
            <p>36801, 36804, 36830, 36832, 36849, 36879.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Dothan</p>
            <span>-</span>
            <p>36305, 36345, 36350.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Decatur</p>
            <span>-</span>
            <p>35601, 35603, 35640, 35673.</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Madison</p>
            <span>-</span>
            <p>35758</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alexander City</p>
            <span>-</span>
            <p>125235 , 125235 , 35435465, 545615</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 125235 , 35435465, 545615</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 35435465, 545615</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 5646 , 6475164</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 69786154 , 4</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 979665 , 334645</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 35435465, 545615</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 5646 , 6475164</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 645684 , 465456</p>
        </div>
        <div class="major-city-code">
            <p class="major-city-code-para">Alabama</p>
            <span>-</span>
            <p>125235 , 6687 , 2254768</p>
        </div>
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