<?php

$ch = curl_init();




$mobile = '9418728767';
$first_name = 'Hata';
$last_name = 'Jana';
$email = 'hanan55@gmail.com';
$pin = '160077';

curl_setopt($ch, CURLOPT_URL, 'https://middleware.muthoot.org:1880/Spice');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile": "'.$mobile.'","firstName" : "'.$first_name.'","lastdName" : "'.$last_name.'","email" : "'.$email.'","pin" : '.$pin.',"utm" : "Dialabank","owner" : 1,"medium" : 246,"source" : 14,"leadcreatedbytype" : 3,"preferredChannel" : 2,"priority" : 5}');

$headers = array();
$headers[] = 'Owner: SpiceMoney';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Owner: Default Value utm Dial a bank';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

echo $result;
?>
