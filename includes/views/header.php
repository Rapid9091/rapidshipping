<!-- ------------------------------- -->
<!-- ----------offer popup css----------- -->
<!-- ------------------------------- -->

<style>
    #offer_container {
        position: fixed relative;
        top: 15%;
        left: 50%;
        transform: translateX(-50%);
        overflow: hidden;
        height: 400px;
        width: min(700px, 90%);
        border: none;
        border-radius: 14px;

    }

    dialog::backdrop {
        background-color: rgba(0, 0, 0, 0.5);
    }

    .offer-container {
        display: grid;
        place-items: center;
        z-index: 1000;
    }

    .offer-box-img>img {
        height: 100%;
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .offer-container-btn>button:first-child {
        position: absolute;
        top: 73.4%;
        right: -4%;
        background-color: #e6e6e600;
        transform: translate(-50%, -50%);
        border: none;
        padding: 11px 44px;
        outline: none;
    }

    .offer-container-btn>button>a {
        color: transparent;
    }

    .offer-box-cut-btn {
        position: absolute;
        top: 7%;
        right: 0%;
        transform: translate(-50%, -50%);
        padding: 2px 8px;
        border-radius: 50%;
        background-color: var(--nav-color);
        border: none;
        color: var(--color-bg-3);
        font-size: 18px;
        cursor: pointer;
    }

    .sub-menu-child>ul>li {
        display: flex;
        align-items: center;
    }

    .sub-menu-child>ul>li>ion-icon {

        color: #ff5227;
    }
</style>

<header class="header">
    <!-- write heder code here -->
    <!-- here is global nav -->
    <div class="header-nav">
        <!-- onclick="window.location.href='<?php echo home_path() ?>' -->
        <!-- here logo of header-nav  -->
        <div class="header-logo">
            <a href="<?= home_path() ?>"><img loading="lazy" src=" <?= get_img() ?>Untitled-1-Recovered.png" alt="Rapid Auto Shipping - Logo" /></a>
        </div>
        <!-- -home-service-etc -->
        <div class="header-menu" id="header-menu">
            <ul>
                <li>
                    <a href="<?= home_path() ?>">Home</a>
                </li>
                <li>
                    <a href="<?= home_path() ?>services">Services</a>
                </li>
                <li>
                    <a href="<?= home_path() ?>cars">Cars</a>
                    <div class="sub-menu sub-menu-car">
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/nissan">Nissan</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/chrysler">Chrysler</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/dodge">Dodge</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/toyota">Toyota</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/chevrolet">Chevrolet</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/ford">Ford</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/mazda">Mazda</a>
                                </li>
                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars/honda">Honda</a>
                                </li>

                                <li>
                                    <ion-icon name="car"></ion-icon>
                                    <a href="<?= home_path() ?>cars">Explore More ..</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="<?= get_state() ?>">Shipping States</a>
                    <div class="sub-menu">
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/alabama" rel="dofollow">Alabama</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/alaska" rel="dofollow">Alaska</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/arizona" rel="dofollow">Arizona</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/arkansas" rel="dofollow">Arkansas</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/california" rel="dofollow">California</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/colorado" rel="dofollow">Colorado</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/connecticut" rel="dofollow">Connecticut</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/delaware" rel="dofollow">Delaware</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/wisconsin-wi" rel="dofollow">Wisconsin</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/florida" rel="dofollow">Florida</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/georgia" rel="dofollow">Georgia</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/hawaii" rel="dofollow">Hawaii</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/idaho" rel="dofollow">Idaho</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/illinois" rel="dofollow">Illinois</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/indiana" rel="dofollow">Indiana</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/iowa" rel="dofollow">Iowa</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/kansas" rel="dofollow">Kansas</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/wyoming-wy" rel="dofollow">Wyoming</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/kentucky" rel="dofollow">Kentucky</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/louisiana" rel="dofollow">Louisiana</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/maine" rel="dofollow">Maine</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/maryland" rel="dofollow">Maryland</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/massachusetts" rel="dofollow">Massachusetts</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/michigan" rel="dofollow">Michigan</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/minnesota" rel="dofollow">Minnesota</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/mississippi" rel="dofollow">Mississippi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/missouri">Missouri</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/montana">Montana</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/nebraska">Nebraska</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/nevada">Nevada</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/new-hampshire">New Hampshire</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/new-jersey">New Jersey</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/new-mexico">New Mexico</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/new-york">New York</a>
                                </li>

                            </ul>
                        </div>
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/north-carolina">North Carolina</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/north-dakota">North Dakota</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/ohio">Ohio</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/oklahoma">Oklahoma</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/oregon">Oregon</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/pennsylvania">Pennsylvania</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/rhode-island">Rhode Island</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/south-carolina">South Carolina</a>
                                </li>

                            </ul>
                        </div>
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/south-dakota">South Dakota</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/tennessee-tn">Tennessee</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/texas-tx">Texas</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/utah-ut">Utah</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/vermont-vt">Vermont</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/virginia-va">Virginia</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/washington-wa">Washington</a>
                                </li>
                                <li>
                                    <ion-icon name="location-sharp"></ion-icon>
                                    <a href="<?= get_state() ?>/west-virginia-wv">West Virginia</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </li>
                <li class="blog-tab-view">
                    <a href="<?= home_path() ?>blogs">Blog</a>
                    <div class="sub-menu sub-menu-blog">
                        <div class="sub-menu-child">
                            <ul>
                                <li>
                                    <ion-icon name="create-sharp"></ion-icon><a href="<?= home_path() ?>blogs/autoshipping-companies-in-arkansas-2022">Autoshipping companies in arkansas 2022</a>
                                </li>
                                <li>
                                    <ion-icon name="create-sharp"></ion-icon><a href="<?= home_path() ?>blogs/cheapest-way-to-ship-a-car">Cheapest way to ship a car</a>
                                </li>
                                <li>
                                    <ion-icon name="create-sharp"></ion-icon><a href="<?= home_path() ?>blogs/state-to-state-transport">State to state transport</a>
                                </li>
                                <li>
                                    <ion-icon name="create-sharp"></ion-icon><a href="<?= home_path() ?>blogs/shipping-car-to-mexico">Shipping car to Mexico</a>
                                </li>
                                <li>
                                    <ion-icon name="create-sharp"></ion-icon><a href="<?= home_path() ?>blogs">Let's read more .. </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                <!-- here this div use for calling  -->
            </ul>
            <button onclick="window.location.href=' tel:+1 833-233-4447'" class="number heart" style="cursor:pointer;">
                <p data-aos="zoom-out"><i class="fa-solid fa-phone"></i>+1 833-233-4447</p>
            </button>

        </div>
        <!-- menubar only visible for 650 vw  -->
        <div class="hamburger" id="hamburger" onclick="mobileHeaderShow()">
            <i class="fas fa-bars"></i>
        </div>
        <div class="hamburger-cross" id="hamburger-cross" onclick="mobileHeaderHide()">
            <i class="fas fa-times"></i>
        </div>
    </div>
</header>

<!-- ------------------------------- -->
<!-- ---- dialog box on opening site ---- -->
<!-- ------------------------------- -->

<style>
    #open_offer_container {
        top: 15%;
        left: 50%;
        transform: translateX(-50%);
        overflow: hidden;
        height: 400px;
        width: min(700px, 90%);
        border: none;
        border-radius: 14px;
    }

    .open_offer_container_img>img {
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0%;
    }

    .open_offer_container_btns>button:first-child {
        position: absolute;
        top: 5%;
        right: 1%;
        background-color: #fff;
        border: none;
        border-radius: 14px;
        padding: 2px 11px;
        outline: none;
        font-size: 20px;
        cursor: pointer;
    }

    .open_offer_container_last_btns {
        position: absolute;
        top: 27%;
        background-color: transparent;
        right: 10%;
        border: none;
        outline: none;
    }

    .open_offer_container_last_btns>a {
        padding: 23px 92px;
    }

    @media screen and (max-width:600px) {
        dialog {
            top: 34% !important;
            height: 275px !important;
            width: min(660px, 90%) !important;
        }

        .offer-container-btn>button:first-child {
            right: -24% !important;
        }


    }
</style>


<!-- <dialog id="open_offer_container" class="opening_popup_mobile">
    <div class="open_offer_container">
        <div class="open_offer_container_img">
            <img loading="lazy" src="<?= get_img(); ?>opening_popup.jpeg" alt="offer-section">
        </div>
        <div class="open_offer_container_btns">
            <button onclick="close_open_offer_box()">
                x
            </button>
            <button class="open_offer_container_last_btns">
                <a href="tel:+1-833-233-4447">
                </a>
            </button>
        </div>
    </div>
</dialog> -->


<script>
    var open_offer_container = document.getElementById("open_offer_container");

    if (localStorage.getItem("developerName")) {
        open_offer_container.close();
    } else {
        setTimeout(
            function() {
                open_offer_container.showModal();
                localStorage.setItem("developerName", "satyam");
            }, 30000
        );
    }


    function close_open_offer_box() {
        try {
            open_offer_container.close();
        } catch (e) {}
    }
</script>

<!-- ------------------------------- -->
<!-- --- dialog box on leaving site --- -->
<!-- ------------------------------- -->

<!-- <dialog id="offer_container">
    <div class="offer-container" id="offer-container">
        <div class="offer-box-img">
            <img loading="lazy" src="<?= get_img(); ?>popup_copy.jpg" alt="offer-section">
        </div>
        <div class="offer-container-btn">
            <button><a href="tel:+1833-233-1477">+1833-233-1477</a></button>
            <button class="offer-box-cut-btn" id="offer-box-cut-btn" onclick="offer_box_cut()">X</button>
        </div>
    </div>
</dialog> -->

<!-- ------------------------------- -->
<!-- ---js dialog box on leaving site--- -->
<!-- ------------------------------- -->
<script type="text/javascript">
    var offer_box_cut_btn = document.getElementById('offer-box-cut-btn');

    function addEvent(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    }
    let pop_time = new Date().getMinutes() - 5;
    addEvent(window, "load", function(e) {
        addEvent(document, "mouseout", function(e) {

            var offer_container = document.getElementById('offer_container');

            e = e ? e : window.event;
            var from = e.relatedTarget || e.toElement;
            if (!from || from.nodeName == "HTML") {
                if (pop_time <= new Date().getMinutes() - 5) {
                    offer_container.showModal();
                    pop_time = new Date().getMinutes();
                }
            }
        });
    });
</script>

<script>
    var offer_box_cut_btn = document.getElementById('offer-box-cut-btn');
    var offer_container = document.getElementById('offer_container');
    var offer_container_box = document.getElementById("offer-container");

    function offer_box_cut() {
        try {
            offer_container.close();

        } catch (e) {}
    }
</script>