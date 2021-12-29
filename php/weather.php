<?php

error_reporting(0);
$errormsg = "";
$status = "";

$city = $_POST['city'] ?: 'Dhaka';   
    
if ($city){
    $apiData = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=$city&appid=9ae96e6f16a903def3bab80031f3c8a8&units=metric");
    // echo "$apiData";
    $weatherArray = json_decode($apiData,true);
    // print_r($weatherArray);

    //city,country
    $city = $weatherArray['city']['name'];
    $country = $weatherArray['city']['country'];

    //icon,temp day,temp night,date for day 1 
    $icon1 = $weatherArray['list']['4']['weather']['0']['icon'];
    $tempday1 = $weatherArray['list']['4']['main']['temp'];
    $tempnight1 = $weatherArray['list']['0']['main']['temp'];
    $date1 = date("l jS F Y", strtotime($weatherArray['list']['0']['dt_txt']));

    //icon,temp day,temp night,date for day 2 
    $icon2 = $weatherArray['list']['12']['weather']['0']['icon'];
    $tempday2 = $weatherArray['list']['12']['main']['temp'];
    $tempnight2 = $weatherArray['list']['8']['main']['temp'];
    $date2 = date("l jS F Y", strtotime($weatherArray['list']['8']['dt_txt']));

    //icon,temp day,temp night,date for day 3
    $icon3 = $weatherArray['list']['20']['weather']['0']['icon'];
    $tempday3 = $weatherArray['list']['20']['main']['temp'];
    $tempnight3 = $weatherArray['list']['16']['main']['temp'];
    $date3 = date("l jS F Y", strtotime($weatherArray['list']['16']['dt_txt']));

    //icon,temp day,temp night,date for day 4
    $icon4 = $weatherArray['list']['28']['weather']['0']['icon'];
    $tempday4 = $weatherArray['list']['28']['main']['temp'];
    $tempnight4 = $weatherArray['list']['24']['main']['temp'];
    $date4 = date("l jS F Y", strtotime($weatherArray['list']['24']['dt_txt']));

    //icon,temp day,temp night,date for day 5
    $icon5 = $weatherArray['list']['36']['weather']['0']['icon'];
    $tempday5 = $weatherArray['list']['36']['main']['temp'];
    $tempnight5 = $weatherArray['list']['32']['main']['temp'];
    $date5 = date("l jS F Y", strtotime($weatherArray['list']['32']['dt_txt']));

    if ($weatherArray['cod'] == 200){
        $status="yes";                             
    }

    else{
        $errormsg = "City Name is not Valid.";          
    }                      
}

?>