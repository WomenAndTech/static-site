<?php

// Reject if not post request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(404);
	die();
}

$headers = getallheaders();

// Github Specific setup
$github_signature = $headers["X-Hub-Signature"];
$github_secret = getenv("github_secret"); # Test secret.  Remove and set to environment variable
$github_webhook_body = file_get_contents('php://input');
$computed_signature = "sha1=" . hash_hmac('sha1', $github_webhook_body, $github_secret);

// Command line commands to run git pull
$commands = array(
	'echo $PWD',
	'git pull',
);

// CloudFlare config
$cloudflare_zone_id = getenv('cloudflare_zone_id');
$cloudflare_email = getenv('cloudflare_email');
$cloudflare_apikey = getenv('cloudflare_apikey');
$cloudflare_curl = curl_init("https://api.cloudflare.com/client/v4/zones/" . $cloudflare_zone_id . "/purge_cache");
$cloudflare_curl_headers = array(
	"X-Auth-Email: " . $cloudflare_email,
    "X-Auth-Key: " . $cloudflare_apikey,
    "Content-Type: application/json"
);
$cloudflare_curl_data = '{"purge_everything":true}';
curl_setopt($cloudflare_curl, CURLOPT_HTTPHEADER, $cloudflare_curl_headers);
curl_setopt($cloudflare_curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($cloudflare_curl, CURLOPT_POSTFIELDS, $cloudflare_curl_data );
curl_setopt($cloudflare_curl, CURLOPT_RETURNTRANSFER, true);
	

if(hash_equals($computed_signature, $github_signature)){
	// store command ouputs
	$command_result = "";
	// run command line for pulling in git repo
    foreach($commands as $command) {
		$tmp = shell_exec($command);
		$command_result .= trim($tmp) . "\n";
    }

	// run cloudflare curl command, get result and close curl connection
	$cloudflare_result = curl_exec($cloudflare_curl);
	$cloudflare_result = json_decode($cloudflare_result);
	curl_close($cloudflare_curl);

	# return a response
	http_response_code(202);
	header('Content-Type: application/json');

	$response_body = array(
		'commmand_result' => $command_result,
		'cloudflare_result' => $cloudflare_result
	);

	echo json_encode($response_body);

}