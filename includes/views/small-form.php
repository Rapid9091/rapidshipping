<!-- <?php

        // $form_url = home_path() . "services/short_form.php?redirectto=" . current_path();

        ?> -->

<section class="third-section-state">


    <div class="third-section-content">

        <h1 class="third-section-content-heading">

            <?= (isset($NAME)) ? $NAME : "USA" ?></h1>


        <p class="third-section-content-text"> <?= (isset($PARAGRAPH)) ? $PARAGRAPH : "" ?></p>


    </div>

    <form action="#" class="third-section-form">
        <div>
            <p>Get an Instant Quote </p>
            <p>Call: <a href="tel:+1-833-233-4447">+1 (833) 233-4447</a></p>


            <div class="steps-second-short-form third-section-form-child s-f-3">
                <div class="steps-second-short-form-part">
                    <input id="name" type="text" placeholder="Name" />
                </div>

                <div class="steps-second-short-form-part" hidden>
                    <input id="page" type="text" value="<?= current_path() ?>" />
                </div>

                <div class="steps-second-short-form-part">

                    <input id="email" type="email" placeholder="E-mail" />
                </div>
                <div class="steps-second-short-form-part">
                    <input id="number" type="number" placeholder="Number" />
                </div>

                <?php
                if (isset($_GET['error'])) {
                    echo "<p style='text-align:center; font-size:14px; color:red; margin-bottom:10px;'>" . $_GET['error'] . "</p>";
                }

                ?>

                <div class="form-button">
                    <button type="button" onclick="submit_from()">Submit</button>
                </div>
                <div class="customer-face-section" style="display:flex;justify-content:center;align-items:center;">
                    <img src="<?= get_img() ?>customer-faces.png" style="height:40px;" loading="lazy" alt="Rapid Auto Shipping" />
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
    <div class="pop-backgroud" id="pop-up-login">
        <section class="profile-details-section" id="form">
            <img loading="lazy" src="<?= get_img() ?>/cross-mark.png" onclick="hide_pop_up()" class="cross-mark" alt="rapid-auto-shipping" />

            <img loading="lazy" src="<?= get_img() ?>/check-mark.png" alt="rapid-auto-shipping" />
            <h5>Thank You</h5>
            <p>For Getting an Immediate Quote Call <br><a href="<?= home_path(); ?>"><b>Rapid Auto Shipping </b></a> now</p>
            <a href="tel:+1-833-233-4447">+1 (833) 233-4447</a>
        </section>
    </div>
    <script>
        function hide_pop_up() {
            const pop_background = document.getElementById('pop-up-login')
            pop_background.style.display = 'none';
        }

        function show_pop_up() {
            const pop_background = document.getElementById('pop-up-login')
            pop_background.style.display = 'unset';
        }

        hide_pop_up()
    </script>
</section>