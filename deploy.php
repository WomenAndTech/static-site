<?php

$headers = getallheaders();
$authentication_token = $headers["X-Authentication-Token"];
$hub_signature = $headers["X-Hub-Signature"];
$secret = "8fc102f064e415e22a2945a3d420d2fd51ae2a0b"; # Test secret.  Remove and set to environment variable
$body = file_get_contents('php://input');

$signature = "sha1=" . hash_hmac('sha1', $body, $secret);

$commands = array(
		'echo $PWD',
		'whoami',
);

if(hash_equals($signature, $hub_signature)){
    foreach($commands as $command) {
        // Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";      
    }
}

echo $output;
?>

<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Git Deployment Script v0.1 |
 |___==___|  /              &copy; oodavid 2012 |
              |____________________________|

<?php echo $output; ?>


