<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('OSDI-API-Token: xxxxxxxxxx'));
$api_request_parameters = array('filter'=>"family_name eq 'Doe'");
$api_request_url = "https://myapi.org/endpoint";
$api_request_url .= "?".http_build_query($api_request_parameters);
$curl_setopt($ch, CURLOPT_URL, $api_request_url);
$response = curl_exec($ch);
curl_close($ch);
?>