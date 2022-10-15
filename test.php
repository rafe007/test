<?php

function getLiveImage($imageUrl){

$imageUrl = "http://localhost/".$imageUrl;

$ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $imageUrl);

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // $output contains the output string
    $output = curl_exec($ch);

//print_r($output);die;

    // close curl resource to free up system resources
    curl_close($ch); 

     return $output;

}
echo 'data:png;base64,'.base64_encode(getLiveImage('logo-2a.png'));
?>


