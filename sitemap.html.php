<?php

include_once "init.php";

?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Sitemap</title>
    <meta name="description" content="rapidautoshipping.com Sitemap" />
    <meta name="keywords" content="rapidautoshipping.com, Sitemap" />
    <meta name="generator" content="Mystemapgenerator.com HTML Sitemap" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <style type="text/css">
        * {
            box-sizing: border-box !important;
        }

        html {
            font-family: sans-serif;
        }

        body {
            background: #fff;
            max-width: 980px;
            margin: 0 auto;
            padding: 5px;
            font: 14px "Arial", Tahoma, sans-serif;
            min-height: 100%;
        }

        h1 {
            font-size: 26px;
        }

        div.footerinfo {
            margin-top: 16px;
            color: #666;
            font-size: 12px;
            text-align: right;
        }

        div.footerinfo * {
            font-size: 12px;
        }

        .sitemap {
            margin: 5em 0
        }

        .primaryNav {
            clear: both;
            width: 100%;
            margin-top: 3em 0
        }

        .primaryNav #home {
            position: absolute;
            margin-top: -3em;
            margin-bottom: 0;
            min-width: 14.5em;
            width: 100%
        }

        .primaryNav #home:before {
            display: none
        }

        .primaryNav #home.long-cell:before {
            display: block;
            position: absolute;
            border-width: 0;
            border-color: #ccc;
            border-style: solid;
            z-index: -1;
            border-left-width: 2px;
            border-top-width: 2px;
            top: 1.375em
        }

        @media screen and (max-width:1111px) {
            .primaryNav #home.long-cell:before {
                left: -40px;
                box-shadow: -10px 0 0 0 #fff
            }
        }

        .primaryNav #home img {
            float: left;
            margin-right: 4px
        }

        .primaryNav ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            position: relative;
            padding-inline-start: 40px
        }

        .primaryNav li {
            flex: 1;
            flex-basis: 14.5em;
            padding-right: 1.25em;
            position: relative;
            min-width: 14.5em
        }

        .primaryNav li ul li {
            min-width: 12.5em
        }

        .primaryNav li ul li ul li {
            min-width: 10.5em
        }

        .primaryNav>ul>li {
            margin-top: 3em
        }

        .primaryNav li a {
            margin: 0;
            padding: .875em .9375em .9375em .9375em;
            display: block;
            font-size: .9375em;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-shadow: 0 3px 3px #666;
            text-decoration: none
        }

        .primaryNav li a:hover {
            box-shadow: 0 3px 3px 1px #666
        }

        .primaryNav a:link:after,
        .primaryNav a:visited:after,
        .utilityNav a:link:after,
        .utilityNav a:visited:after {
            display: block;
            font-weight: 600;
            font-size: .75em;
            margin-top: .25em;
            word-wrap: break-word;
            color: #666
        }

        .primaryNav ul ul {
            display: block
        }

        .primaryNav ul ul li {
            padding-top: .9875em;
            padding-right: 0
        }

        .primaryNav ul ul li:first-child {
            padding-top: 2em
        }

        .primaryNav ul ul ul {
            margin-top: .6em;
            padding-top: .6em;
            padding-bottom: .625em
        }

        .primaryNav ul ul ul li {
            padding-top: .3125em;
            padding-bottom: .3125em
        }

        .primaryNav ul ul ul li a {
            font-size: .75em;
            padding: .75em;
            min-width: 90%;
            width: auto;
            margin-right: 0;
            margin-left: auto
        }

        .primaryNav ul ul ul li:first-child {
            padding-top: 1em
        }

        .primaryNav ul ul ul li a:link:after,
        .primaryNav ul ul ul li a:visited:after {
            font-size: .75em
        }

        .primaryNav ul ul ul ul {
            margin-top: 0;
            padding-top: .3125em;
            padding-bottom: .3125em
        }

        .primaryNav ul ul ul ul li a {
            padding: .75em;
            min-width: 80%;
            width: auto
        }

        .primaryNav ul ul ul ul li a:link:after,
        .primaryNav ul ul ul ul li a:visited:after {
            display: none
        }

        .primaryNav ul li:after,
        .primaryNav ul li:before,
        .primaryNav ul:after,
        .primaryNav ul:before {
            display: block;
            content: '';
            position: absolute;
            border-width: 0;
            border-color: #ccc;
            border-style: solid;
            z-index: -2
        }

        .primaryNav>ul>li:before {
            height: 1.375em;
            top: -1.375em;
            right: calc(50% + .625em);
            width: calc(100% - 2px);
            border-top-width: 2px;
            border-right-width: 2px
        }

        .primaryNav>ul>li:first-child+li:before {
            border-top-width: 0;
            height: 5em;
            top: -5em
        }

        .primaryNav ul ul li:after {
            width: 50%;
            height: .9875em;
            top: 0;
            right: 1px;
            border-left-width: 2px
        }

        .primaryNav ul ul li:first-child:before {
            width: 50%;
            height: 1.3125em;
            top: .9875em;
            right: 1px;
            border-left-width: 2px
        }

        .primaryNav>ul>li:last-child:after {
            border-bottom-width: 0
        }

        .primaryNav ul ul ul li:before {
            width: calc(50% - 5px) !important;
            height: calc(100% - 2px);
            top: -50%;
            left: 0;
            border-left-width: 2px;
            border-bottom-width: 2px
        }

        .primaryNav ul ul ul li:first-child:before {
            height: 2.125em;
            top: -1px;
            border-top-width: 2px
        }

        .primaryNav ul ul ul:before {
            width: 50%;
            height: 1.25em;
            top: -10px;
            right: 1px;
            border-left-width: 2px
        }

        .primaryNav ul ul ul li:after {
            border-width: 0
        }

        .primaryNav ul ul ul ul li:before,
        .primaryNav ul ul ul ul li:first-child:before {
            display: none
        }

        .primaryNav ul ul ul ul:before {
            width: 1px;
            height: calc(100% + 2.5em);
            top: -2.5em;
            left: 0;
            border-left-width: 2px
        }

        @media screen and (max-width:30em) {
            .primaryNav ul {
                display: block
            }

            .primaryNav li {
                width: 100%;
                padding-right: 0
            }

            .primaryNav #home {
                width: 100%;
                position: relative;
                margin-bottom: -1em;
                margin-top: 0
            }
        }

        @media screen and (min-width:30em) {
            .primaryNav>ul>li {
                max-width: 50%
            }
        }

        @media screen and (min-width:38.5em) {
            .primaryNav>ul>li {
                max-width: 33%
            }
        }

        @media screen and (min-width:50em) {
            .primaryNav>ul>li {
                max-width: 25%
            }
        }

        @media screen and (min-width:61em) {
            .primaryNav>ul>li {
                max-width: 20%
            }
        }

        @media screen and (min-width:73em) {
            .primaryNav>ul>li {
                max-width: 16.66%
            }
        }

        @media screen and (min-width:84.5em) {
            .primaryNav>ul>li {
                max-width: 14.285%
            }
        }

        @media screen and (min-width:96em) {
            .primaryNav>ul>li {
                max-width: 12.5%
            }
        }

        @media screen and (min-width:107.5em) {
            .primaryNav>ul>li {
                max-width: 11.11%
            }
        }

        @media screen and (min-width:119em) {
            .primaryNav>ul>li {
                max-width: 10%
            }
        }

        a[href$="#"] {
            cursor: default;
            color: #333
        }

        .collapsed_item {
            display: none !important;
            cursor: pointer !important
        }

        .expand_items a {
            color: #333 !important;
            text-align: center;
            cursor: pointer !important
        }

        a[href$="#"]:not(.collapsed_item, .expand_items a):before {
            content: "#"
        }
    </style>
</head>

<body>
    <h1>Sitemap</h1>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.mysitemapgenerator.com/api/htmlsitemaps.min.js"></script>
    <div class="sitemap">
        <nav class="primaryNav">
            <ul>
                <li id="home">
                    <a href="https://rapidautoshipping.com/"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjUxMHB4IiBoZWlnaHQ9IjUxMHB4IiB2aWV3Qm94PSIwIDAgNTEwIDUxMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEwIDUxMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGcgaWQ9ImhvbWUiPg0KCQk8cG9seWdvbiBwb2ludHM9IjIwNCw0NzEuNzUgMjA0LDMxOC43NSAzMDYsMzE4Ljc1IDMwNiw0NzEuNzUgNDMzLjUsNDcxLjc1IDQzMy41LDI2Ny43NSA1MTAsMjY3Ljc1IDI1NSwzOC4yNSAwLDI2Ny43NSANCgkJCTc2LjUsMjY3Ljc1IDc2LjUsNDcxLjc1IAkJIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" width="16" height="16" alt="homepage" /> Home page</a>
                </li>
                <li><a href="#" onclick="return false">Services</a>
                    <ul>
                        <li><a href="https://rapidautoshipping.com/services/rail-shipping">Ship Car By Train at Best Price - No .1 Car Transport By Train</a></li>
                        <li><a href="https://rapidautoshipping.com/services/enclosed-shipping">Best Enclosed Auto Transport Service - Enclosed Car Shipping</a></li>
                        <li><a href="https://rapidautoshipping.com/services/door-to-door">Door to Door Auto Transport Services - Door to Door Transport</a></li>
                        <li><a href="https://rapidautoshipping.com/services/motor-cycle-shipping">Best Motorcycle Transport Services, Motorcycle Shipping</a></li>
                        <li><a href="https://rapidautoshipping.com/services/snow-bird-shipping">Snowbirds Auto Transport - US Canada Auto Transport Services</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/boat-shipping">International Boat Shipping Company - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/military-shipping">Best Military Vehicle Transport Services, Military Car Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/classic-car-shipping">Best Antique Car Transportation Services, Classic Car Transport</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/heavy-equipment-shipping">Heavy Equipment Transport Service - Heavy Equipment Hauling</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/lowboy-shipping">Affordable Lowboy shipping services - Lowboy Trucking</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/multi-car-shipping">Multi car shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/heavy-hauling-truck">Heavy haul trucks valuable service at significant cost.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/fifth-wheel-transport">Top affordable Fifth wheel transport services.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/car-shipping-services">Top car transporter services provider - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/rv-transport">Reliable RV Transport services in USA - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/heavy-hauling-large-cargo">Top heavy hauling large cargo transportation services.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/car-transport-dealership">Best Services for Transporting Cars for Dealerships | USA</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/tractor-transport">Leading Tractor transport services national and international</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/food-truck-shipping">Food truck transport service - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/construction-equipment">Affordable Construction Equipment Shipping | +1-(833) 233-4447</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/hauling-oversize-load">Hauling oversize load trucks services - Rapid auto shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/line-haul-transport">Top rated line haul transport services - Rapid auto shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/cost-to-ship-a-bus">Best affordable bus shipping services Rapid auto shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/open-car-shipping">#1 Auto Transport Carriers | Open Transport Car Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/auto-auction-shipping">Auction Auto Shipping - Auto Auction Transportation Service</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/cutomized-container-shipping">We provide trusted customised container shipping services.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/state-to-state-car-shipping">Transport Car From State To State - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/car-transport">We are expert in International Car Transport services.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/farm-equipment">Farm equipment transport services-Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/cargo-vans-services">Cargo Van Transportation Services - Rapid Auto Shippping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/yacht-shipping-services">Trusted yacht or boat shipping services Internationally.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/international-boat-transport">International boat shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/ambulance-shipping">Ambulance transport services - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/international-heavy-equipment-shipping">No1 International heavy equipment shipping Services.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/hauling-isuzu-npr-truck">Safe and Trusted service to haul your ISUZU NPR Truck.</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/komatsu-equipment-shipping">Komatsu equipment shipping sevices - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/transporting-case-trucks">Transporting case trucks</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/new-holland-tractor">New Holland Equipment Shipping across all states of USA</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/forklift-transportation-company">No1 Forklift transport company - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/international-car-shipping">International Car shipping - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/international-motorcycle-shipping">Most Reliable International Motorcycle shipping services</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/caterpillar-equipment-shipping">Caterpillar Transportation services - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/containerized-freight-hauling">containerized freight transportation — Best Services</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/car-transport-in-continental-us">CONTAINERIZED FREIGHT HAULING</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/services/car-transport-quotes">Car Transport Quotes</a></li>
                        <li class="expand_items"><a href="#"> &#x25BC; </a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="return false">Cars</a>
                    <ul>
                        <li><a href="https://rapidautoshipping.com/cars/nissan">Nissan Car Modules We Ship in US | Nissan Car Shipping in Us</a></li>
                        <li><a href="https://rapidautoshipping.com/cars/chrysler">Chrysler Car Modules We Ship in Us | Chrysler transport</a></li>
                        <li><a href="https://rapidautoshipping.com/cars/dodge">Dodge Car Modules We Ship in US | Dodge Car Shipping in Us</a></li>
                        <li><a href="https://rapidautoshipping.com/cars/toyota">Toyota Car Modules We Ship in Us | Toyota transport</a></li>
                        <li><a href="https://rapidautoshipping.com/cars/chevrolet">Chevrolet Car Modules We Ship in Us | Chevrolet transport</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/cars/ford">Ford Car Modules We Ship in US | Ford Car Shipping in Us</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/cars/mazda">Mazda Auto Transport Services | Mazda Car Shipping</a></li>
                        <li class="expand_items"><a href="#"> &#x25BC; </a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="return false">States</a>
                    <ul>
                        <li><a href="https://rapidautoshipping.com/states/alabama">#1 Car Transport Companies Alabama , Auto Transport Alabama</a></li>
                        <li><a href="https://rapidautoshipping.com/states/alaska">#1 Alaska Auto Transport Company : Car Shipping Alaska</a></li>
                        <li><a href="https://rapidautoshipping.com/states/arizona">Arizona Auto Transport company - Rapid Auto Shipping</a></li>
                        <li><a href="https://rapidautoshipping.com/states/arkansas">Best Arkansas Auto Transport company - Rapid Auto Shipping</a></li>
                        <li><a href="https://rapidautoshipping.com/states/california">California Auto Transport company - Auto Shipping California</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/colorado">Best Colorado Auto Transport company - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/connecticut">Auto Transport Company In Connecticut - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/delaware">Car Shipping Company In Delaware, Delaware Auto Transport</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/florida">Car Transporters Florida | Auto Transport Service in Florida Fl</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/georgia">#1 Car Shipping Georgia | Auto Transport Service in Georgia GA</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/hawaii">#1 Hawaii car transport - Lowest Cost Car shipping Hawaii</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/idaho">Idaho Auto Transport - Best Car Shipping Company in Idaho</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/illinois">Auto Transport Companies illinois - Vehicle Transport il</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/indiana">Best Car Shipping Company in Indiana , Auto Transport Indiana</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/iowa">Transportation Services Iowa State - Car Shipping Services Iowa</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/kansas">Best Auto Transport Kansas City Services, Car Shipping Kansas</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/kentucky">#1 Car Shipping Company in Kentucky , Auto Transport Kentucky</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/louisiana">Auto Transport Louisiana la - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/maine">Best Auto Transport Companies in Maine, Auto Transport Maine</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/maryland">Best Car Shipping Companies in Maryland, MD Auto Transport</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/massachusetts">Best Car Shipping Companies in massachusetts, MD Auto Transport</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/michigan">Best Auto Transport Companies in Michigan, Auto Transport Michigan</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/minnesota">Best Auto Transport Companies in Minnesota, Auto Transport Minnesota</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/mississippi">Best Auto Transport Companies in Mississippi, Auto Transport Mississippi</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/states/new-york">Best New York Auto Transport Company, Car Shipping in New York</a></li>
                        <li class="expand_items"><a href="#"> &#x25BC; </a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="return false">Blogs</a>
                    <ul>
                        <li><a href="https://rapidautoshipping.com/blogs/autoshipping-companies-in-arkansas-2022">Top Arkansas Car Shipping Companies in 2022</a></li>
                        <li><a href="https://rapidautoshipping.com/blogs/cheapest-way-to-ship-a-car">Top 7 Cheapest Way to Ship a Car to Other City Or State in 2022</a></li>
                        <li><a href="https://rapidautoshipping.com/blogs/state-to-state-transport">State to state transportation services across USA</a></li>
                        <li><a href="https://rapidautoshipping.com/blogs/shipping-car-to-mexico">Shipping Cars to Mexico - Rapid Auto Shipping</a></li>
                        <li><a href="https://rapidautoshipping.com/blogs/terminal-to-terminal-auto-transport">Terminal to Terminal Car Shipping Service - Rapid Auto Shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/blogs/cost-from-texas-to-california">Cost From Texas To California</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/blogs/ship-from-new-york-to-florida">How Much Does it Cost to Ship a Car From Florida to New York</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/blogs/enclosed-auto-transport-chicago">Enclosed auto transport Chicago - Rapid auto shipping</a></li>
                        <li class="collapsed_item"><a href="https://rapidautoshipping.com/blogs/cost-to-ship-a-car">How much does it cost to ship a car across all states.</a></li>
                        <li class="expand_items"><a href="#"> &#x25BC; </a></li>
                    </ul>
                </li>
                <li><a href="https://rapidautoshipping.com/contact-us">Rapid Auto Sipping - Contact Us</a></li>
                <li><a href="https://rapidautoshipping.com/about-us">Rapid Auto Sipping - About Us</a></li>
                <li><a href="#" onclick="return false">Auto-transport-carriers</a>
                    <ul>
                        <?php

                        $auto_carrier_path = home_path() . "auto-transport-carriers/";

                        $page_list = fetch_all_data("SELECT * FROM `company_reviews`");
                        if ($page_list) {
                            for ($i = 0; $i < count($page_list); $i++) {
                                $slug = $page_list[$i]['slug'];
                                $title = getTitle($auto_carrier_path . $slug);
                                if ($i > 3) {
                                    echo '<li class="collapsed_item"><a href="' . $auto_carrier_path . $slug . '">' . $title . '</a></li>';
                                } else {
                                    echo '<li><a href="' . $auto_carrier_path . $slug . '">' . $title . '</a></li>';
                                }
                            }
                        }

                        ?>
                        <!-- <li class="expand_items"><a href="#"> &#x25BC; </a></li> -->
                    </ul>
                </li>

                <li><a href="#" onclick="return false">state-to-state</a>
                    <ul>
                        <?php

                        $auto_carrier_path = home_path() . "state-to-state/";

                        $page_list = fetch_all_data("SELECT `slug` FROM `state_to_state`");

                        print_r($page_list);
                        exit;

                        if ($page_list) {
                            for ($i = 0; $i < count($page_list); $i++) {
                                $slug = $page_list[$i]['slug'];
                                $title = getTitle($auto_carrier_path . $slug);
                                if ($i > 3) {
                                    echo '<li class="collapsed_item"><a href="' . $auto_carrier_path . $slug . '">' . $title . '</a></li>';
                                } else {
                                    echo '<li><a href="' . $auto_carrier_path . $slug . '">' . $title . '</a></li>';
                                }
                            }
                        }
                        ?>
                        <li class="expand_items"><a href="#"> &#x25BC; </a></li>
                    </ul>
                </li>



            </ul>
        </nav>
    </div>
    </div>
    <div class="footerinfo">Created with <a href="https://www.mysitemapgenerator.com/sitemaps/index.html" target="_blank">MySitemapGenerator</a></div>
</body>

</html>