<?php

function home_path()
{
    return DOMAIN;
}

// assets path function

function get_assets()
{
    return DOMAIN . 'assets';
}

function get_css()
{
    return DOMAIN . 'assets/css/';
}

function get_img($file_name = "")
{
    return DOMAIN . 'assets/images/' . $file_name;
}

function get_js($file_name = "")
{
    return DOMAIN . 'assets/js/' . $file_name;
}


function get_global_css()
{
    return DOMAIN . 'global/css/';
}

function get_global_js()
{
    return DOMAIN . 'global/js/';
}

// server end point 

function get_state()
{
    return DOMAIN . 'states';
}
