<?php

$curl = curl_init();

curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://middleware.muthoot.org:1880/Spice',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>'{ "mobile": "9560302445",
 "firstName" : "VINISH",
 "lastName" : "VIJAYAN",
 "email" : "",
 "pin" : 110019,
 "utm" : "SpiceMoney",
 "owner" : 1,
 "medium" : 246,
 "source" : 14,
 "leadcreatedbytype" : 3,
 "preferredChannel" : 2,
 "priority" : 5
}',
		CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
		),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
