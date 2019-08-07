<?php
include_once('cityConfig.php');

// getting domain name
$domainName = isset($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : $_SERVER["SERVER_NAME"];

// splitting string into array of strings by "."
$domains = explode(".", $domainName);

// removing "trans-s" and "su"
$subdomain = array_diff($domains , ["trans-s", "su"])[0];

$subdomain = isset($cityConfig[$subdomain]) ? $subdomain : "default";

$currentCity = $cityConfig[$subdomain];
?>