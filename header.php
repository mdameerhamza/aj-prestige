<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title(' | ', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
         
</head>
<body <?php body_class(); ?>>
    <main id="main">
<?php
// Function to get the current URL
function getCurrentURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol . "://" . $host . $uri;
}

// Get current URL
$current_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : getCurrentURL();

// Load different headers based on URL structure
if (strpos($current_url, '/chicago') !== false) {
    // Load header for New York subsite
    get_template_part('custom-headers/header-chicago');
} elseif (strpos($current_url, '/las-vegas') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-lasvegas');
}elseif (strpos($current_url, '/los-angeles') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-losangeles');
}elseif (strpos($current_url, '/newyork') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-newyork');
}elseif (strpos($current_url, '/madison') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-new-york-city');
}elseif (strpos($current_url, '/new-york-city') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-madison');
}elseif (strpos($current_url, '/portland') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-portland');
}elseif (strpos($current_url, '/milwaukee') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-headers/header-milwaukee');
} else {
    // Load default header for other pages
    get_template_part('custom-headers/header-default');
}
?>