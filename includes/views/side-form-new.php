<form action="<?=home_path()?>get_qoute" class="form-section" method="post" onsubmit="return final_validation_side()">

    <div class="form-section-group_side active_form_side">
        <p>Get a Free</p>
        <p class="form-bold-heading"><span>Instant Quote</span></p>


        <div>
            <label class="label-ship" for="from">Ship From</label>
            <div>
                <input type="text" id="from" class="input-ship" placeholder="Address or City" name="ship_from">
            </div>
        </div>

        <div>
            <label for="to" class="label-ship">Ship To</label>
            <div>
                <input type="text" class="input-ship" id="to" placeholder="Address or City" name="ship_to">

            </div>
        </div>

        <div>
            <label for="" class="label-ship">Transport Method</label>
            <div class="wrapper">

                <input type="radio" name="transporttype" id="open" checked value="Open">
                <input type="radio" name="transporttype" id="enclosed" value="Enclosed">
                <label for="open" class="option open">
                    <div class="dot"></div>
                    <span>Open</span>
                </label>
                <label for="enclosed" class="option enclosed">
                    <div class="dot"></div>
                    <span>Enclosed</span>
                </label>
            </div>
        </div>

        <div class="button-parent">
            <input type="button" class="input-button" id="step_one_btn_side" value="Get A Quote" onclick="steps_side(1)">
        </div>

    </div>



    <div class="form-section-group_side">
        <p>Get a Free</p>
        <p class="form-bold-heading">
            <span>Instant Quote</span>
        </p>

        <div>
            <label class="label-ship" for="year_side">YEAR</label>
            <div>
                <input type="text" id="year_side_input" class="input-ship" name="year" placeholder="Select an option"/>
                <div id="yearList">
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
            <label class="label-ship" for="make_side_input">MAKE</label>
            <div>
                <input type="text" id="make_side_input" class="input-ship" name="make" placeholder="Select an option" />
                <div id="make_side_list">
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
            <label class="label-ship" for="models_side">MODELS</label>
            <div>
                <input type="text" id="models" name="models" class="input-ship" placeholder="Select Model or Type"/>
                <div id="models_list_side">                     
                </div>
            </div>
        </div>
        <div id="vehicle_side_div">
            <label class="label-ship" for="vehicle_side_size_input">Vehicle Size</label>
            <div>
                <input type="text" id="vehicle_side_size_input" class="input-ship" name="vehicle_size"
                    placeholder="Select an option" />
                <div id="vehicle_side_size_list">
                    <div style="display:flex; flex-wrap:wrap;" id="vehicle_side_list_div">
                        <div data-value="Small Car"><img src="<?=get_img()?>cars_icon/small-car.png" alt="small car">Small Car
                        </div>
                        <div data-value="Midsize Car"><img src="<?=get_img()?>cars_icon/midsize-car.png" alt="midsize-car">Midsize Car
                        </div>
                        <div data-value="Large Car"><img src="<?=get_img()?>cars_icon/large-car.png" alt="large-car">Large Car
                        </div>
                        <div data-value="Sports Car"><img src="<?=get_img()?>cars_icon/sports-car.png" alt="sports-car">Sports Car
                        </div>
                        <div data-value="Small SUV"><img src="<?=get_img()?>cars_icon/small-suv.png" alt="small-suv">Small SUV
                        </div>
                        <div data-value="Midsize SUV"><img src="<?=get_img()?>cars_icon/midsize-suv.png" alt="midsize-suv">Midsize SUV
                        </div>
                        <div data-value="Large SUV"><img src="<?=get_img()?>cars_icon/large-suv.png" alt="large-suv">Large SUV
                        </div>
                        <div data-value="HyperCar"><img src="<?=get_img()?>cars_icon/hypercar.png" alt="hypercar">HyperCar
                        </div>
                        <div data-value="Mini-van"><img src="<?=get_img()?>cars_icon/mini-van.png" alt="mini-van">Mini-van
                        </div>
                        <div data-value="Medium Pickup"><img src="<?=get_img()?>cars_icon/medium-pickup.png" alt="medium-pickup">Medium Pickup</div>
                        <div data-value="Large Pickup"><img src="<?=get_img()?>cars_icon/large-pickup.png" alt="Large Pickup">Large Pickup</div>
                        <div data-value="FullSize Van"><img src="<?=get_img()?>cars_icon/fullsize-van.png" alt="FullSize Van">FullSize Van</div>
                        <div data-value="Travel Trailer"><img src="<?=get_img()?>cars_icon/travel-trailer.png" alt="Travel Trailer">Travel Trailer</div>
                        <div data-value="Boat Trailer"><img src="<?=get_img()?>cars_icon/boat-trailer.png" alt="Boat Trailer">Boat Trailer</div>
                        <div data-value="Golf Cart"><img src="<?=get_img()?>cars_icon/golf-cart.png" alt="Golf Cart">Golf Cart</div>
                        <div data-value="Dually Pickup"><img src="<?=get_img()?>cars_icon/dually-pickup.png" alt="Dually Pickup">Dually Pickup</div>
                        <div data-value="MotorCycle"><img src="<?=get_img()?>cars_icon/motorcycle.png" alt="MotorCycle">MotorCycle</div>
                        <div data-value="Other"><img src="<?=get_img()?>cars_icon/others.png" alt="other">Other</div>
                    </div>
                </div>
            </div>
        </div>
        

        <div>
            <label for="" class="label-ship">Vehicle Type</label>
            <div class="wrapper">
                <input type="radio" name="vehicle_type" id="running" checked value="Running">
                <input type="radio" name="vehicle_type" id="not_running" value="Not Running">

                <label for="running" class="option running">
                    <div class="dot"></div>
                    <span>Running</span>
                </label>
                <label for="not_running" class="option not_running">
                    <div class="dot"></div>
                    <span>Not Running</span>
                </label>
            </div>
        </div>

        <div class="button-parent">
            <input type="button" class="input-button" value="Last Step" onclick="steps_side(2)">
        </div>

    </div>

    <div class="form-section-group_side">
        <p class="form-bold-heading"><span>Shipping Details</span></p>

        <div>
            <label class=" label-ship" for="username_side">NAME</label>
            <div>
                <input type="text" id="username_side" name="username" class="input-ship" placeholder="Your Name" />

            </div>
        </div>
        <div>
            <label class=" label-ship" for="usermail_side">SEND A QUOTE TO THIS EMAIL</label>
            <div>
                <input type="email" id="usermail_side" name="user_email" class="input-ship" placeholder="Your Email" />

            </div>
        </div>
        <div>
            <label class="label-ship" for="pick_up_date_side">FIRST AVAILABLE PICK-UP DATE</label>
            <div>
                <input type="date" id="pick_up_date_side" name="pick_up_date" class="input-ship" min="<?php echo date('Y-m-d');?>" placeholder="Select Date" />

            </div>
        </div>
        <div>

            <div>
                <label class="label-ship" for="phone_side">PHONE NUMBER</label>

                <input class="input-ship" id="phone_side" type="text" name="phone_number" pattern="\(\d{3}\)\s\d{3}-\d{4}" inputmode="decimal" title="Enter a valid phone number." placeholder="( _ _ _ ) _ _ _ - _ _ _ _"   maxlength="15" onkeydown="phoneNumberformatterSide()">

            </div>
        </div>
        <input type="hidden" id="path_distance_side" name="path_distance" value="">
        <div class="button-parent">
            <input type="submit" class="input-button" value="Last Step" name="submit">
        </div>

    </div>

</form>

           <div class="side_form_new_call_btn_div">
             <button class="side_form_new_call_btn"><a href="tel:+1 833-233-4447"> Call us : +1 833-233-4447</a></button>
             </div>