<?php

include_once 'core/config.php';
include_once 'includes/db.inc.php';
//sitemap.php



// start site map 

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;



// start sitemap 

echo '<url>' . PHP_EOL;
echo '<loc>http://rapidautoshipping.com</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;


// step 1: all stats urls

$linkArray = [

    "aboutus",
    "contactus",
    "service",
    "states/Alabama	",
    "states/Alaska	",
    "states/Arizona	",
    "states/Arkansas",
    "states/California",
    "states/colorado",
    "states/connecticut",
    "states/delaware",
    "states/florida",
    "states/georgia",
    "states/hawaii",
    "states/idaho",
    "states/illinois",
    "states/indiana",
    "states/iowa",
    "states/kansas",
    "states/kentucky",
    "states/louisiana",
    "states/maine",
    "states/maryland",
    "states/massachusetts",
    "states/michigan",
    "states/minnesota",
    "states/mississippi",
    "states/missouri",
    "states/montana",
    "states/nebraska",
    "states/nevada",
    "states/new-hampshire",
    "states/new-jersey",
    "states/new-mexico",
    "states/new-york",
    "states/north-carolina",
    "states/north-dakota",
    "states/ohio",
    "states/oklahoma",
    "states/oregon",
    "states/pennsylvania",
    "states/rhode-island",
    "states/south-carolina",
    "states/south-dakota",
    "states/tennessee",
    "states/texas",
    "states/utah",
    "states/vermont",
    "states/virginia",
    "states/washington",
    "states/west-virginia",
    "states/wisconsin",
    "states/wyoming",
    "service/rail-transport",
    "service/door-to-door-transport",
    "service/open-car-transport",
    "service/rail-shipping",
    "service/auto-auction-shipping",
    "service/motor-cycle-shipping",
    "service/boat-shipping",
    "service/cross-country",
    "service/enclosed-auto-transport",
    "service/milatry-transport",
    "service/Heavy Equipment",
    "service/snowbird-shipping",
    "service/car-transport-in-us",
    "cars",
    "cars/ford-taurus-car",
    "cars/ford-mustang",
    "cars/ford-super-duty",
    "cars/ford-ranger-car",
];



gerenrate_sitemap_url($linkArray, "http://rapidautoshipping.com/");



// step 2: generate link for category


// sitemap end
echo '</urlset>' . PHP_EOL;



// gerenrate sitemap urls 

function gerenrate_sitemap_url($array, $url)
{

    for ($i = 0; $i < count($array); $i++) {
        echo '<url>' . PHP_EOL;
        echo '<loc>' . $url . $array[$i] . '/</loc>' . PHP_EOL;
        echo '<changefreq>daily</changefreq>' . PHP_EOL;
        echo '</url>' . PHP_EOL;
    }
}
