<?php

//setup
include_once('loader.php');

$tv = new BoseSpeaker("192.168.1.174");

$bc = new BoseCommand();

$keyP = new KeyPress(KeyState::PRESS, KeyValue::POWER);

$response = $bc->sendPost($tv->getSpeakerIP(), $keyP->getPath(), $keyP->getPayload());

$keyP->setState(KeyState::Press);

$response2 = $bc->sendPost($tv->getSpeakerIP(), $keyP->getPath(), $keyP->getPayload());

var_dump($response ."\n\n\n". $response2);


/*
//echo $tv->getSpeakerIP();

//$bc = new BoseCommand();

$response = new BoseCommand()->sendGet($tv->getSpeakerIP(), "sources");

$output = new SimpleXMLElement($response);

//echo $output->name;

header('Content-Type: text/xml');
echo $output->asXML();
*/

?>
