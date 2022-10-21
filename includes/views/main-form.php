<div class="full-line-bg" data-aos="zoom-in">
    <!-- <div class="color-div">  </div> -->
    <div class="full-line">

        <div class="line-1 line-101" id="line1">
            <div class="color-div-01" id="colordiv01"> </div>
            <div>
                <p class="step-number" id="des1">1</p>
            </div>
            <p class="step-name">Destination</p>

            <div class="line-02">
                <div>
                    <p class="step-number-2" id="des2">2</p>
                </div>
                <p class="step-name-2 ">Vehicle</p>
            </div>

        </div>



        <div class="line-13 line-103" id="line3">
            <div class="color-div-02" id="colordiv02"> </div>

            <div>
                <p class="step-number" id="des3">3</p>
            </div>
            <p class="step-name">Date</p>



        </div>



    </div>

    <div class="first-sec-heading">
        <p>Ship Your Car Now</p>
    </div>

    <form action="" class="form-1-div">

        <!-- here first step of form -->
        <div class="form-1-div-child" id="regform1">

            <input type="text" onKeyUp="validateInput()" id="zipCode" placeholder="Ship From (Zip-code)">


            <img src=" <?= get_img() ?>icons8-left-and-right-arrows-80 (1) 1.png" alt="">

            <input type="text" onKeyUp="ValidateInput()" id="ZipCode" placeholder="Ship To (Zip-code)">

            <div class="button">
                <button type="button" id="next1">Next</button>
            </div>

        </div>
        <!-- here 2nd step of form -->
        <div class="form-1-div-child " id="regform2">

            <select name="" id="">
                <option>Vehicle Year</option>
                <option>2000</option>
                <option>2001</option>
                <option>2005</option>
            </select>
            <select name="" id="">
                <option>Vehicle Make</option>
                <option>2000</option>
                <option>2001</option>
                <option>2005</option>
            </select>
            <select name="" id="">
                <option>Vehicle Model</option>
                <option>2000</option>
                <option>2001</option>
                <option>2005</option>
            </select>
            <select name="" id="">
                <option>Vehicle Runs</option>
                <option>2000</option>
                <option>2001</option>
                <option>2005</option>
            </select>







            <div class="button">
                <button type="button" id="back1">Previous</button>

                <button type="button" id="next2">Next</button>
            </div>



        </div>
        <!-- here 3rd step of form -->
        <div class="form-1-div-child" id="regform3">

            <input type="text" required placeholder="Name">
            <input type="text" placeholder="Email Id">
            <input type="text" placeholder="Number">


            <div class="button">
                <button type="button" id="back2">Previous</button>
                <button type="button" id="next3">Submit</button>
            </div>

        </div>

    </form>
</div>