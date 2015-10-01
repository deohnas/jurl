<?php

/**
 * Make a cURL GET request
 *
 * @param  string $url
 * @param  array $options
 * @return array      The response and info of the request
 */
function jurl_get($url, $options = array()) {
    $ch = curl_init();

    $default_options = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => false,
        CURLOPT_RETURNTRANSFER => true,
    );

    $options += $default_options;

    curl_setopt_array($ch, $options);

    $response = curl_exec($ch);
    $info = curl_getinfo($ch);

    curl_close($ch);

    return array('response' => $response, 'info' => $info);
}


/**
 * Make a cURL POST request
 *
 * @param  string $url
 * @param  mixed  $data
 * @param  array  $options
 * @return array      The response and info of the request
 */
function jurl_post($url, $data = array(), $options = array()) {
    $ch = curl_init();

    $default_options = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => false,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER => true,
    );

    $options += $default_options;

    curl_setopt_array($ch, $options);

    $response = curl_exec($ch);
    $info = curl_getinfo($ch);

    curl_close($ch);

    return array('response' => $response, 'info' => $info);
}