<form action="<?=home_path()?>get_qoute" class="form-section" method="post">

    <img class="bb-img" src="<?= get_img()?>state-to-state/bb.png" alt="">


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
            <input type="button" class="input-button" value="Get A Quote" onclick="steps_side(1)">
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
            <label class="label-ship" for="myInput">MAKE</label>
            <div>
                <input type="text" id="myInput1" class="input-ship" name="make" placeholder="Select an option" />
                <div id="myList1">
                    <div data-value="Abarth">Abarth</div>
                    <div data-value="Ac">Ac</div>
                    <div data-value="Ace">Ace</div>
                    <div data-value="Acura">Acura</div>
                    <div data-value="Alfa Romeo">Alfa Romeo</div>
                    <div data-value="Allard">Allard</div>
                    <div data-value="Alphina">Alphina</div>
                    <div data-value="Alvis">Alvis</div>
                    <div data-value="AM General">AM General</div>
                    <div data-value="AM General">AM General</div>
                    
                </div>
            </div>
        </div>

        <div>
            <label class="label-ship" for="myInput">MODELS</label>
            <div>
                <input type="text" id="myInput2" name="models" class="input-ship" placeholder="Type Manually"/>
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
            <input type="button" class="input-button" value="Last Step" onclick="steps_side(2)">
        </div>

    </div>

    <div class="form-section-group_side">
        <p class="form-bold-heading"><span>Shipping Details</span></p>

        <div>
            <label class=" label-ship" for="myInput">NAME</label>
            <div>
                <input type="text" id="myInput1" name="username" class="input-ship" placeholder="Your Name" />

            </div>
        </div>
        <div>
            <label class=" label-ship" for="myInput">SEND A QUOTE TO THIS EMAIL</label>
            <div>
                <input type="email" id="myInput1" name="user_email" class="input-ship" placeholder="Your Email" />

            </div>
        </div>
        <div>
            <label class="label-ship" for="myInput">FIRST AVAILABLE PICK-UP DATE</label>
            <div>
                <input type="date" id="myInput2" name="pick_up_date" class="input-ship" placeholder="Select Date" />

            </div>
        </div>
        <div>

            <div>
                <label class="label-ship" for="phone">PHONE NUMBER</label>

                <input class="input-ship" id="phone" type="text" name="phone_number" pattern="\(\d{3}\)\s\d{3}-\d{4}" inputmode="decimal" title="Enter a valid phone number." placeholder="( _ _ _ ) _ _ _ - _ _ _ _"   maxlength="15" onkeydown="phoneNumberformatter()">

            </div>
        </div>
        <input type="hidden" id="path_distance" name="path_distance" value="">
        <div class="button-parent">
            <input type="submit" class="input-button" value="Last Step" name="submit">
        </div>

    </div>

</form>