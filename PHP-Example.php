<?php
$url = 'http://www.technicaltel.com/panel/api/sms_send.php?' . http_build_query(
        [
            'source' => 'SOURCE', //In an internation format without "+" / Plain-text source
            'dest' => 'DESTINATION', //In an internation format without "+"
            'message' => 'MESSAGE', //SMS message body
            'class0' => 'false', //false = disable, true = enable | Flash Message
            'userid' => 'XXXXXXX' //Your unique ID that you have received by email on registration
        ]
    );

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

echo $response;
?>