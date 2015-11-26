<?php

# Plivo AUTH ID
$AUTH_ID = '';
# Plivo AUTH TOKEN
$AUTH_TOKEN = '';
# SMS sender ID.
$src = ''; //phone no with country code
# SMS destination number
$dst = ''; //phone no with country code
# SMS text
$text = 'Hello, Testing hello testing done waoooooooooo nothing helllllllllllllllllllllllllll great bulllllla What grade levels are you comfortable teaching? kklasjdlaksjdklasjdljasldjlasjdlasjdljasl';
$url = 'https://api.plivo.com/v1/Account/'.$AUTH_ID.'/Message/';
$data = array("src" => "$src", "dst" => "$dst", "text" => "$text");
$data_string = json_encode($data);
$ch=curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_USERPWD, $AUTH_ID . ":" . $AUTH_TOKEN);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$response = curl_exec( $ch );
curl_close($ch);
print_r($response);
?>
