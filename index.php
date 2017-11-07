<?php

//setup
include_once('loader.php');

$tv = new BoseSpeaker("192.168.1.174");

//echo $tv->getSpeakerIP();

//$bc = new BoseCommand();

$response = BoseCommand::sendGetCommand($tv->getSpeakerIP(), "info");

$output = new SimpleXMLElement($response);

echo $output->name;

//var_dump($response);

?>
