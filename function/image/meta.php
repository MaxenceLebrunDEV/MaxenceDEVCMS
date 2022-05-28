<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.imagekit.io/v1/customMetadataFields');
curl_setopt($ch, CURLOPT_USERPWD, "private_HdrMIGwBk1BjZJDpgCgGNqZ/fFk=");

curl_setopt($ch, CURLOPT_POST, true);
$data = '{
    "name": "title",
    "label": "title",
    "schema": {
        "type": "Text"
    }
}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array(
        'Content-Type:application/json'
    )
);
curl_setopt($ch, CURLOPT_INFILE, $fp);
$result = curl_exec ($ch);
$error_no = curl_errno($ch);
curl_close ($ch);
   
echo $response;
