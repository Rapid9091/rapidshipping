<?php include_once "../init.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rapid Auto Shipping | Best Auto Transport Company in US</title>
    <?php include head; ?>
    <link rel="stylesheet" href="<?= get_css(); ?>pop-up-form.css">

</head>

<body>
    <div class="pop-backgroud" id="pop-up-login">
        <section class="profile-details-section" id="form">
            <a href="<?= home_path(); ?>"> <img src="<?= get_img() ?>/cross-mark.png" class="cross-mark" /></a>

            <img src="<?= get_img() ?>/check-mark.png" alt="rapid-auto-shipping" />
            <h1>Thank You</h1>
            <p>For contacting <a href="<?= home_path(); ?>"><b>Rapid Auto Shipping</b></a> call us for more information </p>
            <a href="tel:+123 12345678">+1833-233-4447</a>
        </section>
    </div>
    <script >
        const pop_background = document.getElementById('pop-up-login')
        const form = document.getElementById('form')
        const pop_form = document.getElementById('form')

        function pop() {
            pop_background.style.top = "0%";
            form.style.top = "50%";
            form.style.transition = "all .5s";
        }

        const cross = document.getElementById('cross')


        cross.addEventListener("click", function() {
            popdown()
        });

        function popdown() {
            pop_background.style.top = "-100%";
            form.style.top = "50%";
            form.style.transition = "all 0.8s";
            // pop_background.style.transition = "all 0.8s";

        }


        const play = document.getElementById('login_btn')

        play.addEventListener("click", function() {
            playy()
        });



        function playy() {
            var audio = new Audio('./assets/notification.mp3');
            audio.addEventListener("canplaythrough", event => {
                /* the audio is now playable; play it if permissions allow */
                audio.play();
            });
        }
    </script>
</body>

</html>