<?php
require '/twilio-php/Services/Twilio.php'

$response = new Services_Twilio_Twiml();
if( isset($_REQUEST['Digits']) ) {
  $input = $_REQUEST['Digits'];
  switch($input) {
  case '1':
    $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
    $gather->say('1����������', array('language' => 'ja-jp'));
    break;
  case '9':
    $response->say('���悤�Ȃ�', array('language' => 'ja-jp'));
    break;
  }
} else {
  $gather = $response->gather(array('numDigits' => 1, 'timeout' => '10'));
  $gather->say("�Ȃ񂩃{�^�������āB", array('language' => 'ja-jp'));
}

print $response;
