<?php

//setup
include_once('loader.php');

$tv = new BoseSpeaker("192.168.1.174");

//echo $tv->getSpeakerIP();

//$bc = new BoseCommand();

$response = BoseCommand::sendGetCommand($tv->getSpeakerIP(), "info");

//var_dump($response);

$string = <<<XML
$response
XML;

$output = simplexml_load_string($string);
echo $output;

?>
