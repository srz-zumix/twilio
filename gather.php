<?php
require '/twilio-sample-123 /twilio-php/Services/Twilio.php'

$response = new Services_Twilio_Twiml();
if( isset($_REQUEST['Digits']) ) {
  $input = $_REQUEST['Digits'];
  switch($input) {
  case '1':
    $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
    $gather->say('1‚ð‰Ÿ‚µ‚½‚È', array('language' => 'ja-jp'));
    break;
  }
}

print $response;
