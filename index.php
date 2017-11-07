<?php

//setup
include_once('loader.php');

$tv = new BoseSpeaker("192.168.1.174");

echo $tv->getSpeakerIP();

?>
