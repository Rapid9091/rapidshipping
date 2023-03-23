<?php

include_once "init.php";
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>

<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.84 http://www.google.com/schemas/sitemap/0.84/sitemap.xsd">


    <?php

    get_row(home_path(), 1);

    $root_pages = [
        ["endpoint" => "services", "priority" => "0.8"],
        ["endpoint" => "about-us", "priority" => "0.8"],
        ["endpoint" => "contact-us", "priority" => "0.8"]
    ];

    foreach ($root_pages as $item) :

    ?>
        <url>
            <loc><?= home_path() . $item['endpoint'] ?></loc>
            <lastmod>2022-04-13T06:42:46+00:00</lastmod>
            <priority><?= $item['priority'] ?></priority>
        </url>

    <?php
    endforeach;

    ?>


    <?php

    $sitemap_json = file_get_contents('sitemap.json');
    $site_map_dir_list = json_decode($sitemap_json, true);


    foreach ($site_map_dir_list as $item) :

        $dir = $item['dir'];
        $priority = $item['priority'];
        $index = $item['indexFileName'];
        $endpoint = $item['endpoint'];


        $dir =  'pages/' . $dir . "/";

        $dir_file = array_diff(scandir($dir), array('.', '..'));

        get_dir_row($item, $dir_file);


    ?>


    <?php
    endforeach;

    get_row(home_path() . "auto-transport-carriers/", "0.6");

    $review_page_sql = "SELECT * FROM `company_reviews`";
    $review_page_list = fetch_all_data($review_page_sql);

    if ($review_page_list) {

        foreach ($review_page_list as $item) {
            $url = home_path() . "auto-transport-carriers" . "/" . $item['slug'];
            get_row($url, "0.5");
        }
    }
    get_row(home_path() . "state-to-state/", "0.6");

    $state_page_sql = "SELECT * FROM `state_to_state`";
    $state_page_list = fetch_all_data($state_page_sql);

    if ($state_page_list) {

        foreach ($state_page_list as $item) {
            $url = home_path() . "state-to-state" . "/" . $item['slug'];
            $page_date = "2022-04-13T06:42:46+00:00";
            if($item['state_id'] > 244){
                $page_database = $item['add_on'];
                $timeDateString = strtotime($page_database);
                $year = date("Y-m-d", $timeDateString);
                $time = date("H:i:s", $timeDateString);
                $page_date = $year."T".$time."+00:00";
            }
            
            // get_row($url, "0.6");
            get_state_row($url, $page_date, "0.6");
        }
    }

    ?>

</urlset>



<?php


function get_row($url, $priority)
{
?>

    <url>
        <loc><?= $url ?></loc>
        <lastmod>2022-04-13T06:42:46+00:00</lastmod>
        <priority><?= $priority ?></priority>
    </url>

<?php
}

function get_state_row($url, $lastmod, $priority)
{
?>

    <url>
        <loc><?= $url ?></loc>
        <lastmod><?=$lastmod ?></lastmod>
        <priority><?= $priority ?></priority>
    </url>

<?php
}

function
get_dir_row($info, $list)
{

    $dir = $info['dir'];
    $priority = $info['priority'];
    $index = $info['indexFileName'];
    $endpoint = $info['endpoint'];


    // $url = home_path() . $endpoint .'/'


    foreach ($list as $item) {

        if ($index != $item) {
            $file = str_replace(".php", "", $item);
            $url = home_path() . $endpoint . '/' . $file;

            get_row($url, $priority);
        }
    }
}

?>