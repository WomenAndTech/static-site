<?php

$headers = getallheaders();
$authentication_token = $headers["X-Authentication-Token"];
$hub_signature = $headers["X-Hub-Signature"];
$secret = "8fc102f064e415e22a2945a3d420d2fd51ae2a0b"; # Test secret.  Remove and set to environment variable
$body = file_get_contents('php://input');

$signature = "sha1=" . hash_hmac('sha1', $body, $secret);

if(hash_equals($signature, $hub_signature)){
    
}
?>

