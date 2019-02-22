<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_2fc18e54c41635ee0464b683775",
                  "X-Auth-Token:test_8c166d21ebc75cb5592daaedd06"));
$payload = Array(
    'purpose' => 'Ecommerce',
    'amount' => '250',
    'phone' => '9999999999',
    'buyer_name' => 'Nikhil Shadija',
    'redirect_url' => 'http://localhost/TSEC%20Hackathon/success.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => 'nikhilshadija2@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>