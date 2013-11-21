<?php

require_once 'urbanairship.php';

// Your testing data
$APP_MASTER_SECRET = '';
$APP_KEY = '';
$TEST_DEVICE_TOKEN = '';

// Create Airship object
$airship = new Airship($APP_KEY, $APP_MASTER_SECRET);

// Test feedback

//$time = new DateTime('now', new DateTimeZone('UTC'));
//$time->modify('-1 day');
//echo $time->format('c') . '\n';
//print_r($airship->feedback($time));

// Test register

//$airship->register($TEST_DEVICE_TOKEN, 'testTag');

// Test get device token info
//print_r($airship->get_device_token_info($TEST_DEVICE_TOKEN));

// Test get device tokens

//$tokens = $airship->get_device_tokens();
//echo 'Device tokens count is:' . count($tokens);
//foreach ($tokens as $item) {
    //var_dump($item);
//}

// Test deregister

//$airship->deregister($TEST_DEVICE_TOKEN);


// Test push

//$message = array('aps'=>array('alert'=>'hello'));
//$airship->push($message, null, array('testTag'));

// Test broadcast

//$broadcast_message = array('aps'=>array('alert'=>'hello to all'));
//$airship->broadcast($broadcast_message, array($TEST_DEVICE_TOKEN));



// Push to iOS and Android
$device_tokens = array('00678A3644CBACD16A708BCDC0FC5EB79E9043B8C9798E45CD03DE6D59864383','008374D6505AD92EA2B8E75EE3638E785FB2EC98DB938251054ED809FDA5CE6E');
$apids = array('0251c0f5-3b7f-4297-85b4-11c3690cbd73','02798860-2d55-433c-9fb4-df237580b2e1');
$msg = 'Test from UA!';
//(text to send, device tokens in array, apids in array, aliases, tags, sound for iOS, badge number for icon)
$send = $airship->push_all($msg, $device_tokens, $apids, null, null, "default", "+1");
$pushid = json_decode($send[1]); // <= the blast id from urban airship

?>
