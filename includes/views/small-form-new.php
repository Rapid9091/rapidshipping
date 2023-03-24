<form action="<?=home_path()?>get_qoute" class="form-section" method="post">

    <img class="bb-img" src="<?= get_img()?>state-to-state/bb.png" alt="">


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
            <input type="button" class="input-button" value="Get A Quote" onclick="steps(1)">
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
                <input type="text" id="myInput3" class="input-ship" name="year" placeholder="Select an option"/>
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
                    <div data-value="Abarth">Abarth</div>
                    <div data-value="Ac">Ac</div>
                    <div data-value="Ace">Ace</div>
                    <div data-value="Acura">Acura</div>
                    <div data-value="Alfa Romeo">Alfa Romeo</div>
                    <div data-value="Allard">Allard</div>
                    <div data-value="Alphina">Alphina</div>
                    <div data-value="Alvis">Alvis</div>
                    <div data-value="AM General">AM General</div>
                    <div data-value="AMC">AMC</div>
                    <div data-value="American Motors(AMC)">American Motors(AMC)</div>
                    <div data-value="Armstrong Siddeley">Armstrong Siddeley</div>
                    <div data-value="Aston Martin">Aston Martin</div>
                    <div data-value="Auburn">Auburn</div>
                    <div data-value="Audi">Audi</div>
                    <div data-value="Austin">Austin</div>
                    <div data-value="Austin-Healey">Austin-Healey</div>
                    <div data-value="Autobianchi">Autobianchi</div>
                    <div data-value="Avanti">Avanti</div>
                    <div data-value="Beijing">Beijing</div>
                    <div data-value="Bentley">Bentley</div>
                    <div data-value="Berkeley">Berkeley</div>
                    <div data-value="Bitter">Bitter</div>
                    <div data-value="Bizzarrini">Bizzarrini</div>
                    <div data-value="BMW">BMW</div>
                    <div data-value="Bristol">Bristol</div>
                    <div data-value="Bugatti">Bugatti</div>
                    <div data-value="Buick">Buick</div>
                    <div data-value="Cadillac">Cadillac</div>
                    <div data-value="California">California</div>
                    <div data-value="Cartercar">Cartercar</div>
                    <div data-value="Chalmers-detroit">Chalmers-detroit</div>
                    <div data-value="Chandler">Chandler</div>
                    <div data-value="Checker">Checker</div>
                    <div data-value="Chevrolet">Chevrolet</div>
                    <div data-value="Chrysler">Chrysler</div>
                    <div data-value="Citroen">Citroen</div>
                    <div data-value="Cord">Cord</div>
                    <div data-value="Daewoo">Daewoo</div>
                    <div data-value="DAF">DAF</div>
                    <div data-value="Daihatsu">Daihatsu</div>
                    <div data-value="Daimler">Daimler</div>
                    <div data-value="De Tomaso">De Tomaso</div>
                    <div data-value="Delahaye">Delahaye</div>
                    <div data-value="DeSoto">DeSoto</div>
                    <div data-value="DKW">DKW</div>
                    <div data-value="Dodge">Dodge</div>
                    <div data-value="Duesenberg">Duesenberg</div>
                    <div data-value="Durant">Durant</div>
                    <div data-value="E-M-F">E-M-F</div>
                    <div data-value="Eagle">Eagle</div>
                    <div data-value="Erskine">Erskine</div>
                    <div data-value="Essex">Essex</div>
                    <div data-value="Fairthorpe">Fairthorpe</div>
                    <div data-value="Ferrari">Ferrari</div>
                    <div data-value="FIAT">FIAT</div>
                    <div data-value="Fisker">Fisker</div>
                    <div data-value="Ford">Ford</div>
                    <div data-value="Franklin">Franklin</div>
                    <div data-value="Freightliner">Freightliner</div>
                    <div data-value="GAZ">GAZ</div>
                    <div data-value="Genesis">Genesis</div>
                    <div data-value="Geo">Geo</div>
                    <div data-value="Ginetta">Ginetta</div>
                    <div data-value="GMC">GMC</div>
                    <div data-value="Holden">Holden</div>
                    <div data-value="Honda">Honda</div>
                    <div data-value="HRG">HRG</div>
                    <div data-value="Hudson">Hudson</div>
                    <div data-value="Humber">Humber</div>
                    <div data-value="Hummer">Hummer</div>
                    <div data-value="Hupmobile">Hupmobile</div>
                    <div data-value="Hyundai">Hyundai</div>
                    <div data-value="Infiniti">Infiniti</div>
                    <div data-value="Innoceni">Innoceni</div>
                    <div data-value="Isuzu">Isuzu</div>
                    <div data-value="Italdesign">Italdesign</div>
                    <div data-value="Iaguar">Iaguar</div>
                    <div data-value="Jeep">Jeep</div>
                    <div data-value="Jensen">Jensen</div>
                    <div data-value="Karma">Karma</div>
                    <div data-value="Kia">Kia</div>
                    <div data-value="Lada">Lada</div>
                    <div data-value="Lamborghini">Lamborghini</div>
                    <div data-value="Lancia">Lancia</div>
                    <div data-value="Land Rover">Land Rover</div>
                    <div data-value="Lexus">Lexus</div>
                    <div data-value="Marcos">Marcos</div>
                    <div data-value="Marmon">Marmon</div>
                    <div data-value="Marquette">Marquette</div>
                    <div data-value="Maserati">Maserati</div>
                    <div data-value="Maxwell">Maxwell</div>
                    <div data-value="Maybach">Maybach</div>
                    <div data-value="Mazda">Mazda</div>
                    <div data-value="McLaren">McLaren</div>
                    <div data-value="Marcedes-Benz">Marcedes-Benz</div>
                    <div data-value="Marcedes-Simplex">Marcedes-Simplex</div>
                    <div data-value="Mercury">Mercury</div>
                    <div data-value="Merkur">Merkur</div>
                    <div data-value="MG">MG</div>
                    <div data-value="MINI">MINI</div>
                    <div data-value="Mitsubishi">Mitsubishi</div>
                    <div data-value="Monteverdi">Monteverdi</div>
                    <div data-value="Moretti">Moretti</div>
                    <div data-value="Morgan">Morgan</div>
                    <div data-value="Nash">Nash</div>
                    <div data-value="Nissan">Nissan</div>
                    <div data-value="NSU">NSU</div>
                    <div data-value="Opel">Opel</div>
                    <div data-value="Overland">Overland</div>
                    <div data-value="Owensboro">Owensboro</div>
                    <div data-value="Packard">Packard</div>
                    <div data-value="Panoz">Panoz</div>
                    <div data-value="Peerless">Peerless</div>
                    <div data-value="Peugeot">Peugeot</div>
                    <div data-value="Pierce-Arrow">Pierce-Arrow</div>
                    <div data-value="Pininfarina">Pininfarina</div>
                    <div data-value="Plymouth">Plymouth</div>
                    <div data-value="Polestar">Polestar</div>
                    <div data-value="Pontiac">Pontiac</div>
                    <div data-value="Porsche">Porsche</div>
                    <div data-value="Ram">Ram</div>
                    <div data-value="Rambler">Rambler</div>
                    <div data-value="Reliant">Reliant</div>
                    <div data-value="Renault">Renault</div>
                    <div data-value="REO">REO</div>
                    <div data-value="Rivian">Rivian</div>
                    <div data-value="Rolls-Royce">Rolls-Royce</div>
                    <div data-value="Rover">Rover</div>
                    <div data-value="Saab">Saab</div>
                    <div data-value="Scion">Scion</div>
                    <div data-value="Seat">Seat</div>
                    <div data-value="Simca">Simca</div>
                    <div data-value="Skoda">Skoda</div>
                    <div data-value="Smart">Smart</div>
                    <div data-value="Sterling">Sterling</div>
                    <div data-value="Steyr">Steyr</div>
                    <div data-value="Stoughton">Stoughton</div>
                    <div data-value="Studebaker-Garford">Studebaker-Garford</div>
                    <div data-value="Stutz">Stutz</div>
                    <div data-value="Subaru">Subaru</div>
                    <div data-value="Sunbeam">Sunbeam</div>
                    <div data-value="Suzuki">Suzuki</div>
                    <div data-value="Talbot">Talbot</div>
                    <div data-value="Tatra">Tatra</div>
                    <div data-value="Terraplane">Terraplane</div>
                    <div data-value="Tesla">Tesla</div>
                    <div data-value="Toyota">Toyota</div>
                    <div data-value="Trabant">Trabant</div>
                    <div data-value="Triumph">Triumph</div>
                    <div data-value="TVR">TVR</div>
                    <div data-value="Vauxhall">Vauxhall</div>
                    <div data-value="Velie">Velie</div>
                    <div data-value="Volkswagen">Volkswagen</div>
                    <div data-value="Volvo">Volvo</div>
                    <div data-value="Waltham-Orient">Waltham-Orient</div>
                    <div data-value="Warburg">Warburg</div>
                    <div data-value="Whippet">Whippet</div>
                    <div data-value="Willys">Willys</div>
                    <div data-value="Willys-Knight">Willys-Knight</div>
                    <div data-value="Willys-Overland">Willys-Overland</div>
                    <div data-value="Windsor">Windsor</div>
                    <div data-value="Yugo">Yugo</div>
                    <div data-value="Zagato">Zagato</div>
                    <div data-value="Zastava">Zastava</div>
                    <div data-value="ZAZ">ZAZ</div>
                    <div data-value="ZIL">ZIL</div>
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
            <input type="button" class="input-button" value="Last Step" onclick="steps(2)">
        </div>

    </div>

    <div class="form-section-group">
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
            <input type="submit" class="input-button" value="Last Step">
        </div>

    </div>

</form>