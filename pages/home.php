<?php include_once "../init.php" ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rapid Auto Shipping | Best Auto Transport Company in US</title>
    <meta name="description" content="One of the leading auto shipping companies in the nation. Trusted Auto Transport Company in us. Affordable Car Shipping Services Get Quote Now." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Rapid Auto Shipping | Best Auto Transport Company in US" />
    <meta property="og:description" content="One of the leading auto shipping companies in the nation. Trusted Auto Transport Company in us. Affordable Car Shipping Services Get Quote Now." />
    <meta property="og:img" content="https://rapidautoshipping.com/assets/images/bg-2.jpeg" />
    <meta property="og:url" content="https://rapidautoshipping.com" />
    <meta property="og:site_name" content="Rapid Auto Shipping | Best Auto Transport Company in US " />
    <meta name='robots' content='index' />
    <meta name="keywords" content="best car shipping company, best car transport companies, reliable car transport, top car shipping companies, top car transport companies, car shipping companies, car shipping quotes, auto transport, car carriers, car shipping company" />
    <meta property="article:tag" content="best car shipping company" />
    <meta property="article:tag" content="best car transport companies" />
    <meta property="article:tag" content="reliable car transport" />
    <meta property="article:tag" content="top car shipping companies" />
    <meta property="article:tag" content="top car transport companies" />
    <meta property="article:tag" content="car shipping companies" />
    <meta property="article:tag" content="car shipping quotes" />
    <meta property="article:tag" content="auto transport" />
    <meta property="article:tag" content="car carriers" />
    <meta property="article:tag" content="car shipping company" />



    <meta name="twitter:image" property="og:image" content="<?= get_img(); ?>home_page_featured_img.jpeg" /> <!-- invalid, but expected -->
    <link property="image" href="<?= get_img(); ?>home_page_featured_img.jpeg" />
    <?php include head; ?>

    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_home.min.css">
    <!-- <link rel="stylesheet" href="<?= get_css(); ?>PAGE_contactus.css"> -->
    <link rel="stylesheet" href="<?= get_css(); ?>strip-under-header.css">

    <!-- ahref site verification -->
    <meta name="ahrefs-site-verification" content="330dc55c94b30c3d9aede0931e04fc0233e25931c29b861598bb9d218078676f">

    <style>
        .third-section>p>b>a {
            color: var(--nav-color) !important;
        }

        .key-holding {
            margin: 2% 0;
            background-image: url("<?= get_img(); ?>/car-key-new1.jpeg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media screen and (max-width: 600px) {
            .key-holding {
                background-image: url("<?= get_img(); ?>car-key-new1.jpeg");
            }
        }
       .popup {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 9999;
            display: none;
          }
          .popup-content {
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
          }
          .yes-btn, .no-btn {
            background-color: #4CAF50;
            color: white;
            padding: 1px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
          }
       .multiline-ellipsis {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2; /* start showing ellipsis when 3rd line is reached */
  white-space: pre-wrap; /* let the text wrap preserving spaces */
}
    </style>

    <!-- schema sent by aniket -->
    <script defer type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "Rapid Auto Shipping",
            "alternateName": "RAS",
            "url": "https://rapidautoshipping.com/",
            "logo": "https://rapidautoshipping.com/assets/images/Untitled-1-Recovered.png",
            "sameAs": [
                "https://www.facebook.com/Rapid-Auto-Shipping-105964451981199",
                "https://twitter.com/ShippingRapid",
                "https://www.instagram.com/rapidautoshipping/",
                "https://www.youtube.com/channel/UCSsU3YSRFahtcWyBBCp8pFQ/about",
                "https://www.linkedin.com/in/rapid-auto-shipping-ba4593232/",
                "",
                "https://rapidautoshipping.com"
            ]
        }
    </script>
    <script defer type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Rapid Auto Shipping",
            "url": "https://rapidautoshipping.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://rapidautoshipping.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

</head>

<body>

    <!-- this is header -->
    <?php include header; ?>

    <!-- this is the fiorst section with background image -->
    <!-- <div class="contact-us-header-page" id="banner_form">
        <?php

        // $NAME = "Best Auto Shipping Company In USA";
        // $PARAGRAPH = "We will help you to ship your vehicle on time at an affordable price. You can ship your vehicle without any hustle and bustle, only just by contacting us.<span> We will provide you best representatives to help you out if you have any questions regarding <b>auto shipping. </b> All you have to do is to fill the free quote form, to get an instant quote for your shipment. You will see your <b>auto shipping</b> quote in less than 30 seconds with our price calculator, and find out when your vehicle can be picked up.</span>";
        // include small_form;
        ?>
    </div> -->
    <?php
    $NAME = "Best Auto Shipping Company In USA";
    $PARAGRAPH = "We will help you ship your vehicle on time at an affordable price. You can ship your vehicle without any hustle and bustle by simply contacting us.<span> We will provide you best representatives to help you out if you have any questions regarding <b>auto shipping. </b> All you have to do is to fill the free quote form, to get an instant quote for your shipment. You will see your <b>auto shipping</b> quote in less than 30 seconds with our price calculator, and find out when your vehicle can be picked up.</span>";
    ?>
    <section class="contact-us-header-page" id="banner_form">

        <div class="third-section-state">


            <div class="third-section-content">
                <div class="state-banner-content">
                    <h1 class="third-section-content-heading">

                        <?php echo $NAME; ?>
                    </h1>


                    <p class="third-section-content-text">
                        <?php echo $PARAGRAPH; ?>
                    </p>
                </div>

            </div>
            <div style="display:grid;
                place-items:center;">
                <?php include small_form_new; ?>
            </div>



        </div>
    </section>
    <?php include strip_under_header; ?>

    <?php include reviews; ?>

    <!-- data section of home page -->
    <section class="third-section">

        <h2 class="main-heading-for-big-screen">Welcome To <b>Rapid Auto Shipping</b></h2>

        <div class="line--div"></div>

        <p>Choose the top-rated<b>vehicle shipping</b> and <b>car shipping</b> company in United States (USA). We are known for our excellent services  both individuals and businesses. we provide services in all the states of America. You can check the <b><a href="<?= get_state() ?>">list of auto shipping states</a></b> we serve . If you are looking for car shipping services, we provide cheap and Affordable auto shipping services our services include instant auto shipping, door-to-door auto transport, open auto shipping, enclosed auto shipping and other**<b><a href="<?= home_path() ?>services"> transport services**.</a></b>. Contact us for any kind of auto shipping service need.
        </p>

        <div class="data-data" id="main-count">

            <div class="years-data">
                <p><span id="output-1">9</span> Years</p>
                <p>IN THE BUSINESS</p>
            </div>

            <div class="quotes-data">
                <p><span id="output-2">462</span>K</p>
                <p>QUOTES GIVEN</p>
            </div>

            <div class="shipping-data">
                <p><span id="output-3">72</span>K</p>
                <p>VEHICLE SHIPPED</p>
            </div>
        </div>
    </section>
    <div class="trusticon-section-home-page">
        <h2 class="main-heading-for-big-screen">Why <span>Rapid Auto Shipping</span></h2>
        <div class="line--div"></div>
        <p>
            On TransportReviews, TrustPilot, Facebook, the Better Business Bureau, and Google, Rapid Auto Shipping consistently obtains five-star ratings. Some reviewers are given a little deposit reimbursement that is unrelated to their rating score or pricing as an incentive to share their experience. We've delivered over 20,000 new and used cars, and while we're not perfect, we've built a solid reputation in the process.</p>
        <div class="trustbadge-container">
            <div class="trustbadeg-1">
                <img loading="lazy" src="<?= get_img() ?>TransportReviewsLogo.webp" width="100%" height="100%" alt="review rapid auto shipping" />
            </div>
            <div class="trustbadeg-1">
                <img loading="lazy" src="<?= get_img() ?>google-review-rating-img.png" width="100%" height="100%" alt="review rapid auto shipping" />
            </div>
            <div class="trustbadeg-1">
                <img loading="lazy" src="<?= get_img() ?>Trustpilot-review-rating-img.png" width="100%" height="100%" alt="review rapid auto shipping" />
            </div>
        </div>


    </div>
    <!-- call to action shippig -->
    <div class="s-t-s-transport-quote-container-home">
        <h2 class="main-heading-for-big-screen">
            Ready To Get Started Shipping With The Best?
        </h2>
        <h3>
            If you would prefer to speak to one of our experienced Transport Specialists,
            feel free to give us a call
        </h3>
        <a href="tel:+1-833-233-4447">
            <button class="button-square-for-every-page-home ">
                +1-833-233-4447
            </button>
        </a>


    </div>
    <!-- three simple steps to ship you car  -->
    <section class="fifth-section">

        <h2 class="main-heading-for-big-screen">Three Simple Steps to <b>Ship Your Cars</b></h2>

        <div class="line--div"></div>

        <div class="steps">

            <div class="first-step">
                <img loading="lazy" src="<?= get_img() ?>home-picking-vehicle.png" alt="Best Auto Shipping Company In USA">

                <div class="about-step">
                    <h2>1. Picking your Vehicle</h2>
                    <p>Before the pickup, our team will contact you to understand your needs. After providing your orientation and destination zip codes, we assign you the auto transport carrier for the vehicle as per your destination. At the time of dispatch, our team will work with you and schedule the whole process. Before arriving at your door, we will verify as much information as possible.
                        <br><br>Once our car shipping company arrives at your location and unloads your vehicle, we do a full inspection of the customer’s vehicle. This is the first step is a crucial part of this process and it is done in tandem with your transport vehicle driver. After this, the vehicle is released to the destination.
                    </p>
                </div>
            </div>
            <div class="second-step">
                <div class="about-step">
                    <h2>2. Shipping your Vehicle</h2>
                    <p>We have the expert infrastructure to deliver your vehicle to the chosen destination safely. Our auto transport carriers will be traveling 400-500 miles every day as per the vehicle delivery appointment. We ensure that you get your vehicle as per the promised timelines.
                        <br><br> Our auto shipping carriers make an appointment for loading and unloading the scheduled vehicle. Our carriers for pickup and delivery are booked as per appointment. We let you know our location and you will know specifically when to arrive and meet them.
                    </p>
                </div>
                <img loading="lazy" src=" <?= get_img() ?>home-shipping-vehicle.png" alt="Auto Transport Company">

            </div>
            <div class="first-step first-third-step">
                <img loading="lazy" src=" <?= get_img() ?>home-delivering-vehicle.png" alt="Auto Shipping Services">

                <div class="about-step">
                    <h2>3. Delivering your vehicle</h2>
                    <p>Most shipping carriers call you ahead of schedule and they narrowed down the delivery window. We make the arrangements with you as per the time and location close to your house.
                        We will unload your vehicle from the vehicle shipping truck or trailer. Post this we do the delivery inspection of your vehicle.<br><br> You are advised to go around the vehicle again and take pictures, check the interior and exterior for damages, and ensure that there are no fluctuations in mileage or any other abnormalities. You must note all the damages to file a claim for damages with our insurance. After all the formalities, we will hand over your vehicle to you.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sixth-section-home-page">
        <h2 class="main-heading-for-big-screen"><span>RAPID AUTO SHIPPING</span></h2>
        <h4>Professional, All-Inclusive Vehicle Shipping Right to Your Door</h4>
        <div class="sixth-section-home-page-main-grid">
            <a href="<?= home_path(); ?>services/rail-shipping">
                <div class="home-page-services-card">
                    <div class="home-service-image">
                        <img loading="lazy" src=" <?= get_img() ?>metro-icon.png" width="48px" height="48px" alt="rapid auto shipping" />
                    </div>
                    <div class="home-service-content">
                        <h3>By Rail</h3>
                        <p>Rail transportation in the United States consists.... </p>
                    </div>
                </div>
            </a>
            <a href="<?= home_path(); ?>services/enclosed-shipping">
                <div class="home-page-services-card">
                    <div class="home-service-image">
                        <img loading="lazy" src=" <?= get_img() ?>closed-truck-icon.png" width="48px" height="48px" alt="rapid auto shipping" />
                    </div>
                    <div class="home-service-content">
                        <h3>Enclosed Auto Transport</h3>
                        <p>Your vehicle will be transported in a completely ....</p>
                    </div>
                </div>

            </a>
            <a href="<?= home_path(); ?>services/door-to-door">
                <div class="home-page-services-card">
                    <div class="home-service-image">
                        <img loading="lazy" src=" <?= get_img() ?>door-to-door-icon.png" width="48px" height="48px" alt="rapid auto shipping" />
                    </div>
                    <div class="home-service-content">
                        <h3>Door To Door Shipping</h3>
                        <p>We do not use terminals where vehicles are ....</p>
                    </div>
                </div>
            </a>
            <a href="<?= home_path(); ?>services/motor-cycle-shipping">
                <div class="home-page-services-card">
                    <div class="home-service-image">
                        <img loading="lazy" src=" <?= get_img() ?>motorcycle-icon.png" width="48px" height="48px" alt="rapid auto shipping" />
                    </div>
                    <div class="home-service-content">
                        <h3>Motorcycle Transport</h3>
                        <p>Shipping motorcycle shipping has never been easier....</p>
                    </div>
                </div>
            </a>

            <a href="<?= home_path(); ?>services/snow-bird-shipping">
                <div class="home-page-services-card">
                    <div class="home-service-image">
                        <img loading="lazy" src=" <?= get_img() ?>snowbird-icon.png" width="48px" height="48px" alt="rapid auto shipping" />
                    </div>
                    <div class="home-service-content">
                        <h3>Snow Bird Shipping</h3>
                        <p>If you're a snowbird who heads south when the winter....</p>
                    </div>
                </div>
            </a>
            <a href="<?= home_path(); ?>services/boat-shipping">
                <div class="home-page-services-card">
                    <div class="home-service-image">
                        <img loading="lazy" src=" <?= get_img() ?>boat-shipping-icon.png" width="48px" height="48px" alt="rapid auto shipping" />
                    </div>
                    <div class="home-service-content">
                        <h3>Boat Shipping</h3>
                        <p>Boat Shipping USA, LLC employ the factory....</p>
                    </div>
                </div>
            </a>
        </div>

    </section>
    <?php include car_key_section; ?>
    <?php include_once page_bottom ?>


<div class="popup">
        <div class="popup-content">
          <p id="review-text"></p>
          <button class="yes-btn" style="display: none;">Good</button>
          <button class="no-btn" style="display: none;">Bad</button>
        </div>
      </div>



    <script type="text/javascript">
        let countCompleted = false;

        window.onscroll = function() {

            if (!countCompleted) {
                if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
                    count();
                    countCompleted = true
                }
            }

        }


        function countTo() {
            let from = 0;
            let to = 9;
            let step = to > from ? 1 : -1;
            let interval = 100;

            if (from == to) {
                document.querySelector("#output-1").textContent = from;
                return;
            }

            let counter = setInterval(function() {
                from += step;
                document.querySelector("#output-1").textContent = from;

                if (from == to) {
                    clearInterval(counter);
                }
            }, interval);

        }

        function count2To() {
            let from = 0;
            let to = 72;
            let step = to > from ? 9 : -1;
            let interval = 100;

            if (from == to) {
                document.querySelector("#output-3").textContent = from;
                return;
            }

            let counter = setInterval(function() {
                from += step;
                document.querySelector("#output-3").textContent = from;

                if (from == to) {
                    clearInterval(counter);
                }
            }, interval);
        }

        function count1To() {
            let from = 0;
            let to = 459;
            let step = to > from ? 51 : -1;
            let interval = 100;

            if (from == to) {
                document.querySelector("#output-2").textContent = from;
                return;
            }

            let counter = setInterval(function() {
                from += step;
                document.querySelector("#output-2").textContent = from;

                if (from == to) {
                    clearInterval(counter);
                }
            }, interval);
        }

        function count() {
            countTo();
            count1To();
            count2To();

        }
    </script>



    <!-- animation js link    -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ2DHnFl4aGaFN90TWapQEXJ7e2v6L8lo&v=3.exp&callback=Function.prototype&libraries=places"></script>

    <script>
        var ip;
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                ip = data.ip;
                var newInput = document.createElement('input');
                newInput.type = 'hidden';
                newInput.name = 'ip';
                newInput.value = ip ;
                // newInput.hidden = true;
                myDiv = document.getElementById('ip')
                myDiv.insertBefore(newInput, myDiv.firstChild)
            })
            .catch(error => {
                console.log(error);
            });
    </script>
    <script src="<?= get_js() ?>small_form_new.js" async></script>
    <script src="<?= get_js() ?>review-home.js" async></script>
  
    
     <script>
        
            // Function to generate random feedback
            // function getRandomFeedback() {
                const reviews = [
  '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://images.pexels.com/photos/3220360/pexels-photo-3220360.jpeg" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 2.5px 0;padding:0; font-size:15px;"><b>Victor G.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"I appreciate how quickly I was able to contact with Scott and get my questions answered. Booking through the website."</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',

            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://rapidautoshipping.com/assets/images/Untitled design (34).png" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 2.5px 0;padding:0;"></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Yay! We just Got a new order few minutes ago"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',




            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://images.pexels.com/photos/4672491/pexels-photo-4672491.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>Glen K.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Thank you for the good service.My car was picked up and delivered on time."</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',

            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://rapidautoshipping.com/assets/images/Untitled design (34).png" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 2.5px 0;padding:0;"></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"We Shipped 84 Vehicles in last 24 Hours"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ2Y77JlcRLyK3LEhiRDR247UEJp8c41RXjQ&usqp=CAU" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height:50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>James S.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Great company to ship your vehicle with. Eric, was awesome and easy to work"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',

            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://images.pexels.com/photos/1043473/pexels-photo-1043473.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>Jessie P.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;">"<span>Great service and worth the money. </span>"</p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',
            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGzmgbFiul15nDftRinpc3aHdVjnWLzeKFImtzPhG6UeJQVkJ8aviKJlPmLRrZeNci3LA&usqp=CAU" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>Chisholm R.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Trusted Auto Transport Company For California To Texas Car Shipping"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.webp" width="50%" height="50%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',

            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://img.freepik.com/free-photo/smiling-man-white-shirt-typing-text-message-scrolling-feed-social-network-using-smartphone-gray_171337-634.jpg?w=740&t=st=1691753586~exp=1691754186~hmac=d4b3b15be416152c62b2128cb9534dd1ef8f42f0fbbd102e6262a447dab92c6e" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>Patty E.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Best Car Shipping Company In States"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.webp" width="50%" height="50%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://img.freepik.com/free-photo/smiling-man-white-shirt-typing-text-message-scrolling-feed-social-network-using-smartphone-gray_171337-634.jpg?w=740&t=st=1691753586~exp=1691754186~hmac=d4b3b15be416152c62b2128cb9534dd1ef8f42f0fbbd102e6262a447dab92c6e" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>Lillie S.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Affordable Car Shipping Company"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.webp" width="50%" height="50%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://img.freepik.com/free-photo/smiling-man-white-shirt-typing-text-message-scrolling-feed-social-network-using-smartphone-gray_171337-634.jpg?w=740&t=st=1691753586~exp=1691754186~hmac=d4b3b15be416152c62b2128cb9534dd1ef8f42f0fbbd102e6262a447dab92c6e" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 5px 0;padding:0;font-size:15px;"><b>Barry H.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Excellent Car Shipping Service By Rapid Auto Shipping"</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.webp" width="50%" height="50%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 2.5px 0;padding:0; font-size:15px;"><b>Lillie l.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"I shipped my daughter\'s VW Jetta from New jersey to Texas.The service was timely and completed without any issues.I was contracted to Rapid Auto Shipping."</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://lh3.googleusercontent.com/a-/AD_cMMSBTUOPdt9MTjZpvnncHu8-cBcgZLNV-f3IEluzktWYMA=w40-h40-p-rp-mo-br100" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 2.5px 0;padding:0; font-size:15px;"><b>Amy M.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"I will definitely use Rapid Auto Shipping services again.  The transportation of my car from Texas to Arizona was a smooth and successful process.  From my initial call to their service to the delivery of the car, everyone was extremely helpful, polite, and professional."</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


            '<div style="width: 300px;height:auto;background-color:rgb(236, 236, 236);display:flex;align-items:center;padding:2%;box-sizing:border-box;"><div style="width: 50px;height: 50px;border-radius:50%;overflow:hidden;"><img src="https://lh3.googleusercontent.com/a-/AD_cMMQIiSMzT4_FvgMq23JpUy-1FirZvLg8jQRLh2ayI0C-OTA=w40-h40-p-rp-mo-br100" width="100%" height="100%" style="object-position:center;transform: translate(50% 50%);" alt=""></div><div style=" width:270px;display: grid;margin-left:5%;align-items:center;height: 50%;"><div class="customer-popup"><h4 style="margin:0 0 2.5px 0;padding:0; font-size:15px;"><b>Mark M.</b></h4><p style="margin:0;padding:0;font-style: italic;line-height: 100%;"><span class = "multiline-ellipsis">"Rapid Auto Shipping provided me with an excellent service! I had to go through a couple of other companies before they came along, and I was impressed with their courtesy and smooth process. My automobile arrived in perfect condition."</span></p></div><div style="display:flex;align-items:center;gap:15px;" class="review_pop_up"><div style="height:auto;display:flex;align-items:center;gap:5px"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid"viewBox="0 0 256 262" id="google"><path fill="#4285F4"d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853"d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05"d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335"d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg><span style="font-family: google;">Google</span></div><div><span>⭐⭐⭐⭐⭐</span></div></div></div></div>',


                    // Add more feedback messages here
                ];

               const popup = document.querySelector('.popup');
  const reviewText = document.querySelector('#review-text');
  const yesBtn = document.querySelector('.yes-btn');
  const noBtn = document.querySelector('.no-btn');
  let timer;
  let d;
  
  function showPopup() {
    reviewText.innerHTML = reviews[Math.floor(Math.random() * reviews.length)];
    popup.style.display = "block";
    timer = setTimeout(hidePopup, 3000);
  }
  
  function hidePopup() {
    popup.style.display = "none";
  }
  
  function resetTimer() {
    clearTimeout(timer);
    timer = setTimeout(hidePopup, 3000);    
    clearInterval(d);
    d = setInterval(showPopup, 5000 + Math.floor(Math.random() * 15000));
  }
  
  yesBtn.addEventListener('click', function() {
    console.log('Customer clicked "Good"');
    hidePopup();
  });
  
  noBtn.addEventListener('click', function() {
    console.log('Customer clicked "Bad"');
    hidePopup();
  });
  
  popup.addEventListener('mouseover', function() {
    clearTimeout(timer);
    clearInterval(d);
  });
  
  popup.addEventListener('mouseout', function() {
    resetTimer();
  });
  
  // Show the popup every 10-15 seconds
  d = setInterval(showPopup, 5000 + Math.floor(Math.random() * 15000));
    </script>
    
</body>


</html>

<!-- New commercial added -->