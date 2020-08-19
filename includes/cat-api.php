<?php 

/* 
*   Functions for communicating with the Cat as a Service API
*/

function cApi_get_random_cat() {
    $response = wp_remote_get('https://api.thecatapi.com/v1/images/search');
    // $response = json_encode($response);
    $randomCatArray = wp_remote_retrieve_body($response);
    return json_decode($randomCatArray);
}