<?php
// api/currency-proxy.php

// 1. Load the secret key securely
global $exchangeRate_apiKey;
include '../config/secrets.php';

// 2. Prepare the API URL (We default to Base: PHP since your prices are in PHP)
// This creates: https://v6.exchangerate-api.com/v6/YOUR_KEY/latest/PHP
$url = "https://v6.exchangerate-api.com/v6/{$exchangeRate_apiKey}/latest/PHP";

// 3. Fetch data from the API
$response = file_get_contents($url);

// 4. Return the data to your JavaScript
// We set the header so the browser treats this as JSON data
header('Content-Type: application/json');
echo $response;
?>