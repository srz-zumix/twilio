<?php
require '/twilio-php/Services/Twilio.php'

$response = new Services_Twilio_Twiml();
if( isset($_REQUEST['Digits']) ) {
  $input = $_REQUEST['Digits'];
  switch($input) {
  case '1':
    $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
    $gather->say('1‚ð‰Ÿ‚µ‚½‚È', array('language' => 'ja-jp'));
    break;
  case '9':
    $response->say('‚³‚æ‚¤‚È‚ç', array('language' => 'ja-jp'));
    break;
  }
} else {
  $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
  $gather->say("‚È‚ñ‚©ƒ{ƒ^ƒ“‰Ÿ‚µ‚ÄB", array('language' => 'ja-jp'));
}

print $response;
