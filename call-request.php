
<?php
    // Include the Twilio PHP library
    require 'twilio-php-master/Services/Twilio.php';
 
    // Twilio REST API version
    $version = "2010-04-01";
 
    // Set our Account SID and AuthToken
   $sid = 'ACea19bb9852f3b05ae3b682d66637cfd9';
	$token = 'd4dd54e452ffa18dea1e1c8ba670a9dc';
     
    // A phone number you have previously validated with Twilio
    $phonenumber = '+17652764084';
     
    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($sid, $token, $version);
 
    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $phonenumber, // The number of the phone initiating the call
            '+16144031516', // The number of the phone receiving call
            'http://demo.twilio.com/welcome/voice/' // The URL Twilio will request when the call is answered
        );
        echo 'Started call: ' . $call->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

