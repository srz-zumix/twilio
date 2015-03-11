<?php
require 'twilio-php/Services/Twilio.php';

$response = new Services_Twilio_Twiml();
if( isset($_REQUEST['Digits']) ) {
  $input = $_REQUEST['Digits'];
  switch($input) {
  case '9':
    $response->say('さようなら', array('language' => 'ja-jp'));
    break;
  default:
    $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
    $gather->say($input . 'を押したな', array('language' => 'ja-jp'));
    break;
  }
} else {
  $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
  $gather->say('なんかボタン押して。', array('language' => 'ja-jp'));
}

print $response;

