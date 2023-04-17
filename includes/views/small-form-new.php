<form action="<?=home_path()?>get_qoute" class="form-section" method="post" onsubmit="return final_validation()">

    <img class="bb-img" src="<?= get_img()?>/Transport-Reviews.webp" alt=" transport review" width="120px" height="120px" loading="lazy">


    <div class="form-section-group active-form">
        <p>Get a Free</p>
        <p class="form-bold-heading"><span>Instant Quote</span></p>


        <div>
            <label class="label-ship" for="form">Ship From</label>
            <div>
                <input type="text" id="form_des" class="input-ship" placeholder="Address or City" name="ship_from">
            </div>
        </div>

        <div>
            <label for="to" class="label-ship">Ship To</label>
            <div>
                <input type="text" class="input-ship" id="to_des" placeholder="Address or City" name="ship_to">

            </div>
        </div>

        <div>
            <label for="" class="label-ship">Transport Method</label>
            <div class="wrapper">

                <input type="radio" name="transporttype" id="option-1" checked value="Open">
                <input type="radio" name="transporttype" id="option-2" value="Enclosed">
                <label for="option-1" class="option option-1">
                    <div class="dot"></div>
                    <span>Open</span>
                </label>
                <label for="option-2" class="option option-2">
                    <div class="dot"></div>
                    <span>Enclosed</span>
                </label>
            </div>
        </div>

        <div class="button-parent">
            <input type="button" class="input-button" id="step_one_btn" value="Get A Quote" onclick="steps(1)">
        </div>

    </div>



    <div class="form-section-group">
        <p>Get a Free</p>
        <p class="form-bold-heading">
            <span>Instant Quote</span>
        </p>

        <div>
            <label class="label-ship" for="myInput">YEAR</label>
            <div>
                <input type="text" id="myInput3" class="input-ship" name="year" placeholder="Select an option" />
                <div id="myList3">
                    <?php
                    $end_year = 1985;
                    $current_year = date("Y");
                     for($i= $current_year; $i > $end_year; $i--){
                        echo '<div data-value="'.$i.'">'.$i.'</div>';
                    }
                    ?>

                </div>
            </div>
        </div>

        <div>
            <label class="label-ship" for="myInput">MAKE</label>
            <div>
                <input type="text" id="myInput1" class="input-ship" name="make" placeholder="Select an option" />
                <div id="myList1">
                <?php 
                $make_query = "SELECT * FROM make";
                $result = mysqli_query($con, $make_query) or die("make query failed");
                foreach($result as $make){; ?>
                <div data-value="<?php echo $make['make'];?>" value="<?php echo $make['id'] ;?>"><?php echo $make['make'];?></div>
                <?php  };
                ?>
                    <div data-value="MotorCycle" value="">MotorCycle</div>
                    <div data-value="ATV" value="">ATV</div>
                </div>
            </div>
        </div>

        <div>
            <label class="label-ship" for="models_small">MODELS</label>
            <div>
                <input type="text" id="models_input_small" name="models" class="input-ship"
                    placeholder="Select Model or Type" />
                <div id="models_list_small">                     
                </div>
            </div>
        </div>
        <div id="vehicle_size_div">
            <label class="label-ship" for="vehicle_size_input">Vehicle Size</label>
            <div>
                <input type="text" id="vehicle_size_input" class="input-ship" name="vehicle_size"
                    placeholder="Select an option" />
                <div id="vehicle_size_list">
                    <div style="display:flex; flex-wrap:wrap;" id="vehicle_list_div">
                    <div data-value="Small Car"><img src="<?=get_img()?>cars_icon/small-car.png" alt="small car" width="64px" height="25px" loading="lazy">Small Car
                        </div>
                        <div data-value="Midsize Car"><img src="<?=get_img()?>cars_icon/midsize-car.png" alt="midsize-car" width="64px" height="25px" loading="lazy">Midsize Car
                        </div>
                        <div data-value="Large Car"><img src="<?=get_img()?>cars_icon/large-car.png" alt="large-car" width="64px" height="25px" loading="lazy">Large Car
                        </div>
                        <div data-value="Sports Car"><img src="<?=get_img()?>cars_icon/sports-car.png" alt="sports-car" width="64px" height="25px" loading="lazy">Sports Car
                        </div>
                        <div data-value="Small SUV"><img src="<?=get_img()?>cars_icon/small-suv.png" alt="small-suv" width="64px" height="25px" loading="lazy">Small SUV
                        </div>
                        <div data-value="Midsize SUV"><img src="<?=get_img()?>cars_icon/midsize-suv.png" alt="midsize-suv" width="64px" height="25px" loading="lazy">Midsize SUV
                        </div>
                        <div data-value="Large SUV"><img src="<?=get_img()?>cars_icon/large-suv.png" alt="large-suv" width="64px" height="25px" loading="lazy">Large SUV
                        </div>
                        <div data-value="HyperCar"><img src="<?=get_img()?>cars_icon/hypercar.png" alt="hypercar" width="64px" height="25px" loading="lazy">HyperCar
                        </div>
                        <div data-value="Mini-van"><img src="<?=get_img()?>cars_icon/mini-van.png" alt="mini-van" width="64px" height="25px" loading="lazy">Mini-van
                        </div>
                        <div data-value="Medium Pickup"><img src="<?=get_img()?>cars_icon/medium-pickup.png" alt="medium-pickup" width="64px" height="25px" loading="lazy">Medium Pickup</div>
                        <div data-value="Large Pickup"><img src="<?=get_img()?>cars_icon/large-pickup.png" alt="Large Pickup" width="64px" height="25px" loading="lazy">Large Pickup</div>
                        <div data-value="FullSize Van"><img src="<?=get_img()?>cars_icon/fullsize-van.png" alt="FullSize Van" width="64px" height="25px" loading="lazy">FullSize Van</div>
                        <div data-value="Travel Trailer"><img src="<?=get_img()?>cars_icon/travel-trailer.png" alt="Travel Trailer" width="64px" height="25px" loading="lazy">Travel Trailer</div>
                        <div data-value="Boat Trailer"><img src="<?=get_img()?>cars_icon/boat-trailer.png" alt="Boat Trailer" width="64px" height="25px" loading="lazy">Boat Trailer</div>
                        <div data-value="Golf Cart"><img src="<?=get_img()?>cars_icon/golf-cart.png" alt="Golf Cart" width="64px" height="25px" loading="lazy">Golf Cart</div>
                        <div data-value="Dually Pickup"><img src="<?=get_img()?>cars_icon/dually-pickup.png" alt="Dually Pickup" width="64px" height="25px" loading="lazy">Dually Pickup</div>
                        <div data-value="MotorCycle"><img src="<?=get_img()?>cars_icon/motorcycle.png" alt="MotorCycle" width="64px" height="25px" loading="lazy">MotorCycle</div>
                        <div data-value="Other"><img src="<?=get_img()?>cars_icon/others.png" alt="other" width="40px" height="40px" loading="lazy">Other</div>
                    </div>
                </div>
            </div>
        </div>





        <div>
            <label for="" class="label-ship">Vehicle Type</label>
            <div class="wrapper">
                <input type="radio" name="vehicle_type" id="option-3" checked value="Running">
                <input type="radio" name="vehicle_type" id="option-4" value="Not Running">

                <label for="option-3" class="option option-3">
                    <div class="dot"></div>
                    <span>Running</span>
                </label>
                <label for="option-4" class="option option-4">
                    <div class="dot"></div>
                    <span>Not Running</span>
                </label>
            </div>
        </div>

        <div class="button-parent">
            <input type="button" class="input-button" value="Last Step" onclick="steps(2)">
        </div>

    </div>

    <div class="form-section-group">
        <p class="form-bold-heading"><span>Shipping Details</span></p>

        <div>
            <label class=" label-ship" for="username_small">NAME</label>
            <div>
                <input type="text" id="username_small" name="username" class="input-ship" placeholder="Your Name" />

            </div>
        </div>
        <div>
            <label class=" label-ship" for="usermail_small">SEND A QUOTE TO THIS EMAIL</label>
            <div>
                <input type="email" id="usermail_small" name="user_email" class="input-ship" placeholder="Your Email" />

            </div>
        </div>
        <div>
            <label class="label-ship" for="pick_up_date_small">FIRST AVAILABLE PICK-UP DATE</label>
            <div>
                <input type="date" id="pick_up_date_small" name="pick_up_date" class="input-ship" min="<?php echo date('Y-m-d');?>" placeholder="Select Date" />

            </div>
        </div>
        <div>

            <div>
                <label class="label-ship" for="phone">PHONE NUMBER</label>

                <input class="input-ship" id="phone_small" type="text" name="phone_number" pattern="\(\d{3}\)\s\d{3}-\d{4}"
                    inputmode="decimal" title="Enter a valid phone number." placeholder="( _ _ _ ) _ _ _ - _ _ _ _"
                    maxlength="15" onkeydown="phoneNumberformatter()" required>

            </div>
        </div>
        <input type="hidden" id="path_distance" name="path_distance" value="">
        <div class="button-parent">
            <input type="submit" class="input-button" value="Last Step" name="submit">
        </div>

    </div>
    <div class="customer-face-section" style="display:flex;justify-content:center;align-items:center;">
                    <img src="<?= get_img() ?>customer-faces.png" width="76px" height="40px" loading="lazy" alt="Rapid Auto Shipping" />
                    <p style="color:#808080; font-size:12px; text-align:center;">
                        <span style="color:#ff5722;font-weight:bold;"> 2035</span>
                        people shipped using<br>
                        <span style="color:#ff5722;font-weight:bold;"> Rapid Auto Shipping</span>
                        last week
                    </p>

                </div>

</form>
