<?php

$ch = curl_init();




$mobile = '9418628877';
$first_name = 'Ankush';
$last_name = 'Monjan';
$email = 'ankush.thakur1025@gmail.com';
$pin = '160055';

curl_setopt($ch, CURLOPT_URL, 'https://middleware.muthoot.org:1880/Spice');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mobile": "'.$mobile.'","firstName" : "'.$first_name.'","lastdName" : "'.$last_name.'","email" : "'.$email.'","pin" : '.$pin.',"utm" : "SpiceMoney","owner" : 1,"medium" : 246,"source" : 14,"leadcreatedbytype" : 3,"preferredChannel" : 2,"priority" : 5}');

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
