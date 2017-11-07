<?php

//setup
include_once('loader.php');

$tv = new BoseSpeaker("192.168.1.174");

//echo $tv->getSpeakerIP();

//$bc = new BoseCommand();

$response = BoseCommand::sendGet($tv->getSpeakerIP(), "sources");

$output = new SimpleXMLElement($response);

//echo $output->name;

var_dump($output);

?>
