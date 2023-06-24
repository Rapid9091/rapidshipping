<?php
// Connect to your MySQL database
header("Content-type: text/xml");
date_default_timezone_set('Asia/Kolkata');
$dbHost = 'localhost';
$dbName = 'u841070527_autoshipping';
$dbUser = 'u841070527_rapid';
$dbPass = 'Smile@1427';

// Create a new MySQLi connection
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check if the connection was successful
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Retrieve the list of pages from the database

$pages = array(
    'services',
    'blogs',
    'cars',
    'states',
    'state_to_state',
);
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
$url = htmlspecialchars('https://rapidautoshipping.com/');
$xml .= "\t<url>\n";
$xml .= "\t\t<loc>$url</loc>\n";
$xml .= "\t\t<lastmod>"."2023-06-20 12:56:17"."</lastmod>\n";
$xml .= "\t\t<changefreq>weekly</changefreq>\n";
$xml .= "\t\t<priority>1.00</priority>\n";
$xml .= "\t</url>\n";
foreach($pages as $page){
        $url = htmlspecialchars('https://rapidautoshipping.com/'.$page);
        $xml .= "\t<url>\n";
        $xml .= "\t\t<loc>$url</loc>\n";
        $xml .= "\t\t<lastmod>"."2023-06-22 8:30:17"."</lastmod>\n";
        $xml .= "\t\t<changefreq>weekly</changefreq>\n";
        $xml .= "\t\t<priority>0.8</priority>\n";
        $xml .= "\t</url>\n";
}
foreach($pages as $page){
    $query = "SELECT * FROM  $page";
    $result = $mysqli->query($query);
    // Create the sitemap XML
   

    while ($row = $result->fetch_assoc()) {
        $url = htmlspecialchars('https://rapidautoshipping.com/'.$page.'/'.$row['slug']);
        $xml .= "\t<url>\n";
        $xml .= "\t\t<loc>$url</loc>\n";
        $xml .= "\t\t<lastmod>" . $row['added_on'] . "</lastmod>\n";
        $xml .= "\t\t<changefreq>weekly</changefreq>\n";
        $xml .= "\t\t<priority>0.8</priority>\n";
        $xml .= "\t</url>\n";
    }

   
}
$xml .= '</urlset>';

// Set the file path for the sitemap XML
$sitemapPath = './sitemap.xml';

// Write the XML content to the sitemap file
file_put_contents($sitemapPath, $xml);
// Close the database connection
$mysqli->close();

?>
