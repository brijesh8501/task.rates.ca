<?php

if($_SERVER['SERVER_NAME'] === "localhost"){
    $path = "/task.rates.ca/";
}else{
    $path = "/";
}
define("SITE_HOST", $_SERVER['SERVER_NAME']);
define("SITE_PATH", $path);


$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$site_base_url = $protocol.'://'.SITE_HOST.'/';
$urlPath = explode($site_base_url, $_SERVER['REQUEST_URI']);
$urlParts = explode('/', $urlPath[0]);

define("ABSURL", rtrim($site_base_url, "/").$path);
define( 'ABSPATH', __DIR__.'/' );
define( 'PROJECT','Rates.ca | Task' );

if( $path === "/"){

    define("CURRENT_PAGE", $urlParts[3]);

}else{

    define("CURRENT_PAGE", $urlParts[2]);

}

$page_setup_details = [

    'home' => [
        'title' => 'Compare Insurance, Mortgage Rates &amp; Credit Cards',
        'description' => 'RATESDOTCA instantly finds your best rates for insurance, mortgage &amp; credit cards by comparing quotes from major Canadian brokers &amp; financial institutions.'
    ],
    'quote' => [
        'title' => 'Your Cheapest Car Insurance Quote in Canada - RATESDOTCA',
        'description' => 'Instantly compare quotes from 50+ car insurance companies. Last year, drivers who shopped for car insurance through RATESDOTCA paid 30% less than the market average.'
    ],
    'success' => [
        'title' => 'Your Cheapest Car Insurance Quote in Canada - RATESDOTCA | Thank you',
        'description' => 'Instantly compare quotes from 50+ car insurance companies. Last year, drivers who shopped for car insurance through RATESDOTCA paid 30% less than the market average. | Thank You'
    ]
    
]


?>