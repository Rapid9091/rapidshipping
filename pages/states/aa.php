<?php
include_once "../../init.php";
$sql ="SELECT * FROM states where id = 2";
$result = mysqli_query($con, $sql) or die('failed to fetch data');
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'];?></title>
    <?php
    
    echo $data['meta'];
    ?>


    
    
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

.main_content_div p{
    font-size: 18px;
    word-spacing: 1.5px;
    letter-spacing: 0.5px;
    margin: 2% 0;
    line-height: 1.8;
}
.main_content_div h4,h5,h6,h2{
    font-size:30px;
    font-weight:600;
}
.main_content_div ul li{
    list-style:auto;
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

                        <?php echo $data['h1']; ?></h1>


                    <p class="third-section-content-text"><?php echo $data['h1_about'];?></p>


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
                            <img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.png" alt="google logo" style="width:80px;">
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>Ship a vehicle with them and enjoy the best shipping in USA. I have worked with different company but they gave me  complete satisfaction. Call the Phone number to speak with the live person and get your shipping quote instantly. Thankyou Rapid Auto Shipping once again.</p>
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
                            <p>They are Excellent when it comes to look for one of the best Auto Shipping Companies in USA. Rapid Auto SHIPPING company offers the best Auto Shipping Quotes as i tried comparing with others as well.</p>
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
                            <img src="https://rapidautoshipping.com/assets/images/bbb-logo-horizontal.png" alt="google logo" style="width:70px;">
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>I needed to ship a car from Texas to California for my son, so I contacted Rapid Auto Shipping Transport here in Texas, and they were able to make it happen. Excellent service and a smooth, dependable, and professional process.</p>
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
                            <p>I love the way they shipped my vehicle Volvo XC 60 . It was given back to me in the same way as i have handed it to over them.</p>
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
                            <img src="https://rapidautoshipping.com/assets/images/Trustpilot-logo.png" alt="trustpilot" style="width:80px">
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>They were good while delivering my vehicle. it was the first time i have ever used the service of transporting my vehicle and i ended up with good experince all because of Rapid auto Shipping will recommened it to my friends as well.</p>
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
                            <img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.png" alt="transport review" style="width:80px;">
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>Best car shipping i have ever come across with. they did their job in the best way i gave them full rating. Thank you, Rapid auto shipping</p>
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
                            <img src="https://rapidautoshipping.com/assets/images/bbb-logo-horizontal.png" alt="google logo" style="width:70px;">
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>No comparison when it comes to vehicle transportation in United states. they are working in the best way i and after working with them i found it out them this is the actual way of doing any professional work. I was relaxed as i was getting proper updates and shipping a car with rapid Auto Shipping was one of my best decision as they were really rapid and just the Perfect!</p>
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
                            <img src="https://rapidautoshipping.com/assets/images/Trustpilot-logo.png" alt="trustpilot" style="width:80px">
                        </div>
                    </div>
                    <div class="review_stars">
                        <p><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i></p>
                    </div>
                    <div class="review_content">
                        <div class="reiview_content_box">
                            <p>I would always love to give them positive rating as i found them the best shipping company to ship my vehicle and i  like the way they carried the whole process and in the exact way they told it.</p>
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
            <h2 class="heading-1"><?=$data['h2'];?></h2>
                 <p class="para-2"><?= $data['h2_about'];?></p>
            </div>

            <!-- <div class="points-div " id="top-section">
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

            </div> -->
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

<div class="body">


<div class="faq">FACTS & QUESTIONS</div>

<div class="container">
    <div class="box">
        <span>Is Your Auto Transport Team Licensed And Insured?</span>
        <i class='bx bx-plus'></i>
    </div>
    <p class="para-faq">Our complete network of auto transport workers is fully insured and certified, with most of them having decades of experience.
    </p>
    <div class="box">
        <span>What If My Vehicle Is Harmed During Transport?</span>
        <i class='bx bx-plus'></i>
    </div>
    <p class="para-faq">All of our chauffeurs undergo a comprehensive pre-transport examination to look for any previous damage, which must be signed by the individual releasing the vehicle and the transporter before moving the car. The transport insurance will cover any harm to the vehicle while it is in transit.
    </p>
    <div class="box">
        <span>What Types of Car Delivery Do You Provide, And What Are The Distinctions?</span>
        <i class='bx bx-plus'></i>
    </div>
    <p class="para-faq">We have an extensive network of car haulers who can manage open, enclosed, or specialized transport. Enclosed transit is typically reserved for more costly or specialized vehicles, such as show cars, exotics, and expensive luxury vehicles.
        <br><br>
        On the other hand, open transport is the most prevalent type of car transport used for any vehicle that does not need to be protected from the elements.
    </p>
    <div class="box">
        <span>Do You Offer Car Delivery In My State or City?</span>
        <i class='bx bx-plus'></i>
    </div>
    <p class="para-faq">Our extensive provider network transports vehicles to every state and location nationwide. Jrop is a network that operates on a national scale.
        <br><br>
        <b>Receive Estimates for car shipping:</b>
        <br>
        Get FREE, no-obligation estimates from licensed and protected expert vehicle movers in our network who can service your relocation.
        <br><br>
        <b>Read Rapid Auto Shipping Guides:</b>
        <br>
        Use our FREE online vehicle transportation tools (guides, tips, and videos) for Rapid Auto Shipping suggestions.
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