<div class="callout-right-container">

    <div class="logo">
        <img src="<?= get_img('Untitled-1-Recovered.png'); ?>" alt="auto transport blogs" srcset="">
    </div>


    <p class="para"> Ship your car with Rapid Auto Shipping at an affordable price, on-time delivery, and hassle-free service. </p>
    <form action="<?= $form_url ?>" class="third-section-form">
        <div style="box-shadow:unset !important; width:100% !important; ">
            <p>Get an Instant Quote </p>
            <p>Call: <a href="tel:+1-833-233-4447">+1 (833) 233-4447</a></p>


            <div class="steps-second-short-form third-section-form-child s-f-3">
                <div class="steps-second-short-form-part">
                    <input name="fname" type="text" placeholder="Name" />
                </div>

                <!-- <div class="steps-second-short-form-part">
                    <input name="lname" type="text" placeholder="Last Name" />
                </div> -->

                <div class="steps-second-short-form-part">

                    <input name="email" type="email" placeholder="E-mail" />
                </div>
                <div class="steps-second-short-form-part">
                    <input name="number" type="number" placeholder="Number" />
                </div>

                <?php
                if (isset($_GET['error'])) {
                    echo "<p style='text-align:center; font-size:14px; color:red; margin-bottom:10px;'>" . $_GET['error'] . "</p>";
                }

                ?>

                <div class="form-button">
                    <button type="submit">Submit</button>
                </div>
                <div class="customer-face-section" style="display:flex;justify-content:center;align-items:center;">
                    <img src="<?= get_img() ?>customer-faces.png" style="height:40px;" alt="auto transport blogs" />
                    <p style="color:#808080; font-size:12px; text-align:center;">
                        <span style="color:#ff5722;font-weight:bold;"> 300104</span>
                        people shipped using<br>
                        <span style="color:#ff5722;font-weight:bold;">Rapid Auto Shipping</span>
                        last week
                    </p>
                </div>
            </div>
        </div>
    </form>

    <div class="callout-right-container-links">
        <a href="<?= home_path(); ?>">Home</a></br>
        <a href="<?= home_path() ?>blogs">Blogs</a></br>
        <a href="<?= get_state() ?>">States</a></br>
        <a href="<?= home_path() ?>services">Services</a></br>
        <a href="<?= home_path() ?>contact-us">Contact us</a></br>
    </div>


    <div class="callout-right-container-other-imp-links">
        <ul>
            <h5 style=""><a href="<?= home_path() ?>blogs" style="color:black;">
                    <span>
                        <ion-icon style="color:vaR(--nav-color);" name="caret-forward-circle-sharp"></ion-icon>
                    </span> Other Useful links
                </a>
            </h5>
        </ul>
    </div>
</div>