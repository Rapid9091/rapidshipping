<form action="#" class="form-section">

<img class="bb-img" src="<?=get_img()?>state-to-state/bb.png" alt="">


<div class="form-section-group active-form">
    <p>Get a Free</p>
    <p class="form-bold-heading"><span>Instant Quote</span></p>


    <div>
        <label class="label-ship" for="form">Ship From</label>
        <div>
            <input type="text" id="form_des" class="input-ship" placeholder="Address or City">
        </div>
    </div>

    <div>
        <label for="to" class="label-ship">Ship To</label>
        <div>
            <input type="text" class="input-ship" id="to_des" placeholder="Address or City">

        </div>
    </div>

    <div>
        <label for="" class="label-ship">Transport Method</label>
        <div class="wrapper">

            <input type="radio" name="transporttype" id="option-1" checked value="open">
            <input type="radio" name="transporttype" id="option-2">
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
        <label class="label-ship" for="myInput">MAKE</label>
        <div>
            <input type="text" id="myInput1" class="input-ship" placeholder="Select an option" />
            <div id="myList1">
                <div data-value="Option 1">Option 1</div>
                <div data-value="Option 2">Option 2</div>
                <div data-value="Option 3">Option 3</div>
                <div data-value="Option 4">Option 4</div>
                <div data-value="Optsssabaon 5">Optsssabaon 5</div>
            </div>
        </div>
    </div>

    <div>
        <label class="label-ship" for="myInput">MODELS</label>
        <div>
            <input type="text" id="myInput2" class="input-ship" placeholder="Select an option" disabled />
            <div id="myList2">
                <div data-value="Option 1">Option 1</div>
                <div data-value="Option 2">Option 2</div>
                <div data-value="Option 3">Option 3</div>
                <div data-value="Option 4">Option 4</div>
                <div data-value="Optsssabaon 5">Optsssabaon 5</div>
            </div>
        </div>
    </div>

    <div>
        <label class="label-ship" for="myInput">YEAR</label>
        <div>
            <input type="text" id="myInput3" class="input-ship" placeholder="Select an option" disabled />
            <div id="myList3">
                <div data-value="Option 1">Option 1</div>
                <div data-value="Option 2">Option 2</div>
                <div data-value="Option 3">Option 3</div>
                <div data-value="Option 4">Option 4</div>
                <div data-value="Optsssabaon 5">Optsssabaon 5</div>
            </div>
        </div>
    </div>

    <div>
        <label for="" class="label-ship">Vehicle Type</label>
        <div class="wrapper">
            <input type="radio" name="select2" id="option-3" checked>
            <input type="radio" name="select2" id="option-4">

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
            <input type="text" id="myInput1" class="input-ship" placeholder="Your Name" />

        </div>
    </div>
    <div>
        <label class=" label-ship" for="myInput">SEND A QUOTE TO THIS EMAIL</label>
        <div>
            <input type="text" id="myInput1" class="input-ship" placeholder="Your Email" />

        </div>
    </div>
    <div>
        <label class="label-ship" for="myInput">FIRST AVAILABLE PICK-UP DATE</label>
        <div>
            <input type="text" id="myInput2" class="input-ship" placeholder="Select Date" />

        </div>
    </div>
    <div>

        <div>
            <label class="label-ship" for="phone">PHONE NUMBER</label>

            <input class="input-ship" id="phone" type="text" name="phone" pattern="\(\d{3}\)\s\d{3}-\d{4}" inputmode="decimal" title="Enter a valid phone number." placeholder="( _ _ _ ) _ _ _ - _ _ _ _" required="" autocomplete="off">

        </div>
    </div>

    <div class="button-parent">
        <input type="submit" class="input-button" value="Last Step">
    </div>

</div>

</form>
