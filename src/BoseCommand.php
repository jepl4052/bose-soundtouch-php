<?php

class BoseCommand {

   public function __construct(){

   }

   function sendGetCommand($ip, $method) {
      $ch = curl_init("http://$ip:8090/$method");
      return $response = curl_exec($ch);
   }

   function sendPostCommand($ip, $method, $xml) {
      $ch = curl_init("http://$ip:8090/$method");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
      $response = curl_exec($ch);
      curl_close($ch);
      return $response;
   }
}
?>
