<?php
require 'config/config.php';

function webhook($token)
{
    $dir = $dir = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . 
            $_SERVER['HTTP_HOST'] . 
            rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';
    $url = "https://api.telegram.org/bot" . $token . "/setWebhook?url=" . urlencode($dir);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    $result_array = json_decode($result, true);
    
    if ($result_array && isset($result_array['ok']) && $result_array['ok'] === true) {
        echo (">> Success! Telegram reply:\n");
        print_r($result_array);
        echo (">> End Telegram reply.\n");
    } else {
        echo (">> Error! HTTP Code: " . $http_code . "\n");
        echo ("Telegram reply:\n");
        print_r($result_array ?: $result);
        echo (">> End Telegram reply.\n");
    }
}

webhook($appToken);