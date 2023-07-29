<?php include_once "../../init.php"; ?>
<?php
    if(isset($_POST['submit'])){
        $url = $_POST['url'];
        $ip = $_POST['ip'];
        $ship_from = $_POST['ship_from'];
        $ship_to = $_POST['ship_to'];
        $transporttype = $_POST['transporttype'];
        $year = $_POST['year'];
        $make = $_POST['make'];
        $models = $_POST['models'];
        $vehicle_size = $_POST['vehicle_size'];
        $vehicle_type = $_POST['vehicle_type'];
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $pick_up_date = $_POST['pick_up_date'];
        $phone_number = $_POST['phone_number'];
        $qoute_id = rand(1,1000000);
        $route_distance = $_POST['path_distance'];
        
        $insert_query = "INSERT INTO form_qoute (username, email, phone, ship_from, ship_to, t_method, year, make, model, vehicle_size, vehicle_type, pickup_date, distance, qoute_id,url,ip) values ('$username','$user_email', '$phone_number', '$ship_from', '$ship_to', '$transporttype', '$year', '$make', '$models', '$vehicle_size', '$vehicle_type', '$pick_up_date', '$route_distance', '$qoute_id','$url','$ip')";
        $insert_qoute = mysqli_query($con, $insert_query) or die("insert_query_failed");
        if($insert_qoute){
            $to = "info@rapidautoshipping.com , amankeshari5937@gmail.com, ".$user_email;
            $subject = "Qoute from Rapid";
            
            $message = '
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <table border="0" cellpadding="0" cellspacing="0" width="70%" style="background-color: #fff;">
            <tr>
                <td style="padding: 30px 0 30px 0; background-color: #fff">
                    <table class="wrap-table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center" style="padding: 0 15px 10px 15px">
                                <img src="https://rapidautoshipping.com/assets/images/coloured-logo.jpg"
                                    alt="Rapid Auto Shipping" width="auto" height="50" style="display: block" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 15px 15px 10px 15px">
                                <img src="https://rapidautoshipping.com/assets/images/review-stars.png" alt="5 star"
                                    width="auto" height="17" style="display: block" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 0 15px">
                                <span style="font-size: 14px; display: block; line-height: normal">5-star rated company
                                    with
                                    <br />over 28,000 vehicles
                                    shipped!</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 30px 30px 15px 30px" class="quote-cell">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="text-align: left">
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">Hi, <b>'.$username.'</b><br>Thank you for your interest in shipping your vehicle
                                            with
                                            <b style="color: #ff5527">Rapid Auto Shipping</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="
                        background: #f2f2f2;
                        font-size: 22px;
                        text-align: center;
                        padding: 30px 15px;
                      ">
                                            <span style="font-weight: bold; color: #000000 !important">A Dedicated Agent
                                                has been appointed with the Expertise of Several Years in this Specific
                                                Route. <br> Please Click below Call or Chat Now for the Exact
                                                Quote.</span> <br><br>
                                            <div
                                                style="display:flex; flex-wrap:wrap; justify-content:center; column-gap:20px; row-gap:20px;">
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="tel:+1-833-233-4447" style="
                            background: #fff;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: #ff5227 !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                            white-space: nowrap;
                          ">
                                                        <span style="color: #ff5227 !important"><b>Call</b> +1 (833)
                                                            233-4447</span>
                                                    </a>
                                                </div>
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="https://tawk.to/chat/61cd6c5dc82c976b71c415f2/1fo56ukbg"
                                                        target="_blank" style="
                            background: #fff;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: #ff5227 !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                          ">
                                                        <span style="color: #ff5227 !important"><b>Chat</b> with
                                                            us</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=""> <br>
                                            Please, find your personalized quote below which includes:
                                        </td>

                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 0 30px 0 30px" class="quote-cell">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="text-align: left">
                                    <tr>
                                        <td style="padding-right: 15px; padding-bottom: 5px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">$0 upfront payment</span>
                                        </td>
                                        <td style="padding-bottom: 5px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">Full-insurance
                                                coverage</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 15px; padding-bottom: 30px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">Free cancellation</span>
                                        </td>
                                        <td style="padding-bottom: 30px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">Door-to-door
                                                transport</span>
                                        </td>

                                    </tr>


                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td style="background-color: #ffffff; padding: 0 30px 0 30px" class="quote-cell">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                    style="border-radius: 6px; background: #fff" bgcolor="#fff">

                                    <tr>
                                        <td colspan="2" style="
                        font-size: 24px;
                        text-align: center;
                        text-transform: uppercase;

                        padding: 15px 0 15px 0;
                        background-color: #ff5227;
                        color: #fff;
                      ">
                                            Quote ID: <b> 
                                                '.$qoute_id.'
                                            </b>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Name :
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$username.'
                                            </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="50%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 50%;
                        padding: 15px 0 15px 15px;
                      ">
                                            First Available Pick-up Date:
                                        </td>
                                        <td width="50%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 50%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$pick_up_date.'
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Distance:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$route_distance.'
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Time to deliver:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b> 3-5 calendar days </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Vehicle:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$year.' '.$make.' '.$models.'
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Vehicle Size / Vehicle Type :
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$vehicle_size.' '. $vehicle_type.'
                                            </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            From:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$ship_from.'
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            To:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$ship_to.'
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Transport Method:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                '.$transporttype.'
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Service Type:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b> Door-to-door </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Insurance:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b> Already Included </b>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        color: #ff5227;
                        font-weight: bold;
                        width: 40%;
                        padding: 15px 0 0 15px;
                      ">
                                            Pay now:
                                        </td>
                                        <td width="60%" rowspan="2" align="right" style="
                        text-align: right;
                        color: #ff5227;
                        font-size: 18px;
                        width: 60%;
                        
                        padding: 0 15px 0 0;
                        font-size: 28px;
                      ">
                                            <b> $0 </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="100%" colspan="2" align="left" style="
                        color: #ff5227;
                        font-size: 14px;
                        font-style: italic;
                        text-align: left;
                        width: 100%;

                        padding: 5px 60px 15px 15px;
                      ">
                                            We don’t require any upfront payments! We will collect the
                                            payment (partial or in full) once the carrier has been
                                            dispatched for your order. You will be notified via phone
                                            and email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="
                        background-image: url(https://rapidautoshipping.com/assets/images//car-key-new1.jpeg);
                        background-position:center;
                        background-repeat:no-repeat;
                        background-size:cover;
                        font-size: 22px;
                        text-align: center;
                        padding: 30px 15px;
                      ">
                                            <span
                                                style="font-size:28px; color: #ffffff !important">Ready
                                                to book? Don’t
                                                wait!
                                                <span class="mobile-block">Reserve your shipment now…</span></span> <br><br>
                                            <div
                                                style="display:flex; flex-wrap:wrap; justify-content:center; column-gap:20px; row-gap:20px;">
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="tel:+1-833-233-4447" style="
                            background: #ff5227;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: white !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                            white-space: nowrap;
                          ">
                                                        <span style=""><b>Call</b> +1 (833)
                                                            233-4447</span>
                                                    </a>
                                                </div>
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="https://tawk.to/chat/61cd6c5dc82c976b71c415f2/1fo56ukbg"
                                                        target="_blank" style="
                            background: #ff5227;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: white !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                          ">
                                                        <span style=""><b>Chat</b> with
                                                            us</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px 30px 15px 30px; text-align: center" class="quote-cell">
                                Our company is licensed as required by the Federal Motor Carrier
                                Safety Administration (FMCSA) under MC 873392 and US Department
                                of Transportation (USDOT) 2521690.
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffffff; padding: 0 30px 0 30px" class="quote-cell">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="padding: 15px 7px 15px 8px; width: 50%">
                                            <div style="
                          border: 1px solid #5d5c5c;
                          border-radius: 6px;
                          background: #fff;
                          width: 100%;
                        ">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-top: 5px;
                              ">
                                                            Google
                                                        </td>
                                                        <td rowspan="2" class="rating-cell" style="
                                text-align: right;
                                font-size: 30px;
                                padding-bottom: 5px;
                                font-weight: bold;
                                padding-top: 5px;
                                padding-right: 10px;
                              ">
                                                            4.9
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                              ">
                                                            <img class="reviews-stars"
                                                                src="https://rapidautoshipping.com/assets/images/review-stars.png"
                                                                alt="5 star" width="auto" height="20"
                                                                style="display: block" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="reviews-count-cell" style="
                                text-align: left;
                                font-size: 14px;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-bottom: 5px;
                              ">
                                                            (1,458 reviews)
                                                        </td>
                                                        <td style="
                                text-align: right;
                                padding-right: 10px;
                                padding-bottom: 5px;
                              ">
                                                            <img src="https://rapidautoshipping.com/assets/images/google-mini-logo.png"
                                                                class="desktop-logo" height="24" width="auto"
                                                                alt="Google Logo" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                        <td style="padding: 15px 0 15px 0; width: 50%">
                                            <div style="
                          border: 1px solid #5d5c5c;
                          border-radius: 6px;
                          background: #fff;
                          width: 100%;
                        ">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-top: 5px;
                              ">
                                                            Transport Reviews
                                                        </td>
                                                        <td rowspan="2" class="rating-cell" style="
                                text-align: right;
                                font-size: 30px;
                                padding-bottom: 5px;
                                font-weight: bold;
                                padding-top: 5px;
                                padding-right: 10px;
                              ">
                                                            4.8
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                              ">
                                                            <img class="reviews-stars"
                                                                src="https://rapidautoshipping.com/assets/images/review-stars.png"
                                                                alt="5 star" width="auto" height="20"
                                                                style="display: block" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="reviews-count-cell" style="
                                text-align: left;
                                font-size: 14px;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-bottom: 5px;
                              ">
                                                            (185 reviews)
                                                        </td>
                                                        <td style="
                                text-align: right;
                                padding-right: 10px;
                                padding-bottom: 5px;
                              ">
                                                            <img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.png"
                                                                class="desktop-logo" height="24" width="auto"
                                                                alt="transport Review" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>

                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #f2f2f2; padding: 30px 15px 30px 15px">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="text-align: center">
                                    <tr>
                                        <td style="font-size: 24px; padding: 0px 0 30px 0">
                                            If you have any questions,<br />do not hesitate to contact
                                            us:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">
                                            <b>Phone:</b>
                                            <a target="_blank" href="tel:+1-833-233-4447"
                                                style="color: #000000 !important; text-decoration: none">+1 (833)
                                                233-4447</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">
                                            <b>Email:</b>
                                            <a target="_blank" href="mailto:info@rapidautoshipping.com"
                                                style="color: #000000 !important; text-decoration: none">info@rapidautoshipping.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">
                                            <a target="_blank" href="https://www.rapidautoshipping.com"
                                                style="color: #000000 !important; text-decoration: none">www.rapidautoshipping.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>906 S Main Street Silverton Texas USA-79257</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffffff; padding: 30px 15px 30px 15px">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="color: #333333; font-size: 14px; text-align: center">
                                    <tr>
                                        <td style="padding: 0px 0 5px 0; font-size: 12px">
                                            This email was sent to you from Rapid Auto Shipping.
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
            
            </body>
            </html>
            ';

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
       $headers .= 'From: <noreply.rapidautoshipping.com>' . "\r\n";

       if(!mail($to,$subject,$message,$headers)){
        echo "Something Went wrong. Please Try again!";
       }
       

        }
        
    }
    else{
        header('LOCATION:'.home_path().'');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Shipping Qoute</title>


    <!--     Google Analytics Code Start -->


    <!--     Google Analytics Code Ends -->

    <?php include head; ?>

    <link rel="stylesheet" href="<?= get_css(); ?>VIEW_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= get_css(); ?>VIEW_quote.css">

    <!-- animation css link   -->


</head>

<body>
    <!-- this is header -->
    <?php include header; ?>

    <section style="
      
      display:grid;
      place-items:center;
      font-size: 16px;
      margin: 0;
      padding: 0;
      line-height: normal;">
        <table border="0" cellpadding="0" cellspacing="0" width="70%" style="background-color: #fff;">
            <tr>
                <td style="padding: 30px 0 30px 0; background-color: #fff">
                    <table class="wrap-table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center" style="padding: 0 15px 10px 15px">
                                <img src="https://rapidautoshipping.com/assets/images/coloured-logo.jpg"
                                    alt="Rapid Auto Shipping" width="auto" height="50" style="display: block" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 15px 15px 10px 15px">
                                <img src="https://rapidautoshipping.com/assets/images/review-stars.png" alt="5 star"
                                    width="auto" height="17" style="display: block" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 0 15px">
                                <span style="font-size: 14px; display: block; line-height: normal">5-star rated company
                                    with
                                    <br />over 28,000 vehicles
                                    shipped!</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 30px 30px 15px 30px" class="quote-cell">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="text-align: left">
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">Hi
                                            <?= $username ?>, <br>Thank you for your interest in shipping your vehicle
                                            with
                                            <b style="color: #ff5527">Rapid Auto Shipping</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="
                        background: #f2f2f2;
                        font-size: 22px;
                        text-align: center;
                        padding: 30px 15px;
                      ">
                                            <span style="font-weight: bold; color: #000000 !important">A Dedicated Agent
                                                has been appointed with the Expertise of Several Years in this Specific
                                                Route. <br> Please Click below Call or Chat Now for the Exact
                                                Quote.</span> <br><br>
                                            <div
                                                style="display:flex; flex-wrap:wrap; justify-content:center; column-gap:20px; row-gap:20px;">
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="tel:+1-833-233-4447" style="
                            background: #fff;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: #ff5227 !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                            white-space: nowrap;
                          ">
                                                        <span style="color: #ff5227 !important"><b>Call</b> +1 (833)
                                                            233-4447</span>
                                                    </a>
                                                </div>
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="https://tawk.to/chat/61cd6c5dc82c976b71c415f2/1fo56ukbg"
                                                        target="_blank" style="
                            background: #fff;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: #ff5227 !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                          ">
                                                        <span style="color: #ff5227 !important"><b>Chat</b> with
                                                            us</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style=""> <br>
                                            Please, find your personalized quote below which includes:
                                        </td>

                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding: 0 30px 0 30px" class="quote-cell">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="text-align: left">
                                    <tr>
                                        <td style="padding-right: 15px; padding-bottom: 5px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">$0 upfront payment</span>
                                        </td>
                                        <td style="padding-bottom: 5px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">Full-insurance
                                                coverage</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 15px; padding-bottom: 30px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">Free cancellation</span>
                                        </td>
                                        <td style="padding-bottom: 30px">
                                            <span style="display: inline-block; width: 15px; height: 14px">
                                                <img src="https://rapidautoshipping.com/assets/images/icons/icons8-done-00.png"
                                                    width="20" height="20" style="
                            height: 15px;
                            width: 15px;
                            display: inline-block;
                          " />
                                            </span>
                                            <span style="color: #ff5227; font-weight: bold">Door-to-door
                                                transport</span>
                                        </td>

                                    </tr>


                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td style="background-color: #ffffff; padding: 0 30px 0 30px" class="quote-cell">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                    style="border-radius: 6px; background: #fff" bgcolor="#fff">

                                    <tr>
                                        <td colspan="2" style="
                        font-size: 24px;
                        text-align: center;
                        text-transform: uppercase;

                        padding: 15px 0 15px 0;
                        background-color: #ff5227;
                        color: #fff;
                      ">
                                            Quote ID: <b>
                                                <?= $qoute_id;?>
                                            </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="50%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 50%;
                        padding: 15px 0 15px 15px;
                      ">
                                            First Available Pick-up Date:
                                        </td>
                                        <td width="50%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 50%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $pick_up_date; ?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Distance:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $route_distance;?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Time to deliver:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b> 3-5 calendar days </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Vehicle:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $year." ".$make." ".$models;?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Vehicle Size / Vehicle Type :
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $vehicle_size." ". $vehicle_type;?>
                                            </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            From:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $ship_from;?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            To:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $ship_to;?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Transport Method:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b>
                                                <?= $transporttype ;?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Service Type:
                                        </td>
                                        <td width="60%" align="right" style="
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b> Door-to-door </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="40%" align="left" style="
                        background: #f2f2f2;
                        text-align: left;
                        text-transform: uppercase;
                        width: 40%;
                        padding: 15px 0 15px 15px;
                      ">
                                            Insurance:
                                        </td>
                                        <td width="60%" align="right" style="
                        background: #f2f2f2;
                        text-align: right;
                        font-size: 18px;
                        width: 60%;
                        padding: 15px 15px 15px 0;
                      ">
                                            <b> Already Included </b>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td width="40%" align="left" style="
                        text-align: left;
                        text-transform: uppercase;
                        color: #ff5227;
                        font-weight: bold;
                        width: 40%;
                        padding: 15px 0 0 15px;
                      ">
                                            Pay now:
                                        </td>
                                        <td width="60%" rowspan="2" align="right" style="
                        text-align: right;
                        color: #ff5227;
                        font-size: 18px;
                        width: 60%;
                        
                        padding: 0 15px 0 0;
                        font-size: 28px;
                      ">
                                            <b> $0 </b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="100%" colspan="2" align="left" style="
                        color: #ff5227;
                        font-size: 14px;
                        font-style: italic;
                        text-align: left;
                        width: 100%;

                        padding: 5px 60px 15px 15px;
                      ">
                                            We don’t require any upfront payments! We will collect the
                                            payment (partial or in full) once the carrier has been
                                            dispatched for your order. You will be notified via phone
                                            and email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="
                        background-image: url(https://rapidautoshipping.com/assets/images//car-key-new1.jpeg);
                        background-position:center;
                        background-repeat:no-repeat;
                        background-size:cover;
                        font-size: 22px;
                        text-align: center;
                        padding: 30px 15px;
                      ">
                                            <span
                                                style=" font-size:28px; color: #ffffff !important">Ready
                                                to book? Don’t
                                                wait!
                                                <span class="mobile-block">Reserve your shipment now…</span></span> <br><br>
                                            <div
                                                style="display:flex; flex-wrap:wrap; justify-content:center; column-gap:20px; row-gap:20px;">
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="tel:+1-833-233-4447" style="
                            background: #ff5227;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: white !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                            white-space: nowrap;
                          ">
                                                        <span style=""><b>Call</b> +1 (833)
                                                            233-4447</span>
                                                    </a>
                                                </div>
                                                <div style="
                          
                          width: fit-content;
                          text-align: center;
                        ">
                                                    <a href="https://tawk.to/chat/61cd6c5dc82c976b71c415f2/1fo56ukbg"
                                                        target="_blank" style="
                            background: #ff5227;
                            width: fit-content;
                            border: 2px solid #ff5227;
                            font-size: 18px;
                            border-radius: 4px;
                            padding: 10px 16px;
                            display: inline-block;
                            color: white !important;
                            cursor: pointer;
                            text-decoration: none;
                            box-sizing: border-box;
                          ">
                                                        <span style=""><b>Chat</b> with
                                                            us</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 15px 30px 15px 30px; text-align: center" class="quote-cell">
                                Our company is licensed as required by the Federal Motor Carrier
                                Safety Administration (FMCSA) under MC 873392 and US Department
                                of Transportation (USDOT) 2521690.
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffffff; padding: 0 30px 0 30px" class="quote-cell">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="padding: 15px 7px 15px 8px; width: 50%">
                                            <div style="
                          border: 1px solid #5d5c5c;
                          border-radius: 6px;
                          background: #fff;
                          width: 100%;
                        ">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-top: 5px;
                              ">
                                                            Google
                                                        </td>
                                                        <td rowspan="2" class="rating-cell" style="
                                text-align: right;
                                font-size: 30px;
                                padding-bottom: 5px;
                                font-weight: bold;
                                padding-top: 5px;
                                padding-right: 10px;
                              ">
                                                            4.9
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                              ">
                                                            <img class="reviews-stars"
                                                                src="https://rapidautoshipping.com/assets/images/review-stars.png"
                                                                alt="5 star" width="auto" height="20"
                                                                style="display: block" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="reviews-count-cell" style="
                                text-align: left;
                                font-size: 14px;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-bottom: 5px;
                              ">
                                                            (1,458 reviews)
                                                        </td>
                                                        <td style="
                                text-align: right;
                                padding-right: 10px;
                                padding-bottom: 5px;
                              ">
                                                            <img src="https://rapidautoshipping.com/assets/images/google-mini-logo.png"
                                                                class="desktop-logo" height="24" width="auto"
                                                                alt="Google Logo" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                        <td style="padding: 15px 0 15px 0; width: 50%">
                                            <div style="
                          border: 1px solid #5d5c5c;
                          border-radius: 6px;
                          background: #fff;
                          width: 100%;
                        ">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-top: 5px;
                              ">
                                                            Transport Reviews
                                                        </td>
                                                        <td rowspan="2" class="rating-cell" style="
                                text-align: right;
                                font-size: 30px;
                                padding-bottom: 5px;
                                font-weight: bold;
                                padding-top: 5px;
                                padding-right: 10px;
                              ">
                                                            4.8
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="
                                text-align: left;
                                padding-right: 10px;
                                padding-left: 10px;
                              ">
                                                            <img class="reviews-stars"
                                                                src="https://rapidautoshipping.com/assets/images/review-stars.png"
                                                                alt="5 star" width="auto" height="20"
                                                                style="display: block" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="reviews-count-cell" style="
                                text-align: left;
                                font-size: 14px;
                                padding-right: 10px;
                                padding-left: 10px;
                                padding-bottom: 5px;
                              ">
                                                            (185 reviews)
                                                        </td>
                                                        <td style="
                                text-align: right;
                                padding-right: 10px;
                                padding-bottom: 5px;
                              ">
                                                            <img src="https://rapidautoshipping.com/assets/images/TransportReviewsLogo.png"
                                                                class="desktop-logo" height="24" width="auto"
                                                                alt="transport Review" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>

                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #f2f2f2; padding: 30px 15px 30px 15px">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="text-align: center">
                                    <tr>
                                        <td style="font-size: 24px; padding: 0px 0 30px 0">
                                            If you have any questions,<br />do not hesitate to contact
                                            us:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">
                                            <b>Phone:</b>
                                            <a target="_blank" href="tel:+1-833-233-4447"
                                                style="color: #000000 !important; text-decoration: none">+1 (833)
                                                233-4447</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">
                                            <b>Email:</b>
                                            <a target="_blank" href="mailto:info@rapidautoshipping.com"
                                                style="color: #000000 !important; text-decoration: none">info@rapidautoshipping.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 15px 0">
                                            <a target="_blank" href="https://www.rapidautoshipping.com"
                                                style="color: #000000 !important; text-decoration: none">www.rapidautoshipping.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>906 S Main Street Silverton Texas USA-79257</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #ffffff; padding: 30px 15px 30px 15px">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="color: #333333; font-size: 14px; text-align: center">
                                    <tr>
                                        <td style="padding: 0px 0 5px 0; font-size: 12px">
                                            This email was sent to you from Rapid Auto Shipping.
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </section>

    <script src="<?= get_assets(); ?>/js/header.js"></script>
    <!-- for fonts link   -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61cd6c5dc82c976b71c415f2/1fo56ukbg';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

        if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
    </script>
    <!--End of Tawk.to Script-->


</body>

</html>